<?php
// Scenario: Get the action attribute of a form by its id
// Description: Demonstrates how to retrieve the action attribute value from a form element based on its id attribute
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication

// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using get_action_by_id function to get form action by its id attribute
// Russian: Пример использования функции get_action_by_id для получения атрибута action формы по значению атрибута id

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the action attribute of the form by id attribute
$formAction = DOM::$form->get_action_by_id("userLoginForm");

// Display the form action
if ($formAction !== "") {
    echo "Form action by id: " . $formAction . "\n";
} else {
    echo "Failed to get form action by id.\n";
}

// Stop the application
WINDOW::$app->quit();
?>