<?php
// Scenario: Get creation date of an image file by its name attribute on web page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a page with images
WEB::$browser->navigate("https://example.com/page-with-images");
WEB::$browser->wait_js();

// Get creation date of image with name="logo"
$createDate = DOM::$image->get_file_create_date_by_name("logo");
if ($createDate) {
    echo "Image with name='logo' creation date: " . $createDate . "\n";
} else {
    echo "Failed to get creation date of image with name='logo'\n";
}

// Остановить работу
WINDOW::$app->quit();