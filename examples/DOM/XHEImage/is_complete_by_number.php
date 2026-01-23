<?php
// Scenario: Check if an image element is fully loaded by its number on web page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a page with images
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_js();

// Check if the first image (index 0) is completely loaded
if (DOM::$image->is_complete_by_number(0)) {
    echo "First image is completely loaded\n";
} else {
    echo "First image is not completely loaded yet\n";
}

// Остановить работу
WINDOW::$app->quit();