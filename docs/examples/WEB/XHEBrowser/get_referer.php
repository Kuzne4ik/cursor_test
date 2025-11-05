<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_referer function

// First, navigate to a website
$url = TEST_POLYGON_URL . "anchor.html";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Click on link
DOM::$anchor->click_by_number(8);
WEB::$browser->wait_js(3);

// Get current referer
$referer = WEB::$browser->get_referer();
echo "\n\nCurrent referer: " . $referer;

// Остановить работу
WINDOW::$app->quit();
?>
