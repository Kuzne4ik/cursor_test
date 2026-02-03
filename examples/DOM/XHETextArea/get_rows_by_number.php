<?php
// Scenario: Get the number of rows in a textarea element by its numerical index on the page
// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a test page
WEB::$browser->navigate("https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_textarea");

// Wait for the page to load
WEB::$browser->wait_js(5);

// Find the textarea by number
$textarea_number = 0;

// Check if textarea exists
if (DOM::$textarea->is_exist_by_number($textarea_number))
{
    // Get rows count
    $rows_count = DOM::$textarea->get_rows_by_number($textarea_number);
    
    // Display the result
    if ($rows_count !== -1)
    {
        echo "Textarea rows count by number: $rows_count<br>";
        
        // Also display other information about the textarea
        echo "Textarea value: " . DOM::$textarea->get_value_by_number($textarea_number) . "\n";
        echo "Textarea cols count: " . DOM::$textarea->get_cols_by_number($textarea_number) . "\n";
    }
    else
    {
        echo "Failed to get rows count by number<br>";
    }
}
else
{
    echo "Textarea not found by number<br>";
}

// Stop the application
WINDOW::$app->quit();
?>