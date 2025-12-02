<?php
// Scenario: Clearing browser cookies for a specific domain and verifying the results
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the clear_cookies function

// Navigate to a website to generate cookies
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;
echo "\nCookies should be present";

// Get current cookies to show before clearing
$cookies_before = WEB::$browser->get_cookie();
echo "\n\nCookies before clearing:";
echo "\n" . $cookies_before;

// Clear cookies for a specific domain
$match_name = "google.com";
$clear_session = true;
$clear_flash = true;
$result = WEB::$browser->clear_cookies($match_name, $clear_session, $clear_flash);

// Display the result
if ($result) {
    echo "\n\nSuccessfully cleared cookies for domain: " . $match_name;
} else {
    echo "\n\nFailed to clear cookies for domain: " . $match_name;
}

// Get cookies after clearing
$cookies_after = WEB::$browser->get_cookie();
echo "\n\nCookies after clearing for " . $match_name . ":";
echo "\n" . $cookies_after;


// Quit the application
WINDOW::$app->quit();
?>