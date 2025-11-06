<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_frames function

// First, check if frames are currently enabled
$frames_enabled = WEB::$browser->is_enable_frames();
echo "Frames currently enabled: " . ($frames_enabled ? "Yes" : "No") . "\n";

// Disable frames
WEB::$browser->enable_frames(false);

// Check again after disabling
$frames_enabled2 = WEB::$browser->is_enable_frames();
echo "\nFrames enabled after disabling: " . ($frames_enabled2 ? "Yes" : "No") . "\n";

// Check again after enabling
$frames_enabled3 = WEB::$browser->is_enable_frames();
echo "\nFrames enabled after enabling: " . ($frames_enabled3 ? "Yes" : "No") . "\n";

// Quit the application
WINDOW::$app->quit();
?>