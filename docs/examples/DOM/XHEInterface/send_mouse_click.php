<?php

// Scenario: Send mouse click event to a DOM element
// Description: For current page, find DOM elements and send mouse click events to them
// Classes used: XHEAnchor, XHEOption, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Send mouse click event to DOM elements

// Navigate to Google
echo WEB::$browser->navigate("http://www.google.ru");

// Click on a link
$targetAnchor = DOM::$anchor->get_by_number(2);
if ($targetAnchor->inner_number != -1) {
    echo "\n2. Click on the link: ";
    echo $targetAnchor->send_mouse_click(2, 2);
    sleep(1);
}

// Navigate to test site
echo "\n3. Navigate to test site: ";
echo WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Click on option 'Germany'
$targetOption = DOM::$option->get_by_inner_text("Germany");
if ($targetOption->inner_number != -1) {
    echo "\n4. Click on the option 'Germany': ";
    echo $targetOption->send_mouse_click(2, 2);
    sleep(1);
}

// Click on option 'Russia' with Ctrl key
$targetOption = DOM::$option->get_by_inner_text("Russia");
if ($targetOption->inner_number != -1) {
    echo "\n5. Click on the option 'Russia' with Ctrl key: ";
    echo $targetOption->send_mouse_click(2, 2, true);
    sleep(1);
}

// Stop the application
WINDOW::$app->quit();
?>