<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the is_enable_images function

// First, check if images are currently enabled
$images_enabled = WEB::$browser->is_enable_images();
echo "Images currently enabled: " . ($images_enabled ? "Yes" : "No");

// Disable images
WEB::$browser->enable_images(false);

// Check again after disabling
$images_enabled2 = WEB::$browser->is_enable_images();
echo "\nImages enabled after disabling: " . ($images_enabled2 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>