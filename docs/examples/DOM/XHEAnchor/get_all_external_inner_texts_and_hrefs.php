<?php
// XHE host
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции get_all_external_inner_texts_and_hrefs
// Получить все внешние ссылки и тексты anchor

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get all external inner texts and hrefs on the current page
$external_links = DOM::$anchor->get_all_external_inner_texts_and_hrefs(TEST_POLYGON_URL . "anchor.html", false, ";");

// Display the result
echo "External links and texts: " . $external_links . "\n\n";

// Example 2: Navigate to a page and then get all external links
$navigate_result = DOM::$anchor->get_all_external_inner_texts_and_hrefs(TEST_POLYGON_URL . "anchor.html", true, ";");
echo "After navigation, external links: " . $navigate_result . "\n";

// Example 3: Using a different separator
$external_links_pipe = DOM::$anchor->get_all_external_inner_texts_and_hrefs(TEST_POLYGON_URL . "anchor.html", false, "|");
echo "External links with pipe separator: " . $external_links_pipe . "\n";

// Example with frame parameter (if needed)
$external_links_frame = DOM::$anchor->get_all_external_inner_texts_and_hrefs(TEST_POLYGON_URL . "anchor.html", false, ";", "0");
echo "External links in frame 0: " . $external_links_frame . "\n";

// Quit the application
WINDOW::$app->quit();
?>