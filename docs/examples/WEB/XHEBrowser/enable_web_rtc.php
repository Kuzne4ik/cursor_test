<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_web_rtc function

// First, check if WebRTC is currently enabled
$webrtc_enabled = WEB::$browser->is_enable_web_rtc();
echo "WebRTC currently enabled: " . ($webrtc_enabled ? "Yes" : "No");

// Disable WebRTC
$result = WEB::$browser->enable_web_rtc(false);

if ($result) {
    echo "\n\nSuccessfully disabled WebRTC";
} else {
    echo "\n\nFailed to disable WebRTC";
}

// Check again
$webrtc_enabled2 = WEB::$browser->is_enable_web_rtc();
echo "\nWebRTC enabled after disabling: " . ($webrtc_enabled2 ? "Yes" : "No");

// Navigate to a website that uses WebRTC
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with WebRTC disabled";

// Enable WebRTC (with refresh)
$result2 = WEB::$browser->enable_web_rtc(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled WebRTC with refresh";
} else {
    echo "\n\nFailed to enable WebRTC";
}

// Check again
$webrtc_enabled3 = WEB::$browser->is_enable_web_rtc();
echo "\nWebRTC enabled after enabling: " . ($webrtc_enabled3 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>