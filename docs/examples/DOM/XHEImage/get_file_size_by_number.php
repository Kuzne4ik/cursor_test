<?php

// Scenario: Get file size of an image by its number on web page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with images
WEB::$browser->navigate("https://example.com/page-with-images");
WEB::$browser->wait_js();

// Get file size of the first image (index 0)
$fileSize = DOM::$image->get_file_size_by_number(0);
if ($fileSize >= 0) {
    echo "First image file size: " . $fileSize . " bytes\n";
} else {
    echo "Failed to get file size of the first image\n";
}

// Остановить работу
WINDOW::$app->quit();