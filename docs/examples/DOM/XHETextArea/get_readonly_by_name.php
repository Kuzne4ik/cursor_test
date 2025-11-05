<?php
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
    // Get readonly status
    $readonly_status = DOM::$textarea->get_readonly_by_name($textarea_name);
    
    // Display the result
    echo "\nTextarea readonly status by name: " . ($readonly_status ? "true" : "false");
}
else
{
    echo "\nTextarea not found by name\n";
}

// Stop the application
WINDOW::$app->quit();
?>