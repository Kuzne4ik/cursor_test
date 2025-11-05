<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the wait_for function

// Set custom wait parameters (optional)
WEB::$browser->set_wait_params(20, 2);

// Navigate to a website with wait_for
$url = "https://www.google.com";
echo "Attempting to navigate to: " . $url;

// Navigate to a website
WEB::$browser->navigate($url);

// Use wait_for to navigate and wait for completion
$result = WEB::$browser->wait_for(15, 2); // Wait 15 seconds, try 2 times

// Display the result
if ($result) {
    echo "\n\nSuccessfully navigated and waited for page load";
} else {
    echo "\n\nFailed to navigate and wait for page load";
}

echo "\n\nPage loading completed";

// Остановить работу
WINDOW::$app->quit();
?>