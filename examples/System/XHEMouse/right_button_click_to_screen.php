<?php
// Scenario: Demonstrates how to perform a right button click at screen coordinates to show context menu

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Perform right button click at screen coordinates to show context menu
$clickX = 65;
$clickY = 238;
echo("1. Perform right button click at screen coordinates: x=$clickX, y=$clickY\n");
$rightClickResult = SYSTEM::$mouse->right_button_click_to_screen($clickX, $clickY);
if ($rightClickResult) {
    echo("Successfully performed right button click to show context menu\n");
} else {
    echo("Failed to perform right button click to show context menu\n");
}

$sleepTime = 1;
echo("Pause for $sleepTime seconds\n");
sleep($sleepTime);

// Example 2: Press Esc key to close context menu
$escKeyCode = 27;
echo("2. Press Esc key to close context menu: code=$escKeyCode\n");
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