<?php
// Scenario: Set permissions to allow all, deny all, and prompt to demonstrate set_permissions function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_permissions function

// Set permissions to allow all
$permissions = "granted";
$result = WEB::$browser->set_permissions($permissions);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set permissions to: " . $permissions;
} else {
    echo "\n\nFailed to set permissions";
}

// Set permissions to deny all
$permissions2 = "denied";
$result2 = WEB::$browser->set_permissions($permissions2);

echo "\n\nSet permissions to deny: " . ($result2 ? "Success" : "Failed");

// Set permissions to ask (prompt)
$permissions3 = "prompt";
$result3 = WEB::$browser->set_permissions($permissions3);

echo "\nSet permissions to prompt: " . ($result3 ? "Success" : "Failed");

// Quit the application
WINDOW::$app->quit();
?>