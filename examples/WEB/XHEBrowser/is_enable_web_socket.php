<?php
// Scenario: Check if WebSocket is enabled, disable it, then check again to demonstrate the is_enable_web_socket function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_enable_web_socket function

// First, check if WebSocket is currently enabled
$websocket_enabled = WEB::$browser->is_enable_web_socket();
echo "WebSocket currently enabled: " . ($websocket_enabled ? "Yes" : "No") . "\n";

// Disable WebSocket
WEB::$browser->enable_web_socket(false);

// Check again after disabling
$websocket_enabled2 = WEB::$browser->is_enable_web_socket();
echo "\nWebSocket enabled after disabling: " . ($websocket_enabled2 ? "Yes" : "No") . "\n";


// Остановить работу
WINDOW::$app->quit();
?>