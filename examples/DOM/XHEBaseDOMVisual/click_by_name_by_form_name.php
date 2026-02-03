<?php
// Scenario: Demonstrates how to click on a DOM element by its name within a specific form identified by name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Click on an input by name within a specific form identified by name
$clickResult = DOM::$input->click_by_name_by_form_name("passwd", "Form1");
if ($clickResult) {
    echo "Successfully clicked on input with name 'passwd' within form 'Form1'\n";
} else {
    echo "Failed to click on input with name 'passwd' within form 'Form1'\n";
}

// Click on an input by name within a specific form identified by name in frame 0
$clickResultFrame = DOM::$input->click_by_name_by_form_name("passwd", "Form1", 0);
if ($clickResultFrame) {
    echo "\nSuccessfully clicked on input with name 'passwd' within form 'Form1' in frame 0\n";
} else {
    echo "\nFailed to click on input with name ' passwd' within form 'Form1' in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();