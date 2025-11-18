<?php
// Scenario: Click on a DOM element by its number within a specific form identified by name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Click on the first input in a form by name
$clickResult = DOM::$input->click_by_number_by_form_name(0, "Form1");
echo "Click result (first input in Form1): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 2: Click on the second input in a form by name
$clickResult = DOM::$input->click_by_number_by_form_name(1, "Form1");
echo "Click result (second input in Form1): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 3: Click on an input within a frame
// First, let's check if we have frames on the page
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Click on an input by number within a form by name in the first frame
    $clickResult = DOM::$input->click_by_number_by_form_name(0, "Form1", 0);
    echo "Click result in frame 0: " . ($clickResult ? "Success" : "Failed") . "\n";
} else {
    echo "No frames found on the page\n";
}

// Quit the application
WINDOW::$app->quit();