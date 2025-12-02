<?php
// Scenario: Demonstrates enabling and disabling images in the browser
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_images function

// First, check if images are currently enabled
$images_enabled = WEB::$browser->is_enable_images();
echo "Images currently enabled: " . ($images_enabled ? "Yes" : "No");

// Disable images
$result = WEB::$browser->enable_images(false);

if ($result) {
    echo "\n\nSuccessfully disabled images";
} else {
    echo "\n\nFailed to disable images";
}

// Check again
$images_enabled2 = WEB::$browser->is_enable_images();
echo "\nImages enabled after disabling: " . ($images_enabled2 ? "Yes" : "No");

// Navigate to an image-heavy website
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded without images";

// Enable images (with refresh)
$result2 = WEB::$browser->enable_images(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled images with refresh";
} else {
    echo "\n\nFailed to enable images";
}

// Check again
$images_enabled3 = WEB::$browser->is_enable_images();
echo "\nImages enabled after enabling: " . ($images_enabled3 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>