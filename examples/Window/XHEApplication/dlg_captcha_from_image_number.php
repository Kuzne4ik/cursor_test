<?php
// Scenario: Show captcha dialog from image number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

// step
echo "1. Navigate to image test page\n";
$imagePageUrl = TEST_POLYGON_URL . "image.html";
WEB::$browser->navigate($imagePageUrl);

// Example 1
echo "\n\n2. Show 2nd image as captcha\n";
$imageNumber = 2;
$captchaResult1 = WINDOW::$app->dlg_captcha_from_image_number($imageNumber);
if (!$captchaResult1) {
    echo "No such image\n";
} else {
    echo "Image found\n";
}


// Example 2
echo "\n\n3. Show 2nd image as captcha in frame 0\n";
$imageNumber = 2;
$frameNumber = 0;
$captchaResult2 = WINDOW::$app->dlg_captcha_from_image_number($imageNumber, $frameNumber);
if (!$captchaResult2) {
    echo "No such image\n";
} else {
    echo "Image found\n";
}

// Example 3
echo "\n\n4. Show non-existent image as captcha\n";
$nonExistentImageNumber = 100500;
$captchaResult3 = WINDOW::$app->dlg_captcha_from_image_number($nonExistentImageNumber);
if (!$captchaResult3) {
    echo "No such image\n";
} else {
    echo "Image found\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
