<?php
// Scenario: Get the type of the last message box
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_last_messagebox_type function

// Try to get last message box type
$type = WEB::$browser->get_last_messagebox_type();
echo "\n\nLast message box type: '" . $type . "'";

// Остановить работу
WINDOW::$app->quit();
?>