<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_quiet_regime function

// First, check if quiet regime is currently enabled
$quiet_enabled = WEB::$browser->is_enable_quiet_regime();
echo "Quiet regime currently enabled: " . ($quiet_enabled ? "Yes" : "No");

// Enable quiet regime
$result = WEB::$browser->enable_quiet_regime(true);

if ($result) {
    echo "\n\nSuccessfully enabled quiet regime";
} else {
    echo "\n\nFailed to enable quiet regime";
}

// Check again
$quiet_enabled2 = WEB::$browser->is_enable_quiet_regime();
echo "\nQuiet regime enabled after enabling: " . ($quiet_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nBrowser is running in quiet mode";

// Disable quiet regime
$result2 = WEB::$browser->enable_quiet_regime(false);

echo "\n\nQuiet regime disabled: " . ($result2 ? "Yes" : "No");

// Quit the application
WINDOW::$app->quit();
?>