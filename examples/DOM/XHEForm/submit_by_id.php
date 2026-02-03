<?php
// Scenario: Submit a form by its id
// Description: Demonstrates how to submit a form using its id attribute value
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// English: Example of using submit_by_id function to submit a form by its id attribute
// Russian: Пример использования функции submit_by_id для отправки формы по значению атрибута id

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Submit the form by id attribute
$formSubmitted = DOM::$form->submit_by_id("userLoginForm");

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by id!\n";
} else {
    echo "Failed to submit form by id.\n";
}

// Stop the application
WINDOW::$app->quit();
?>