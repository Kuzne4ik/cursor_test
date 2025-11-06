<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_page_height function

// Get current page height
$page_height = WEB::$browser->get_page_height();
echo "Current page height: " . $page_height . "px";

// Quit the application
WINDOW::$app->quit();
?>