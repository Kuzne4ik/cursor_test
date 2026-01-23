<?php
// Scenario: Get all internal links and their texts from a webpage
// Description: Demonstrates how to retrieve all internal anchor links and their inner texts from a webpage
// Classes used: DOM, XHEAnchor, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_all_internal_inner_texts_and_hrefs
// Получить все внутренние ссылки и тексты anchor для WEB страницы

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_js(1);

// Example 1: Get all internal inner texts and hrefs with partial attribute value match on the current page
$internal_links = DOM::$anchor->get_all_internal_inner_texts_and_hrefs(TEST_POLYGON_URL . "anchor.html", false, ";");

// Display the result

// Split string to array
$hrefs = explode(";", $internal_links);
// Вывести все ссылки в консоль по одной
foreach($hrefs as $href)
    echo($href . "\n");

// Example 2: Get all internal inner texts and hrefs with a specific class attribute on the current page
$navigate_result = DOM::$anchor->get_all_internal_inner_texts_and_hrefs(TEST_POLYGON_URL . "anchor.html", true, ";");
echo "After navigation, internal links: " . $navigate_result . "\n";

// Display the result
echo("\n\nAll hrefs on page one per line: ");
       
// Split string to array
$hrefs = explode(";", $internal_links);
// Вывести все ссылки в консоль по одной
foreach($hrefs as $href)
    echo($href . "\n");

// Quit the application
WINDOW::$app->quit();
?>