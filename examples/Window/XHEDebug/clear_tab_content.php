<?php
// Scenario: Clear the content of a debug tab
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Set tab content before clearing
$tabName = "Extended Info";
$content = "Test content";
echo "Step: Set tab content\n";
WINDOW::$debug->set_tab_content($tabName, $content);

// Pause to see the content
sleep(2);

// Example 1: Clear tab content
echo "\n\nExample 1: Clear tab content\n";
$tabName = "Extended Info";
$result = WINDOW::$debug->clear_tab_content($tabName);
if ($result)
    echo "Tab content cleared successfully\n";
else
    echo "Failed to clear tab content\n";

// Step: Switch to debug tab
echo "\nStep: Switch to debug tab\n";
$debugTabName = "Отладка";
WINDOW::$debug->open_tab($debugTabName);

// Quit the application
WINDOW::$app->quit();
?>