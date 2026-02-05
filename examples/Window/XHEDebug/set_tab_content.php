<?php
// Scenario: Set content for a debug tab
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Set tab content
echo "Example 1: Set tab content\n";
$tabName = "Extended Info";
$content = "Test content for tab";
$result = WINDOW::$debug->set_tab_content($tabName, $content);
if ($result)
    echo "Tab content set successfully\n";
else
    echo "Failed to set tab content\n";

// Pause to see the content
sleep(3);

// Step: Switch to debug tab
echo "\nStep: Switch to debug tab\n";
$debugTabName = "Отладка";
WINDOW::$debug->open_tab($debugTabName);

// Quit the application
WINDOW::$app->quit();
?>