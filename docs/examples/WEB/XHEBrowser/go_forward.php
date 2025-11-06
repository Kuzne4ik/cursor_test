<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the go_forward function

// Navigate to first website
$url1 = "https://www.google.com";
WEB::$browser->navigate($url1);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url1;

// Navigate to second website
$url2 = "https://www.wikipedia.org";
WEB::$browser->navigate($url2);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url2;

// Go back to the previous page (Google)
WEB::$browser->go_back();
WEB::$browser->wait(2);

echo "\n\nWent back to: https://www.google.com";

// Go forward to the next page (Wikipedia)
$result = WEB::$browser->go_forward();

// Display the result
if ($result) {
    echo "\n\nSuccessfully went forward to next page";
} else {
    echo "\n\nFailed to go forward";
}

// Wait for the navigation to complete
WEB::$browser->wait(2);

// Get current URL to verify
$current_url = WEB::$webpage->get_url();
echo "\n\nCurrent URL after going forward: " . $current_url;

// Quit the application
WINDOW::$app->quit();
?>