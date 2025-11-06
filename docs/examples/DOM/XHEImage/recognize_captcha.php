<?php

// Scenario: Recognize captcha from an image file using built-in functions

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Path to the captcha image file
$captchaImagePath = "temp/captcha.png";

// Make sure the captcha image file exists
if (file_exists($captchaImagePath)) {
    echo "Captcha image file found at: " . $captchaImagePath . "\n";
    
    // Try to recognize the captcha using built-in functions
    // Type 1: Simple numeric captcha
    $captchaResult = DOM::$image->recognize_captcha($captchaImagePath, 1);
    
    if ($captchaResult) {
        echo "Captcha recognition result: " . $captchaResult . "\n";
    } else {
        echo "Failed to recognize captcha\n";
    }
} else {
    echo "Captcha image file not found at: " . $captchaImagePath . "\n";
    
    // For demonstration, create a simple captcha image
    echo "For demonstration purposes, you would need a captcha image file at: " . $captchaImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();