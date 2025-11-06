<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using submit_by_id function to submit a form by its id attribute
// Russian: Пример использования функции submit_by_id для отправки формы по значению атрибута id

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Submit the form by id attribute
$formSubmitted = DOM::$form->submit_by_id("userLoginForm");

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by id!<br>";
} else {
    echo "Failed to submit form by id.<br>";
}

// Stop the application
WINDOW::$app->quit();
?>