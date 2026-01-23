<?php
// Scenario: Get current page width in pixels
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the get_page_width function

// Get current page width
$page_width = WEB::$browser->get_page_width();
echo "Current page width: " . $page_width . "px";

// Остановить работу
WINDOW::$app->quit();
?>