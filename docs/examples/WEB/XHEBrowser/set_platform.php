<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_platform function

// Set platform to Win32
$platform = "Win32";
$cpuClass = "x86";
$result = WEB::$browser->set_platform($platform, $cpuClass);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set platform to: " . $platform;
    echo "\nCPU Class: " . $cpuClass;
} else {
    echo "\n\nFailed to set platform";
}

// Set platform to Win64
$platform2 = "Win64";
$cpuClass2 = "Other";
$result2 = WEB::$browser->set_platform($platform2, $cpuClass2);

echo "\n\nSet platform to Win64: " . ($result2 ? "Success" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>