<?php
// Scenario: Get free physical memory size and optimize memory
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get free physical memory size
echo "Example 1: Get free physical memory size\n";
$freeMemSize = WINDOW::$debug->get_free_physical_mem_size();
$freeMemSizeMB = round($freeMemSize / 1024 / 1024, 2);
echo "Free physical memory: $freeMemSizeMB MB\n";

// Example 2: Optimize memory
echo "\nExample 2: Optimize memory\n";
$result = WINDOW::$debug->optimize_memory();
if ($result)
    echo "Memory optimized successfully\n";
else
    echo "Failed to optimize memory\n";

// Example 3: Get free physical memory size after optimization
echo "\nExample 3: Get free physical memory size after optimization\n";
$freeMemSizeAfter = WINDOW::$debug->get_free_physical_mem_size();
$freeMemSizeAfterMB = round($freeMemSizeAfter / 1024 / 1024, 2);
echo "Free physical memory after optimization: $freeMemSizeAfterMB MB\n";

// Quit the application
WINDOW::$app->quit();
?>