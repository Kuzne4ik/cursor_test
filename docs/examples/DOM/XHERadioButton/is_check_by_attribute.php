<?php
// Scenario: Check if a radio button is checked by its attribute
// Description: Demonstrates how to verify whether a radio button is checked using its attribute name and value
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции is_check_by_attribute для радиобокса
// Проверить, установлен ли флажок на радиобоксе по значению его атрибута

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by id attribute (assuming a radio button has id="male")
DOM::$radiobox->check_by_attribute("id", "male", true, true, "iframeResult");

// Check if the radio button with id="male" is checked
$isChecked = DOM::$radiobox->is_check_by_attribute("id", "male", true, "iframeResult");
echo "Is radio button with id 'male' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check another radio button by id attribute (assuming another has id="female")
DOM::$radiobox->check_by_attribute("id", "female", true, true, "iframeResult");

// Check if the radio button with id="male" is still checked (it should be unchecked now)
$isChecked = DOM::$radiobox->is_check_by_attribute("id", "male", true, "iframeResult");
echo "Is radio button with id 'male' still checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check if the radio button with id="female" is checked
$isChecked = DOM::$radiobox->is_check_by_attribute("id", "female", true, "iframeResult");
echo "Is radio button with id 'female' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Example with partial match (if exactly=false)
// This would match any id containing "male" (e.g., "male", "female", etc.)
DOM::$radiobox->check_by_attribute("id", "male", false, true, "iframeResult");
$isChecked = DOM::$radiobox->is_check_by_attribute("id", "male", false, "iframeResult");
echo "Is any radio button with id containing 'male' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Example with different attribute (e.g., class)
// Assuming a radio button has class="radio-option"
DOM::$radiobox->check_by_attribute("class", "radio-option", true, true, "iframeResult");
$isChecked = DOM::$radiobox->is_check_by_attribute("class", "radio-option", true, "iframeResult");
echo "Is radio button with class 'radio-option' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();