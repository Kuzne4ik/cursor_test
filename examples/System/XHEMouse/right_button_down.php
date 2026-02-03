<?php
// Scenario: Demonstrates right mouse button down and up actions to show context menu
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

// Example 2: Show context menu at coordinates with pause before release
echo "2. Show context menu at coordinates with pause before release: ";
$clickX = 100;
$clickY = 100;
$buttonDownResult = SYSTEM::$mouse->right_button_down($clickX, $clickY);
if ($buttonDownResult) {
    echo "Right button down at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to press right button at coordinates: x=$clickX, y=$clickY\n";
}

sleep(1);

$buttonUpResult = SYSTEM::$mouse->right_button_up($clickX, $clickY);
if ($buttonUpResult) {
    echo "Right button up at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to release right button at coordinates: x=$clickX, y=$clickY\n";
}

// pause
sleep(1);

// Press Esc key to close context menu
echo "Press Esc key to close context menu: ";
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