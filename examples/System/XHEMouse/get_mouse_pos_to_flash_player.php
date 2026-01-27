<?php
// Scenario: Demonstrates how to get mouse position relative to Flash player and interact with it

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>mouse->" . basename (__FILE__) . "</font>\n";

// Example 1: Navigate to test page with Flash player
$pageUrl = TEST_POLYGON_URL . 'anchor.html';
echo("1. Navigate to test page with Flash player: $pageUrl\n");
$navigateResult = WEB::$browser->navigate($pageUrl);
if ($navigateResult) {
    echo("Successfully navigated to test page\n");
} else {
    echo("Failed to navigate to test page\n");
}

$sleepTime1 = 3;
echo("Pause for $sleepTime1 seconds\n");
sleep($sleepTime1);

// Example 2: Move mouse to Flash player coordinates
$moveX = 300;
$moveY = 160;
$moveIsRelative = 1;
$moveJitter = 5;
echo("2. Move mouse to Flash player coordinates: x=$moveX, y=$moveY\n");
$moveResult = SYSTEM::$mouse->move($moveX, $moveY, $moveIsRelative, $moveJitter);
if ($moveResult) {
    echo("Successfully moved mouse to coordinates\n");
} else {
    echo("Failed to move mouse to coordinates\n");
}

// Example 3: Send click to Flash player using browser coordinates
$clickX1 = 300;
$clickY1 = 160;
$frameNumber = 0;
$isPlayerCoords = false;
echo("3. Send click to Flash player using browser coordinates: x=$clickX1, y=$clickY1\n");
$clickResult1 = SYSTEM::$mouse->send_click_to_flash_player($clickX1, $clickY1, $frameNumber, $isPlayerCoords);
if ($clickResult1) {
    echo("Successfully sent click to Flash player\n");
} else {
    echo("Failed to send click to Flash player\n");
}

$sleepTime2 = 10;
echo("Pause for $sleepTime2 seconds\n");
sleep($sleepTime2);

// Example 4: Get mouse position relative to Flash player
echo("4. Get mouse position relative to Flash player using browser coordinates: x=$clickX1, y=$clickY1\n");
$positionResult1 = SYSTEM::$mouse->get_mouse_pos_to_flash_player($frameNumber, $clickX1, $clickY1);
echo("Mouse position relative to Flash player: $positionResult1\n");

// Example 5: Send click to Flash player using player coordinates
$clickX2 = 290;
$clickY2 = 150;
$isPlayerCoords2 = true;
echo("5. Send click to Flash player using player coordinates: x=$clickX2, y=$clickY2\n");
$clickResult2 = SYSTEM::$mouse->send_click_to_flash_player($clickX2, $clickY2, $frameNumber, $isPlayerCoords2);
if ($clickResult2) {
    echo("Successfully sent click to Flash player using player coordinates\n");
} else {
    echo("Failed to send click to Flash player using player coordinates\n");
}

// Example 6: Get current mouse position relative to Flash player
echo("6. Get current mouse position relative to Flash player (cursor should be in player window)\n");
$positionResult2 = SYSTEM::$mouse->get_mouse_pos_to_flash_player($frameNumber);
echo("Current mouse position relative to Flash player: $positionResult2\n\n");

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>