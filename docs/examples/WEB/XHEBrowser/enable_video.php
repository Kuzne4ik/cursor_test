<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_video function

// First, check if video is currently enabled
$video_enabled = WEB::$browser->is_enable_video();
echo "Video currently enabled: " . ($video_enabled ? "Yes" : "No");

// Disable video
$result = WEB::$browser->enable_video(false);

if ($result) {
    echo "\n\nSuccessfully disabled video";
} else {
    echo "\n\nFailed to disable video";
}

// Check again
$video_enabled2 = WEB::$browser->is_enable_video();
echo "\nVideo enabled after disabling: " . ($video_enabled2 ? "Yes" : "No");

// Navigate to a website with video content
$url = "https://www.youtube.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded without video playback";

// Enable video (with refresh)
$result2 = WEB::$browser->enable_video(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled video with refresh";
} else {
    echo "\n\nFailed to enable video";
}

// Check again
$video_enabled3 = WEB::$browser->is_enable_video();
echo "\nVideo enabled after enabling: " . ($video_enabled3 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>