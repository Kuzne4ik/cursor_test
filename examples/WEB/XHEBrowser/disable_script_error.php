<?php
// Scenario: Enabling and disabling script error dialogs in browser
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the disable_script_error function

// First, check if script errors are currently disabled
$script_error_disabled = WEB::$browser->is_disable_script_error();
echo "Script show errors currently disabled: " . ($script_error_disabled ? "Yes" : "No");

// Enable script error dialogs (disable = false)
$result = WEB::$browser->disable_script_error(false);

if ($result) {
    echo "\n\nSuccessfully enabled show script error dialogs";
} else {
    echo "\n\nFailed to enable show script error dialogs";
}

// Check again
$script_error_disabled2 = WEB::$browser->is_disable_script_error();
echo "\nScript errors show currently disabled: " . ($script_error_disabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with show script error dialogs enabled";

// Disable show script error dialogs (disable = true)
$result2 = WEB::$browser->disable_script_error(true);

if ($result2) {
    echo "\n\nSuccessfully disabled show script error dialogs";
} else {
    echo "\n\nFailed to disable show script error dialogs";
}

// Check again
$script_error_disabled3 = WEB::$browser->is_disable_script_error();
echo "\nShow script errors currently disabled: " . ($script_error_disabled3 ? "Yes" : "No"). "\n";

// Quit the application
WINDOW::$app->quit();
?>