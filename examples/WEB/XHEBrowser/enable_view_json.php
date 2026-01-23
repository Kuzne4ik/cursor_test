<?php
// Scenario: Demonstrates enabling and disabling JSON view in the browser
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the enable_view_json function

// First, check if view JSON is currently enabled
$view_json_enabled = WEB::$browser->is_enable_view_json();
echo "View JSON currently enabled: " . ($view_json_enabled ? "Yes" : "No");

// Disable view JSON
$result = WEB::$browser->enable_view_json(false);

if ($result) {
    echo "\n\nSuccessfully disabled view JSON";
} else {
    echo "\n\nFailed to disable view JSON";
}

// Check again
$view_json_enabled2 = WEB::$browser->is_enable_view_json();
echo "\nView JSON enabled after disabling: " . ($view_json_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with view JSON disabled";

// Enable view JSON (with refresh)
$result2 = WEB::$browser->enable_view_json(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled view JSON with refresh";
} else {
    echo "\n\nFailed to enable view JSON";
}

// Check again
$view_json_enabled3 = WEB::$browser->is_enable_view_json();
echo "\nView JSON enabled after enabling: " . ($view_json_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>