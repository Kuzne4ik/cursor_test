<?php
// Scenario: Reset a form by its number
// Description: Demonstrates how to reset all form fields to their default values using the form's position number on the page
// Classes used: DOM, XHEForm, XHEInput, XHEBrowser, XHEApplication
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// English: Example of using reset_by_number function to reset a form by its number
// Russian: Пример использования функции reset_by_number для сброса формы по её номеру

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Fill some form fields (optional)
DOM::$input->set_value_by_name("username", "testuser");
DOM::$input->set_value_by_name("password", "testpass");

// Reset the form by number (e.g., the first form on the page)
$formReset = DOM::$form->reset_by_number(1);

// Check if the form was reset successfully
if ($formReset) {
    echo "Form reset successfully by number!\n";
} else {
    echo "Failed to reset form by number.\n";
}

// Stop the application
WINDOW::$app->quit();
?>