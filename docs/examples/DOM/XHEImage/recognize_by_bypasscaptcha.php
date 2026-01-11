<?php
// Scenario: Recognize captcha from an image using bypasscaptcha.com service
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to save captcha image
$captchaImagePath = "temp/captcha.png";

// Your bypasscaptcha.com system key
$systemKey = "YOUR_BYPASSCAPTCHA_SYSTEM_KEY_HERE";

// Example 1: Recognize captcha from image element by src
$captchaSrc = "https://example.com/captcha.php";
$result = DOM::$image->recognize_by_bypasscaptcha(
    $systemKey,           // System key for bypasscaptcha.com
    $captchaImagePath,        // Path to save captcha image
    $captchaSrc             // Source URL of captcha image
);

if ($result) {
    echo "Captcha recognized successfully: " . $result . "\n";
} else {
    echo "Failed to recognize captcha\n";
}

// Остановить работу
WINDOW::$app->quit();