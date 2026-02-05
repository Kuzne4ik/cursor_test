<?php
// Scenario: Restart the application with different parameters
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
echo "1. Display command line arguments:\n";
$out = WINDOW::$app->get_port() . ": ";
if (count($argv) >= 1)
    $out .= "argv[0]=" . $argv[0] . "\n";
if (count($argv) >= 2)
    $out .= "argv[1]=" . $argv[1] . "\n";
if (count($argv) >= 3)
    $out .= "argv[2]=" . $argv[2] . "\n";
if (count($argv) >= 4)
    $out .= "argv[3]=" . $argv[3] . "\n";
// output
echo $out;
WINDOW::$app->set_title($out);

// pause
sleep(3);

// restart the application with script launch
// Example 1
$scriptFile = "restart.php";
$scriptArgs = "1_1 1_2 1_3";
$newPort = "7011";
if ($argv[1] == "") {
    echo "\n\nExample 1: Restart with first set of arguments\n";
    $restartResult = WINDOW::$app->restart($scriptFile, $scriptArgs, $newPort);
    if ($restartResult)
        echo "Restart with first set of arguments initiated successfully\n";
    else
        echo "Failed to initiate restart with first set of arguments\n";
}

// Example 2
$scriptArgs = "2_1 2_2 2_3";
if ($argv[1] == "1_1") {
    echo "\n\nExample 2: Restart with second set of arguments\n";
    $restartResult = WINDOW::$app->restart($scriptFile, $scriptArgs, $newPort);
    if ($restartResult)
        echo "Restart with second set of arguments initiated successfully\n";
    else
        echo "Failed to initiate restart with second set of arguments\n";
}

// Example 3
$scriptArgs = "3_1 3_2 3_3";
$newCookiesFolder = "new_cookies_folder";
$newCacheFolder = "new_cache_folder";
$maxInstances = 10;
if ($argv[1] == "2_1") {
    echo "\n\nExample 3: Restart with all parameters\n";
    $restartResult = WINDOW::$app->restart($scriptFile, $scriptArgs, $newPort, $newCookiesFolder, $newCacheFolder, $maxInstances);
    if ($restartResult)
        echo "Restart with all parameters initiated successfully\n";
    else
        echo "Failed to initiate restart with all parameters\n";
}

// Example 4
if ($argv[1] == "3_1") {
    sleep(3);
    echo "\n\nExample 4: Final restart without arguments\n";
    $restartResult = WINDOW::$app->restart($scriptFile, "");
    if ($restartResult)
        echo "Final restart without arguments initiated successfully\n";
    else
        echo "Failed to initiate final restart without arguments\n";
}

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>