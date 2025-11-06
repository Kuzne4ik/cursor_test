<?php
 $xhe_host = "127.0.0.1:7013";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_referer function

// Set referer to Google
$referer = "https://www.google.com";
$result = WEB::$browser->set_referer($referer);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set referer to: " . $referer;
} else {
    echo "\n\nFailed to set referer";
}

// Get current referer to verify
$current_referer = WEB::$browser->get_referer();
echo "\nCurrent referer: " . $current_referer;

// Quit the application
WINDOW::$app->quit();
?>