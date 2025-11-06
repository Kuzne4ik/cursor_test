<?php

// Scenario: Send input to a DOM element
// Description: For current page, find an input element and send text input to it
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Send input to an input element

// Navigate to Yandex
echo WEB::$browser->navigate("http://ya.ru");
sleep(1);

// Get DOM element <input> by number 0
$inputElement = DOM::$input->get_by_number(0);

// Check that DOM element was found
if ($inputElement->inner_number != -1) {
    // Send input text to the element
    echo $inputElement->send_input("Web test abc абвгдеё [COLOR=\"red\"] Message [/COLOR]");
}

// Stop the application
WINDOW::$app->quit();
?>