<?php
// Scenario: Check if a radio button is checked by its name
// Description: Demonstrates how to verify whether a radio button is checked using its name attribute
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции is_check_by_name для радиобокса
// Проверить, установлен ли флажок на радиобоксе по его имени

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by name (assuming radio buttons have name="gender")
DOM::$radiobox->check_by_name("gender", true, "iframeResult");

// Check if the radio button is checked by name
$isChecked = DOM::$radiobox->is_check_by_name("gender", "iframeResult");
echo "Is radio button with name 'gender' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Uncheck the radio button by name
DOM::$radiobox->check_by_name("gender", false, "iframeResult");

// Check if the radio button is still checked
$isChecked = DOM::$radiobox->is_check_by_name("gender", "iframeResult");
echo "Is radio button with name 'gender' still checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check the radio button by name again
DOM::$radiobox->check_by_name("gender", true, "iframeResult");

// Check if the radio button is checked again
$isChecked = DOM::$radiobox->is_check_by_name("gender", "iframeResult");
echo "Is radio button with name 'gender' checked again? " . ($isChecked ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();