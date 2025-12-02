<?php
// Scenario: Check if sounds are enabled, disable them, then check again to demonstrate the is_enable_sounds function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_sounds function

// First, check if sounds are currently enabled
$sounds_enabled = WEB::$browser->is_enable_sounds();
echo "Sounds currently enabled: " . ($sounds_enabled ? "Yes" : "No") .  "\n";;

// Disable sounds
WEB::$browser->enable_sounds(false);

// Check again after disabling
$sounds_enabled2 = WEB::$browser->is_enable_sounds();
echo "\nSounds enabled after disabling: " . ($sounds_enabled2 ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>