<?php
// Scenario: Click on an embed element by its number at a specific position
// Description: Demonstrates how to click on an embed element based on its numerical order at specified coordinates
// Classes used: DOM, XHEEmbed, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a test page with embed elements
WEB::$browser->navigate("https://www.example.com");
WEB::$browser->wait_js();

// Get the first embed element on the page
$embed = DOM::$embed->get_by_number(0);

if ($embed->is_exist()) {
    // Click on the first embed element at position (10, 10)
    $result = DOM::$embed->click_in_by_number(0, 10, 10);
    
    if ($result) {
        echo "Successfully clicked on the first embed element at position (10, 10)\n";
    } else {
        echo "Failed to click on the first embed element\n";
    }
} else {
    echo "No embed elements found on the page\n";
}

// Остановить работу
WINDOW::$app->quit();