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

    // Fallback to local template-based randomized generator
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
function generate_review_with_openrouter($service, $satisfaction, $impressed, $recommend, $apiKey) {
    // List of randomized styles, lengths, and starting rules to force extreme diversity
    $personas = [
        "a quiet customer who values efficiency and natural results",
        "a highly satisfied client focusing on daily comfort and confidence boost",
        "a brief reviewer who writes short, direct sentences",
        "someone giving a friendly, casual shout-out to local Dwarka staff",
        "a customer who wants to highlight styling quality and undetectability"
    ];
    
    $lengths = [
        "7 to 10 words. Extremely short, punchy, and direct. Only one short sentence.",
        "11 to 15 words. Short and crisp.",
        "16 to 22 words. A casual two-phrase feedback.",
        "23 to 30 words. Maximum length, giving slightly more context but strictly under 30 words."
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

    $system_prompt = "You are a customer review generator for a hair restoration shop in Dwarka called 'Growig Hair Solution'.
You must generate a customer review that strictly adheres to these formatting and styling rules:

1. PERSONA: Write from the perspective of {$chosen_persona}. Write in the first person (I, me, my).
2. LENGTH: Write {$chosen_length} (Strict limit: maximum 30 words).
3. FORMAT: Write {$chosen_structure}
4. STARTER RULE: {$chosen_starter}
5. STRICLY FORBIDDEN PHRASES:
   - Do NOT start the review with clichés like: 'I was searching for', 'I recently visited', 'I had an amazing', 'Growig Hair Solution is', 'Best place for', 'Since a long time', 'My hair', 'I got', 'I received', or 'Look no further'.
   - Do NOT start with the name of the shop ('Growig Hair Solution' or 'Growig').
6. NO MARKDOWN: Return ONLY clean, raw paragraph text. Do NOT use markdown (no bolding, no headers, no quotes).
7. NATURAL: Keep it extremely natural, conversational, and realistic like a real human review on Google (avoid robotic, marketing-heavy, or excessively formal phrases).";

    $user_prompt = "Generate a review using these answers:
- Service: {$service}
- Satisfaction rating: {$satisfaction}
- What impressed me most: {$impressed}
- Would recommend: {$recommend}
- Location: Dwarka";

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
        "temperature" => 0.98,
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
            return $text;
        }
    }
    
    return null;
}


/**
 * Locally generate a high-quality, randomized, natural review.
 */
function generate_review_locally($service, $satisfaction, $impressed, $recommend) {
    // Map service to natural, shorter variations
    $service_variants = [
        "Non Surgical Hair Replacement" => ["hair replacement", "non-surgical hair replacement", "hair system", "hair patch"],
        "Hair System Maintenance & Styling" => ["hair system maintenance", "maintenance and styling", "hair maintenance", "service"],
        "Hair Patch" => ["hair patch", "patch styling", "hair patch service", "patch"],
        "Hair Wig" => ["hair wig", "custom wig", "wig fitting", "wig"],
        "Hair Bonding" => ["hair bonding", "hair bonding service", "bonding"],
        "Hair Weaving" => ["hair weaving", "weaving service", "hair weaving"],
        "Hair Clipping" => ["hair clipping", "clipping system", "clipping service"]
    ];

    $srv = $service;
    if (isset($service_variants[$service])) {
        $srv = $service_variants[$service][array_rand($service_variants[$service])];
    } else {
        $srv = strtolower($service);
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
        "Definitely" => ["Highly recommend", "Definitely worth it", "Must visit", "Will visit again"],
        "Yes" => ["Recommended", "Totally satisfied", "Great experience", "Good job"],
        "Absolutely" => ["Absolutely recommend them", "10/10 service", "Totally worth it", "Highly recommended"]
    ];

    $rec = "Highly recommended";
    if (isset($rec_variants[$recommend])) {
        $rec = $rec_variants[$recommend][array_rand($rec_variants[$recommend])];
    }

    // Generate reviews using 6 different structures/paths
    $paths = [];

    // Path 1: Super short & punchy exclamation (7 - 10 words)
    $exclamations = ["Perfect", "Excellent", "Incredible", "Superb", "Top quality", "Very nice"];
    $paths[] = $exclamations[array_rand($exclamations)] . " " . $srv . "! " . ucfirst($imp) . ". " . $rec . ".";

    // Path 2: Quiet & direct (8 - 12 words)
    $paths[] = "Satisfied with the " . $srv . ". The " . $imp . " is perfect.";

    // Path 3: Brief recommendation (10 - 15 words)
    $paths[] = "Got my " . $srv . " done in Dwarka. " . ucfirst($imp) . ". " . $rec . ".";

    // Path 4: Simple statement + local mention (11 - 18 words)
    $paths[] = "Growig in Dwarka offers great " . $srv . ". " . ucfirst($imp) . " and highly recommended.";

    // Path 5: Natural feeling review (15 - 24 words)
    $support_phrases = ["the staff is super supportive", "highly professional service", "totally worth the price", "feels very comfortable"];
    $paths[] = "Great " . $srv . " styling here in Dwarka. The " . $imp . " is outstanding and " . $support_phrases[array_rand($support_phrases)] . ".";

    // Path 6: Fast emotional response (7 - 10 words)
    $paths[] = ucfirst($imp) . ". Best " . $srv . " shop in Dwarka.";

    // Select random path
    $review = $paths[array_rand($paths)];

    // Clean up spaces
    $review = preg_replace('/\s+/', ' ', trim($review));

    return $review;
}
?>
