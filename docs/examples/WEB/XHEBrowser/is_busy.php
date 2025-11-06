<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

$bUTF8Ver = true;

// The following code demonstrates the usage of the is_busy function 

// Navigate to a website first. For demonstration: param use_cache set false and use_wait set false.
$url = "https://www.wikipedia.com";
WEB::$browser->navigate($url, false, false);

echo "Navigated to: " . $url;

// Check if browser is busy
$busy = WEB::$browser->is_busy();
echo "\n\nIs browser busy? " . ($busy ? "Yes" : "No");

// Wait for 2 seconds
echo "\n\nWaiting for 2 seconds...";
WEB::$browser->wait_js(2);

// Check if browser is busy
$busy = WEB::$browser->is_busy();
echo "\n\nIs browser busy? " . ($busy ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>