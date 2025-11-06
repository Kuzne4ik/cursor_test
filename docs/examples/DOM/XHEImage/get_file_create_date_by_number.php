<?php

// Scenario: Get the creation date of an image file by its number on web page

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with images
WEB::$browser->navigate("https://example.com/page-with-images");
WEB::$browser->wait_for();

// Get the creation date of the first image (index 0)
$createDate = DOM::$image->get_file_create_date_by_number(0);
if ($createDate) {
    echo "First image creation date: " . $createDate . "\n";
} else {
    echo "Failed to get creation date of the first image\n";
}

// Остановить работу
WINDOW::$app->quit();