<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_java function

// First, check if Java is currently enabled
$java_enabled = WEB::$browser->is_enable_java();
echo "Java currently enabled: " . ($java_enabled ? "Yes" : "No");

// Disable Java
$result = WEB::$browser->enable_java(false);

if ($result) {
    echo "\n\nSuccessfully disabled Java";
} else {
    echo "\n\nFailed to disable Java";
}

// Check again
$java_enabled2 = WEB::$browser->is_enable_java();
echo "\nJava enabled after disabling: " . ($java_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with Java disabled";

// Enable Java (with refresh)
$result2 = WEB::$browser->enable_java(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled Java with refresh";
} else {
    echo "\n\nFailed to enable Java";
}

// Check again
$java_enabled3 = WEB::$browser->is_enable_java();
echo "\nJava enabled after enabling: " . ($java_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>