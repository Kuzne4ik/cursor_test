<?php
// Scenario: Check if DOM storage is currently enabled, then disable it to demonstrate the is_enable_dom_storage function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_dom_storage function

// First, check if DOM storage is currently enabled
$dom_storage_enabled = WEB::$browser->is_enable_dom_storage();
echo "DOM storage currently enabled: " . ($dom_storage_enabled ? "Yes" : "No") . "\n";

// Disable DOM storage
WEB::$browser->enable_dom_storage(false);

// Check again after disabling
$dom_storage_enabled2 = WEB::$browser->is_enable_dom_storage();
echo "\nDOM storage enabled after disabling: " . ($dom_storage_enabled2 ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>