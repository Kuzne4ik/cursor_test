<?php
// Scenario: Execute PHP scripts from within the application
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Execute non-existent script\n";
$scriptName = "dlg_question1.php";
$runResult = WINDOW::$app->run_script($scriptName);
if ($runResult) {
	echo "Script executed successfully\n";
} else {
	echo "Script not found as expected\n";
}

// Example 2
echo "\n\n2. Execute script showing dialog query\n";
$scriptName = "dlg_question.php";
$runResult = WINDOW::$app->run_script($scriptName);
if ($runResult) {
	echo "Script with dialog executed successfully\n";
} else {
	echo "Script with dialog execution failed\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>