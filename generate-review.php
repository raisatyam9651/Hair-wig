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


/**
 * Call the OpenRouter API to generate a natural customer review using Google Gemini 2.5 Flash.
 */
function generate_review_with_openrouter($service, $satisfaction, $impressed, $recommend, $apiKey) {
    $prompt = "Write a natural-sounding, genuine customer review for a hair restoration shop in Dwarka called 'Growig Hair Solution'.
Details of the service:
- Service received: {$service}
- Customer satisfaction rating: {$satisfaction}
- What impressed the customer most: {$impressed}
- Would recommend: {$recommend}
Rules:
1. Write in the first person (I, me, my) from the perspective of a happy client.
2. Keep it extremely natural, conversational, and realistic like a real human review on Google (avoid robotic, overly marketing-heavy, or excessively formal phrases).
3. Include relevant service keywords naturally (e.g. Hair Patch, Hair Wig, Non Surgical Hair Replacement, etc. depending on the service selected: '{$service}').
4. Never force keywords. Use them contextually.
5. Mention Dwarka naturally (e.g., 'Growig Hair Solution in Dwarka', 'here in Dwarka Sec-7', etc.).
6. Mention confidence, appearance, natural results, staff support, or service quality based on the answers.
7. Keep the length strictly between 80 and 150 words.
8. Do NOT use markdown formatting (no bolding like **, no bullet points, no headers). Return ONLY the clean paragraph text.
9. Do not add placeholder names at the end.";

    $url = "https://openrouter.ai/api/v1/chat/completions";
    
    $data = [
        "model" => "google/gemini-2.5-flash",
        "messages" => [
            [
                "role" => "user",
                "content" => $prompt
            ]
        ],
        "temperature" => 0.8,
        "max_tokens" => 300
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
            // Remove any leftover markdown formatting just in case
            $text = preg_replace('/[*_`#]/', '', $text);
            return $text;
        }
    }
    
    return null;
}


/**
 * Locally generate a high-quality, randomized, natural review.
 */
