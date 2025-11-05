<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_directx function

// Supported only for browser model GeckoFX!

// Disable DirectX
$result = WEB::$browser->enable_directx(false);

if ($result) {
    echo "\n\nSuccessfully disabled DirectX";
} else {
    echo "\n\nFailed to disable DirectX";
}

// Enable DirectX
$result2 = WEB::$browser->enable_directx(true);
if ($result) {
    echo "\n\nSuccessfully enabled DirectX";
} else {
    echo "\n\nFailed to enabled DirectX";
}

// Остановить работу
WINDOW::$app->quit();
?>