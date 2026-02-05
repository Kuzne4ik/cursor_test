<?php
// Scenario: Start a REST service to handle HTTP requests and execute PHP scripts
$xhe_host = "127.0.0.1:7041";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Step 1
echo "\nStep 1. Set script path for REST service\n";
$scriptPath = 'D:\User\CSharp\Src XHE\bin\x64\Debug\net48\Test Samples\Window\app\get_version.php';

// Example request: http://localhost:4000/Run?param1=1&param2=2
// param1, param2 values will be available in argv

// Example 1
echo "\n\n1. Start REST service\n";
$port = 4000;
$startRestServiceResult = WINDOW::$app->start_rest_service($scriptPath, $port);
if ($startRestServiceResult)
    echo "REST service started successfully\n";
else
    echo "Failed to start REST service\n";

// Example 2 (commented out)
// echo "\n\n2. Stop REST service\n";
// $stopRestServiceResult = WINDOW::$app->start_rest_service("", $port);
// echo $stopRestServiceResult."\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>