<?php
// Scenario: Get all cookies in string and JSON format
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the get_cookie function

// Navigate to a website to generate cookies
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Get cookies in string format
$cookies_string = WEB::$browser->get_cookie(false);
echo "\n\nCookies (string format):";
echo "\n" . $cookies_string;

// Get cookies in JSON format
$cookies_json = WEB::$browser->get_cookie(true);
echo "\n\nCookies (JSON format):";
echo "\n" . $cookies_json;

// Остановить работу
WINDOW::$app->quit();
?>