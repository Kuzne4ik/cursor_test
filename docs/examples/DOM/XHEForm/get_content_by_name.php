<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using get_content_by_name function to get form content by its name
// Russian: Пример использования функции get_content_by_name для получения содержимого формы по её имени

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the inner text of the form by name (as_html = false)
$formInnerText = DOM::$form->get_content_by_name("loginForm", false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by name: " . $formInnerText . "<br>";
} else {
    echo "Failed to get form inner text by name.<br>";
}

// Get the inner HTML of the form by name (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_name("loginForm", true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by name: " . $formInnerHTML . "<br>";
} else {
    echo "Failed to get form inner HTML by name.<br>";
}

// Stop the application
WINDOW::$app->quit();
?>