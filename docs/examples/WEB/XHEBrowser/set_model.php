<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_model function

// First, get current model
$current_model = WEB::$browser->get_model();
echo "Current model: " . $current_model;

// Set custom model
$custom_model = "Chromium";
$result = WEB::$browser->set_model($custom_model);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set model to: " . $custom_model;
} else {
    echo "\n\nFailed to set model";
}

// Verify the change
$updated_model = WEB::$browser->get_model();
echo "\nUpdated model: " . $updated_model;


// Остановить работу
WINDOW::$app->quit();
?>