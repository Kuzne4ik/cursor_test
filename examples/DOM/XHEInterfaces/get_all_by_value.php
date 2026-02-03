<?php

// Scenario: Get all elements by value attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific value attribute within that collection
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

// Example: Get all input elements and then find all inputs with a specific value attribute within that collection

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Try to find all inputs with a specific value (exact match)
    $targetValue = "example";
    $inputsByValue = $inputs->get_all_by_value($targetValue, true);
    
    // Check if any inputs with the specified value were found
    if ($inputsByValue->count() > 0)
    {
        echo "\nFound " . $inputsByValue->count() . " input elements with value '" . $targetValue . "' (exact match):\n";
        
        // Process each found input
        for ($k = 0; $k < $inputsByValue->count(); $k++)
        {
            $currentInput = $inputsByValue->get($k);
            
            if ($currentInput->is_exist())
            {
                echo "\nInput #" . ($k + 1) . " with value '" . $targetValue . "':\n";
                echo "Input name: " . $currentInput->get_name() . "\n";
                echo "Input inner number: " . $currentInput->inner_number . "\n";
                echo "Input type: " . $currentInput->get_type() . "\n";
           }
        }
    }
    else
    {
        echo "\nNo input elements with value '" . $targetValue . "' (exact match) found in the collection\n";
    }
    
    // Try to find all inputs with a partial value match
    $partialValue = "exam";
    $inputsByPartialValue = $inputs->get_all_by_value($partialValue, false);
    
    // Check if any inputs with the partial value were found
    if ($inputsByPartialValue->count() > 0)
    {
        echo "\nFound " . $inputsByPartialValue->count() . " input elements with partial value '" . $partialValue . "':\n";
        
        // Process each found input
        for ($k = 0; $k < $inputsByPartialValue->count(); $k++)
        {
            $currentInput = $inputsByPartialValue->get($k);
            
            if ($currentInput && $currentInput->is_exist())
            {
                echo "\nInput #" . ($k + 1) . " with partial value '" . $partialValue . "':\n";
                echo "Input name: " . $currentInput->get_name() . "\n";
                echo "Input inner number: " . $currentInput->inner_number . "\n";
                echo "Full value: " . $currentInput->get_value() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo input elements with partial value '" . $partialValue . "' found in the collection\n";
    }
    
    // Try to find all inputs with another value
    $targetValue2 = "test";
    $inputsByValue2 = $inputs->get_all_by_value($targetValue2, true);
    
    // Check if any inputs with the specified value were found
    if ($inputsByValue2->count() > 0)
    {
        echo "\nFound " . $inputsByValue2->count() . " input elements with value '" . $targetValue2 . "':\n";
        
        // Process each found input
        for ($k = 0; $k < $inputsByValue2->count(); $k++)
        {
            $currentInput = $inputsByValue2->get($k);
            
            if ($currentInput && $currentInput->is_exist())
            {
                echo "\nInput #" . ($k + 1) . " with value '" . $targetValue2 . "':\n";
                echo "Input name: " . $currentInput->get_name() . "\n";
                echo "Input inner number: " . $currentInput->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo input elements with value '" . $targetValue2 . "' found in the collection\n";
    }
    
    // Try to find all inputs with a non-existent value
    $nonExistentValue = "nonexistent";
    $inputsByNonExistentValue = $inputs->get_all_by_value($nonExistentValue, true);
    
    // Check if any inputs with the non-existent value were found
    if ($inputsByNonExistentValue->count() > 0)
    {
        echo "\nUnexpectedly found " . $inputsByNonExistentValue->count() . " input elements with value '" . $nonExistentValue . "'\n";
    }
    else
    {
        echo "\nAs expected, no input elements with value '" . $nonExistentValue . "' found in the collection\n";
    }
    
    // Display all input values in the collection for reference
    echo "\nAll input values in the collection:\n";
    for ($k = 0; $k < $inputs->count(); $k++)
    {
        $currentInput = $inputs->get($k);
        
        if ($currentInput && $currentInput->is_exist())
        {
            $inputValue = $currentInput->get_value();
            $inputName = $currentInput->get_name();
            $inputType = $currentInput->get_type();
            
            echo "Input #" . ($k + 1) . ": Name = '" . $inputName . "', Type = '" . $inputType . "', Value = '" . $inputValue . "'\n";
        }
    }
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>