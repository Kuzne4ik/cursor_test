<?php
// Scenario: Set progress bar range
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
echo "\n\n1. Initialize progress bar\n";
$showProgressBar = true;
$initResult1 = WINDOW::$app->show_progress_bar($showProgressBar);
echo $initResult1."\n";

$minRange = 0;
$maxRange = 10;
$setRangeResult = WINDOW::$app->set_progress_range($minRange, $maxRange);
if ($setRangeResult)
    echo "Progress range set successfully\n";
else
    echo "Failed to set progress range\n";

$initialPos = 0;
$setPosResult = WINDOW::$app->set_progress_pos($initialPos);
if ($setPosResult)
    echo "Initial progress position set successfully\n";
else
    echo "Failed to set initial progress position\n";

// Example 1
echo "\n\n2. Run progress with range 0-10\n";
for($i = 0; $i < 10; $i++){
    // step progress
    $stepResult = WINDOW::$app->step_progress();
    echo $i . " ";
    sleep(1);
}

// Example 2
echo "\n\n3. Hide progress bar\n";
$showProgressBar = false;
$hideResult = WINDOW::$app->show_progress_bar($showProgressBar);
if ($hideResult)
    echo "Progress bar hidden successfully\n";
else
    echo "Failed to hide progress bar\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>