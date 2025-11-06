<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_frames function

// First, check if frames are currently enabled
$frames_enabled = WEB::$browser->is_enable_frames();
echo "Frames currently enabled: " . ($frames_enabled ? "Yes" : "No");

// Disable frames
$result = WEB::$browser->enable_frames(false);

if ($result) {
    echo "\n\nSuccessfully disabled frames";
} else {
    echo "\n\nFailed to disable frames";
}

// Check again
$frames_enabled2 = WEB::$browser->is_enable_frames();
echo "\nFrames enabled after disabling: " . ($frames_enabled2 ? "Yes" : "No");

// Navigate to a website with frames
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with frames disabled";

// Enable frames (with refresh)
$result2 = WEB::$browser->enable_frames(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled frames with refresh";
} else {
    echo "\n\nFailed to enable frames";
}

// Check again
$frames_enabled3 = WEB::$browser->is_enable_frames();
echo "\nFrames enabled after enabling: " . ($frames_enabled3 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>