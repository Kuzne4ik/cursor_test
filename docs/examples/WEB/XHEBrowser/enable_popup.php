<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_popup function

// First, check if popups are currently enabled
$popup_enabled = WEB::$browser->is_enable_popup();
echo "Popups currently enabled: " . ($popup_enabled ? "Yes" : "No");

// Disable popups
$result = WEB::$browser->enable_popup(false);

if ($result) {
    echo "\n\nSuccessfully disabled popups";
} else {
    echo "\n\nFailed to disable popups";
}

// Check again
$popup_enabled2 = WEB::$browser->is_enable_popup();
echo "\nPopups enabled after disabling: " . ($popup_enabled2 ? "Yes" : "No");

// Navigate to a website that might have popups
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with popups disabled";

// Enable popups (with refresh)
$result2 = WEB::$browser->enable_popup(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled popups with refresh";
} else {
    echo "\n\nFailed to enable popups";
}

// Check again
$popup_enabled3 = WEB::$browser->is_enable_popup();
echo "\nPopups enabled after enabling: " . ($popup_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>