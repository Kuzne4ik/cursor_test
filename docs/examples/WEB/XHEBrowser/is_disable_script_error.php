<?php
// Scenario: Check if script error dialogs are currently disabled
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_disable_script_error function

// First, check if script errors are currently disabled
$script_error_disabled = WEB::$browser->is_disable_script_error();
echo "Script errors currently disabled: " . ($script_error_disabled ? "Yes" : "No") . "\n";

// Enable script error dialogs
WEB::$browser->disable_script_error(false);

// Check again after enabling
$script_error_disabled2 = WEB::$browser->is_disable_script_error();
echo "\nScript errors disabled after enabling: " . ($script_error_disabled2 ? "Yes" : "No") . "\n";

// Disable script error dialogs
WEB::$browser->disable_script_error(true);

// Check again after disabling
$script_error_disabled3 = WEB::$browser->is_disable_script_error();
echo "\nScript errors disabled after disabling: " . ($script_error_disabled3 ? "Yes" : "No") . "\n";

// Quit the application
WINDOW::$app->quit();
?>