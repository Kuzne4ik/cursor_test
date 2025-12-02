<?php
// Scenario: Check if callback is currently enabled, enable it, then disable it to demonstrate the is_enable_callback function
// Path to the init.php.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_callback function

// First, check if callback is currently enabled
$callback_enabled = WEB::$browser->is_enable_callback();
echo "Callback currently enabled: " . ($callback_enabled ? "Yes" : "No") . "\n";

// Enable callback
WEB::$browser->enable_callback(true);

// Check if callback after enabling
$callback_enabled = WEB::$browser->is_enable_callback();
echo "\nCallback currently enabled: " . ($callback_enabled ? "Yes" : "No") . "\n";

// Disable callback
WEB::$browser->enable_callback(false);

// Check again after disabling
$callback_enabled2 = WEB::$browser->is_enable_callback();
echo "\nCallback enabled after disabling: " . ($callback_enabled2 ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>