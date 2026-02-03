<?php
// Scenario: Get href attributes from anchor elements based on attribute values
// Description: Demonstrates how to retrieve href attributes from anchor elements that match specific attribute values
// Classes used: DOM, XHEAnchor, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
      $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции get_all_hrefs_by_attribute
// Получить все href с определенным значением атрибута

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_js(1);

// Example 1: Get all href attributes from anchor elements with a specific class attribute
$attr_name = "href";
$attr_value = "http://ya.ru";
$hrefString = DOM::$anchor->get_all_hrefs_by_attribute($attr_name, $attr_value, true, ";");

// Display the result
echo("\n\nAll hrefs on page fin by attribute one per line: ");
       
// Split string to array
$hrefs = explode(";", $hrefString);
// Вывести все ссылки в консоль по одной
foreach($hrefs as $href)
	echo($href . "\n");


// Example 2: Get all href attributes from anchor elements with partial attribute value match
$attr_name = "href";
$attr_value = "example.com";
$hrefString = DOM::$anchor->get_all_hrefs_by_attribute($attr_name, $attr_value, false, ";");

// Display the result
echo("\n\nAll hrefs on page fin by attribute one per line: ");

// Split string to array
$hrefs = explode(";", $hrefString);
// Вывести все ссылки в консоль по одной
foreach($hrefs as $href)
	echo($href . "\n");

// Quit the application
WINDOW::$app->quit();
?>