<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_web_rtc function

// First, check if WebRTC is currently enabled
$webrtc_enabled = WEB::$browser->is_enable_web_rtc();
echo "WebRTC currently enabled: " . ($webrtc_enabled ? "Yes" : "No") . "\n";

// Disable WebRTC
WEB::$browser->enable_web_rtc(false);

// Check again after disabling
$webrtc_enabled2 = WEB::$browser->is_enable_web_rtc();
echo "\nWebRTC enabled after disabling: " . ($webrtc_enabled2 ? "Yes" : "No") . "\n";

// Quit the application
WINDOW::$app->quit();
?>