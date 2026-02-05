<?php
// Scenario: Run Python code with different visibility and parameters
$xhe_host = "127.0.0.1:5006";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
$py = "import sys\nimport time\ntime.sleep(3)\n";
$py = $py . "print('python script is completed')\n";
$py = $py . "print('argv count='+str(len(sys.argv)))\n";

// Example 1
echo "\n\n1. Run Python in hidden state without parameters\n";
$pyFilePath = "test/1.py";
$showWindow = false;
$parameters = "";
$runResult = WINDOW::$app->run_as_python($py, $pyFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "Python executed successfully in hidden state\n";
} else {
	echo "Python execution failed in hidden state\n";
}

sleep(2);

// Example 2
echo "\n\n2. Run Python in visible state without parameters\n";
$showWindow = true;
$runResult = WINDOW::$app->run_as_python($py, $pyFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "Python executed successfully in visible state\n";
} else {
	echo "Python execution failed in visible state\n";
}

// Example 3
echo "\n\n3. Run Python in visible state with parameters\n";
$parameters = "1 2";
$runResult = WINDOW::$app->run_as_python($py, $pyFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "Python executed successfully with parameters\n";
} else {
	echo "Python execution failed with parameters\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>