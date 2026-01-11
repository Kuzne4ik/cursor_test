<?php
// Scenario: Show a hidden image element by any of its attributes on web page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a page with hidden images
WEB::$browser->navigate("https://example.com/page-with-hidden-images");
WEB::$browser->wait_js();

// Show image with exact data-id attribute match
if (DOM::$image->show_by_attribute("data-id", "main-image", true)) {
    echo "Image with exact data-id='main-image' has been shown successfully\n";
} else {
    echo "Failed to show image with exact data-id='main-image'\n";
}

// Show image with partial class attribute match (containing "thumbnail")
if (DOM::$image->show_by_attribute("class", "thumbnail", false)) {
    echo "Image with class containing 'thumbnail' has been shown successfully\n";
} else {
    echo "Failed to show image with class containing 'thumbnail'\n";
}

// Остановить работу
WINDOW::$app->quit();