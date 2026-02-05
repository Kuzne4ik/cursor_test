<?php
// Scenario: Execute PowerShell scripts with and without parameters
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
echo "\n\n1. Execute non-existent script\n";
$scriptPath = "any.ps";
$runResult = WINDOW::$app->run_powershell_script($scriptPath);
if ($runResult) {
	echo "PowerShell script executed successfully\n";
} else {
	echo "PowerShell script execution failed as expected (non-existent script)\n";
}

// Example 2
echo "\n\n2. Execute existing script\n";
$scriptPath = "test/powershell_script.ps";
$runResult = WINDOW::$app->run_powershell_script($scriptPath);
if ($runResult) {
	echo "PowerShell script executed successfully\n";
} else {
	echo "PowerShell script execution failed\n";
}

// Example 3
echo "\n\n3. Execute script with parameters\n";
$scriptPath = "test/params.ps1";
$parameters = array("parameter1", "parameter2");
$runResult = WINDOW::$app->run_powershell_script($scriptPath, $parameters);
if ($runResult) {
	echo "PowerShell script with parameters executed successfully\n";
} else {
	echo "PowerShell script with parameters execution failed\n";
}
sleep(1);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>