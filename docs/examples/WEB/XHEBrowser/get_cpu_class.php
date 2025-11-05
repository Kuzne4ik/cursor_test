<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_cpu_class function

// Get current CPU class
$cpu_class = WEB::$browser->get_cpu_class();
echo "\n\nCurrent CPU class: " . $cpu_class;

// Остановить работу
WINDOW::$app->quit();
?>