<?php
// Scenario: Handle script stop hook
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Hook execution time is 3000 milliseconds by default or as specified in hook_time.txt in the program directory

// Step: Prepare output information for post-stop actions
$output = "\nStop button hook handler\n\n";
$output .= "Post-actions after script stop:\n";

// Get current URL
$currentUrl = WEB::$webpage->get_url();
$output .= "Stopped on page: $currentUrl\n";

// Get memory information
$curMemSize = WINDOW::$debug->get_cur_mem_size();
$curMemSizeMB = round($curMemSize / 1024 / 1024, 2);
$output .= "Current memory: $curMemSizeMB MB\n";

$freeMemSize = WINDOW::$debug->get_free_physical_mem_size();
$freeMemSizeMB = round($freeMemSize / 1024 / 1024, 2);
$output .= "Free memory: $freeMemSizeMB MB\n";

$minMemSize = WINDOW::$debug->get_min_mem_size();
$minMemSizeMB = round($minMemSize / 1024 / 1024, 2);
$output .= "Minimum stack memory: $minMemSizeMB MB\n";

$maxMemSize = WINDOW::$debug->get_max_mem_size();
$maxMemSizeMB = round($maxMemSize / 1024 / 1024, 2);
$output .= "Maximum stack memory: $maxMemSizeMB MB\n";
$output .= "\n";

// Step: Mark hook as completed
$hookFilePath = WINDOW::$debug->get_cur_script_folder() . basename(__FILE__) . ".out";
SYSTEM::$textfile->write_file($hookFilePath, "<unchanged>");

// Example 1: Log hook execution
SYSTEM::$textfile->write_file($hookFilePath . "log.html", $output);

// Quit the application
WINDOW::$app->quit();
?>