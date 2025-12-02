<?php
// Scenario: Click a radio button by its name and value
// Description: Demonstrates how to click on a radio button using both its name and value attributes for precise selection
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции click_by_name_and_value для радиобокса
// Кликнуть по радиобоксу с указанным именем и значением

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Switch to the iframe containing the example
// Using frame parameter directly in the radiobox function instead

// Click on a radio button by name and value
// Assuming the radio buttons have name="gender" and values "male" and "female"
DOM::$radiobox->click_by_name_and_value("gender", "male", "iframeResult");

// Click on the other radio button
DOM::$radiobox->click_by_name_and_value("gender", "female", "iframeResult");

// Остановить работу
WINDOW::$app->quit();