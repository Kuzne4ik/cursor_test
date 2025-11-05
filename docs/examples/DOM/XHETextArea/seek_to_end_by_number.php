<?php
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


// Find the textarea by number (assuming it's the first textarea)
$textarea_number = 0;

// Check if textarea exists
if (DOM::$textarea->is_exist_by_number($textarea_number))
{
    // Set some text in the textarea
    DOM::$textarea->set_value_by_number($textarea_number, "Hello, World!\nThis is a test text area.\nLine 3\nLine 4");
    
    // Wait a moment to see the text
    WEB::$browser->wait_for(2, "1");
    
    // Move cursor to the end of the textarea
    $result = DOM::$textarea->seek_to_end_by_number($textarea_number);
    
    // Display the result
    if ($result)
    {
        echo "\nSuccessfully moved cursor to the end of textarea by number";
    }
    else
    {
        echo "\nFailed to move cursor to the end of textarea by number";
    }
}
else
{
    echo "\nTextarea not found by number";
}

// Display information about the textarea
echo "\nTextarea content: " . DOM::$textarea->get_value_by_number($textarea_number);

// Stop the application
WINDOW::$app->quit();
?>