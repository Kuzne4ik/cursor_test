<?php
// Scenario: Demonstrates sending mouse move events with different movement patterns
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
sleep(1);

// Example 1: Move to point 100,100 by line in 1000 ms
echo "1. Move to point 100,100 by line in 1000 ms: ";
$targetX1 = 100;
$targetY1 = 100;
$movementPattern1 = "line";
$moveTime1 = 1000;
$moveResult1 = SYSTEM::$mouse->send_move_to($targetX1, $targetY1, $movementPattern1, $moveTime1);
if ($moveResult1) {
    echo "Successfully moved to coordinates: x=$targetX1, y=$targetY1 using $movementPattern1 pattern in $moveTime1 ms\n";
} else {
    echo "Failed to move to coordinates: x=$targetX1, y=$targetY1 using $movementPattern1 pattern in $moveTime1 ms\n";
}

// pause
sleep(1);

// Example 2: Move to point 500,500 by curve in 1000 ms
echo "2. Move to point 500,500 by curve in 1000 ms: ";
$targetX2 = 500;
$targetY2 = 500;
$movementPattern2 = "curve";
$moveTime2 = 1000;
$moveResult2 = SYSTEM::$mouse->send_move_to($targetX2, $targetY2, $movementPattern2, $moveTime2);
if ($moveResult2) {
    echo "Successfully moved to coordinates: x=$targetX2, y=$targetY2 using $movementPattern2 pattern in $moveTime2 ms\n";
} else {
    echo "Failed to move to coordinates: x=$targetX2, y=$targetY2 using $movementPattern2 pattern in $moveTime2 ms\n";
}

// pause
sleep(1);

// Example 3: Move to point 300,300 by chaotic pattern in 1000 ms
echo "3. Move to point 300,300 by chaotic pattern in 1000 ms: ";
$targetX3 = 300;
$targetY3 = 300;
$movementPattern3 = "chaotic";
$moveTime3 = 1000;
$moveResult3 = SYSTEM::$mouse->send_move_to($targetX3, $targetY3, $movementPattern3, $moveTime3);
if ($moveResult3) {
    echo "Successfully moved to coordinates: x=$targetX3, y=$targetY3 using $movementPattern3 pattern in $moveTime3 ms\n";
} else {
    echo "Failed to move to coordinates: x=$targetX3, y=$targetY3 using $movementPattern3 pattern in $moveTime3 ms\n";
}

// pause
sleep(1);

// Example 4: Move to point 400,400 by circle pattern in 1000 ms
echo "4. Move to point 400,400 by circle pattern in 1000 ms: ";
$targetX4 = 400;
$targetY4 = 400;
$movementPattern4 = "circle";
$moveTime4 = 1000;
$moveResult4 = SYSTEM::$mouse->send_move_to($targetX4, $targetY4, $movementPattern4, $moveTime4);
if ($moveResult4) {
    echo "Successfully moved to coordinates: x=$targetX4, y=$targetY4 using $movementPattern4 pattern in $moveTime4 ms\n";
} else {
    echo "Failed to move to coordinates: x=$targetX4, y=$targetY4 using $movementPattern4 pattern in $moveTime4 ms\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>