<?php

// Scenario: Show a hidden image element by its name attribute on web page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with hidden images
WEB::$browser->navigate("https://example.com/page-with-hidden-images");
WEB::$browser->wait_for();

// Show the image with name="logo"
if (DOM::$image->show_by_name("logo")) {
    echo "Image with name='logo' has been shown successfully\n";
} else {
    echo "Failed to show image with name='logo'\n";
}

// Остановить работу
WINDOW::$app->quit();