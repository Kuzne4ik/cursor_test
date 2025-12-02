<?php
// Scenario: Set the read-only status of a textarea element by its name attribute
// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a test page
WEB::$browser->navigate("https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_textarea");

// Wait for the page to load
WEB::$browser->wait_js(5);

// Find the textarea by name
$textarea_name = "w3review";
$readonly_value = true; // Set to true for read-only, false for editable

// Check if textarea exists
if (DOM::$textarea->is_exist_by_name($textarea_name))
{
    // Get current readonly status
    $current_readonly = DOM::$textarea->get_readonly_by_name($textarea_name);
    echo "\nCurrent readonly status: " . ($current_readonly ? "true" : "false");
    
    // Set readonly status
    $result = DOM::$textarea->set_readonly_by_name($textarea_name, $readonly_value);
    
    // Display the result
    if ($result)
    {
        echo "\nSuccessfully set readonly status to " . ($readonly_value ? "true" : "false") . " by name";
        
        // Get the new readonly status to verify
        $new_readonly = DOM::$textarea->get_readonly_by_name($textarea_name);
        echo "\nNew readonly status: " . ($new_readonly ? "true" : "false");
    }
    else
    {
        echo "\nFailed to set readonly status by name";
    }
}
else
{
    echo "\nTextarea not found by name";
}

// Stop the application
WINDOW::$app->quit();
?>