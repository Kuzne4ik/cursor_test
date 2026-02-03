<?php
// Scenario: Demonstrates how to move mouse to coordinates using different movement patterns

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >keyboard->" . basename (__FILE__) . "</span>\n";

// Example 1: Navigate to test site
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
echo("1. Navigate to test site: $testSiteUrl\n");
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo("Successfully navigated to test site\n");
} else {
    echo("Failed to navigate to test site\n");
}

$sleepTime1 = 1;
echo("Pause for $sleepTime1 seconds\n");
sleep($sleepTime1);

// Example 2: Move mouse to coordinates using line pattern
$moveX1 = 100;
$moveY1 = 100;
$pattern1 = "line";
$moveTime1 = 10;
echo("2. Move mouse to coordinates: x=$moveX1, y=$moveY1, pattern=$pattern1, time=$moveTime1 ms\n");
$moveResult1 = SYSTEM::$mouse->move_to($moveX1, $moveY1, $pattern1, $moveTime1);
if ($moveResult1) {
    echo("Successfully moved mouse using line pattern\n");
} else {
    echo("Failed to move mouse using line pattern\n");
}

$sleepTime2 = 1;
echo("Pause for $sleepTime2 seconds\n");
sleep($sleepTime2);

// Example 3: Move mouse to coordinates using curve pattern
$moveX2 = 500;
$moveY2 = 500;
$pattern2 = "curve";
$moveTime2 = 10;
echo("3. Move mouse to coordinates: x=$moveX2, y=$moveY2, pattern=$pattern2, time=$moveTime2 ms\n");
$moveResult2 = SYSTEM::$mouse->move_to($moveX2, $moveY2, $pattern2, $moveTime2);
if ($moveResult2) {
    echo("Successfully moved mouse using curve pattern\n");
} else {
    echo("Failed to move mouse using curve pattern\n");
}

$sleepTime3 = 1;
echo("Pause for $sleepTime3 seconds\n");
sleep($sleepTime3);

// Example 4: Move mouse to coordinates using chaotic pattern
$moveX3 = 300;
$moveY3 = 300;
$pattern3 = "chaotic";
$moveTime3 = 10;
echo("4. Move mouse to coordinates: x=$moveX3, y=$moveY3, pattern=$pattern3, time=$moveTime3 ms\n");
$moveResult3 = SYSTEM::$mouse->move_to($moveX3, $moveY3, $pattern3, $moveTime3);
if ($moveResult3) {
    echo("Successfully moved mouse using chaotic pattern\n");
} else {
    echo("Failed to move mouse using chaotic pattern\n");
}

$sleepTime4 = 1;
echo("Pause for $sleepTime4 seconds\n");
sleep($sleepTime4);

// Example 5: Move mouse to coordinates using circle pattern
$moveX4 = 400;
$moveY4 = 400;
$pattern4 = "circle";
$moveTime4 = 10;
echo("5. Move mouse to coordinates: x=$moveX4, y=$moveY4, pattern=$pattern4, time=$moveTime4 ms\n");
$moveResult4 = SYSTEM::$mouse->move_to($moveX4, $moveY4, $pattern4, $moveTime4);
if ($moveResult4) {
    echo("Successfully moved mouse using circle pattern\n");
} else {
    echo("Failed to move mouse using circle pattern\n");
}

// end
echo("\n");

// Quit
WINDOW::$app->quit();
?>