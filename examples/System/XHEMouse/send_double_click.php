<?php
// Scenario: Demonstrates sending double click events to select elements
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    $path = "../../../Templates/init.php";
    require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Navigate to test site
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to '$testSiteUrl'\n");
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo("Successfully navigated to '$testSiteUrl'\n");
} else {
    echo("Failed to navigate to '$testSiteUrl'\n");
}

// Example 1: Select element with text 'Links in Frame' by double clicking
echo "1. Select element with text 'Links in Frame' by double clicking: ";
$elementText = "Ссылки во Frame";
$isInsideFrame = true;
$elementX = DOM::$element->get_x_by_inner_text($elementText, $isInsideFrame);
$elementY = DOM::$element->get_y_by_inner_text($elementText, $isInsideFrame);
$clickOffset = 5;
$clickX = $elementX + $clickOffset;
$clickY = $elementY + $clickOffset;

echo "Element coordinates: x=$elementX, y=$elementY\n";

// First click to select element
$clickResult = SYSTEM::$mouse->send_click($clickX, $clickY);
if ($clickResult) {
    echo "Successfully clicked at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to click at coordinates: x=$clickX, y=$clickY\n";
}

// Double click to select text
$doubleClickResult = SYSTEM::$mouse->send_double_click($clickX, $clickY);
if ($doubleClickResult) {
    echo "Successfully double clicked at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to double click at coordinates: x=$clickX, y=$clickY\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>