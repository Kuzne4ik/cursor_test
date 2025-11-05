<?php
$xhe_host = "127.0.0.1:7013";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// The following code demonstrates the usage of the paste function

// First, navigate to a website with text input
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Paste some text
$text_to_paste = "Hello, World!";
$result2 = WEB::$browser->paste($text_to_paste);

// Остановить работу
WINDOW::$app->quit();
?>