<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_time_zone function

// Set time zone to America/Florida (UTC-5)
$timeZone = "America/Florida";
$result = WEB::$browser->set_time_zone(-5);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set time zone to UTC-5 (Florida)";
    echo "\nTime Zone: " . $timeZone;
} else {
    echo "\n\nFailed to set time zone";
}

// Set time zone to default
$result = WEB::$browser->set_time_zone();

// Display the result
if ($result) {
    echo "\n\nSuccessfully set time zone to default";
} else {
    echo "\n\nFailed to set time zone";
}

// Остановить работу
WINDOW::$app->quit();
?>