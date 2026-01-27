<?php 
// Scenario: Demonstrates how to send touch events to specific coordinates with different movement patterns

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

// pause
$sleepTime = 2;
sleep($sleepTime);

// Example 1: Touch to point
echo "1. Touch to point 100,100 by line for 1000 ms: ";
$touchId = 0;
$touchFromX = 100;
$touchFromY = 400;
$touchToX = 100;
$touchToY = 100;
$touchPattern = "line";
$touchTime = 1000;
$touchResult = SYSTEM::$mouse->send_touch_to($touchFromX, $touchFromY, $touchToX, $touchToY, $touchPattern, $touchTime);
if ($touchResult) {
    echo "Touch event sent successfully from ($touchFromX, $touchFromY) to ($touchToX, $touchToY) using $touchPattern pattern\n";
} else {
    echo "Failed to send touch event\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>