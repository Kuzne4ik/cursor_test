<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_isolate_tabs function

// First, tab isolation set enabled
$isolate_enabled = WEB::$browser->enable_isolate_tabs(true);
echo "Tab isolation set enabled: " . ($isolate_enabled ? "Successfully" : "Failed");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nTab isolation is enabled";

// Set disable tab isolation
$result2 = WEB::$browser->enable_isolate_tabs(false);

echo "\n\nTab isolation set disabled: " . ($result2 ? "Successfully" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>