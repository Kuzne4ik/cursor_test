<?php
// Scenario: Check if video is enabled, disable it, then check again to demonstrate the is_enable_video function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_enable_video function

// First, check if video is currently enabled
$video_enabled = WEB::$browser->is_enable_video();
echo "Video currently enabled: " . ($video_enabled ? "Yes" : "No") . "\n";

// Disable video
WEB::$browser->enable_video(false);

// Check again after disabling
$video_enabled2 = WEB::$browser->is_enable_video();
echo "\nVideo enabled after disabling: " . ($video_enabled2 ? "Yes" : "No"). "\n";

// Остановить работу
WINDOW::$app->quit();
?>