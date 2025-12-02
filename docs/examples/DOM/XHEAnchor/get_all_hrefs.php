<?php
// Scenario: Get all href attributes from anchor elements on a webpage
// Description: Demonstrates how to retrieve all href attribute values from anchor elements on a webpage
// Classes used: DOM, XHEAnchor, XHEBrowser, XHEApplication

// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции get_all_hrefs
// Получить все значения атрибута href (ссылки) у DOM элементов anchor

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_js(1);

// Get all href attributes from anchor elements
$all_hrefs = DOM::$anchor->get_all_hrefs(";");

// Display the result
echo("\n\nAll hrefs on page one per line: ");

// Split string to array
$hrefs = explode(";", $all_hrefs);
// Вывести все ссылки в консоль по одной
foreach($hrefs as $href)
    echo($href . "\n");

// Example with a different separator
$all_hrefs_pipe = DOM::$anchor->get_all_hrefs("|");

// Display the result
echo("\n\nAll hrefs on page one per line: ");

// Split string to array
$hrefs = explode("|", $all_hrefs_pipe);
// Вывести все ссылки в консоль по одной
foreach($hrefs as $href)
    echo($href . "\n");

// Example with frame parameter (if needed)
$all_hrefs_frame = DOM::$anchor->get_all_hrefs(";", "0");
echo "\n\nAll hrefs in frame 0 with separator: " . $all_hrefs_frame . "\n";

// Quit the application
WINDOW::$app->quit();
?>