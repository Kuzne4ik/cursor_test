<?php
// Scenario: Run the current script with parameters
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Set the current script path
$scriptPath = "message_box.php";
echo "Step: Set current script path to $scriptPath\n";
WINDOW::$debug->set_cur_script_path($scriptPath);

// Example 1: Run the current script with parameters
echo "\n\nExample 1: Run the current script with parameters\n";
$parameters = "params";
$result = WINDOW::$debug->run_current_script($parameters);
if ($result)
    echo "Script executed successfully with parameters: $parameters\n";
else
    echo "Failed to execute script with parameters: $parameters\n";

// Quit the application
WINDOW::$app->quit();
?>