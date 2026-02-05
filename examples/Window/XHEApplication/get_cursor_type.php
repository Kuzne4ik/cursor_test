<?php
// Scenario: Get cursor type information
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Get cursor type\n";
$cursorType1 = WINDOW::$app->get_cursor_type();
echo $cursorType1."\n";

// Example 2
echo "\n\n2. Get cursor type at specified point (relative to browser)\n";
$xOffset = -3;
$yOffset = 0;
$cursorType2 = WINDOW::$app->get_cursor_type($xOffset, $yOffset);
echo $cursorType2."\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>