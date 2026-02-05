<?php
// Scenario: Execute batch commands and save results to file
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
echo "\n\n1. Execute directory listing with result saved to info.txt file\n";
$batCommands = "Timeout /T 1\ndir c:\\ > info.txt\nTimeout /T 10";
$batFilePath = "test/run.bat";
$showWindow = true;
$runResult = WINDOW::$app->run_as_bat($batCommands, $batFilePath, $showWindow);
if ($runResult) {
	echo "Batch executed successfully\n";
} else {
	echo "Batch execution failed\n";
}

// Show the result
//echo "\n\n2. Show the result\n";
//$filePath = "test/info.txt";
//$operation = "open";
//WINDOW::$app->shell_execute($operation, $filePath, "", "", true);


// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>