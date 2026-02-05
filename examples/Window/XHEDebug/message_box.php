<?php
// Scenario: Display a debug message box
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Display a debug message box
echo "Example 1: Display a debug message box\n";
$message = "You should sleep at night";
$result = WINDOW::$debug->message_box($message);
if ($result)
    echo "Message box displayed successfully\n";
else
    echo "Failed to display message box\n";

// Quit the application
WINDOW::$app->quit();
?>