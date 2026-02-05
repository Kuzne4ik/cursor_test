<?php
// Scenario: Handle script unpause hook
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Prepare output information for post-unpause actions
echo "\nUnpause button hook handler\n\n";
echo "Post-actions after script unpause:\n";

// Get current URL
$currentUrl = WEB::$webpage->get_url();
echo "Unpaused on page: $currentUrl\n";

// Get memory information
$curMemSize = WINDOW::$debug->get_cur_mem_size();
$curMemSizeMB = round($curMemSize / 1024 / 1024, 2);
echo "Current memory: $curMemSizeMB MB\n";

$freeMemSize = WINDOW::$debug->get_free_physical_mem_size();
$freeMemSizeMB = round($freeMemSize / 1024 / 1024, 2);
echo "Free memory: $freeMemSizeMB MB\n";

$minMemSize = WINDOW::$debug->get_min_mem_size();
$minMemSizeMB = round($minMemSize / 1024 / 1024, 2);
echo "Minimum stack memory: $minMemSizeMB MB\n";

$maxMemSize = WINDOW::$debug->get_max_mem_size();
$maxMemSizeMB = round($maxMemSize / 1024 / 1024, 2);
echo "Maximum stack memory: $maxMemSizeMB MB\n";
echo "\n";

// Example 1: Mark hook as completed
$hookFilePath = WINDOW::$debug->get_cur_script_folder() . basename(__FILE__) . ".out";
SYSTEM::$textfile->write_file($hookFilePath, "<unchanged>");
?>