<?php
// Scenario: Click on an embed element by src attribute at a specific position
// Description: Demonstrates how to click on an embed element based on its src attribute with exact or partial match options at specified coordinates
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

// Get an embed element by src attribute
$embed = DOM::$embed->get_by_attribute("src", "example.swf");

if ($embed->is_exist()) {
    // Click on the embed element with exact src match at position (20, 20)
    $result = DOM::$embed->click_in_by_src("example.swf", true, 20, 20);
    
    if ($result) {
        echo "Successfully clicked on the embed element with src 'example.swf' at position (20, 20)\n";
    } else {
        echo "Failed to click on the embed element with src 'example.swf'\n";
    }
    
    // Click on the embed element with partial src match at position (25, 25)
    $result2 = DOM::$embed->click_in_by_src("example", false, 25, 25);
    
    if ($result2) {
        echo "Successfully clicked on the embed element with partial src 'example' at position (25, 25)\n";
    } else {
        echo "Failed to click on the embed element with partial src 'example'\n";
    }
} else {
    echo "No embed element with src 'example.swf' found on the page\n";
}

// Остановить работу
WINDOW::$app->quit();