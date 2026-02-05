<?php
// Scenario: Execute shell command to open a text file in notepad
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
echo "\n\n1. Open text file in notepad\n";
$operation = "open";
$filePath = "test/info.txt";
$parameters = "";
$directory = "";
$showCommand = true;
$shellExecuteResult = WINDOW::$app->shell_execute($operation, $filePath, $parameters, $directory, $showCommand);
if ($shellExecuteResult)
    echo "Shell command executed successfully\n";
else
    echo "Failed to execute shell command\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>