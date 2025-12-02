<?php
// Scenario: Get current browser window width in pixels
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_window_width function

// Get current window width
$window_width = WEB::$browser->get_window_width();
echo "\nCurrent window width: " . $window_width . "px";

// Quit the application
WINDOW::$app->quit();
?>