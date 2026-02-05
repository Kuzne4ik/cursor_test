<?php
// Scenario: Set application window title
$xhe_host = "127.0.0.1:5006";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Change application window title\n";
$newTitle = "New window title";
$setTitleResult = WINDOW::$app->set_title($newTitle);
if ($setTitleResult)
    echo "Window title changed successfully\n";
else
    echo "Failed to change window title\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>