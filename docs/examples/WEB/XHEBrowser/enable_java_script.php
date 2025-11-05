<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_java_script function

// First, check if JavaScript is currently enabled
$js_enabled = WEB::$browser->is_enable_java_script();
echo "JavaScript currently enabled: " . ($js_enabled ? "Yes" : "No");

// Disable JavaScript
$result = WEB::$browser->enable_java_script(false);

if ($result) {
    echo "\n\nSuccessfully disabled JavaScript";
} else {
    echo "\n\nFailed to disable JavaScript";
}

// Check again
$js_enabled2 = WEB::$browser->is_enable_java_script();
echo "\nJavaScript enabled after disabling: " . ($js_enabled2 ? "Yes" : "No");

// Navigate to a JavaScript-heavy website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded without JavaScript execution";

// Enable JavaScript (with refresh)
$result2 = WEB::$browser->enable_java_script(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled JavaScript with refresh";
} else {
    echo "\n\nFailed to enable JavaScript";
}

// Check again
$js_enabled3 = WEB::$browser->is_enable_java_script();
echo "\nJavaScript enabled after enabling: " . ($js_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>