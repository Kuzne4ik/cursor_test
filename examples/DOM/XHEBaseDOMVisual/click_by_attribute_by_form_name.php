<?php
// Scenario: Demonstrates how to click on a DOM element by its attribute within a specific form identified by name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Click on an button by attribute within a specific form identified by name
$clickResult = DOM::$button->click_by_attribute_by_form_name("type", "submit", false, "Form1");
if ($clickResult) {
    echo "Successfully clicked on button with attribute 'id=submit_btn' within form 'Form1'\n";
} else {
    echo "Failed to click on button with attribute 'id=submit_btn' within form 'Form1'\n";
}

// Click on an button by attribute within a specific form identified by name in frame 0
$clickResultFrame = DOM::$button->click_by_attribute_by_form_name("type", "submit", false, "Form1", 0);
if ($clickResultFrame) {
    echo "\nSuccessfully clicked on button with attribute 'id=submit_btn' within form 'Form1' in frame 0\n";
} else {
    echo "\nFailed to click on button with attribute 'id=submit_btn' within form 'Form1' in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();