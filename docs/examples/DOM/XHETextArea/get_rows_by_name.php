<?php
// Scenario: Get the number of rows in a textarea element by its name attribute
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

// Check if textarea exists
if (DOM::$textarea->is_exist_by_name($textarea_name))
{
    // Get rows count
    $rows_count = DOM::$textarea->get_rows_by_name($textarea_name);
    
    // Display the result
    if ($rows_count !== -1)
    {
        echo "\nTextarea rows count by name: $rows_count";
        
        // Also display other information about the textarea
        echo "\nTextarea value: " . DOM::$textarea->get_value_by_name($textarea_name);
        echo "\nTextarea cols count: " . DOM::$textarea->get_cols_by_name($textarea_name);
    }
    else
    {
        echo "\nFailed to get rows count by name";
    }
}
else
{
    echo "\nTextarea not found by name";
}

// Stop the application
WINDOW::$app->quit();
?>