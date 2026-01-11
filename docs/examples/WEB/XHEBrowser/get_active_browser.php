<?php
// Scenario: Get the current active browser number and set active browser
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the get_active_browser function

// Set browser count to 3 to have multiple browsers
WEB::$browser->set_count(3);

// Get the current active browser number
$active_browser = WEB::$browser->get_active_browser();

// Display the result
echo "Current active browser number: " . $active_browser;

// Set active browser to browser number 1 and verify
WEB::$browser->set_active_browser(1);
$verified_browser = WEB::$browser->get_active_browser();
echo "\nAfter setting active browser to 1, current active browser: " . $verified_browser;

// Remove all tabs except first
WEB::$browser->close_all_tabs();

// Остановить работу
WINDOW::$app->quit();
?>