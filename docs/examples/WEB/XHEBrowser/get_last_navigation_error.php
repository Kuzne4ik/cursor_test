<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_last_navigation_error function

// Try to navigate to a non-existent URL to trigger an error
$invalid_url = "https://this-domain-does-not-exist-12345.com";
echo "Attempting to navigate to invalid URL: " . $invalid_url;

WEB::$browser->navigate($invalid_url);
WEB::$browser->wait(3);

// Get the last navigation error
$error = WEB::$browser->get_last_navigation_error();

// Display the result
if (!empty($error)) {
    echo "\nLast navigation error: " . $error;
} else {
    echo "\nNo navigation error occurred";
}

// Now navigate to a valid URL
$valid_url = "https://www.google.com";
echo "\n\nAttempting to navigate to valid URL: " . $valid_url;

WEB::$browser->navigate($valid_url);
WEB::$browser->wait(3);

// Get the last navigation error again
$error2 = WEB::$browser->get_last_navigation_error();

echo "\nLast navigation error after valid URL: " . $error2;

// Остановить работу
WINDOW::$app->quit();
?>