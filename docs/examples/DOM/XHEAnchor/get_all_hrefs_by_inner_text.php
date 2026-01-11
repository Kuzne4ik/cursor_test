<?php
// Scenario: Get href attributes from anchor elements based on inner text
// Description: Demonstrates how to retrieve href attributes from anchor elements that contain specific inner text
// Classes used: DOM, XHEAnchor, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_all_hrefs_by_inner_text
// Получить все значения атрибута href у DOM элемента anchor по внутреннему тексту элемента anchor

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_js(1);

// Get all href attributes from anchor elements by inner text
$search_text = "р";
$hrefs_by_text = DOM::$anchor->get_all_hrefs_by_inner_text($search_text, ";");

// Display the result
echo "\n\nHrefs for anchors containing text '{$search_text}': " . $hrefs_by_text . "\n";

// Example with a different separator
$hrefs_by_text_pipe = DOM::$anchor->get_all_hrefs_by_inner_text($search_text, "|");
echo "\n\nHrefs with pipe separator: " . $hrefs_by_text_pipe . "\n";

// Example with frame parameter (if needed)
$hrefs_by_text_frame = DOM::$anchor->get_all_hrefs_by_inner_text($search_text, ";", "0");
echo "\n\nHrefs in frame 0: " . $hrefs_by_text_frame . "\n";

// Quit the application
WINDOW::$app->quit();
?>