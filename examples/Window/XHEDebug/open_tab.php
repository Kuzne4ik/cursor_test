<?php
// Scenario: Open multiple debug tabs
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Open multiple tabs
$tabCount = 10;
echo "Step: Open $tabCount tabs\n";
for ($k = 0; $k < $tabCount; $k++) {
    $tabName = "Extended Info $k";
    WINDOW::$debug->open_tab($tabName);
    WINDOW::$debug->set_tab_content($tabName, "Test content $k");
}

// Example 1: Switch to debug tab
echo "\n\nExample 1: Switch to debug tab\n";
$debugTabName = "Отладка";
$result = WINDOW::$debug->open_tab($debugTabName);
if ($result)
    echo "Switched to debug tab successfully\n";
else
    echo "Failed to switch to debug tab\n";

// Pause to see the tabs
sleep(2);

// Example 2: Close all tabs
echo "\nExample 2: Close all tabs\n";
$result = WINDOW::$debug->close_tabs();
if ($result)
    echo "All tabs closed successfully\n";
else
    echo "Failed to close all tabs\n";

sleep(2);

// Quit the application
WINDOW::$app->quit();
?>