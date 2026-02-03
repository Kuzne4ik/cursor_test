<?php
// Scenario: Demonstrates how to move mouse to different elements with various parameters

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Navigate to test page with buttons
$pageUrl = TEST_POLYGON_URL . "button.html";
echo("Navigate to test page with buttons: $pageUrl\n");
$navigateResult = WEB::$browser->navigate($pageUrl);
if ($navigateResult) {
    echo("Successfully navigated to test page\n");
} else {
    echo("Failed to navigate to test page\n");
}

$zoomLevel = 200;
echo("Set browser zoom to $zoomLevel%\n");
$zoomResult = WEB::$browser->set_zoom($zoomLevel);
if ($zoomResult) {
    echo("Successfully set browser zoom\n");
} else {
    echo("Failed to set browser zoom\n");
}

// Example 1: Move mouse to button with specific parameters
$buttonName = "btn1f";
echo("1. Get coordinates of button with name: $buttonName\n");
$buttonX = DOM::$button->get_x_by_name($buttonName);
$buttonY = DOM::$button->get_y_by_name($buttonName);
echo("Button coordinates: x = $buttonX, y = $buttonY\n");

$moveX1 = $buttonX + 1;
$moveY1 = $buttonY + 1;
$isRelative1 = false;
$moveTime1 = 2;
$jitter1 = 5;
echo("Move mouse to button coordinates: x=$moveX1, y=$moveY1, time=$moveTime1 sec, jitter=$jitter1 px\n");
$moveResult1 = SYSTEM::$mouse->move($moveX1, $moveY1, $isRelative1, $moveTime1, $jitter1);
if ($moveResult1) {
    echo("Successfully moved mouse to button\n");
} else {
    echo("Failed to move mouse to button\n");
}

// Example 2: Click at current position
echo("2. Click at current mouse position\n");
$clickResult = SYSTEM::$mouse->click();
if ($clickResult) {
    echo("Successfully clicked at current position\n");
} else {
    echo("Failed to click at current position\n");
}

// Example 3: Navigate to test site
$testSiteUrl = TEST_SITE_URL;
echo("3. Navigate to test site: $testSiteUrl\n");
$navigateResult2 = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult2) {
    echo("Successfully navigated to test site\n");
} else {
    echo("Failed to navigate to test site\n");
}

// Example 4: Move mouse to two different anchor elements
$anchorNumber1 = 110;
echo("4. Get coordinates of anchor number $anchorNumber1\n");
$anchorX1 = DOM::$anchor->get_x_by_number($anchorNumber1);
$anchorY1 = DOM::$anchor->get_y_by_number($anchorNumber1);
echo("Anchor coordinates: x = $anchorX1, y = $anchorY1\n");

$moveX2 = $anchorX1 + 1;
$moveY2 = $anchorY1 + 1;
$isRelative2 = true;
$moveTime2 = 2;
$jitter2 = 5;
echo("Move mouse to anchor coordinates: x=$moveX2, y=$moveY2, time=$moveTime2 sec, jitter=$jitter2 px\n");
$moveResult2 = SYSTEM::$mouse->move($moveX2, $moveY2, $isRelative2, $moveTime2, $jitter2);
if ($moveResult2) {
    echo("Successfully moved mouse to first anchor\n");
} else {
    echo("Failed to move mouse to first anchor\n");
}

$anchorNumber2 = 100;
echo("Get coordinates of anchor number $anchorNumber2\n");
$anchorX2 = DOM::$anchor->get_x_by_number($anchorNumber2);
$anchorY2 = DOM::$anchor->get_y_by_number($anchorNumber2);
echo("Anchor coordinates: x = $anchorX2, y = $anchorY2\n");

$moveX3 = $anchorX2 + 1;
$moveY3 = $anchorY2 + 1;
echo("Move mouse to anchor coordinates: x=$moveX3, y=$moveY3, time=$moveTime2 sec, jitter=$jitter2 px\n");
$moveResult3 = SYSTEM::$mouse->move($moveX3, $moveY3, $isRelative2, $moveTime2, $jitter2);
if ($moveResult3) {
    echo("Successfully moved mouse to second anchor\n");
} else {
    echo("Failed to move mouse to second anchor\n");
}

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>