<?php
// Scenario: Demonstrates how to perform a double click on an element with specific text

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>mouse->" . basename (__FILE__) . "</font>\n";

// Example 1: Navigate to test page
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("1. Navigate to test page: $pageUrl\n");
$navigateResult = WEB::$browser->navigate($pageUrl);
if ($navigateResult) {
    echo("Successfully navigated to test page\n");
} else {
    echo("Failed to navigate to test page\n");
}

// Example 2: Get element coordinates and perform double click
$elementText = "Ссылки во Frame";
echo("2. Get coordinates of element with text: $elementText\n");
$elementX = DOM::$element->get_x_by_inner_text($elementText);
$elementY = DOM::$element->get_y_by_inner_text($elementText);
echo("Element coordinates: x = $elementX, y = $elementY\n");

$clickX = $elementX + 1;
$clickY = $elementY + 1;
echo("Click coordinates: x = $clickX, y = $clickY\n");

// First click
$clickResult = SYSTEM::$mouse->click($clickX, $clickY);
if ($clickResult) {
    echo("Successfully clicked at coordinates\n");
} else {
    echo("Failed to click at coordinates\n");
}

// Double click
$doubleClickResult = SYSTEM::$mouse->double_click($clickX, $clickY);
if ($doubleClickResult) {
    echo("Successfully double clicked at coordinates\n");
} else {
    echo("Failed to double click at coordinates\n");
}

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>