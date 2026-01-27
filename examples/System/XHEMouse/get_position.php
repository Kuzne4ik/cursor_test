<?php
// Scenario: Demonstrates how to get mouse position in different contexts

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>mouse->" . basename (__FILE__) . "</font>\n";

// Example 1: Get mouse position on screen
echo("1. Get mouse position on screen\n");
$screenPosition = SYSTEM::$mouse->get_position();
echo("Mouse position on screen: $screenPosition\n");

// Example 2: Get mouse position in browser
echo("2. Get mouse position in browser\n");
$browserPosition = SYSTEM::$mouse->get_position(true);
echo("Mouse position in browser: $browserPosition\n");

// Example 3: Move mouse and get real/virtual positions
$moveX = 10;
$moveY = 10;
echo("3. Move mouse to coordinates: x=$moveX, y=$moveY\n");
$moveResult = SYSTEM::$mouse->send_move($moveX, $moveY);
if ($moveResult) {
    echo("Successfully moved mouse to coordinates\n");
} else {
    echo("Failed to move mouse to coordinates\n");
}

echo("Get real and virtual positions in browser:\n");
$realPosition = SYSTEM::$mouse->get_position(true);
$virtualPosition = SYSTEM::$mouse->get_position(true, true);
echo("Real position: $realPosition | Virtual position: $virtualPosition\n");

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>