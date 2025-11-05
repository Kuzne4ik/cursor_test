<?php
// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции get_all_hrefs_by_inner_text_2
// Получить все значения атрибута href у DOM элемента anchor по внутреннему тексту элемента anchor с параметром точного соответствия

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_js(1);

// Example 1: Get all href attributes from anchor elements by exact inner text match
$search_text_exact = "р";
$hrefs_by_exact_text = DOM::$anchor->get_all_hrefs_by_inner_text_2($search_text_exact, true, ";");

// Display the result
echo "\n\nHrefs for anchors with exact text '{$search_text_exact}': " . $hrefs_by_exact_text . "\n";

// Example 2: Get all href attributes from anchor elements by partial inner text match
$search_text_partial = "Contact";
$hrefs_by_partial_text = DOM::$anchor->get_all_hrefs_by_inner_text_2($search_text_partial, false, ";");

// Display the result
echo "\n\nHrefs for anchors containing text '{$search_text_partial}': " . $hrefs_by_partial_text . "\n";

// Example 3: Using a different separator
$hrefs_by_exact_text_pipe = DOM::$anchor->get_all_hrefs_by_inner_text_2($search_text_exact, true, "|");
echo "\n\nHrefs with pipe separator: " . $hrefs_by_exact_text_pipe . "\n";

// Example with frame parameter (if needed)
$hrefs_by_text_frame = DOM::$anchor->get_all_hrefs_by_inner_text_2($search_text_exact, true, ";", "0");
echo "\n\nHrefs in frame 0: " . $hrefs_by_text_frame . "\n";

// Quit the application
WINDOW::$app->quit();
?>