<?php
// Scenario: Demonstrates how to click at specific screen coordinates

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Example 1: Click at screen coordinates (Edit menu)
$clickX1 = 65;
$clickY1 = 38;
echo("1. Click at screen coordinates (Edit menu): x=$clickX1, y=$clickY1\n");
$clickResult1 = SYSTEM::$mouse->click_to_screen($clickX1, $clickY1);
if ($clickResult1) {
    echo("Successfully clicked at screen coordinates\n");
} else {
    echo("Failed to click at screen coordinates\n");
}

// Pause
$sleepTime1 = 3;
echo("Pause for $sleepTime1 seconds\n");
sleep($sleepTime1);

// Example 2: Click at another screen coordinate
$clickX2 = 65;
$clickY2 = 230;
echo("2. Click at screen coordinates: x=$clickX2, y=$clickY2\n");
$clickResult2 = SYSTEM::$mouse->click_to_screen($clickX2, $clickY2);
if ($clickResult2) {
    echo("Successfully clicked at screen coordinates\n");
} else {
    echo("Failed to click at screen coordinates\n");
}

// Pause
$sleepTime2 = 4;
echo("Pause for $sleepTime2 seconds\n");
sleep($sleepTime2);

// Example 3: Press Esc key
$escKeyCode = 27;
echo("3. Press Esc key: code=$escKeyCode\n");
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