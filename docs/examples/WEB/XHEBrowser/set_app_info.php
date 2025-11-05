<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_app_info function

// Set app info for Chrome browser
$appName = "Netscape";
$appCodeName = "Mozilla";
$appMinorVersion = "";
$product = "Gecko";
$productSub = "20030107";
$vendor = "Google Inc.";

$result = WEB::$browser->set_app_info(
    $appName, 
    $appCodeName, 
    $appMinorVersion, 
    $product, 
    $productSub, 
    $vendor
);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set app info" . "\n";
} else {
    echo "\n\nFailed to set app info" . "\n";
}

// Остановить работу
WINDOW::$app->quit();
?>