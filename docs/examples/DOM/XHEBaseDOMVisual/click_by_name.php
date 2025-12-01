<?php

// Scenario: Demonstrates clicking a DOM element by name

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with form elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Click existing input by name
$clickResult = DOM::$input->click_by_name("passwd");
if ($clickResult) {
    echo "\nSuccessfully clicked on input with name 'passwd'";
} else {
    echo "\nFailed to click on input with name 'passwd'";
}

// Example 2:  Click existing input by name  with frame parameter
$clickResultInFrame = DOM::$input->click_by_name("passwd", 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on input with name 'passwd' in frame 0";
} else {
    echo "\nFailed to click on input with name 'passwd' in frame 0";
}

// Quit the application
WINDOW::$app->quit();