<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_accept_encoding function

// Set Accept-Encoding header for gzip and deflate
$accept_encoding = "gzip, deflate, br";
$result = WEB::$browser->set_accept_encoding($accept_encoding);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set Accept-Encoding header";
    echo "\nAccept-Encoding: " . $accept_encoding . "\n";
} else {
    echo "\n\nFailed to set Accept-Encoding header" . "\n";
}

// Остановить работу
WINDOW::$app->quit();
?>