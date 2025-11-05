<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the go_back function

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

// Navigate to third website
$url3 = "https://www.github.com";
WEB::$browser->navigate($url3);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url3;

// Go back to the previous page (Wikipedia)
$result = WEB::$browser->go_back();

// Display the result
if ($result) {
    echo "\n\nSuccessfully went back to previous page";
} else {
    echo "\n\nFailed to go back";
}

// Wait for the navigation to complete
WEB::$browser->wait(2);

// Get current URL to verify
$current_url = WEB::$webpage->get_url();
echo "\n\nCurrent URL after going back: " . $current_url;

// Остановить работу
WINDOW::$app->quit();
?>