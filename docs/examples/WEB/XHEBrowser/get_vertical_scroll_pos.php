<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_vertical_scroll_pos function

// Get current vertical scroll position
$current_scroll = WEB::$browser->get_vertical_scroll_pos();
echo "\n\nCurrent vertical scroll position: " . $current_scroll . "px";


// Остановить работу
WINDOW::$app->quit();
?>