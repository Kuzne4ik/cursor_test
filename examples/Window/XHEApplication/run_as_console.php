<?php
// Scenario: Run console applications with different visibility and parameters
$xhe_host = "127.0.0.1:5006";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Run in hidden state without parameters\n";
$executablePath = 'C:\Windows\System32\PING.EXE';
$showWindow = false;
$parameters = "";
$runResult = WINDOW::$app->run_as_console($executablePath, $showWindow, $parameters);
if ($runResult) {
	echo "Console executed successfully in hidden state\n";
} else {
	echo "Console execution failed in hidden state\n";
}

sleep(2);

// Example 2
echo "\n\n2. Run in visible state without parameters\n";
$showWindow = true;
$runResult = WINDOW::$app->run_as_console($executablePath, $showWindow, $parameters);
if ($runResult) {
	echo "Console executed successfully in visible state\n";
} else {
	echo "Console execution failed in visible state\n";
}

// Example 3
echo "\n\n3. Run in visible state with parameters\n";
$parameters = "ya.ru";
$runResult = WINDOW::$app->run_as_console($executablePath, $showWindow, $parameters);
if ($runResult) {
	echo "Console executed successfully with parameters\n";
} else {
	echo "Console execution failed with parameters\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>