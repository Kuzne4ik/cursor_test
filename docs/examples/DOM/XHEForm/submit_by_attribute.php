<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// English: Example of using submit_by_attribute function to submit a form by custom attribute
// Russian: Пример использования функции submit_by_attribute для отправки формы по пользовательскому атрибуту

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Submit the form by custom attribute (e.g., data-form-type)
$formSubmitted = DOM::$form->submit_by_attribute("data-form-type", "login", true);

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by attribute!<br>";
} else {
    echo "Failed to submit form by attribute.<br>";
}

// Stop the application
WINDOW::$app->quit();
?>