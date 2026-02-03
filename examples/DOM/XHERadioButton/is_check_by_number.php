<?php
// Scenario: Check if a radio button is checked by its number
// Description: Demonstrates how to verify whether a radio button is checked using its position number on the page
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции is_check_by_number для радиобокса
// Проверить, установлен ли флажок на радиобоксе по его номеру

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the first radio button by number (0 is the first element)
DOM::$radiobox->check_by_number(0, true, "iframeResult");

// Check if the first radio button is checked
$isChecked = DOM::$radiobox->is_check_by_number(0, "iframeResult");
echo "Is first radio button checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check the second radio button by number (1 is the second element)
DOM::$radiobox->check_by_number(1, true, "iframeResult");

// Check if the first radio button is still checked (it should be unchecked now)
$isChecked = DOM::$radiobox->is_check_by_number(0, "iframeResult");
echo "Is first radio button still checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check if the second radio button is checked
$isChecked = DOM::$radiobox->is_check_by_number(1, "iframeResult");
echo "Is second radio button checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();