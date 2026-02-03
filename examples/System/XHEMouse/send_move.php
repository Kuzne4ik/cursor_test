<?php
// Scenario: Demonstrates sending mouse move events to links and testing with JavaScript
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

// Example 1: Move mouse to 'Advert' link
echo "1. Move mouse to 'Advert' link: ";
$anchorText = "Advert";
$isInsideFrame = false;
$anchorX = DOM::$anchor->get_x_by_inner_text($anchorText, $isInsideFrame);
$anchorY = DOM::$anchor->get_y_by_inner_text($anchorText, $isInsideFrame);
$moveOffsetX = 3;
$moveOffsetY = 3;
$moveX = $anchorX + $moveOffsetX;
$moveY = $anchorY + $moveOffsetY;

echo "Anchor coordinates: x=$anchorX, y=$anchorY\n";

$moveResult = SYSTEM::$mouse->send_move($moveX, $moveY);
if ($moveResult) {
    echo "Successfully moved mouse to coordinates: x=$moveX, y=$moveY\n";
} else {
    echo "Failed to move mouse to coordinates: x=$moveX, y=$moveY\n";
}
sleep(1);

// Example 2: Move mouse to two different links
echo "2. Move mouse to two different links: ";
$firstAnchorNumber = 100;
$firstAnchorX = DOM::$anchor->get_x_by_number($firstAnchorNumber);
$firstAnchorY = DOM::$anchor->get_y_by_number($firstAnchorNumber);
$firstMoveOffset = 1;
$firstMoveX = $firstAnchorX + $firstMoveOffset;
$firstMoveY = $firstAnchorY + $firstMoveOffset;
$firstMoveIsRelative = true;
$firstMoveTime = 2;

echo "First anchor coordinates: x=$firstAnchorX, y=$firstAnchorY\n";

$firstMoveResult = SYSTEM::$mouse->send_move($firstMoveX, $firstMoveY, $firstMoveIsRelative, $firstMoveTime);
if ($firstMoveResult) {
    echo "Successfully moved mouse to first anchor at coordinates: x=$firstMoveX, y=$firstMoveY\n";
} else {
    echo "Failed to move mouse to first anchor at coordinates: x=$firstMoveX, y=$firstMoveY\n";
}
sleep(1);

$secondAnchorNumber = 120;
$secondAnchorX = DOM::$anchor->get_x_by_number($secondAnchorNumber);
$secondAnchorY = DOM::$anchor->get_y_by_number($secondAnchorNumber);
$secondMoveOffset = 1;
$secondMoveX = $secondAnchorX + $secondMoveOffset;
$secondMoveY = $secondAnchorY + $secondMoveOffset;
$secondMoveIsRelative = true;
$secondMoveTime = 2;

echo "Second anchor coordinates: x=$secondAnchorX, y=$secondAnchorY\n";

$secondMoveResult = SYSTEM::$mouse->send_move($secondMoveX, $secondMoveY, $secondMoveIsRelative, $secondMoveTime);
if ($secondMoveResult) {
    echo "Successfully moved mouse to second anchor at coordinates: x=$secondMoveX, y=$secondMoveY\n";
} else {
    echo "Failed to move mouse to second anchor at coordinates: x=$secondMoveX, y=$secondMoveY\n";
}
sleep(1);

// Example 3: Test mouse movement with JavaScript
echo "3. Test mouse movement with JavaScript: ";
$jsCode = "
var cursorX;
var cursorY;
document.onmousemove = function(e){
    cursorX = e.pageX;
    cursorY = e.pageY;
}
setTimeout(checkCursor, 1000);
function checkCursor()
{    console.log('Cursor at: ' + cursorX + ', ' + cursorY); }
";
$jsResult = WEB::$browser->run_java_script($jsCode);
if ($jsResult) {
    echo "Successfully executed JavaScript to track cursor position\n";
} else {
    echo "Failed to execute JavaScript to track cursor position\n";
}

// Move mouse to test coordinates
$testX = 100;
$testY = 100;
$testMoveResult = SYSTEM::$mouse->send_move($testX, $testY);
if ($testMoveResult) {
    echo "Successfully moved mouse to test coordinates: x=$testX, y=$testY\n";
} else {
    echo "Failed to move mouse to test coordinates: x=$testX, y=$testY\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>