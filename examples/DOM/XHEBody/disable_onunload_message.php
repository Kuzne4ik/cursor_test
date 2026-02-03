<?php
// Scenario: Disable the confirmation message that appears when trying to leave a webpage
// Description: Demonstrates how to disable the onunload event message that typically asks users if they really want to leave a page
// Classes used: DOM, XHEBody, XHEBrowser, XHEApplication
// XHE host
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
      $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Пример использования функции disable_onunload_message
// Запретить сообщение, подтверждающее желание покинуть текущую страницу

// Navigate to a webpage
WEB::$browser->navigate("https://www.example.com");
WEB::$browser->wait_js();

// Example 1: Disable onunload message for the main page
$result = DOM::$body->disable_onunload_message();

// Display the result
if ($result) {
    echo "Successfully disabled onunload message for the main page\n";
} else {
    echo "Failed to disable onunload message for the main page\n";
}

// Example with frame parameter (if needed)
$frame_number = "0";
$result_frame = DOM::$body->disable_onunload_message($frame_number);

if ($result_frame) {
    echo "Successfully disabled onunload message in frame {$frame_number}\n";
} else {
    echo "Failed to disable onunload message in frame {$frame_number}\n";
}

// Quit the application
WINDOW::$app->quit();
?>