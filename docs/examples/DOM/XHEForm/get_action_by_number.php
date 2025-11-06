<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using get_action_by_number function to get form action by its number
// Russian: Пример использования функции get_action_by_number для получения атрибута action формы по её номеру

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the action attribute of the form by number (e.g., the first form on the page)
$formAction = DOM::$form->get_action_by_number(1);

// Display the form action
if ($formAction !== "") {
    echo "Form action by number: " . $formAction . "<br>";
} else {
    echo "Failed to get form action by number.<br>";
}

// Stop the application
WINDOW::$app->quit();
?>