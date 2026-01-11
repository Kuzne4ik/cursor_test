<?php
// Scenario: Get the caption of the last message box
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the get_last_messagebox_caption function

// Get last messagebox caption 
$caption = WEB::$browser->get_last_messagebox_caption();
echo "\n\nLast message box caption: '" . $caption . "'";

// Quit the application
WINDOW::$app->quit();
?>