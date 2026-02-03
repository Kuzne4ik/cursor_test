<?php

// Scenario: Check if elements in a collection are disabled
// Description: This example demonstrates how to get a collection of input elements and check if each element is disabled
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

// Navigate to the polygon page with forms if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example: Get all input elements and check if each element is disabled

// Get all input elements on the page
$inputs = DOM::$input->get_all();

// Check that we have found at least one input
if ($inputs->count() > 0)
{
    echo "Found " . $inputs->count() . " input elements\n";
    
    // Check if all input elements are disabled
    $disabledStates = $inputs->is_disabled();
    
    // Display disabled states
    echo "Disabled states for all inputs:\n";
    foreach ($disabledStates as $index => $isDisabled) {
        $state = $isDisabled ? "disabled" : "enabled";
        echo "Input " . ($index + 1) . ": " . $state . "\n";
    }
}
else
{
    echo "No input elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>