<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_horizontal_scroll_pos function

// Navigate to a website with horizontal scrollable content
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Get current horizontal scroll position
$current_scroll = WEB::$browser->get_horizontal_scroll_pos();
echo "\n\nCurrent horizontal scroll position: " . $current_scroll . "px";

// Остановить работу
WINDOW::$app->quit();
?>