<?php
// Scenario: Get program executable path
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
echo "1. Get path to application exe file\n";
$programPath = WINDOW::$app->get_program_path();
echo $programPath;

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>