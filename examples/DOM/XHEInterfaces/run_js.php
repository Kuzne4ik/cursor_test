<?php

// Scenario: Execute JavaScript on a collection of elements
// Description: This example demonstrates how to get a collection of elements and execute JavaScript on each element
// Classes used: XHEInterfaces, XHEDiv, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all div elements and execute JavaScript on each div

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    //Note: To run by XHE API JS code rule: use the keyword `element` instead of `this`!

    // Define the JavaScript code to execute on each div (use the keyword `element` instead of `this`)
    $jsCode = "element.style.backgroundColor = 'yellow';";
    
    // Execute the JavaScript on all div elements
    $results = $divs->run_js($jsCode);
    
    // Check if JavaScript was executed successfully on all divs
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully executed JavaScript on " . $successCount . " out of " . $divs->count() . " divs\n";
    echo "JavaScript executed: " . $jsCode . "\n";
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>