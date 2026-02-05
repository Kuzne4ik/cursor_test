<?php
// Scenario: Set colors for the extended debug pane
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Show extended debug pane
echo "Step: Show extended debug pane\n";
$result1 = WINDOW::$debug->show_extended_debug_pane();
if ($result1)
    echo "Extended debug pane opened successfully\n";
else
    echo "Failed to open extended debug pane\n";

// Example 1: Set extended debug pane colors
echo "\n\nExample 1: Set extended debug pane colors\n";
$backgroundColor = "#FF0000";
$textColor = "#00FFFF";
$result2 = WINDOW::$debug->set_extended_debug_pane_colors($backgroundColor, $textColor);
if ($result2)
    echo "Colors set successfully: Background=$backgroundColor, Text=$textColor\n";
else
    echo "Failed to set colors\n";

// Step: Add output to debug pane
echo "\nStep: Add output to debug pane\n";
echo "More output to debug pane - 1\n<font color=orange>More output to debug pane-2</font>\n";

// Quit the application
WINDOW::$app->quit();
?>