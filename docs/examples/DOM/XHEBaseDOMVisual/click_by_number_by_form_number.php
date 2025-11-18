<?php
// Scenario: Click on a DOM element by its number within a specific form identified by number
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with forms
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Click on the first input in the first form
$clickResult = DOM::$input->click_by_number_by_form_number(0, 0);
echo "Click result (first input in first form): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 2: Click on the second input in the first form
$clickResult = DOM::$input->click_by_number_by_form_number(1, 0);
echo "Click result (second input in first form): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 3: Click on an input in a different form (if available)
// First, let's check if we have multiple forms on the page
$formsCount = DOM::$form->get_count();
if ($formsCount > 1) {
    // Click on the first input in the second form
    $clickResult = DOM::$input->click_by_number_by_form_number(0, 1);
    echo "Click result (first input in second form): " . ($clickResult ? "Success" : "Failed") . "\n";
} else {
    echo "Only one form found on the page\n";
}

// Example 4: Click on an input within a frame
// First, let's check if we have frames on the page
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Click on an input by number within a form in the first frame
    $clickResult = DOM::$input->click_by_number_by_form_number(0, 0, 0);
    echo "Click result in frame 0: " . ($clickResult ? "Success" : "Failed") . "\n";
} else {
    echo "No frames found on the page\n";
}

// Quit the application
WINDOW::$app->quit();