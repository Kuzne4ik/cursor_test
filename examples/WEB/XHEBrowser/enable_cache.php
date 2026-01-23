<?php
// Scenario: Enabling and disabling browser cache with verification
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the enable_cache function

// First, check if cache is currently enabled
$cache_enabled = WEB::$browser->is_enable_cache();
echo "Cache currently enabled: " . ($cache_enabled ? "Yes" : "No");

// Disable cache
$result = WEB::$browser->enable_cache(false);

if ($result) {
    echo "\n\nSuccessfully disabled cache";
} else {
    echo "\n\nFailed to disable cache";
}

// Check again
$cache_enabled2 = WEB::$browser->is_enable_cache();
echo "\nCache enabled after disabling: " . ($cache_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with cache disabled";

// Enable cache (with refresh)
$result2 = WEB::$browser->enable_cache(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled cache with refresh";
} else {
    echo "\n\nFailed to enable cache";
}

// Check again
$cache_enabled3 = WEB::$browser->is_enable_cache();
echo "\nCache enabled after enabling: " . ($cache_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>