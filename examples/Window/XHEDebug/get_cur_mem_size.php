<?php
// Scenario: Get current memory usage and optimize memory
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Run multiple iterations of memory check and optimization
$iterations = 10;
for ($k = 0; $k < $iterations; $k++) {
    // Example 1: Get current memory size
    echo "\n\nExample 1: Get current memory size\n";
    $memSize = WINDOW::$debug->get_cur_mem_size();
    $memSizeMB = round($memSize / 1024 / 1024, 2);
    echo "Current memory size: $memSizeMB MB\n";

    // Example 2: Optimize memory
    echo "\nExample 2: Optimize memory\n";
    $result = WINDOW::$debug->optimize_memory();
    if ($result)
        echo "Memory optimized successfully\n";
    else
        echo "Failed to optimize memory\n";

    // Example 3: Get current memory size after optimization
    echo "\nExample 3: Get current memory size after optimization\n";
    $memSizeAfter = WINDOW::$debug->get_cur_mem_size();
    $memSizeAfterMB = round($memSizeAfter / 1024 / 1024, 2);
    echo "Memory size after optimization: $memSizeAfterMB MB\n";

    // Step: Recreate browser
    echo "\nStep: Recreate browser\n";
    WEB::$browser->recreate();
}

// Quit the application
WINDOW::$app->quit();
?>