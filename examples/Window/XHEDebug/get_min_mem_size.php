<?php
// Scenario: Get minimum memory size used and optimize memory
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get minimum memory size
echo "Example 1: Get minimum memory size\n";
$minMemSize = WINDOW::$debug->get_min_mem_size();
$minMemSizeMB = round($minMemSize / 1024 / 1024, 2);
echo "Minimum memory size: $minMemSizeMB MB\n";

// Optimize memory
echo "\nOptimize memory\n";
$result = WINDOW::$debug->optimize_memory();
if ($result)
    echo "Memory optimized successfully\n";
else
    echo "Failed to optimize memory\n";

// Example 2: Get minimum memory size after optimization
echo "\nExample 2: Get minimum memory size after optimization\n";
$minMemSizeAfter = WINDOW::$debug->get_min_mem_size();
$minMemSizeAfterMB = round($minMemSizeAfter / 1024 / 1024, 2);
echo "Minimum memory size after optimization: $minMemSizeAfterMB MB\n";

// Quit the application
WINDOW::$app->quit();
?>