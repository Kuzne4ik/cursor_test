<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_java_script function

// First, check if JavaScript is currently enabled
$js_enabled = WEB::$browser->is_enable_java_script();
echo "JavaScript currently enabled: " . ($js_enabled ? "Yes" : "No");

// Disable JavaScript
WEB::$browser->enable_java_script(false);

// Check again after disabling
$js_enabled2 = WEB::$browser->is_enable_java_script();
echo "\nJavaScript enabled after disabling: " . ($js_enabled2 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>