<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_random_webgl_fingerprint function

// Enable WebGL first
WEB::$browser->enable_java_script(true);

// Set random WebGL fingerprint (enabled)
$result = WEB::$browser->set_random_webgl_fingerprint(true, 
"123456",
"123456789012345678901234567890",
"New Unmasked Vendor",
"New Unmasked Renderer",
"New GL Version",
"New Shading Version",
"New Vendor",
"New Renderer");

// Display the result
if ($result) {
    echo "\n\nSuccessfully enabled random WebGL fingerprint";
} else {
    echo "\n\nFailed to set random WebGL fingerprint";
}

// Navigate to test WebGL fingerprint
$url2 = "https://get.webgl.org";
WEB::$browser->navigate($url2);
WEB::$browser->wait(5);

echo "\n\nNavigated to: " . $url2;
echo "\nRandom WebGL fingerprint should be applied";

// Set random WebGL fingerprint (disabled)
$result2 = WEB::$browser->set_random_webgl_fingerprint(false);

// Quit the application
WINDOW::$app->quit();
?>