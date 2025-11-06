<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_popup function

// First, check if popups are currently enabled
$popup_enabled = WEB::$browser->is_enable_popup();
echo "Popups currently enabled: " . ($popup_enabled ? "Yes" : "No") . "\n";

// Disable popups
WEB::$browser->enable_popup(false);

// Check again after disabling
$popup_enabled2 = WEB::$browser->is_enable_popup();
echo "\nPopups enabled after disabling: " . ($popup_enabled2 ? "Yes" : "No") . "\n";

// Quit the application
WINDOW::$app->quit();
?>