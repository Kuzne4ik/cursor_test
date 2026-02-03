<?php

// Scenario: Send key events to elements in a collection using full emulation
// Description: This example demonstrates how to get a collection of input elements and send key events to each element using full emulation
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

// Example: Get all input elements and send key events to each element using full emulation

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{

    // Set current keyboard language to `en`
    SYSTEM::$keyboard->set_current_language("en");

    echo "Found " . $inputs->count() . " input elements\n";
    
    // Process each input to send key events to it
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

            if ($focusResult) {
                echo "Successfully focused on input #" . ($k + 1) . "\n";

                // Wait a moment
                sleep(1);

                // Clear the input first
                $currentInput->set_value("");

                // Send character `s` as key code '83'  to the element
                $result = $currentInput->key(83);

                // Check if the key event was successful
                if ($result) {
                    echo "Successfully sent ALt key '83' to input #" . ($k + 1) . "\n";

                    // Wait a moment to see the result
                    sleep(0.2);

                    // Get the updated value
                    $updatedValue = $currentInput->get_value();
                    echo "Updated value: " . $updatedValue . "\n";
                } else {
                    echo "Failed to send ALt key '83' to input #" . ($k + 1) . "\n";
                }

                echo "\nSending special ALt key (whitespace): " . 32 . "\n";

                $specialKeyResult = $currentInput->key(32);

                // Check if the special key event was successful
                if ($specialKeyResult) {
                    echo "Successfully sent special symbol ALt key '32' to input #" . ($k + 1) . "\n";

                    // Get the updated value
                    $updatedValue = $currentInput->get_value();
                    echo "Updated value: " . $updatedValue . "\n";
                } else {
                    echo "Failed to send special ALt key '32' to input #" . ($k + 1) . "\n";
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