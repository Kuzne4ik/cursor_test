<?php
// Scenario: Demonstrates how to perform a right button click to show context menu

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

// Navigate to test site
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to '$testSiteUrl'\n");
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo("Successfully navigated to '$testSiteUrl'\n");
} else {
    echo("Failed to navigate to '$testSiteUrl'\n");
}

// Example 1: Perform right button click to show context menu
$clickX = 100;
$clickY = 100;
echo("1. Perform right button click at coordinates: x=$clickX, y=$clickY\n");
$rightClickResult = SYSTEM::$mouse->right_button_click($clickX, $clickY);
if ($rightClickResult) {
    echo("Successfully performed right button click\n");
} else {
    echo("Failed to perform right button click\n");
}

$sleepTime = 1;
echo("Pause for $sleepTime seconds\n");
sleep($sleepTime);

// Press Esc key to close context menu
$escKeyCode = 27;
echo("Press Esc key to close context menu: code=$escKeyCode\n");
$keyPressResult = SYSTEM::$keyboard->key($escKeyCode);
if ($keyPressResult) {
    echo("Successfully pressed Esc key\n");
} else {
    echo("Failed to press Esc key\n");
}

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>