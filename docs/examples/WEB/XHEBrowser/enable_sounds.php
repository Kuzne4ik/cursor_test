<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_sounds function

// First, check if sounds are currently enabled
$sounds_enabled = WEB::$browser->is_enable_sounds();
echo "Sounds currently enabled: " . ($sounds_enabled ? "Yes" : "No");

// Disable sounds
$result = WEB::$browser->enable_sounds(false);

if ($result) {
    echo "\n\nSuccessfully disabled sounds";
} else {
    echo "\n\nFailed to disable sounds";
}

// Check again
$sounds_enabled2 = WEB::$browser->is_enable_sounds();
echo "\nSounds enabled after disabling: " . ($sounds_enabled2 ? "Yes" : "No");

// Navigate to a website with audio content
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded without sound";

// Enable sounds (with refresh)
$result2 = WEB::$browser->enable_sounds(true, true);

if ($result2) {
    echo "\n\nSuccessfully enabled sounds with refresh";
} else {
    echo "\n\nFailed to enable sounds";
}

// Check again
$sounds_enabled3 = WEB::$browser->is_enable_sounds();
echo "\nSounds enabled after enabling: " . ($sounds_enabled3 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>