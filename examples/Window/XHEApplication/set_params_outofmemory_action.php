<?php
// Scenario: Set application behavior when memory is full
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Ask all questions when memory is full\n";
$action = 0;
$setParamsResult = WINDOW::$app->set_params_outofmemory_action($action);
if ($setParamsResult)
    echo "Ask questions mode set successfully\n";
else
    echo "Failed to set ask questions mode\n";

sleep(10);

// Example 2
echo "\n\n2. Just restart the program when memory is full\n";
$action = 1;
$setParamsResult = WINDOW::$app->set_params_outofmemory_action($action);
if ($setParamsResult)
    echo "Restart mode set successfully\n";
else
    echo "Failed to set restart mode\n";

sleep(10);

// Example 3
echo "\n\n3. Restart the program and run the current script again when memory is full\n";
$action = 2;
$setParamsResult = WINDOW::$app->set_params_outofmemory_action($action);
if ($setParamsResult)
    echo "Restart and rerun mode set successfully\n";
else
    echo "Failed to set restart and rerun mode\n";

sleep(10);

// Example 4
echo "\n\n4. Close the program when memory is full\n";
$action = 3;
$setParamsResult = WINDOW::$app->set_params_outofmemory_action($action);
if ($setParamsResult)
    echo "Close program mode set successfully\n";
else
    echo "Failed to set close program mode\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>