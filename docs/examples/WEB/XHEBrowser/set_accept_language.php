<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_accept_language function

// Set Accept-Language header for English
$accept_language_en = "en-US,en;q=0.9";
$result = WEB::$browser->set_accept_language($accept_language_en);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set Accept-Language header for English";
    echo "\nAccept-Language: " . $accept_language_en;
} else {
    echo "\n\nFailed to set Accept-Language header";
}

// Quit the application
WINDOW::$app->quit();
?>