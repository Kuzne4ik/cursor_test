<?php
// Scenario: Demonstrates sending click events to Flash player
$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
    $path = "../../../Templates/init.php";
    require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Example 1: Navigate to test polygon page with Flash embed
echo "1. Navigate to test polygon page with Flash embed: ";
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo "Successfully navigated to test page with Flash embed\n";
} else {
    echo "Failed to navigate to test page with Flash embed\n";
}
sleep(3);

// Move mouse to Flash player
echo "Move mouse to Flash player: ";
$flashX = 300;
$flashY = 160;
$moveIsRelative = true;
$moveTime = 2;
$moveResult = SYSTEM::$mouse->move($flashX, $flashY, $moveIsRelative, $moveTime);
if ($moveResult) {
    echo "Successfully moved mouse to Flash player at coordinates: x=$flashX, y=$flashY\n";
} else {
    echo "Failed to move mouse to Flash player at coordinates: x=$flashX, y=$flashY\n";
}

// Example 2: Send click to Flash player using browser coordinates (start video)
echo "2. Send click to Flash player using browser coordinates (start video): ";
$clickX = 300;
$clickY = 160;
$frameNumber = 0;
$isPlayerCoordinates = false;
$clickResult = SYSTEM::$mouse->send_click_to_flash_player($clickX, $clickY, $frameNumber, $isPlayerCoordinates);
if ($clickResult) {
    echo "Successfully sent click to Flash player at coordinates: x=$clickX, y=$clickY\n";
} else {
    echo "Failed to send click to Flash player at coordinates: x=$clickX, y=$clickY\n";
}
sleep(10);

// Example 3: Get coordinates relative to Flash player
echo "3. Get coordinates relative to Flash player: ";
$coordX = 300;
$coordY = 160;
$relativeCoords = SYSTEM::$mouse->get_mouse_pos_to_flash_player($frameNumber, $coordX, $coordY);
if ($relativeCoords !== false) {
    echo "Coordinates relative to Flash player: $relativeCoords\n";
} else {
    echo "Failed to get coordinates relative to Flash player\n";
}

// Example 4: Send left mouse button click event using player coordinates
echo "4. Send left mouse button click event using player coordinates: ";
$playerX = 290;
$playerY = 150;
$frameNumber = 0;
$isPlayerCoordinates = true;
$playerClickResult = SYSTEM::$mouse->send_click_to_flash_player($playerX, $playerY, $frameNumber, $isPlayerCoordinates);
if ($playerClickResult) {
    echo "Successfully sent click to Flash player at player coordinates: x=$playerX, y=$playerY\n";
} else {
    echo "Failed to send click to Flash player at player coordinates: x=$playerX, y=$playerY\n";
}

// Example 5: Get coordinates relative to Flash player for current cursor position
echo "5. Get coordinates relative to Flash player for current cursor position (cursor should be in player window): ";
$frameNumber = 0;
$currentRelativeCoords = SYSTEM::$mouse->get_mouse_pos_to_flash_player($frameNumber);
if ($currentRelativeCoords !== false) {
    echo "Current cursor position relative to Flash player: $currentRelativeCoords\n\n";
} else {
    echo "Failed to get current cursor position relative to Flash player\n\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>