<?php
// Scenario: Demonstrates sending right mouse button click to show context menu
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

// Example 1: Show context menu
echo "1. Show context menu: ";
$clickX = 100;
$clickY = 100;
$rightClickResult = SYSTEM::$mouse->send_right_button_click($clickX, $clickY);
if ($rightClickResult) {
    echo "Successfully showed context menu at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to show context menu at coordinates: x=$clickX, y=$clickY\n";
}

// pause
sleep(1);

// Example 2: Press Esc key to close context menu
echo "2. Press Esc key to close context menu: ";
$escKeyCode = 27;
$keyPressResult = SYSTEM::$keyboard->key($escKeyCode);
if ($keyPressResult) {
    echo "Successfully pressed Esc key\n";
} else {
    echo "Failed to press Esc key\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>