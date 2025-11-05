<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_gpu_rendering function

// First, set GPU rendering disabled
$gpu_enabled = WEB::$browser->enable_gpu_rendering(false);
echo "GPU rendering set disabled: " . ($gpu_enabled ? "Yes" : "No");

// Disable GPU rendering
$result = WEB::$browser->enable_gpu_rendering(false);

if ($result) {
    echo "\n\nSuccessfully disabled GPU rendering";
} else {
    echo "\n\nFailed to disable GPU rendering";
}


// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with GPU rendering disabled";

// Enable GPU rendering
$result2 = WEB::$browser->enable_gpu_rendering(true);

echo "\n\nGPU rendering set enabled: " . ($result2 ? "Yes" : "No");

// Остановить работу
WINDOW::$app->quit();
?>