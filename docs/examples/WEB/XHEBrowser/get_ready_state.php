<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_ready_state function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url, false, false);

echo "Navigated to: " . $url;

// Get the ready state of the page
$ready_state = WEB::$browser->get_ready_state();

echo "\n\nPage ready state: " . $ready_state;

// Wait for the page to fully load
WEB::$browser->wait_js(2);

// Get the ready state again
$ready_state2 = WEB::$browser->get_ready_state();
echo "\nPage ready state after waiting: " . $ready_state2;

// Остановить работу
WINDOW::$app->quit();
?>