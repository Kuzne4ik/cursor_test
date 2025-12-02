<?php
// Scenario: Clearing IndexedDB storage in the browser
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the clear_indexed_db function

// Navigate to a website that uses IndexedDB
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nIndexedDB should be cleared";

// Clear IndexedDB again to ensure it works
$result2 = WEB::$browser->clear_indexed_db();

echo "\n\nCleared IndexedDB again: " . ($result2 ? "Success" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>