<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the navigate function

// Navigate to Google with default parameters (use_cache = true, use_wait = true)
$url = "https://www.google.com";
$result = WEB::$browser->navigate($url);

// Wait for the navigation to complete
WEB::$browser->wait(3);

// Display the result
if ($result) {
    echo "Successfully navigated to: " . $url;
} else {
    echo "Failed to navigate to: " . $url;
}

// Остановить работу
WINDOW::$app->quit();
?>