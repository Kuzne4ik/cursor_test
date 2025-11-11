<?php

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a test page with embed elements
WEB::$browser->navigate("https://www.example.com");
WEB::$browser->wait_js();

// Get an embed element by name
$embed = DOM::$embed->get_by_name("example_embed");

if ($embed->is_exist()) {
    // Click on the embed element at position (15, 15)
    $result = DOM::$embed->click_in_by_name("example_embed", 15, 15);
    
    if ($result) {
        echo "Successfully clicked on the embed element with name 'example_embed' at position (15, 15)\n";
    } else {
        echo "Failed to click on the embed element with name 'example_embed'\n";
    }
} else {
    echo "No embed element with name 'example_embed' found on the page\n";
}

// Остановить работу
WINDOW::$app->quit();