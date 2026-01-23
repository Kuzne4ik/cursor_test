<?php
// Scenario: Check if quiet regime is enabled, disable it, then check again to demonstrate the is_enable_quiet_regime function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_enable_quiet_regime function

// First, check if quiet regime is currently enabled
$quiet_enabled = WEB::$browser->is_enable_quiet_regime();
echo "Quiet regime currently enabled: " . ($quiet_enabled ? "Yes" : "No") . "\n";

// Disable quiet regime
WEB::$browser->enable_quiet_regime(false);

// Check again after disabling
$quiet_enabled2 = WEB::$browser->is_enable_quiet_regime();
echo "\nQuiet regime enabled after disabling: " . ($quiet_enabled2 ? "Yes" : "No") . "\n";


// Quit the application
WINDOW::$app->quit();
?>