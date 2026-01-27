<?php 
// Scenario: Demonstrates how to send right click to Flash player and get mouse position relative to Flash player

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>mouse->" . basename (__FILE__) . "</font>\n";

// Navigate to test site
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to '$testSiteUrl'\n");
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo("Successfully navigated to '$testSiteUrl'\n");
} else {
    echo("Failed to navigate to '$testSiteUrl'\n");
}

// move mouse to flash player
$mouseX = 300;
$mouseY = 160;
$moveIsRelative = true;
$moveTime = 2;
$moveTremor = 5;
SYSTEM::$mouse->move($mouseX, $mouseY, $moveIsRelative, $moveTime, $moveTremor);

// Example 1
echo "1. Send click to Flash by browser coordinates (start video): ";
$clickX = 300;
$clickY = 160;
$frameNumber = 0;
$useRelativeCoordinates = false;
$clickResult = SYSTEM::$mouse->send_click_to_flash_player($clickX, $clickY, $frameNumber, $useRelativeCoordinates);
echo $clickResult."\n";sleep(10);

// Example 2
echo "2. Get coordinates relative to Flash player : ";
$getX = 300;
$getY = 160;
echo SYSTEM::$mouse->get_mouse_pos_to_flash_player($frameNumber, $getX, $getY)."\n";

// Example 3
echo "3. Send left mouse button click event by player coordinates : ";
$playerClickX = 290;
$playerClickY = 150;
$playerUseRelativeCoordinates = true;
$playerClickResult = SYSTEM::$mouse->send_click_to_flash_player($playerClickX, $playerClickY, $frameNumber, $playerUseRelativeCoordinates);
if ($playerClickResult) {
    echo "Right click sent successfully to Flash player at coordinates ($playerClickX, $playerClickY)\n";
} else {
    echo "Failed to send right click to Flash player\n";
}

// Example 4
echo "4. Get coordinates relative to Flash player for current cursor position (cursor should be in player window) : "; 
$cursorResult = SYSTEM::$mouse->get_mouse_pos_to_flash_player($frameNumber);
if ($cursorResult) {
    echo "Successfully got cursor position relative to Flash player\n";
} else {
    echo "Failed to get cursor position relative to Flash player\n";
}
echo "\n";

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>