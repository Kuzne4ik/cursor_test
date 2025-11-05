<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the wait function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url);

echo "Navigated to: " . $url;

// Wait for 5 seconds
echo "\n\nWaiting for 5 seconds...";
WEB::$browser->wait(5);
echo "\n5 seconds have passed";

// Остановить работу
WINDOW::$app->quit();
?>