<?php

// Scenario: Take screenshot of DOM elements
// Description: For current page, find DOM elements and take screenshots of them
// Classes used: XHEImage, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Take screenshot of an image element

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Get DOM element <img> by name
$targetImage = DOM::$image->get_by_name("captcha1");

// Check that DOM element was found
if ($targetImage->inner_number != -1) {
    // Take screenshot of image and save to file
    echo $targetImage->screenshot("c:\\sc.jpg");
    
    // Open saved file
    WINDOW::$app->shell_execute("open", "c:\\sc.jpg");
}

echo("\n\n");

// Example 2: Take screenshot of an image element and display its dimensions

// Get DOM element <img> by name
$targetImage = DOM::$image->get_by_name("screen2");

// Check that DOM element was found
if ($targetImage->inner_number != -1) {
    // Set focus to image
    $targetImage->focus();
    
    // Take screenshot of image and save to file, display dimensions
    echo $targetImage->screenshot("c:\\sc2.jpg") . " " . $targetImage->get_width() . " " . $targetImage->get_height();
    
    // Open saved file
    WINDOW::$app->shell_execute("open", "c:\\sc2.jpg");
}

echo("\n\n");

// Example 3: Take simplified screenshot of an image element

// Get DOM element <img> by name
$targetImage = DOM::$image->get_by_name("screen1", 0);

// Check that DOM element was found
if ($targetImage->inner_number != -1) {
    // Take simplified screenshot of image and save to file
    echo $targetImage->screenshot("c:\\sc2.jpg", true);
    
    // Open saved file
    WINDOW::$app->shell_execute("open", "c:\\sc2.jpg");
}

// Stop the application
WINDOW::$app->quit();
?>