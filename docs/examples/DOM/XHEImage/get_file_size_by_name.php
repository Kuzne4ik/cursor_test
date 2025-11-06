<?php

// Scenario: Get file size of an image by its name attribute on web page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with images
WEB::$browser->navigate("https://example.com/page-with-images");
WEB::$browser->wait_for();

// Get file size of image with name="logo"
$fileSize = DOM::$image->get_file_size_by_name("logo");
if ($fileSize >= 0) {
    echo "Image with name='logo' file size: " . $fileSize . " bytes\n";
    
    // Convert to KB if size is large enough
    if ($fileSize > 1024) {
        $sizeInKB = round($fileSize / 1024, 2);
        echo "Which is approximately: " . $sizeInKB . " KB\n";
    }
} else {
    echo "Failed to get file size of image with name='logo'\n";
}

// Остановить работу
WINDOW::$app->quit();