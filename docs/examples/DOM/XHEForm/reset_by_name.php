<?php
// Scenario: Reset a form by its name
// Description: Demonstrates how to reset all form fields to their default values using the form's name attribute
// Classes used: DOM, XHEForm, XHEInput, XHEBrowser, XHEApplication
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// English: Example of using reset_by_name function to reset a form by its name attribute
// Russian: Пример использования функции reset_by_name для сброса формы по значению атрибута name

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Fill some form fields (optional)
DOM::$input->set_value_by_name("username", "testuser");
DOM::$input->set_value_by_name("password", "testpass");

// Reset the form by name attribute
$formReset = DOM::$form->reset_by_name("loginForm");

// Check if the form was reset successfully
if ($formReset) {
    echo "Form reset successfully by name!\n";
} else {
    echo "Failed to reset form by name.\n";
}

// Stop the application
WINDOW::$app->quit();
?>