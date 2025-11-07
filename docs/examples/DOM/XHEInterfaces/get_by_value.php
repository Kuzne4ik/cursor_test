<?php

// Scenario: Get elements by value attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their value attribute within that collection
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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example: Get all input elements and then find specific inputs by their value attribute within that collection

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Try to find an input with a specific value (exact match) in input elements
    $targetValue = "example";
    $inputByValue = $inputs->get_by_value($targetValue, true);
    
    // Check if the input with the specified value was found in input elements and exists
    if ($inputByValue && $inputByValue->is_exist())
    {
        echo "\nFound input with value '" . $targetValue . "' (exact match):\n";
        echo "Input name: " . $inputByValue->get_name() . "\n";
        echo "Input inner number: " . $inputByValue->inner_number . "\n";
        echo "Input type: " . $inputByValue->get_type() . "\n";
    }
    else
    {
        echo "\nNo input with value '" . $targetValue . "' (exact match) found in the collection\n";
    }
    
    // Try to find an input with a partial value match in input elements
    $partialValue = "exam";
    $inputByPartialValue = $inputs->get_by_value($partialValue, false);
    
    // Check if the input with the partial value was found in input elements and exists
    if ($inputByPartialValue && $inputByPartialValue->is_exist())
    {
        echo "\nFound input with partial value '" . $partialValue . "':\n";
        echo "Input name: " . $inputByPartialValue->get_name() . "\n";
        echo "Input inner number: " . $inputByPartialValue->inner_number . "\n";
        echo "Full value: " . $inputByPartialValue->get_value() . "\n";
    }
    else
    {
        echo "\nNo input with partial value '" . $partialValue . "' found in the collection\n";
    }

    // Try to find an input with a non-existent value in input elements
    $nonExistentValue = "nonexistent";
    $inputByNonExistentValue = $inputs->get_by_value($nonExistentValue, true);
    
    // Check if the input with the non-existent value was found in input elements and exists
    if ($inputByNonExistentValue && $inputByNonExistentValue->is_exist())
    {
        echo "\nUnexpectedly found input with value '" . $nonExistentValue . "'\n";
    }
    else
    {
        echo "\nAs expected, no input with value '" . $nonExistentValue . "' found in the collection\n";
    }
  
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>