<?php
// Scenario: Show captcha dialog from exact URL
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

$PHP_Use_Trought_Shell = false;

// step
echo "1. Navigate to image test page\n";
$imagePageUrl = TEST_POLYGON_URL . "image.html";
WEB::$browser->navigate($imagePageUrl);

// Example 1
echo "\n\n2. Get captcha for image\n";
$captchaImageUrl = TEST_POLYGON_URL . "images/captcha.jpg";
$captchaResult1 = WINDOW::$app->dlg_captcha_from_url_exactly($captchaImageUrl);
echo $captchaResult1 . "\n";

// Example 2
echo "\n\n3. Get captcha for image with src containing captcha.jpg\n";
$captchaImageUrl = TEST_POLYGON_URL . "images/captcha.jpg";
$exactMatch = false;
$captchaResult2 = WINDOW::$app->dlg_captcha_from_url_exactly($captchaImageUrl, $exactMatch);
echo $captchaResult2 . "\n";

// Example 3
echo "\n\n4. Get captcha for image in frame 0\n";
$captchaImageUrl = TEST_POLYGON_URL . "images/captcha.jpg";
$exactMatch = true;
$frameNumber = 0;
$captchaResult3 = WINDOW::$app->dlg_captcha_from_url_exactly($captchaImageUrl, $exactMatch, $frameNumber);
echo $captchaResult3 . "\n";

// Example 4
echo "\n\n5. Get captcha for non-existent image\n";
$nonExistentImageUrl = "ptych.jpg";
$exactMatch = false;
$captchaResult4 = WINDOW::$app->dlg_captcha_from_url_exactly($nonExistentImageUrl, $exactMatch);
if (!$captchaResult4) {
    echo "No such image\n";
} else {
    echo "Image found\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
