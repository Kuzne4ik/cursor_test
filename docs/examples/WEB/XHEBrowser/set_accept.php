<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_accept function

// Set Accept header for HTML
$accept_html = "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
$result = WEB::$browser->set_accept($accept_html);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set Accept header for HTML";
    echo "\nAccept: " . $accept_html . "\n";
} else {
    echo "\n\nFailed to set Accept header" . "\n";;
}

// Quit the application
WINDOW::$app->quit();
?>