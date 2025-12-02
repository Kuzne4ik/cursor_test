<?php
// Scenario: Get current browser model information
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_model function

// Get current browser model
$model = WEB::$browser->get_model();
echo "Current Browser model: " . $model;

// Quit the application
WINDOW::$app->quit();
?>