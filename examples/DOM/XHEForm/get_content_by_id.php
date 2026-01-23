<?php
// Scenario: Get the content of a form by its id
// Description: Demonstrates how to retrieve the inner text or HTML content of a form element based on its id attribute
// Classes used: DOM, XHEForm, XHEBrowser, XHEApplication
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// English: Example of using get_content_by_id function to get form content by its id
// Russian: Пример использования функции get_content_by_id для получения содержимого формы по её id

// Load a page with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Get the inner text of the form by id (as_html = false)
$formInnerText = DOM::$form->get_content_by_id("loginFormId", false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by id: " . $formInnerText . "\n";
} else {
    echo "Failed to get form inner text by id.\n";
}

// Get the inner HTML of the form by id (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_id("loginFormId", true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by id: " . $formInnerHTML . "\n";
} else {
    echo "Failed to get form inner HTML by id.\n";
}

// Stop the application
WINDOW::$app->quit();
?>