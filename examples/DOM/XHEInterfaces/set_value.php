<?php

// Scenario: Set values for a collection of input elements
// Description: This example demonstrates how to get a collection of input elements and set values for each input element
// Classes used: XHEInterfaces, XHEInput, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example: Get all input elements and set values for each input

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Define the value to set for all inputs
    $value = "New value for all inputs";
    
    // Set the value for all input elements
    $results = $inputs->set_value($value);
    
    // Check if values were set successfully in all inputs
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully set value '" . $value . "' in " . $successCount . " out of " . $inputs->count() . " inputs\n";
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>