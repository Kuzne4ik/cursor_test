<?php
// Scenario: Run JavaScript code with different visibility and parameters
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
$js = "";
$js = $js . "console.log('js script is completed');\n";
$js = $js . "console.log('argv count=' + process.argv.length);\n";

// Example 1
echo "\n\n1. Run JS in hidden state without parameters\n";
$jsFilePath = "test/1.js";
$showWindow = false;
$parameters = "";
$runResult = WINDOW::$app->run_as_js($js, $jsFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "JavaScript executed successfully in hidden state\n";
} else {
	echo "JavaScript execution failed in hidden state\n";
}

sleep(2);

// Example 2
echo "\n\n2. Run JS in visible state without parameters\n";
$showWindow = true;
$runResult = WINDOW::$app->run_as_js($js, $jsFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "JavaScript executed successfully in visible state\n";
} else {
	echo "JavaScript execution failed in visible state\n";
}

// Example 3
echo "\n\n3. Run JS in visible state with parameters\n";
$parameters = "1 2";
$runResult = WINDOW::$app->run_as_js($js, $jsFilePath, $showWindow, $parameters);
if ($runResult) {
	echo "JavaScript executed successfully with parameters\n";
} else {
	echo "JavaScript execution failed with parameters\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>