<?php

// Scenario: Recognize captcha from an image using antigate.com service

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Path to save captcha image
$captchaImagePath = "temp/captcha.png";

// Your antigate.com API key
$apiKey = "YOUR_ANTICAPTCHA_API_KEY_HERE";

// Example 1: Recognize captcha from image element by src
$captchaSrc = "https://example.com/captcha.jpg";
$result = DOM::$image->recognize_by_anticaptcha(
    $captchaSrc,              // Source URL of captcha image
    $captchaImagePath,        // Path to save captcha image
    $apiKey,                  // API key for antigate.com
    'https://anti-captcha.com', // Service URL
    true,                     // Verbose mode
    5,                        // Retry timeout
    120,                      // Maximum timeout
    false,                    // Is phrase
    false,                    // Is case sensitive
    false,                    // Is numeric
    0,                        // Minimum length
    0,                        // Maximum length
    "-1",                     // Frame
    0                         // Is Russian
);

if ($result) {
    echo "Captcha recognized successfully: " . $result . "\n";
} else {
    echo "Failed to recognize captcha\n";
}

// Остановить работу
WINDOW::$app->quit();