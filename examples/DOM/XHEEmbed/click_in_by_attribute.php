<?php
// Scenario: Click on an embed element by attribute at a specific position
// Description: Demonstrates how to click on an embed element based on attribute values with exact or partial match options at specified coordinates
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

// Get an embed element by id attribute
$targetElement = DOM::$embed->get_by_attribute("id", "example_embed");

if ($targetElement->is_exist()) {
    // Click on the embed element with exact id match at position (30, 30)
    $result = DOM::$embed->click_in_by_attribute("id", "example_embed", true, 30, 30);
    
    if ($result) {
        echo "Successfully clicked on the embed element with id 'example_embed' at position (30, 30)\n";
    } else {
        echo "Failed to click on the embed element with id 'example_embed'\n";
    }

    // Click on the embed element with partial class match at position (35, 35)
    $result2 = DOM::$embed->click_in_by_attribute("class", "embed", false, 35, 35);

    if ($result2) {
        echo "Successfully clicked on the embed element with partial class 'embed' at position (35, 35)\n";
    } else {
        echo "Failed to click on the embed element with partial class 'embed'\n";
    }
} else {
    echo "No embed element with id 'example_embed' found on the page\n";
}

// Остановить работу
WINDOW::$app->quit();