<?php
// Scenario: Demonstrates how to move mouse on screen and interact with menu items

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";

// Example 1: Click at screen coordinates (Edit menu)
$clickX1 = 60;
$clickY1 = 30;
echo("1. Click at screen coordinates (Edit menu): x=$clickX1, y=$clickY1\n");
$clickResult1 = SYSTEM::$mouse->click_to_screen($clickX1, $clickY1);
if ($clickResult1) {
    echo("Successfully clicked at screen coordinates\n");
} else {
    echo("Failed to click at screen coordinates\n");
}

$sleepTime2 = 1;
echo("Pause for $sleepTime2 seconds\n");
sleep($sleepTime2);

// Press Esc key to close context menu
$escKeyCode = 27;
echo("Press `Esc` key to close context menu: code=$escKeyCode\n");
$keyPressResult2 = SYSTEM::$keyboard->key($escKeyCode);
if ($keyPressResult2) {
    echo("Successfully pressed Esc key\n");
} else {
    echo("Failed to press Esc key\n");
}

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>