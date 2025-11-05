<?php
$xhe_host = "127.0.0.1:7013";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_touch_info function

// Set touch info for mobile device (multi-touch)
$maxPoints1 = "5";
$ontoucheventReturn1 = "true";
$result1 = WEB::$browser->set_touch_info($maxPoints1, $ontoucheventReturn1);

echo "\n\nSet touch info for mobile: " . ($result1 ? "Success" : "Failed");

// Set touch info for tablet (single touch)
$maxPoints2 = "1";
$ontoucheventReturn2 = "true";
$result2 = WEB::$browser->set_touch_info($maxPoints2, $ontoucheventReturn2);

echo "\nSet touch info for tablet: " . ($result2 ? "Success" : "Failed");

// Set touch info to default
$result3 = WEB::$browser->set_touch_info();

echo "\nSet touch info to default: " . ($result3 ? "Success" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>