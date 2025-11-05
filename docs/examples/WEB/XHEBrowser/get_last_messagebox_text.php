<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_last_messagebox_text function

// Try to get last message box text
$text = WEB::$browser->get_last_messagebox_text();
echo "\n\nLast message box text: '" . $text . "'";

// Остановить работу
WINDOW::$app->quit();
?>