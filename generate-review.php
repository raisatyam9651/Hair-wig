<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Set timezone
date_default_timezone_set('Asia/Kolkata');

// Retrieve OpenRouter API Key (either from env or fallback to local config.php)
$openrouter_api_key = getenv('OPENROUTER_API_KEY');
if (empty($openrouter_api_key)) {
    $config_path = __DIR__ . '/config.php';
    if (file_exists($config_path)) {
        include_once $config_path;
        if (defined('OPENROUTER_API_KEY')) {
            $openrouter_api_key = OPENROUTER_API_KEY;
        }
    }
}

if (!defined('TEST_MODE')) {
    // Only accept POST requests
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        echo json_encode(['success' => false, 'message' => 'Method not allowed']);
        exit;
    }

    // Get the POST parameters
    $service = isset($_POST['service']) ? trim($_POST['service']) : '';
    $satisfaction = isset($_POST['satisfaction']) ? trim($_POST['satisfaction']) : '';
    $impressed = isset($_POST['impressed']) ? trim($_POST['impressed']) : '';
    $recommend = isset($_POST['recommend']) ? trim($_POST['recommend']) : '';

    // Simple validation
    if (empty($service) || empty($satisfaction) || empty($impressed) || empty($recommend)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please fill in all required questions']);
        exit;
    }

    // Sanitization
    $service = htmlspecialchars(strip_tags($service));
    $satisfaction = htmlspecialchars(strip_tags($satisfaction));
    $impressed = htmlspecialchars(strip_tags($impressed));
    $recommend = htmlspecialchars(strip_tags($recommend));

    // Check if OpenRouter API key is configured
    if (!empty($openrouter_api_key)) {
        $generated_review = generate_review_with_openrouter($service, $satisfaction, $impressed, $recommend, $openrouter_api_key);
        
        if ($generated_review) {
            echo json_encode([
                'success' => true,
                'source' => 'openrouter_api',
                'review' => $generated_review
            ]);
            exit;
        }
    }

    // Fallback to local template-based randomized generator (guaranteed to be 15-30 words with keywords and location)
    $generated_review = generate_review_locally($service, $satisfaction, $impressed, $recommend);

    echo json_encode([
        'success' => true,
        'source' => 'local_generator',
        'review' => $generated_review
    ]);
    exit;
}


/**
 * Call the OpenRouter API to generate a natural customer review using Google Gemini 2.5 Flash.
 */
function generate_review_with_openrouter($service, $satisfaction, $impressed, $recommend, $apiKey, $retry = true) {
    // List of randomized styles, lengths, and starting rules to force extreme diversity
    $personas = [
        "a quiet customer who values efficiency and natural results",
        "a highly satisfied client focusing on daily comfort and confidence boost",
        "a brief reviewer who writes short, direct sentences",
        "someone giving a friendly, casual shout-out to local Dwarka staff",
        "a customer who wants to highlight styling quality and undetectability"
    ];
    
    $lengths = [
        "between 16 and 20 words. Short and crisp.",
        "between 21 and 25 words. A casual two-phrase feedback.",
        "between 26 and 30 words. Slightly more context but strictly under 30 words."
    ];
    
    $starters = [
        "Start directly with the service or service quality (do not start with 'I', 'My', 'We', 'Growig', or 'Best').",
        "Start with an exclamation or short emotional reaction (e.g., 'Superb!', 'Really happy!', 'Totally satisfied!', 'Amazing experience.').",
        "Start with a mention of the location or shop naturally (e.g., 'Best studio in Dwarka.', 'Found the perfect fit here in Dwarka.').",
        "Start by praising the staff or design process directly."
    ];
    
    $structures = [
        "a single punchy sentence.",
        "two very short fragments/sentences separated by a period or comma.",
        "a quick praise followed by a recommendation statement."
    ];

    $chosen_persona = $personas[array_rand($personas)];
    $chosen_length = $lengths[array_rand($lengths)];
    $chosen_starter = $starters[array_rand($starters)];
    $chosen_structure = $structures[array_rand($structures)];

    $system_prompt = "You are a Google review writer for a hair restoration studio in Dwarka called 'Growig Hair Solution'.
Generate a realistic, natural customer review that strictly follows these constraints:
1. Write in the first person (I, me, my) as {$chosen_persona}.
2. Word Count: MUST be between 15 and 30 words. (Do not write less than 15 words, do not write more than 30 words under any circumstances).
3. Keywords: You MUST naturally include at least one of these exact phrases: 'hair patch service', 'hair wig for men', or 'men hair wig patch'.
4. Location: You MUST include the location 'Dwarka' naturally (e.g. 'in Dwarka').
5. Structure: Write {$chosen_structure}
6. Starter: {$chosen_starter}
7. Forbidden clichés: Do NOT start the review with clichés like: 'I was searching for', 'I recently visited', 'I had an amazing', 'Growig Hair Solution is', 'Best place for', 'Since a long time', 'My hair', 'I got', 'I received', or 'Look no further'. Do NOT start with the shop name.
8. Output format: Return ONLY the clean, raw text of the review paragraph. Do NOT use markdown, bolding, or quotes.";

    $user_prompt = "Generate a review using these details:
- Service: {$service}
- Satisfaction rating: {$satisfaction}
- What impressed me most: {$impressed}
- Would recommend: {$recommend}";

    $url = "https://openrouter.ai/api/v1/chat/completions";
    
    $data = [
        "model" => "google/gemini-2.5-flash",
        "messages" => [
            [
                "role" => "system",
                "content" => $system_prompt
            ],
            [
                "role" => "user",
                "content" => $user_prompt
            ]
        ],
        "temperature" => 0.85,
        "max_tokens" => 100
    ];
    
    $jsonData = json_encode($data);
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
        'HTTP-Referer: https://growighairsolution.com',
        'X-Title: Growig Hair Solution'
    ]);
    curl_setopt($ch, CURLOPT_TIMEOUT, 8); // 8 seconds timeout
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if ($httpCode === 200) {
        $result = json_decode($response, true);
        if (isset($result['choices'][0]['message']['content'])) {
            $text = trim($result['choices'][0]['message']['content']);
            // Remove any leftover markdown formatting or quotes
            $text = preg_replace('/[*_`#"]/', '', $text);
            
            // Validate word count (15 to 30 words)
            $word_count = count(preg_split('/\s+/', trim($text)));
            if ($word_count >= 15 && $word_count <= 30) {
                return $text;
            }
            
            // If it failed word count validation, retry once recursively
            if ($retry) {
                return generate_review_with_openrouter($service, $satisfaction, $impressed, $recommend, $apiKey, false);
            }
        }
    }
    
    return null;
}


