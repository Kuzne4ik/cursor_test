<?php
// Scenario: Demonstrates enabling and disabling WebSocket in the browser
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_web_socket function

// First, check if WebSocket is currently enabled
$websocket_enabled = WEB::$browser->is_enable_web_socket();
echo "WebSocket currently enabled: " . ($websocket_enabled ? "Yes" : "No");

// Disable WebSocket
$result = WEB::$browser->enable_web_socket(false);

if ($result) {
    echo "\n\nSuccessfully disabled WebSocket";
} else {
    echo "\n\nFailed to disable WebSocket";
}

// Check again
$websocket_enabled2 = WEB::$browser->is_enable_web_socket();
echo "\nWebSocket enabled after disabling: " . ($websocket_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with WebSocket disabled";

// Enable WebSocket (with refresh)
$result2 = WEB::$browser->enable_web_socket(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled WebSocket with refresh";
} else {
    echo "\n\nFailed to enable WebSocket";
}

// Check again
$websocket_enabled3 = WEB::$browser->is_enable_web_socket();
echo "\nWebSocket enabled after enabling: " . ($websocket_enabled3 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>