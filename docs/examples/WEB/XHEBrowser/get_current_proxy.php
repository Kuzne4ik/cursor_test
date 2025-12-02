<?php
// Scenario: Get current proxy settings
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_current_proxy function

// First, check current proxy without authentication
$current_proxy = WEB::$browser->get_current_proxy();
echo "Current proxy: " . ($current_proxy ?: "None");

// Остановить работу
WINDOW::$app->quit();
?>