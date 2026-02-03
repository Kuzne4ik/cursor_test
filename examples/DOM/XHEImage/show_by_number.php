<?php
// Scenario: Show a hidden image element by its number on the web page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a page with hidden images
WEB::$browser->navigate("https://example.com/page-with-hidden-images");
WEB::$browser->wait_js();

// Show the first image on the page (index 0)
if (DOM::$image->show_by_number(0)) {
    echo "First image has been shown successfully\n";
} else {
    echo "Failed to show the first image\n";
}

// Остановить работу
WINDOW::$app->quit();