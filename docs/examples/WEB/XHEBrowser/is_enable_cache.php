<?php
// Scenario: Check if browser cache is currently enabled
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_cache function

// First, check if cache is currently enabled
$cache_enabled = WEB::$browser->is_enable_cache();
echo "\nCache currently enabled: " . ($cache_enabled ? "Yes" : "No") . "\n";

// Disable cache
WEB::$browser->enable_cache(false);

// Check again after disabling
$cache_enabled2 = WEB::$browser->is_enable_cache();
echo "\nCache enabled after disabling: " . ($cache_enabled2 ? "Yes" : "No") . "\n";

// Quit the application
WINDOW::$app->quit();
?>