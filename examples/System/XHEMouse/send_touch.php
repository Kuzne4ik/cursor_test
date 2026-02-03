<?php 
// Scenario: Demonstrates how to send touch events to simulate touch screen interaction

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >mouse->" . basename (__FILE__) . "</span>\n";

// Navigate to test site
$testSiteUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to '$testSiteUrl'\n");
$navigateResult = WEB::$browser->navigate($testSiteUrl);
if ($navigateResult) {
    echo("Successfully navigated to '$testSiteUrl'\n");
} else {
    echo("Failed to navigate to '$testSiteUrl'\n");
}

// 
echo "Move to point 500,500 : ";
$moveX = 500;
$moveY = 500;
$moveResult = SYSTEM::$mouse->move($moveX, $moveY);
if ($moveResult) {
    echo "Mouse moved successfully to coordinates ($moveX, $moveY)\n";
} else {
    echo "Failed to move mouse to coordinates ($moveX, $moveY)\n";
}

// Example 1. Send touch down event
$touchId = 0;
$touchDown = 1;
$touchDownX = 500;
$touchDownY = 500;
echo("1. Send touch down event: ");
$touchDownResult = SYSTEM::$mouse->send_touch($touchId, $touchDown, $touchDownX, $touchDownY);
if ($touchDownResult) {
    echo "Touch down event sent successfully at coordinates ($touchDownX, $touchDownY)\n";
} else {
    echo "Failed to send touch down event\n";
}

// Example 2. Send touch up event
$touchUp = 0;
$touchUpX = 500;
$touchUpY = 500;
echo("2. Send touch up event: ");
$touchUpResult = SYSTEM::$mouse->send_touch($touchId, $touchUp, $touchUpX, $touchUpY);
if ($touchUpResult) {
    echo "Touch up event sent successfully at coordinates ($touchUpX, $touchUpY)\n";
} else {
    echo "Failed to send touch up event\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>