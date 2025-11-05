<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_activex function

// First, check if ActiveX is currently enabled
$activex_enabled = WEB::$browser->is_enable_activex();
echo "ActiveX currently enabled: " . ($activex_enabled ? "Yes" : "No");

// Disable ActiveX
$result = WEB::$browser->enable_activex(false);

if ($result) {
    echo "\n\nSuccessfully disabled ActiveX";
} else {
    echo "\n\nFailed to disable ActiveX";
}

// Check again
$activex_enabled2 = WEB::$browser->is_enable_activex();
echo "\nActiveX enabled after disabling: " . ($activex_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with ActiveX disabled";

// Enable ActiveX (with refresh)
$result2 = WEB::$browser->enable_activex(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled ActiveX with refresh";
} else {
    echo "\n\nFailed to enable ActiveX";
}

// Check again
$activex_enabled3 = WEB::$browser->is_enable_activex();
echo "\nActiveX enabled after enabling: " . ($activex_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>