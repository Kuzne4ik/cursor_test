<?php
// Scenario: Submit a form by its number
// Description: Demonstrates how to submit a form using its position number on the page
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication

// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using submit_by_number function to submit a form by its number
// Russian: Пример использования функции submit_by_number для отправки формы по её номеру

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Submit the form by number (e.g., the first form on the page)
$formSubmitted = DOM::$form->submit_by_number(1);

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by number!\n";
} else {
    echo "Failed to submit form by number.\n";
}

// Stop the application
WINDOW::$app->quit();
?>