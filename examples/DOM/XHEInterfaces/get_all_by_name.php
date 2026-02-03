
<?php

// Scenario: Get all elements by name from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific name within that collection
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

// Example: Get all input elements and then find all inputs with a specific name within that collection

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Try to find all inputs with a specific name
    $targetName = "Name";
    $inputsByName = $inputs->get_all_by_name($targetName);
    
    // Check if any inputs with the specified name were found
    if ($inputsByName->count() > 0)
    {
        echo "\nFound " . $inputsByName->count() . " input elements with name '" . $targetName . "':\n";
        
        // Process each found input
        for ($k = 0; $k < $inputsByName->count(); $k++)
        {
            $currentInput = $inputsByName->get($k);
            
            if ($currentInput && $currentInput->is_exist())
            {
                echo "\nInput #" . ($k + 1) . " with name '" . $targetName . "':\n";
                echo "Input type: " . $currentInput->get_type() . "\n";
                echo "Input value: " . $currentInput->get_value() . "\n";
                echo "Input inner number: " . $currentInput->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo input elements with name '" . $targetName . "' found in the collection\n";
    }
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>