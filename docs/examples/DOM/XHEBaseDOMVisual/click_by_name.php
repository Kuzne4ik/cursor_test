<?php
// Scenario: Click on a DOM element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with inputs that have name attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Basic example - click on an input by its name
$clickResult = DOM::$input->click_by_name("passwd");
if ($clickResult) {
    echo "\nSuccessfully clicked on input with name 'passwd'";
} else {
    echo "\nFailed to click on input with name 'passwd'";
}

// Example with frame parameter - click on an input inside a frame by its name
$clickResultInFrame = DOM::$input->click_by_name("passwd", 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on input with name 'passwd' in frame 0";
} else {
    echo "\nFailed to click on input with name 'passwd' in frame 0";
}

// Quit the application
WINDOW::$app->quit();