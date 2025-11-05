<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a test page
WEB::$browser->navigate("https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_textarea");

// Wait for the page to load
WEB::$browser->wait_for(5, "1");

// Find the textarea by attribute
$attr_name = "id";
$attr_value = "w3review";
$exactly = true;

// Check if textarea exists
if (DOM::$textarea->is_exist_by_attribute($attr_name, $attr_value, $exactly))
{
    // Set some text in the textarea
    DOM::$textarea->set_value_by_attribute($attr_name, $attr_value, $exactly, "Hello, World!\nThis is a test text area.\nLine 3\nLine 4");
    
    // Move cursor to the end of the textarea
    $result = DOM::$textarea->seek_to_end_by_attribute($attr_name, $attr_value, $exactly);
    
    // Display the result
    if ($result)
    {
        echo "\nSuccessfully moved cursor to the end of textarea by attribute";
    }
    else
    {
        echo "\nFailed to move cursor to the end of textarea by attribute";
    }
}
else
{
    echo "\nTextarea not found by attribute";
}

// Display information about the textarea
echo "\nTextarea content: " . DOM::$textarea->get_value_by_attribute($attr_name, $attr_value, $exactly);

// Stop the application
WINDOW::$app->quit();
?>