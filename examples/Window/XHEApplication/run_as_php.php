<?php
// Scenario: Run PHP code with different visibility and parameters
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
$php = "<?php \n";
$php = $php . "if(count($" . "argv)>1) echo \"arg1: $" . "argv[1]\n\";\n";
$php = $php . "if(count($" . "argv)>2)echo \"arg2: $" . "argv[2]\n\";\n";
$php = $php . "sleep(15);\n";
$php = $php . "echo('php script is completed\n\n');\n";
$php = $php . "?>\n";

// Example 1
echo "\n\n1. Run PHP in hidden state without parameters\n";
$phpFilePath = "test/1.php";
$showWindow = false;
$parameters = "";
$runResult = WINDOW::$app->run_as_php($php, $phpFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "PHP executed successfully in hidden state\n";
} else {
	echo "PHP execution failed in hidden state\n";
}

// Example 2
echo "\n\n2. Run PHP in visible state without parameters\n";
$showWindow = true;
$runResult = WINDOW::$app->run_as_php($php, $phpFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "PHP executed successfully in visible state\n";
} else {
	echo "PHP execution failed in visible state\n";
}

// Example 3
echo "\n\n3. Run PHP in visible state with parameters\n";
$parameters = "1 2";
$runResult = WINDOW::$app->run_as_php($php, $phpFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "PHP executed successfully with parameters\n";
} else {
	echo "PHP execution failed with parameters\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>