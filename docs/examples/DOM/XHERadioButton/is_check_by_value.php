<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Пример использования функции is_check_by_value для радиобокса
// Проверить, установлен ли флажок на радиобоксе по его значению

// Navigate to a page with radio buttons
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by value (assuming one radio button has value="male")
DOM::$radiobox->check_by_value("male", true, true, "iframeResult");

// Check if the radio button with value="male" is checked
$isChecked = DOM::$radiobox->is_check_by_value("male", true, "iframeResult");
echo "Is radio button with value 'male' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check another radio button by value (assuming another has value="female")
DOM::$radiobox->check_by_value("female", true, true, "iframeResult");

// Check if the radio button with value="male" is still checked (it should be unchecked now)
$isChecked = DOM::$radiobox->is_check_by_value("male", true, "iframeResult");
echo "Is radio button with value 'male' still checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Check if the radio button with value="female" is checked
$isChecked = DOM::$radiobox->is_check_by_value("female", true, "iframeResult");
echo "Is radio button with value 'female' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Example with partial match (if exactly=false)
// This would match any value containing "male" (e.g., "male", "female", etc.)
DOM::$radiobox->check_by_value("male", false, true, "iframeResult");
$isChecked = DOM::$radiobox->is_check_by_value("male", false, "iframeResult");
echo "Is any radio button with value containing 'male' checked? " . ($isChecked ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();