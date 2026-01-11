<?php
// Scenario: Get the action attribute of a form by its name
// Description: Demonstrates how to retrieve the action attribute value from a form element based on its name attribute
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// English: Example of using get_action_by_name function to get form action by its name attribute
// Russian: Пример использования функции get_action_by_name для получения атрибута action формы по значению атрибута name

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the action attribute of the by name attribute
$formAction = DOM::$form->get_action_by_name("loginForm");

// Display the form action
if ($formAction !== "") {
    echo "Form action by name: " . $formAction . "\n";
} else {
    echo "Failed to get form action by name.\n";
}

// Stop the application
WINDOW::$app->quit();
?>