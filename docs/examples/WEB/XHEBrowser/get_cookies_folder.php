<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_cookies_folder function

// Get current cookies folder
$cookies_folder = WEB::$browser->get_cookies_folder();
echo "Current cookies folder: " . $cookies_folder;

// Остановить работу
WINDOW::$app->quit();
?>