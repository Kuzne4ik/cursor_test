<?php
// Scenario: Check if ActiveX controls are currently enabled
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_enable_activex function

// First, check if ActiveX is currently enabled
$activex_enabled = WEB::$browser->is_enable_activex();
echo "\nActiveX currently enabled: " . ($activex_enabled ? "Yes" : "No");

// Disable ActiveX
WEB::$browser->enable_activex(false);

// Check again after disabling
$activex_enabled2 = WEB::$browser->is_enable_activex();
echo "\nActiveX enabled after disabling: " . ($activex_enabled2 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>