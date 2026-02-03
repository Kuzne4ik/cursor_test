<?php
// Scenario: Submit a form by its name
// Description: Demonstrates how to submit a form using its name attribute value
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// English: Example of using submit_by_name function to submit a form by its name attribute
// Russian: Пример использования функции submit_by_name для отправки формы по значению атрибута name

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Submit the form by name attribute
$formSubmitted = DOM::$form->submit_by_name("loginForm");

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by name!\n";
} else {
    echo "Failed to submit form by name.\n";
}

// Stop the application
WINDOW::$app->quit();
?>