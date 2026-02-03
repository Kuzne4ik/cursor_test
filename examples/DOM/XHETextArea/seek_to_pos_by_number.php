<?php
// Scenario: Move the cursor to a specific position in a textarea element found by its numerical index on the page
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
WEB::$browser->wait_for(5, "1");

// Find the textarea by number
$textarea_number = 0;
$position = 10; // Position to move cursor to

// Check if textarea exists
if (DOM::$textarea->is_exist_by_number($textarea_number))
{
    // Set some text in the textarea
    DOM::$textarea->set_value_by_number($textarea_number, "Hello, World!\nThis is a test text area.\nLine 3\nLine 4");
    
    // Move cursor to the specified position in the textarea
    $result = DOM::$textarea->seek_to_pos_by_number($textarea_number, $position);
    
    // Display the result
    if ($result)
    {
        echo "\nSuccessfully moved cursor to position $position in textarea by number";
    }
    else
    {
        echo "\nFailed to move cursor to position $position in textarea by number";
    }
}
else
{
    echo "\nTextarea not found by number";
}

// Stop the application
WINDOW::$app->quit();
?>