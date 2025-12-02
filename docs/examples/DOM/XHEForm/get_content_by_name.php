<?php
// Scenario: Get the content of a form by its name
// Description: Demonstrates how to retrieve the inner text or HTML content of a form element based on its name attribute
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication

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
    echo "Form inner text by name: " . $formInnerText . "\n";
} else {
    echo "Failed to get form inner text by name.\n";
}

// Get the inner HTML of the form by name (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_name("loginForm", true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by name: " . $formInnerHTML . "\n";
} else {
    echo "Failed to get form inner HTML by name.\n";
}

// Stop the application
WINDOW::$app->quit();
?>