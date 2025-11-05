<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_common_cache_and_cookies function

// First, check if common cache and cookies are currently enabled
$common_cache_enabled = WEB::$browser->is_enable_common_cache_and_cookies();
echo "Common cache and cookies currently enabled: " . ($common_cache_enabled ? "Yes" : "No") . "\n";

// Enable common cache and cookies
WEB::$browser->enable_common_cache_and_cookies(true);

// Check if common cache and cookies are currently enabled after enabling
$common_cache_enabled = WEB::$browser->is_enable_common_cache_and_cookies();
echo "\nCommon cache and cookies currently enabled: " . ($common_cache_enabled ? "Yes" : "No") . "\n";

// Disable common cache and cookies
WEB::$browser->enable_common_cache_and_cookies(false);

// Check again after disabling
$common_cache_enabled2 = WEB::$browser->is_enable_common_cache_and_cookies();
echo "\nCommon cache and cookies enabled after disabling: " . ($common_cache_enabled2 ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>