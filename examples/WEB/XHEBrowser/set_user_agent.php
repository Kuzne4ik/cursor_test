<?php
// Scenario: Demonstrates how to set a custom user agent string to simulate different browsers or devices
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_user_agent function

// First, get current user agent
$current_ua = WEB::$browser->get_user_agent();
echo "Current user agent: " . $current_ua;

// Set custom user agent
$custom_ua = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36";
$result = WEB::$browser->set_user_agent($custom_ua);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set user agent to: " . $custom_ua;
} else {
    echo "\n\nFailed to set user agent";
}

// Verify the change
$updated_ua = WEB::$browser->get_user_agent();
echo "\nUpdated user agent: " . $updated_ua;

// Остановить работу
WINDOW::$app->quit();
?>