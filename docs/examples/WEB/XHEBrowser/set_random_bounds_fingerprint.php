<?php
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_random_bounds_fingerprint function

// Set random bounds fingerprint with custom noise
$noise = 12;
$result2 = WEB::$browser->set_random_bounds_fingerprint($noise);

echo "\n\nSet random bounds fingerprint with noise " . $noise . ": " . ($result2 ? "Success" : "Failed");

// Остановить работу
WINDOW::$app->quit();
?>