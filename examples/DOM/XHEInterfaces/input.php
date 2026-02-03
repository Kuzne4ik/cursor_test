<?php

// Scenario: Input text to elements in a collection using full emulation
// Description: This example demonstrates how to get a collection of input elements and input text to each element using full emulation
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

// Example: Get all input elements and input text to each element using full emulation

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Process each input to input text to it
    for ($k = 0; $k < $inputs->count(); $k++)
    {
        // Get the current input
        $currentInput = $inputs->get($k);
        
        // Check that the element exists
        if ($currentInput && $currentInput->is_exist())
        {
            echo "\nProcessing input #" . ($k + 1) . "\n";
            echo "Input name: " . $currentInput->get_name() . "\n";
            echo "Input type: " . $currentInput->get_type() . "\n";

            // Focus on the input element first and clear the input
            $focusResult = $currentInput->focus() && $currentInput->set_value('');
            
            if ($focusResult)
            {
                echo "Successfully focused on input and clear the input #" . ($k + 1) . "\n";
                
                // Input text to the element with default settings
                $inputText = "Test Input #" . ($k + 1);
                $result = $currentInput->input($inputText);

                // Check if the input was successful
                if ($result)
                {
                    echo "Successfully input text '" . $inputText . "' to input #" . ($k + 1) . "\n";
                    
                    // Wait a moment to see the result
                    sleep(1);
                    
                    // Get the updated value
                    $updatedValue = $currentInput->get_value();
                    echo "Updated value: " . $updatedValue . "\n";
                }
                else
                {
                    echo "Failed to input text to input #" . ($k + 1) . "\n";
                }
            }
            else
            {
                echo "Failed to focus on input #" . ($k + 1) . "\n";
            }
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