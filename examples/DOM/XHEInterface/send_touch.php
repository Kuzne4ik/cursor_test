<?php

// Scenario: Send touch event to a DOM element
// Description: For current page, find an DOM element and send touch events to it
// Classes used: XHEH, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if the page was not loaded earlier
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// Example: Send touch event to an DOM element

// Note: To use touch emulation, make sure that the "Touch event support" option is enabled in the settings.

// Get DOM element header by number 0
$targetHeader = DOM::$h3->get_by_number(0);

// Check that DOM element was found
if ($targetHeader->inner_number != -1) {

    // Perform a series of taps on a DOM element to select a single word of text
    echo("Perform a series of taps on a DOM element to select a single word of text: ");
    echo("\nPress touch: ");
    var_export($targetHeader->send_touch(0, 1, -1, -1, 30, 30)); // id=0, touch_type=1, dx=-1, dy=-1, radiusX=30, radiusY=30
    echo("\nRelease touch: ");
    var_export($targetHeader->send_touch(0, 0, -1, -1, 30, 30)); // id=0, touch_type=0, dx=-1, dy=-1, radiusX=30, radiusY=30
    echo("\nPress touch: ");
    var_export($targetHeader->send_touch(0, 1, -1, -1, 30, 30)); // id=0, touch_type=1, dx=-1, dy=-1, radiusX=30, radiusY=30

	// Perform a series of taps by coordinates on a DOM element to select a single word of text 
	// Get DOM element coordinates
	$x = $targetHeader->get_x();
	$y = $targetHeader->get_y();
	  
	echo("\DOM element coordinates: ($x:$y)");
    echo("Perform a series of taps by coordinates on a DOM element to select a single word of text: ");
    echo("\nPress touch: ");
    var_export($targetHeader->send_touch(0, 1, $x, $y, 30, 30)); // id=0, touch_type=1, dx=-1, dy=-1, radiusX=30, radiusY=30
    echo("\nRelease touch: ");
    var_export($targetHeader->send_touch(0, 0, $x, $y, 30, 30)); // id=0, touch_type=0, dx=-1, dy=-1, radiusX=30, radiusY=30
    echo("\nPress touch: ");
    var_export($targetHeader->send_touch(0, 1, $x, $y, 30, 30)); // id=0, touch_type=1, dx=-1, dy=-1, radiusX=30, radiusY=30

    // Copy selected text to the OS clipboard `Ctrl+C`
    //echo("Copy selected text to the OS clipboard: ");
    //var_export(SYSTEM::$keyboard->send_key("c", true, true));

    // Get text from the clipboard
    //echo("Get text from the clipboard: ");
    //var_export(SYSTEM::$clipboard->get_text());
}

// Stop application
WINDOW::$app->quit();
?>