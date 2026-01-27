<?php
// Scenario: Demonstrates how to click on a specific anchor element by its number

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

// Example 2: Get coordinates and click on the 9th anchor
$anchorNumber = 9;
$anchorX = DOM::$anchor->get_x_by_number($anchorNumber);
$anchorY = DOM::$anchor->get_y_by_number($anchorNumber);
echo("2. Get coordinates of anchor number $anchorNumber: x = $anchorX, y = $anchorY\n");

$clickX = $anchorX + 1;
$clickY = $anchorY + 1;
echo("Click at coordinates: x = $clickX, y = $clickY\n");
$clickResult = SYSTEM::$mouse->click($clickX, $clickY);
if ($clickResult) {
    echo("Successfully clicked at coordinates\n");
} else {
    echo("Failed to click at coordinates\n");
}
WEB::$browser->wait_for();

// Example 3: Get current URL
echo("3. Get current URL: ");
$currentUrl = WEB::$webpage->get_location_url();
echo("$currentUrl\n");

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>