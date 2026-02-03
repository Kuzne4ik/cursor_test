<?php
// Scenario: Demonstrates how to press and release the left mouse button on a button element

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Example 1: Navigate to test page with buttons
$pageUrl = TEST_POLYGON_URL . "button.html";
echo("1. Navigate to test page with buttons: $pageUrl\n");
$navigateResult = WEB::$browser->navigate($pageUrl);
if ($navigateResult) {
    echo("Successfully navigated to test page\n");
} else {
    echo("Failed to navigate to test page\n");
}

// Example 2: Get button coordinates and perform left button down/up
$buttonName = "btn1f";
echo("2. Get coordinates of button with name: $buttonName\n");
$buttonX = DOM::$button->get_x_by_name($buttonName);
$buttonY = DOM::$button->get_y_by_name($buttonName);
echo("Button coordinates: x = $buttonX, y = $buttonY\n");

$clickX = $buttonX + 1;
$clickY = $buttonY + 1;
echo("Click coordinates: x = $clickX, y = $clickY\n");

// Left button down
echo("Press left mouse button at coordinates\n");
$leftButtonDownResult = SYSTEM::$mouse->left_button_down($clickX, $clickY);
if ($leftButtonDownResult) {
    echo("Successfully pressed left mouse button\n");
} else {
    echo("Failed to press left mouse button\n");
}

// Left button up
echo("Release left mouse button at coordinates\n");
$leftButtonUpResult = SYSTEM::$mouse->left_button_up($clickX, $clickY);
if ($leftButtonUpResult) {
    echo("Successfully released left mouse button\n");
} else {
    echo("Failed to release left mouse button\n");
}

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>