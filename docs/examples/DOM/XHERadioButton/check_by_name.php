<?php
// Scenario: Check a radio button by its name
// Description: Demonstrates how to check or uncheck a radio button using its name attribute
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции check_by_name для радиобокса.
// Установить отметку на радиобоксе по его имени

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by name (assuming radio buttons have name="gender")
DOM::$radiobox->check_by_name("gender", true, "iframeResult");

// Uncheck the radio button by name
DOM::$radiobox->check_by_name("gender", false, "iframeResult");

// Остановить работу
WINDOW::$app->quit();