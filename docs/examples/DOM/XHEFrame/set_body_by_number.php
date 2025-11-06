<?php

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a test page with frame elements
WEB::$browser->navigate("https://www.example.com");
WEB::$browser->wait_for();

// Define new HTML content for the frame
$new_frame_content = "<html><body><h1>New Frame Content</h1><p>This content was set programmatically.</p></body></html>";

// Set the body of the first frame
$result = DOM::$frame->set_body_by_number(0, $new_frame_content);

if ($result) {
    echo "Successfully set the body of the first frame\n";
    
    // Verify the content was set by getting it back
    $updated_content = DOM::$frame->get_body_by_number(0, true);
    
    if ($updated_content !== "") {
        echo "Frame content updated successfully\n";
        echo "New content length: " . strlen($updated_content) . " characters\n";
    } else {
        echo "Failed to retrieve the updated frame content\n";
    }
} else {
    echo "Failed to set the body of the first frame or frame does not exist\n";
}

// Остановить работу
WINDOW::$app->quit();