<?php

// Scenario: Show a hidden image element by its alt attribute on web page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with hidden images
WEB::$browser->navigate("https://example.com/page-with-hidden-images");
WEB::$browser->wait_js();

// Show image with exact alt match
if (DOM::$image->show_by_alt("Company Logo", true)) {
    echo "Image with exact alt='Company Logo' has been shown successfully\n";
} else {
    echo "Failed to show image with exact alt='Company Logo'\n";
}

// Show image with partial alt match (containing "banner")
if (DOM::$image->show_by_alt("banner", false)) {
    echo "Image with alt containing 'banner' has been shown successfully\n";
} else {
    echo "Failed to show image with alt containing 'banner'\n";
}

// Остановить работу
WINDOW::$app->quit();