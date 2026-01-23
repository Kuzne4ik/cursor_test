<?php

// Scenario: Get form numbers for a collection of input elements
// Description: This example demonstrates how to get a collection of input elements and retrieve the form number for each element
// Classes used: XHEInterfaces, XHEInput, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page with forms if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example: Get all input elements and retrieve the form number for each input

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Get form numbers for all input elements
    $formNumbers = $inputs->get_form_number();
    
    // Display form numbers
    echo "Form numbers for all inputs:\n";
    foreach ($formNumbers as $index => $formNumber) {
        echo "Input " . ($index + 1) . ": Form " . $formNumber . "\n";
    }
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>