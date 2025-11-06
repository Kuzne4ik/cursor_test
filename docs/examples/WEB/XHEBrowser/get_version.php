<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_version function

// Get browser version in numeric format
$version_numeric = WEB::$browser->get_version(true);
echo "\nBrowser version (numeric): " . $version_numeric;

// Get browser version in string format
$version_string = WEB::$browser->get_version(false);
echo "\nBrowser version (string): " . $version_string;

// Quit the application
WINDOW::$app->quit();
?>