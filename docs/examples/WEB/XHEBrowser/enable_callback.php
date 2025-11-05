<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_callback function

// First, check if callback is currently enabled
$callback_enabled = WEB::$browser->is_enable_callback();
echo "Callback currently enabled: " . ($callback_enabled ? "Yes" : "No");

// Disable callback
$result = WEB::$browser->enable_callback(false);

if ($result) {
    echo "\n\nSuccessfully disabled callback";
} else {
    echo "\n\nFailed to disable callback";
}

// Check again
$callback_enabled2 = WEB::$browser->is_enable_callback();
echo "\nCallback enabled after disabling: " . ($callback_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with callback disabled";

// Enable callback (with refresh)
$result2 = WEB::$browser->enable_callback(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled callback with refresh";
} else {
    echo "\n\nFailed to enable callback";
}

// Check again
$callback_enabled3 = WEB::$browser->is_enable_callback();
echo "\nCallback enabled after enabling: " . ($callback_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>