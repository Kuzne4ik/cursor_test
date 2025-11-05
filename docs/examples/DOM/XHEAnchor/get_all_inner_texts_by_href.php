<?php
// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Example of using the get_all_inner_texts_by_href function
// Get all inner texts from DOM elements anchor by href attribute value

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_js(1);

// Example 1: Get all inner texts from anchor elements with exact href match
$href_value = "https://example.com/contact";
$inner_texts_by_href = DOM::$anchor->get_all_inner_texts_by_href($href_value, ";", true);

// Display the result
echo "\n\nInner texts for anchors with href='{$href_value}': " . $inner_texts_by_href . "\n";

// Example 2: Get all inner texts from anchor elements with partial href match
$href_partial = "example.com";
$inner_texts_by_partial_href = DOM::$anchor->get_all_inner_texts_by_href($href_partial, ";", false);

// Display the result
echo "\n\nInner texts for anchors with href containing '{$href_partial}': " . $inner_texts_by_partial_href . "\n";

// Example 3: Using a different separator
$inner_texts_by_href_pipe = DOM::$anchor->get_all_inner_texts_by_href($href_value, "|", true);
echo "\n\nInner texts with pipe separator: " . $inner_texts_by_href_pipe . "\n";

// Example with frame parameter (if needed)
$inner_texts_by_href_frame = DOM::$anchor->get_all_inner_texts_by_href($href_value, ";", true, "0");
echo "\n\nInner texts in frame 0: " . $inner_texts_by_href_frame . "\n";

// Quit the application
WINDOW::$app->quit();
?>