<?php
// Scenario: Demonstrates enabling and disabling common cache and cookies in the browser
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the enable_common_cache_and_cookies function

// First, check if common cache and cookies are currently enabled
$common_cache_enabled = WEB::$browser->is_enable_common_cache_and_cookies();
echo "Common cache and cookies currently enabled: " . ($common_cache_enabled ? "Yes" : "No");

// Disable common cache and cookies
$result = WEB::$browser->enable_common_cache_and_cookies(false);

if ($result) {
    echo "\n\nSuccessfully disabled common cache and cookies";
} else {
    echo "\n\nFailed to disable common cache and cookies";
}

// Check again
$common_cache_enabled2 = WEB::$browser->is_enable_common_cache_and_cookies();
echo "\nCommon cache and cookies enabled after disabling: " . ($common_cache_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with common cache and cookies disabled";

// Enable common cache and cookies (with refresh)
$result2 = WEB::$browser->enable_common_cache_and_cookies(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled common cache and cookies with refresh";
} else {
    echo "\n\nFailed to enable common cache and cookies";
}

// Check again
$common_cache_enabled3 = WEB::$browser->is_enable_common_cache_and_cookies();
echo "\nCommon cache and cookies enabled after enabling: " . ($common_cache_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>