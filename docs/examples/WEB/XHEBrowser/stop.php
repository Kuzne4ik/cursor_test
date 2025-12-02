<?php
// Scenario: Demonstrates how to stop the current page navigation or loading process
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the stop function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url);

echo "Navigated to: " . $url;
echo "\nPage loading started";

// Stop the current navigation/loading process
$result = WEB::$browser->stop();

// Display the result
if ($result) {
    echo "\n\nSuccessfully stopped the current navigation";
} else {
    echo "\n\nFailed to stop the current navigation";
}

echo "\n\nCurrent page should now be stopped";

// Quit the application
WINDOW::$app->quit();
?>