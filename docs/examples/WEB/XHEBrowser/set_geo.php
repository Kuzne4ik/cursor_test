<?php
// Scenario: Navigate to a website and set geolocation for New York, USA to demonstrate set_geo function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_geo function

// First, navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "Navigated to: " . $url;

// Set geolocation for New York, USA
$latitude = "40.7128";
$longitude = "-74.0060";
$accuracy = "10";
$altitude = "0";
$altitude_accuracy = "0";
$heading = "0";
$velocity = "0";

$result = WEB::$browser->set_geo($latitude, $longitude, $accuracy, $altitude, $altitude_accuracy, $heading, $velocity);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set geo location";
    echo "\nLatitude: " . $latitude;
    echo "\nLongitude: " . $longitude;
    echo "\nAccuracy: " . $accuracy . "m";
    echo "\nAltitude: " . $altitude . "m";
    echo "\nAltitude Accuracy: " . $altitude_accuracy . "m";
    echo "\nHeading: " . $heading . "°";
    echo "\nVelocity: " . $velocity . "m/s";
} else {
    echo "\n\nFailed to set geo location";
}


// Quit the application
WINDOW::$app->quit();
?>