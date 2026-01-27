<?php
// Scenario: Demonstrates sending left mouse button down and up events to click a button
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

// Set browser zoom to 100%
$zoomLevel = 100;
$zoomResult = WEB::$browser->set_zoom($zoomLevel);
if ($zoomResult) {
    echo "Successfully set browser zoom to $zoomLevel%\n";
} else {
    echo "Failed to set browser zoom to $zoomLevel%\n";
}

// Example 2: Click on button with name 'btn1f'
echo "2. Click on button with name 'btn1f': ";
$buttonName = "btn1f";
$buttonX = DOM::$button->get_x_by_name($buttonName);
$buttonY = DOM::$button->get_y_by_name($buttonName);
$clickOffset = 1;
$clickX = $buttonX + $clickOffset;
$clickY = $buttonY + $clickOffset;

echo "Button coordinates: x=$buttonX, y=$buttonY\n";

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

// Example 3: Get current URL
echo "3. Get current URL: ";
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