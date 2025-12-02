<?php
// Scenario: Enabling and disabling DOM storage (local storage) in the browser with verification
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_dom_storage function

// First, check if DOM storage is currently enabled
$dom_storage_enabled = WEB::$browser->is_enable_dom_storage();
echo "DOM storage currently enabled: " . ($dom_storage_enabled ? "Yes" : "No");

// Disable DOM storage (Local storage)
$result = WEB::$browser->enable_dom_storage(false);

if ($result) {
    echo "\n\nSuccessfully disabled DOM storage";
} else {
    echo "\n\nFailed to disable DOM storage";
}

// Check again
$dom_storage_enabled2 = WEB::$browser->is_enable_dom_storage();
echo "\nDOM storage enabled after disabling: " . ($dom_storage_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with DOM storage disabled";

// Enable DOM storage (with refresh)
$result2 = WEB::$browser->enable_dom_storage(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled DOM storage with refresh";
} else {
    echo "\n\nFailed to enable DOM storage";
}

// Check again
$dom_storage_enabled3 = WEB::$browser->is_enable_dom_storage();
echo "\nDOM storage enabled after enabling: " . ($dom_storage_enabled3 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>