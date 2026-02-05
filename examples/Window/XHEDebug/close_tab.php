<?php
// Scenario: Close a debug tab
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Set tab content before closing
$tabName = "Extended Info";
$content = "Test content to be closed";
echo "Step: Set tab content\n";
WINDOW::$debug->set_tab_content($tabName, $content);

// Pause to see the content
sleep(2);

// Example 1: Close tab
echo "\n\nExample 1: Close tab\n";
$tabName = "Extended Info";
$result = WINDOW::$debug->close_tab($tabName);
if ($result)
    echo "Tab closed successfully\n";
else
    echo "Failed to close tab\n";

// Step: Switch to debug tab
echo "\nStep: Switch to debug tab\n";
$debugTabName = "Отладка";
WINDOW::$debug->open_tab($debugTabName);

// Quit the application
WINDOW::$app->quit();
?>