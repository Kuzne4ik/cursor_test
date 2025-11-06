<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using get_content_by_number function to get form content by its number
// Russian: Пример использования функции get_content_by_number для получения содержимого формы по её номеру

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the inner text of the form by number (as_html = false)
$formInnerText = DOM::$form->get_content_by_number(1, false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by number: " . $formInnerText . "<br>";
} else {
    echo "Failed to get form inner text by number.<br>";
}

// Get the inner HTML of the form by number (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_number(1, true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by number: " . $formInnerHTML . "<br>";
} else {
    echo "Failed to get form inner HTML by number.<br>";
}

// Stop the application
WINDOW::$app->quit();
?>