<?php
// Scenario: Get free disk space for specified drives
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get free space on drive C
$driveC = "c:";
echo "Get free space on drive C: ";
$freeSpaceC = WINDOW::$windows->get_disk_free_space($driveC);
echo ($freeSpaceC/1024/1024/1024) . " Gb\n";

// Example 2: Get free space on drive D
$driveD = "d:";
echo "Get free space on drive D: ";
$freeSpaceD = WINDOW::$windows->get_disk_free_space($driveD);
echo ($freeSpaceD/1024/1024/1024) . " Gb\n";

// Example 3: Get free space on drive T
$driveT = "t:";
echo "Get free space on drive T: ";
$freeSpaceT = WINDOW::$windows->get_disk_free_space($driveT);
echo $freeSpaceT . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>