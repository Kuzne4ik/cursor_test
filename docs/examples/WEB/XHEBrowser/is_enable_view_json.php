<?php
// Scenario: Check if view JSON is enabled, disable it, then check again to demonstrate the is_enable_view_json function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_view_json function

// First, check if view JSON is currently enabled
$view_json_enabled = WEB::$browser->is_enable_view_json();
echo "View JSON currently enabled: " . ($view_json_enabled ? "Yes" : "No") . "\n";

// Disable view JSON
WEB::$browser->enable_view_json(false);

// Check again after disabling
$view_json_enabled2 = WEB::$browser->is_enable_view_json();
echo "\nView JSON enabled after disabling: " . ($view_json_enabled2 ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>