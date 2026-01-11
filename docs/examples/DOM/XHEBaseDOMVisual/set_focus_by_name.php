<?php
// Scenario: Demonstrates how to set focus to a DOM element by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Wait for the page to load
WEB::$browser->wait(1);

// Example 1: Set focus to an input element by its name attribute
$nameValue = "username";
$focusResult = DOM::$input->set_focus_by_name($nameValue);
if ($focusResult) {
    echo "Example 1: Successfully set focus to input element with name='$nameValue'\n";
} else {
    echo "Example 1: Failed to set focus to input element with name='$nameValue'\n";
}


// Set focus to an input element by its name attribute in frame 0
$nameValue2 = "passwd";
$frameName = "0";
$focusResultFrame = DOM::$input->set_focus_by_name($nameValue2, $frameName);
if ($focusResultFrame) {
    echo "\nExample 2: Successfully set focus to input element with name='$nameValue2' in frame '$frameName '\n";
} else {
    echo "\nExample 2: Failed to set focus to input element with name='$nameValue2' in frame '$frameName '\n";
}

// Set focus to another input element by its name attribute
$nameValue3 = "passwd";
$exactlyMatch3 = false;
$focusResultNext = DOM::$input->set_focus_by_name($nameValue3, $exactlyMatch3);
if ($focusResultNext) {
    echo "\nExample 3: Successfully set focus to input element with name='$nameValue3' with exact matching disabled\n";
} else {
    echo "\nExample 3: Failed to set focus to input element with name='$nameValue3' with exact matching disabled\n";
}

// Quit the application
WINDOW::$app->quit();