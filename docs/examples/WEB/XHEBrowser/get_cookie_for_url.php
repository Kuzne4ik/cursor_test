<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_cookie_for_url function

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Get cookies for the current URL in string format
$cookies_for_url = WEB::$browser->get_cookie_for_url($url, "");
echo "\n\nCookies for " . $url . " (string):";
echo "\n" . $cookies_for_url;

// Get cookies for the current URL in JSON format
$cookies_for_url_json = WEB::$browser->get_cookie_for_url($url, "", true);
echo "\n\nCookies for " . $url . " (JSON):";
echo "\n" . $cookies_for_url_json;

// Get specific cookie by name
$cookie_name = "NID";
$specific_cookie = WEB::$browser->get_cookie_for_url($url, $cookie_name);
echo "\n\nSpecific cookie '" . $cookie_name . "':";
echo "\n" . $specific_cookie;

// Остановить работу
WINDOW::$app->quit();
?>