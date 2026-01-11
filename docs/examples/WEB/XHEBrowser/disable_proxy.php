<?php
// Scenario: Disabling and re-enabling browser proxy settings
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the disable_proxy function

// First, check current proxy
$current_proxy = WEB::$browser->get_current_proxy();
echo "Current proxy: " . ($current_proxy ?: "None");

// Enable proxy for default connection
$result = WEB::$browser->enable_proxy("","socks://127.0.0.1:9150") . "\n";

// Display the result
if ($result) {
    echo "\n\nSuccessfully enable proxy for the browser: ";
} else {
    echo "\n\nFailed to enable proxy for browser";
}

// Check current IP
$result = WEB::$connection->get_real_ip() . "\n";
echo "\n Current IP: " . $result;

// Disable proxy for default connection
$result = WEB::$browser->disable_proxy("") . "\n";

// Display the result
if ($result) {
    echo "\n\nSuccessfully disable proxy the browser";
} else {
    echo "\n\nFailed to disable proxy for the browser";
}

// Check current IP
$result = WEB::$connection->get_real_ip() . "\n";
echo "\n Current IP: " . $result;


// Quit the application
WINDOW::$app->quit();
?>