<?php
// Scenario: Check a radio button by its attribute
// Description: Demonstrates how to check or uncheck a radio button using its attribute name and value
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции check_by_attribute для радиобокса
// Установить отметку на радиобоксе по значению его атрибута

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by id attribute (assuming a radio button has id="male")
DOM::$radiobox->check_by_attribute("id", "male", true, true, "iframeResult");

// Check another radio button by id attribute (assuming another has id="female")
DOM::$radiobox->check_by_attribute("id", "female", true, true, "iframeResult");

// Example with partial match (if exactly=false)
// This would match any id containing "male" (e.g., "male", "female", etc.)
DOM::$radiobox->check_by_attribute("id", "male", false, true, "iframeResult");

// Example with different attribute (e.g., class)
// Assuming a radio button has class="radio-option"
DOM::$radiobox->check_by_attribute("class", "radio-option", true, true, "iframeResult");

// Остановить работу
WINDOW::$app->quit();