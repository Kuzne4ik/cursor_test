<?php
// Scenario: Demonstrates sending click events to specific coordinates
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
// Example 1: Click on 'Quick Start' element
echo "1. Click on 'Quick Start' element: ";
$anchorText = "Быстрый старт";
$isInsideFrame = true;
$anchorX = DOM::$anchor->get_x_by_inner_text($anchorText, $isInsideFrame);
$anchorY = DOM::$anchor->get_y_by_inner_text($anchorText, $isInsideFrame);
$clickOffsetX = 5;
$clickOffsetY = 5;
$clickX = $anchorX + $clickOffsetX;
$clickY = $anchorY + $clickOffsetY;

// Focus on anchor element
$targetAnchor = DOM::$anchor->get_by_inner_text($anchorText, $isInsideFrame);
if ($targetAnchor->is_exist()) {
    $targetAnchor->focus();
    echo "Focused on anchor element with text: '$anchorText'\n";
} else {
    echo "Failed to focus on anchor element with text: '$anchorText'\n";
}

$clickResult = SYSTEM::$mouse->send_click($clickX, $clickY);
if ($clickResult) {
    echo "Successfully clicked at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to click at coordinates: x=$clickX, y=$clickY\n";
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