function generate_review_locally($service, $satisfaction, $impressed, $recommend) {
    // Array maps to standard lowercase keys for impressions
    $imp_key = strtolower($impressed);
    $sat_key = strtolower($satisfaction);
    $rec_key = strtolower($recommend);

    $openings = [
        "I recently visited Growig Hair Solution in Dwarka to get a new " . $service . ", and I must say the experience was outstanding.",
        "If you're looking for a highly realistic " . $service . " in Dwarka, I strongly recommend checking out Growig Hair Solution. I had an amazing experience there.",
        "I got a custom " . $service . " done from Growig Hair Solution at Sector 7 Dwarka recently. The entire team did a fantastic job.",
        "Highly pleased with the " . $service . " I got from the experts at Growig Hair Solution in Dwarka. They are truly the best in the business.",
        "After doing a lot of research on non-surgical hair systems, I chose Growig Hair Solution in Dwarka for my " . $service . ", and it was the best decision.",
        "My experience with Growig Hair Solution in Dwarka for my " . $service . " has been absolutely wonderful from start to finish."
    ];

    $impressions = [
        "natural look" => [
            "What impressed me most was the incredibly natural look. The hair density and texture match my original hair perfectly, making the system completely undetectable.",
            "I am so impressed by the natural look of the hair system. Nobody can even tell I'm wearing one, which has given me an incredible boost in confidence.",
            "The natural look they achieved is simply amazing. It blends seamlessly with my existing hair and feels just like a part of my own head."
        ],
        "hairline design" => [
            "The precision of their front hairline design is what impressed me the most. It looks extremely realistic and complements my face shape perfectly.",
            "I was blown away by the custom hairline design. The master stylist did a phenomenal job matching it to my natural hair growth pattern.",
            "The hairline design is absolutely seamless. They customized the front hairline so well that it looks like the hair is growing directly from my scalp."
        ],
        "professional staff" => [
            "The highly professional staff made a huge difference. They took the time to understand my concerns, explained all the options patiently, and guided me throughout.",
            "I was deeply impressed by how professional, polite, and skilled the staff in Dwarka are. They made me feel completely comfortable during the entire fitting.",
            "The expertise of the professional staff here is top-notch. They are friendly, knowledgeable, and ensure that every customer gets personalized styling attention."
        ],
        "affordable pricing" => [
            "What stood out to me was their affordable pricing for such high-quality systems. They offer premium services without charging exorbitant rates like others.",
            "I was impressed by the very affordable pricing. The value they provide for a custom hair system is unbeatable compared to other centres in Delhi.",
            "They offer top-tier hair systems at extremely reasonable and affordable pricing. There were no hidden costs and the styling was worth every rupee."
        ],
        "comfort" => [
            "The comfort of the hair system is outstanding. The base is light, breathable, and I can go about my active daily routine without even feeling it.",
            "I am most impressed by how light and comfortable the system feels. It is sweat-resistant, breathable, and fits perfectly on my scalp.",
            "The comfort level of this hair patch is superb. I can sleep, exercise, and shower with complete ease and zero irritation."
        ],
        "service quality" => [
            "The overall service quality was exceptional. From the initial scalp consultation to the final cut and style, every detail was handled with precision.",
            "I was thoroughly impressed by their high-grade service quality. They pay close attention to hygiene, materials, and styling excellence.",
            "The quality of the service here is second to none. They treat you with care and make sure you walk out completely satisfied with your appearance."
        ],
        "maintenance support" => [
            "Their post-service maintenance support is excellent. They provided detailed care instructions and made scheduling regular service sessions super easy.",
            "I was really impressed by the maintenance support they offer. They guide you on wash routines and keep your system looking brand new during visits.",
            "Their follow-up and maintenance support is highly professional. They ensure that your system stays in perfect shape for months to come."
        ]
    ];

    $satisfaction_and_confidence = [
        "excellent" => [
            "The results are excellent, and I walked out of the studio feeling like a new person. My confidence has skyrocketed since getting it fixed.",
            "I am extremely happy with the excellent outcome. The change in my appearance is dramatic, and my self-esteem is back to 100%.",
            "It is an excellent, premium-quality restoration. It looks so good that it immediately restored my youthful appearance and confidence."
        ],
        "very good" => [
            "I had a very good experience and the final look is fantastic. It has really improved my self-image and overall confidence.",
            "The styling and fit are very good. I feel much more confident in my daily social and professional interactions now.",
            "Overall, a very good service that is worth the time and investment. My hair looks full, healthy, and completely natural."
        ],
        "good" => [
            "I am pleased with the good results and the overall natural styling. It looks clean and fits comfortably into my lifestyle.",
            "The quality of the hair is good, and it feels secure on my scalp. It provides a solid and tidy look that boosts my appearance.",
            "The finish is good and meets all my daily requirements. I feel comfortable going out and socializing with my new look."
        ]
    ];

    $closings = [
        "definitely" => [
            "I would definitely recommend Growig Hair Solution in Dwarka to anyone struggling with hair loss. Five stars for their amazing work!",
            "If you want natural results, you should definitely visit them. They are the best hair wig shop in Dwarka Delhi.",
            "I will definitely be returning for all my future maintenance. This studio is highly recommended for anyone seeking quality hair replacement."
        ],
        "yes" => [
            "Yes, if you are searching for a reliable hair patch centre in Dwarka, this is the place to go. A very satisfying experience.",
            "I highly recommend their services. They help you choose the right style and ensure you are happy with your final look.",
            "I would recommend Growig Hair Solution to anyone in Delhi looking for immediate, natural hair restoration. Excellent job by the team."
        ],
        "absolutely" => [
            "I absolutely recommend them for non-surgical hair replacement in Sector 7 Dwarka. They deliver exactly what they promise.",
            "If you want to regain your confidence and look your best, absolutely pay them a visit. They are true hair restoration artists.",
            "This is absolutely the best shop for hair patches and wigs in Dwarka. Highly satisfied with their professional services and support."
        ]
    ];

    // Pick randomized options
    $opening = $openings[array_rand($openings)];
    
    // Choose impression block, defaulting to "natural look" if mismatch
    $imp_options = isset($impressions[$imp_key]) ? $impressions[$imp_key] : $impressions['natural-look'];
    $impression = $imp_options[array_rand($imp_options)];
    
    // Choose satisfaction block
    $sat_options = isset($satisfaction_and_confidence[$sat_key]) ? $satisfaction_and_confidence[$sat_key] : $satisfaction_and_confidence['excellent'];
    $satisfaction_sentence = $sat_options[array_rand($sat_options)];
    
    // Choose closing block
    $close_options = isset($closings[$rec_key]) ? $closings[$rec_key] : $closings['definitely'];
    $closing = $close_options[array_rand($close_options)];

    // Combine review
    $review = $opening . " " . $impression . " " . $satisfaction_sentence . " " . $closing;

    return $review;
}
?>
