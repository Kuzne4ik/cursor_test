<?php
// Scenario: Check a radio button by its attribute within a form by number
// Description: Demonstrates how to check or uncheck a radio button using its attribute within a specific form identified by its position number
// Classes used: DOM, XHERadioButton, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции check_by_attribute_by_form_number для радиобокса
// Установить отметку на радиобоксе по значению его атрибута в форме с заданным номером

// Navigate to a page with radio buttons within forms
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_radio");

// Wait for the page to load
WEB::$browser->wait_js();

// Check the radio button by id attribute within the first form (form_number=0)
// Assuming a radio button has id="male" and is in the first form
DOM::$radiobox->check_by_attribute_by_form_number("id", "male", true, true, 0, "iframeResult");

// Check another radio button by id attribute within the first form
// Assuming another radio button has id="female" and is in the first form
DOM::$radiobox->check_by_attribute_by_form_number("id", "female", true, true, 0, "iframeResult");

// Example with partial match (if exactly=false)
// This would match any id containing "male" (e.g., "male", "female", etc.)
DOM::$radiobox->check_by_attribute_by_form_number("id", "male", false, true, 0, "iframeResult");

// Example with different form number (e.g., second form with form_number=1)
DOM::$radiobox->check_by_attribute_by_form_number("id", "option1", true, true, 1, "iframeResult");

// Остановить работу
WINDOW::$app->quit();