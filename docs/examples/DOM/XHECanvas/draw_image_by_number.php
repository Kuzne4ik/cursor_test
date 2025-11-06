<?php

// Scenario: Draw an image on a canvas element by its number
// Description: Draw an image on a canvas element by its number on the page
// Classes used: DOM, XHECanvas, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to the init.php file
if (!isset($path))
{
    // Path to the init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to a webpage with canvas elements
WEB::$browser->navigate(TEST_POLYGON_URL . "canvas.html");
WEB::$browser->wait_js();

// Example 1: Draw an image on the first canvas element

// Path to the image file to draw on canvas
$image_path = "C:/images/sample.png";

// Draw the image on the first canvas element
$canvas_number = 0;
$result = DOM::$canvas->draw_image_by_number($canvas_number, $image_path);

// Display the result
if ($result)
{
    echo "\nImage successfully drawn on canvas number {$canvas_number}!";
}
else
{
    echo "\nFailed to draw image on canvas number {$canvas_number}!";
}

// Example with frame parameter (if needed)
$image_path_frame = "C:/images/sample2.png";
$canvas_number_frame = 0;
$frame_number = "1";
$result_frame = DOM::$canvas->draw_image_by_number($canvas_number_frame, $image_path_frame, $frame_number);

// Display the result for frame example
if ($result_frame)
{
    echo "\nImage successfully drawn on canvas number {$canvas_number_frame} in frame {$frame_number}!";
}
else
{
    echo "\nFailed to draw image on canvas number {$canvas_number_frame} in frame {$frame_number}!";
}

// Stop work
WINDOW::$app->quit();
?>