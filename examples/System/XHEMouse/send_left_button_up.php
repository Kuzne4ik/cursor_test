<?php
// Scenario: Demonstrates sending left mouse button up event after moving mouse to button
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    $path = "../../../../../Templates/init.php";
    require($path);
}
// info
echo "\n<font color=blue>mouse->" . basename (__FILE__) . "</font>\n";

// Navigate to test site
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to '$testSiteUrl'\n");
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo("Successfully navigated to '$testSiteUrl'\n");
} else {
    echo("Failed to navigate to '$testSiteUrl'\n");
}

// Example 1: Click on button with name 'btn1f' after moving mouse to it
echo "1. Click on button with name 'btn1f' after moving mouse to it: ";
$buttonName = "btn1f";
$buttonX = DOM::$button->get_x_by_name($buttonName);
$buttonY = DOM::$button->get_y_by_name($buttonName);
$clickOffset = 5;
$clickX = $buttonX + $clickOffset;
$clickY = $buttonY + $clickOffset;

echo "Button coordinates: x=$buttonX, y=$buttonY\n";

// Move mouse to button coordinates
$moveResult = SYSTEM::$mouse->move($clickX, $clickY);
if ($moveResult) {
    echo "Successfully moved mouse to coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to move mouse to coordinates: x=$clickX, y=$clickY\n";
}

// Send left button down event
$buttonDownResult = SYSTEM::$mouse->send_left_button_down($clickX, $clickY);
if ($buttonDownResult) {
    echo "Successfully sent left button down at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to send left button down at coordinates: x=$clickX, y=$clickY\n";
}

sleep(1);

// Send left button up event
$buttonUpResult = SYSTEM::$mouse->send_left_button_up($clickX, $clickY);
if ($buttonUpResult) {
    echo "Successfully sent left button up at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to send left button up at coordinates: x=$clickX, y=$clickY\n";
}

// Get current URL
echo "Get current URL: ";
$currentUrl = WEB::$webpage->get_location_url();
if ($currentUrl) {
    echo "Current URL: $currentUrl\n";
} else {
    echo "Failed to get current URL\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>