<?php

// Scenario: Show a hidden image element by its src attribute on web page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with hidden images
WEB::$browser->navigate("https://example.com/page-with-hidden-images");
WEB::$browser->wait_for();

// Show image with exact src match
if (DOM::$image->show_by_src("https://example.com/images/logo.png", true)) {
    echo "Image with exact src='https://example.com/images/logo.png' has been shown successfully\n";
} else {
    echo "Failed to show image with exact src='https://example.com/images/logo.png'\n";
}

// Show image with partial src match (containing "banner")
if (DOM::$image->show_by_src("banner", false)) {
    echo "Image with src containing 'banner' has been shown successfully\n";
} else {
    echo "Failed to show image with src containing 'banner'\n";
}

// Остановить работу
WINDOW::$app->quit();