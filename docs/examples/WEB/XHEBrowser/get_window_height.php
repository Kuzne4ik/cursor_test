<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_window_height function

// Get current window height
$window_height = WEB::$browser->get_window_height();
echo "\nCurrent window height: " . $window_height . "px";

// Остановить работу
WINDOW::$app->quit();
?>