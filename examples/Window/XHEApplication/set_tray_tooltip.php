<?php
// Scenario: Set application tray tooltip text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Set tray tooltip text\n";
$tooltipText = "Some text in tray";
$setTooltipResult = WINDOW::$app->set_tray_tooltip($tooltipText);
if ($setTooltipResult)
    echo "Tray tooltip set successfully\n";
else
    echo "Failed to set tray tooltip\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>