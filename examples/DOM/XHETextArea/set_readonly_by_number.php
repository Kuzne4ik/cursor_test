<?php
// Scenario: Set the read-only status of a textarea element by its numerical index on the page
// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a test page
WEB::$browser->navigate("https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_textarea");

// Wait for the page to load
WEB::$browser->wait_js(5);

// Find the textarea by number
$textarea_number = 0;
$readonly_value = true; // Set to true for read-only, false for editable

// Check if textarea exists
if (DOM::$textarea->is_exist_by_number($textarea_number))
{
    // Get current readonly status
    $current_readonly = DOM::$textarea->get_readonly_by_number($textarea_number);
    echo "Current readonly status: " . ($current_readonly ? "true" : "false");
    
    // Set readonly status
    $result = DOM::$textarea->set_readonly_by_number($textarea_number, $readonly_value);
    
    // Display the result
    if ($result)
    {
        echo "\nSuccessfully set readonly status to " . ($readonly_value ? "true" : "false") . " by number";
        
        // Get the new readonly status to verify
        $new_readonly = DOM::$textarea->get_readonly_by_number($textarea_number);
        echo "\nNew readonly status: " . ($new_readonly ? "true" : "false");
    }
    else
    {
        echo "\nFailed to set readonly status by number";
    }
}
else
{
    echo "\nTextarea not found by number";
}


// Stop the application
WINDOW::$app->quit();
?>