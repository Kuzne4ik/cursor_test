<?php
// Scenario: Check a radio button by its number
// Description: Demonstrates how to check or uncheck a radio button using its position number on the page
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции check_by_number для радиобокса
// Установить отметку на радиобоксе по его номеру

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the first radio button by number (0 is the first element)
DOM::$radiobox->check_by_number(0, true, "iframeResult");

// Uncheck the first radio button by number
DOM::$radiobox->check_by_number(0, false, "iframeResult");

// Check the second radio button by number (1 is the second element)
DOM::$radiobox->check_by_number(1, true, "iframeResult");

// Остановить работу
WINDOW::$app->quit();