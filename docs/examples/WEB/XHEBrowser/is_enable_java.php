<?php
// Scenario: Check if Java is enabled, disable it, then check again to demonstrate the is_enable_java function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_java function

// First, check if Java is currently enabled
$java_enabled = WEB::$browser->is_enable_java();
echo "Java currently enabled: " . ($java_enabled ? "Yes" : "No") . "\n";

// Disable Java
WEB::$browser->enable_java(false);

// Check again after disabling
$java_enabled2 = WEB::$browser->is_enable_java();
echo "\nJava enabled after disabling: " . ($java_enabled2 ? "Yes" : "No") . "\n";


// Quit the application
WINDOW::$app->quit();
?>