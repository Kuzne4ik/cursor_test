<?php
$xhe_host = "127.0.0.1:7013";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_cookie_for_url function

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "Navigated to: " . $url;

// Set a cookie for a specific URL
$target_url = "https://www.google.com"; // Cookie for site
$cookie_name = "test_cookie"; // Name
$cookie_value = "value123"; // Value
$expires = "2026-05-04T07:25:24.121Z"; // Session cookie
$domain = ".google.com"; // Default domain
$path = "/"; // Path
$secure = false; // Not secure
$httponly = false; // Not HttpOnly
$session = false; // Session
$sameSite = "unspecified"; // SameSite
$priority = "Medium"; // Priority

$result = WEB::$browser->set_cookie_for_url($target_url, 
        $cookie_name, 
        $cookie_value, 
        $expires, 
        $domain, 
        $path, 
        $secure, 
        $httponly,
        $session,
        $sameSite,
        $priority
    );

// Display the result
if ($result) {
    echo "\n\nSuccessfully set cookie for URL: " . $target_url;
    echo "\nCookie: " . $cookie_name . "=" . $cookie_value;
} else {
    echo "\n\nFailed to set cookie for URL: " . $target_url;
}

// Get cookies for the specific URL to verify
$cookies_for_url = WEB::$browser->get_cookie_for_url($target_url, $cookie_name, true);
echo "\n\nCookies for " . $target_url . ":";
echo "\n" . $cookies_for_url;


// Остановить работу
WINDOW::$app->quit();
?>