<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_cache_folder function

// First, get current cache folder
$current_folder = WEB::$browser->get_cache_folder();
echo "Current cache folder: " . $current_folder;

// Set custom cache folder
$custom_folder = "./my_cache";
$result = WEB::$browser->set_cache_folder($custom_folder);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set cache folder to: " . $custom_folder;
} else {
    echo "\n\nFailed to set cache folder";
}

// Verify the change
$updated_folder = WEB::$browser->get_cache_folder();
echo "\nUpdated cache folder: " . $updated_folder;

// Остановить работу
WINDOW::$app->quit();
?>