/**
 * Locally generate a high-quality, randomized, natural review.
 */
function generate_review_locally($service, $satisfaction, $impressed, $recommend) {
    // Map service to target SEO keyword variations (minimum 15 words requires slightly longer phrases)
    $keyword_pool = [
        "Non Surgical Hair Replacement" => [
            "non surgical hair replacement in Dwarka",
            "hair patch service in Dwarka",
            "hair wig for men in Dwarka"
        ],
        "Hair System Maintenance & Styling" => [
            "hair patch service in Dwarka",
            "hair system maintenance in Dwarka",
            "men hair wig patch styling in Dwarka"
        ],
        "Hair Patch" => [
            "hair patch service in Dwarka",
            "men hair wig patch in Dwarka",
            "premium hair patch for men in Dwarka"
        ],
        "Hair Wig" => [
            "hair wig for men in Dwarka",
            "men hair wig patch in Dwarka",
            "custom hair wig in Dwarka"
        ],
        "Hair Bonding" => [
            "hair bonding service in Dwarka",
            "hair patch service in Dwarka",
            "men hair wig patch in Dwarka"
        ],
        "Hair Weaving" => [
            "hair weaving service in Dwarka",
            "hair wig for men in Dwarka",
            "men hair wig patch in Dwarka"
        ],
        "Hair Clipping" => [
            "hair clipping service in Dwarka",
            "hair patch service in Dwarka",
            "hair wig for men in Dwarka"
        ]
    ];

    $keyword = "hair patch service in Dwarka";
    if (isset($keyword_pool[$service])) {
        $keyword = $keyword_pool[$service][array_rand($keyword_pool[$service])];
    } else {
        $keyword = strtolower($service) . " in Dwarka";
    }

    // Map impressed factor to variations
    $impressed_variants = [
        "Natural Look" => ["extremely natural look", "realistic style", "undetectable appearance", "natural finish"],
        "Hairline Design" => ["perfect front hairline", "custom hairline design", "natural hairline"],
        "Professional Staff" => ["highly professional staff", "skilled technicians", "friendly team"],
        "Affordable Pricing" => ["affordable pricing", "reasonable rates", "great value for money"],
        "Comfort" => ["amazing comfort", "lightweight feel", "comfortable fit"],
        "Service Quality" => ["exceptional service quality", "top-notch styling", "neat execution"],
        "Maintenance Support" => ["excellent maintenance support", "follow-up care", "post-service support"]
    ];

    $imp = strtolower($impressed);
    if (isset($impressed_variants[$impressed])) {
        $imp = $impressed_variants[$impressed][array_rand($impressed_variants[$impressed])];
    }

    // Map recommendation to variations
    $rec_variants = [
        "Definitely" => ["Definitely worth it, must visit them.", "Highly recommend this studio.", "I will visit again for sure."],
        "Yes" => ["Recommended for quality results.", "Great experience overall.", "Satisfied with their work."],
        "Absolutely" => ["Absolutely recommend them to all.", "10/10 service and support.", "Totally worth the price."]
    ];

    $rec = "Highly recommended.";
    if (isset($rec_variants[$recommend])) {
        $rec = $rec_variants[$recommend][array_rand($rec_variants[$recommend])];
    }

    // Generate reviews using 5 different structured paths (all designed to yield 15–30 words)
    $paths = [];

    // Path 1: 16 - 22 words
    $exclamations = ["Excellent experience with their", "Really happy with the", "Superb results from their", "Great job on the", "Wonderful service for"];
    $paths[] = $exclamations[array_rand($exclamations)] . " " . $keyword . "! The " . $imp . " looks outstanding. " . $rec;

    // Path 2: 17 - 24 words
    $coop_phrases = [
        "the team was very professional and cooperative",
        "the service quality is absolutely top-notch",
        "they match the hair density and color perfectly",
        "the pricing is very reasonable for this quality"
    ];
    $paths[] = "Got my " . $keyword . " done today. The " . $imp . " is excellent and " . $coop_phrases[array_rand($coop_phrases)] . ".";

    // Path 3: 15 - 20 words
    $paths[] = "Best " . $keyword . ". I am highly satisfied with the " . $imp . ". " . $rec;

    // Path 4: 18 - 26 words
    $paths[] = "Growig provides the best " . $keyword . ". The " . $imp . " is completely undetectable and " . $rec;

    // Path 5: 19 - 28 words
    $paths[] = "If you want a realistic " . $keyword . ", visit this place. The " . $imp . " is outstanding. " . $rec;

    // Select random path
    $review = $paths[array_rand($paths)];

    // Clean up spaces
    $review = preg_replace('/\s+/', ' ', trim($review));

    return $review;
}
?>
