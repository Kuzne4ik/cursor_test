<?php

// Scenario: Save DOM elements to files
// Description: For current page, find DOM elements and save them to files
// Classes used: XHEImage, XHEFlash, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Save an image element to a file

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Get DOM element <img> by name
$targetImage = DOM::$image->get_by_name("captcha1");

// Check that DOM element was found
if ($targetImage->inner_number != -1) {
    // Save image to file
    echo $targetImage->save("c:\\sc.jpg");
    
    // Open saved file
    WINDOW::$app->shell_execute("open", "c:\\sc.jpg");
}

echo("\n\n");

// Example 2: Save an image element to a file and display its dimensions

// Get DOM element <img> by name
$targetImage = DOM::$image->get_by_name("screen2");

// Check that DOM element was found
if ($targetImage->inner_number != -1) {
    // Save image to file and display its dimensions
    echo $targetImage->save("c:\\sc2.jpg") . " " . $targetImage->get_width() . " " . $targetImage->get_height();
    
    // Open saved file
    WINDOW::$app->shell_execute("open", "c:\\sc2.jpg");
}

echo("\n\n");

// Example 3: Save a flash element to a file

// Navigate to another page
echo WEB::$browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php");

// Get DOM element <flash> by number 0
$flash = DOM::$flash->get_by_number(0, 0);

// Check that DOM element was found
if ($flash->inner_number != -1) {
    // Save flash to file
    echo $flash->save("c:\\sc3.swf");
    
    // Open saved file
    WINDOW::$app->shell_execute("open", "c:\\sc3.swf");
}

// Stop the application
WINDOW::$app->quit();
?>