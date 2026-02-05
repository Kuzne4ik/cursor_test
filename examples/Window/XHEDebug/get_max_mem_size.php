<?php
// Scenario: Get maximum memory size used and optimize memory
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get maximum memory size
echo "Example 1: Get maximum memory size\n";
$maxMemSize = WINDOW::$debug->get_max_mem_size();
$maxMemSizeMB = round($maxMemSize / 1024 / 1024, 2);
echo "Maximum memory size: $maxMemSizeMB MB\n";

// Optimize memory
echo "\: Optimize memory\n";
$result = WINDOW::$debug->optimize_memory();
if ($result)
    echo "Memory optimized successfully\n";
else
    echo "Failed to optimize memory\n";

// Example 2: Get maximum memory size after optimization
echo "\nExample 3: Get maximum memory size after optimization\n";
$maxMemSizeAfter = WINDOW::$debug->get_max_mem_size();
$maxMemSizeAfterMB = round($maxMemSizeAfter / 1024 / 1024, 2);
echo "Maximum memory size after optimization: $maxMemSizeAfterMB MB\n";

// Quit the application
WINDOW::$app->quit();
?>