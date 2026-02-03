<?php
// Scenario: Demonstrates how to get mouse Y and X coordinates in different contexts

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Example 1: Get current mouse Y and X coordinates on screen
echo("1. Get current mouse Y and X coordinates on screen\n");
$screenX = SYSTEM::$mouse->get_x();
$screenY = SYSTEM::$mouse->get_y();
echo("Mouse coordinates on screen: x=$screenX, y=$screenY\n");

// Example 2: Get current mouse Y and X coordinates in browser
echo("2. Get current mouse Y and X coordinates in browser\n");
$browserX = SYSTEM::$mouse->get_x(true);
$browserY = SYSTEM::$mouse->get_y(true);
echo("Mouse coordinates in browser: x=$browserX, y=$browserY\n");

// Example 3: Move mouse and get real/virtual coordinates
$moveX = 10;
$moveY = 10;
echo("3. Move mouse to coordinates: x=$moveX, y=$moveY\n");
$moveResult = SYSTEM::$mouse->send_move($moveX, $moveY);
if ($moveResult) {
    echo("Successfully moved mouse to coordinates\n");
} else {
    echo("Failed to move mouse to coordinates\n");
}

echo("Get real and virtual coordinates in browser:\n");
$realX = SYSTEM::$mouse->get_x(true);
$realY = SYSTEM::$mouse->get_y(true);
$virtualX = SYSTEM::$mouse->get_x(true, true);
$virtualY = SYSTEM::$mouse->get_y(true, true);
echo("Real coordinates: x=$realX, y=$realY | Virtual coordinates: x=$virtualX, y=$virtualY\n");

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>