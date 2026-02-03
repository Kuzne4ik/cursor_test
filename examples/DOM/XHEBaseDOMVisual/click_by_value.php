<?php
// Scenario: Click on a DOM element by its value attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with inputs that have value attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");
WEB::$browser->wait_for();

// Set all value 'test' for all inputs
DOM::$input->get_all()->set_value('test');

// Set all value 'test' for all inputs inside a frame 0
DOM::$input->get_all(0)->set_value('test');

// Basic example - click on an input by its value
$clickResult = DOM::$input->click_by_value("test", true);
if ($clickResult) {
    echo "\nSuccessfully clicked on input with value 'test'";
} else {
    echo "\nFailed to click on input with value 'test'";
}

// Example with frame parameter - click on an input inside a frame by its value
$clickResultInFrame = DOM::$input->click_by_value("test", true, 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on input with value 'test' in frame 0";
} else {
    echo "\nFailed to click on input with value 'test' in frame 0";
}

// Quit the application
WINDOW::$app->quit();