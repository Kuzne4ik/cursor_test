<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using get_content_by_id function to get form content by its id
// Russian: Пример использования функции get_content_by_id для получения содержимого формы по её id

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the inner text of the form by id (as_html = false)
$formInnerText = DOM::$form->get_content_by_id("loginFormId", false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by id: " . $formInnerText . "<br>";
} else {
    echo "Failed to get form inner text by id.<br>";
}

// Get the inner HTML of the form by id (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_id("loginFormId", true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by id: " . $formInnerHTML . "<br>";
} else {
    echo "Failed to get form inner HTML by id.<br>";
}

// Stop the application
WINDOW::$app->quit();
?>