<?php
// Scenario: Demonstrates how to set the page zoom level to simulate different viewing conditions
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// The following code demonstrates the usage of set_zoom function

// Set page zoom to 100% (default)
$zoom = "100";
$result = WEB::$browser->set_zoom($zoom);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set page zoom to: " . $zoom . "%";
} else {
    echo "\n\nFailed to set page zoom";
}

// Set page zoom to 150% (zoom in)
$zoom2 = "150";
$result2 = WEB::$browser->set_zoom($zoom2);

echo "\n\nSet page zoom to 150%: " . ($result2 ? "Success" : "Failed");

// Set page zoom to 50% (zoom out)
$zoom3 = "50";
$result3 = WEB::$browser->set_zoom($zoom3);

echo "\nSet page zoom to 50%: " . ($result3 ? "Success" : "Failed");

// Quit the application
WINDOW::$app->quit();
?>