<?php
// Scenario: Submit a form by its action attribute
// Description: Demonstrates how to submit a form using its action attribute value
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication

// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using submit_by_action function to submit a form by its action attribute
// Russian: Пример использования функции submit_by_action для отправки формы по значению атрибута action

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Submit the form by action attribute (exact match)
$formSubmitted = DOM::$form->submit_by_action("/submit/login", true);

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by action!\n";
} else {
    echo "Failed to submit form by action.\n";
}

// Stop the application
WINDOW::$app->quit();
?>