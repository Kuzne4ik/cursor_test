<?php 
// Scenario: Demonstrates how to send mouse wheel events to scroll pages

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

// Example 1
echo "1. Scroll mouse wheel down at point 100,100 down 5 times: ";
$wheelDownCount = -5;
$wheelX = 100;
$wheelY = 100;
$wheelDownResult = SYSTEM::$mouse->send_wheel($wheelDownCount, $wheelX, $wheelY);
if ($wheelDownResult) {
    echo "Mouse wheel scrolled down successfully at coordinates ($wheelX, $wheelY)\n";
} else {
    echo "Failed to scroll mouse wheel down\n";
}

// pause
$sleepTime = 2;
sleep($sleepTime);

// Example 2
echo "2. Scroll mouse wheel up at point 100,100 up 5 times: ";
$wheelUpCount = 5;
$wheelUpResult = SYSTEM::$mouse->send_wheel($wheelUpCount, $wheelX, $wheelY);
if ($wheelUpResult) {
    echo "Mouse wheel scrolled up successfully at coordinates ($wheelX, $wheelY)\n";
} else {
    echo "Failed to scroll mouse wheel up\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>