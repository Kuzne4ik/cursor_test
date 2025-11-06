<?php

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a test page with frame elements
WEB::$browser->navigate("https://www.example.com");
WEB::$browser->wait_for();

// Get the body of the first frame as HTML
$body_html = DOM::$frame->get_body_by_number(0, true);

if ($body_html !== "") {
    echo "Successfully got the body of the first frame as HTML\n";
    echo "Frame body length: " . strlen($body_html) . " characters\n";
} else {
    echo "Failed to get the body of the first frame or frame does not exist\n";
}

// Get the body of the first frame as plain text
$body_text = DOM::$frame->get_body_by_number(0, false);

if ($body_text !== "") {
    echo "\nSuccessfully got the body of the first frame as plain text\n";
    echo "Frame body length: " . strlen($body_text) . " characters\n";
} else {
    echo "\nFailed to get the body of the first frame as plain text or frame does not exist\n";
}

// Остановить работу
WINDOW::$app->quit();