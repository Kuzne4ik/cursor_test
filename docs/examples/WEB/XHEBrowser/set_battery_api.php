<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_battery_api function

// Set battery API with charging laptop (80% charged, charging)
$level = "0.8";
$charging = true;
$chargingTime = "3600";
$dischargingTime = "7200";

$result = WEB::$browser->set_battery_api($level, $charging, $chargingTime, $dischargingTime);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set battery API";
    echo "\nLevel: " . ($level * 100) . "%";
    echo "\nCharging: " . ($charging ? "Yes" : "No");
    echo "\nCharging Time: " . $chargingTime . "s";
    echo "\nDischarging Time: " . $dischargingTime . "s";
} else {
    echo "\n\nFailed to set battery API";
}

// Остановить работу
WINDOW::$app->quit();
?>