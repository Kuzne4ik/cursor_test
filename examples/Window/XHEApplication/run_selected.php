<?php
// Scenario: Run Python code with different visibility and parameters
$xhe_host = "127.0.0.1:7026";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "D:/User/CSharp/Src XHE/bin/x64/Debug/net48/Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
$bUTF8Ver = true;
$PHP_Use_Trought_Shell = true;

// step
$py = "import sys\nimport time\ntime.sle ep(3)\n";
$py = $py . "print('python script is completed')\n";
$py = $py . "print('argv count='+str(len(sys.argv)))\n";

// Example 1
echo "\n\n1. Run Python in hidden state without parameters\n";
$pyFilePath = "test/1.py";
$showWindow = false;
$parameters = "";
$runResult = WINDOW::$app->run_as_python($py, $pyFilePath, $showWindow, $parameters);
echo $runResult."\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>