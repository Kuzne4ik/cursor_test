<?php
// Scenario: Show the extended debug pane and set its position
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Show extended debug pane
echo "Example 1: Show extended debug pane\n";
$result1 = WINDOW::$debug->show_extended_debug_pane();
if ($result1)
    echo "Extended debug pane opened successfully\n";
else
    echo "Failed to open extended debug pane\n";

// Example 2: Set extended debug pane position
echo "\nExample 2: Set extended debug pane position\n";
$x = 800;
$y = 500;
$width = 300;
$height = 200;
$result2 = WINDOW::$debug->set_extended_debug_pane_pos($x, $y, $width, $height);
if ($result2)
    echo "Position set successfully: X=$x, Y=$y, Width=$width, Height=$height\n";
else
    echo "Failed to set position\n";

// Step: Add output to debug pane
echo "\nStep: Add output to debug pane\n";
echo "More output to debug pane - 1\n<font color=green>More output to debug pane-2</font>\n";

// Quit the application
WINDOW::$app->quit();
?>