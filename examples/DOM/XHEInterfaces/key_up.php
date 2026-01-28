<?php

// Scenario: Send key up events to elements in a collection using full emulation
// Description: This example demonstrates how to get a collection of input elements and send key up events to each element using full emulation
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

// Example: Get all input elements and send key up events to each element using full emulation

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Process each input to send key up events to it
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

            // Focus on the input element first
            $focusResult = $currentInput->focus();
            
            if ($focusResult)
            {
                echo "Successfully focused on input #" . ($k + 1) . "\n";
                
                // Clear the input first
                $currentInput->set_value("");

                // First send key down events for characters, then key up events
                $textToSend = "K ey";
                for ($j = 0; $j < strlen($textToSend); $j++)
                {
                    $charKey = substr($textToSend, $j, 1);
                    
                    // Send key down event first
                    $keyDownResult = $currentInput->key_down($charKey);
                    
                    if ($keyDownResult)
                    {
                        echo "Successfully sent key down event for '" . $charKey . "' to input #" . ($k + 1) . "\n";
                        
                        // Wait a moment
                        sleep(0.5);
                        
                        // Now send key up event
                        $result = $currentInput->key_up($charKey);
                        
                        // Check if the key up event was successful
                        if ($result)
                        {
                            echo "Successfully sent key up event for '" . $charKey . "' to input #" . ($k + 1) . "\n";
                            
                            // Wait a moment to see the result
                            sleep(0.5);
                            
                            // Get the updated value
                            $updatedValue = $currentInput->get_value();
                            echo "Updated value: " . $updatedValue . "\n";
                        }
                        else
                        {
                            echo "Failed to send key up event for '" . $charKey . "' to input #" . ($k + 1) . "\n";
                        }
                    }
                    else
                    {
                        echo "Failed to send key down event for '" . $charKey . "' to input #" . ($k + 1) . "\n";
                    }
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