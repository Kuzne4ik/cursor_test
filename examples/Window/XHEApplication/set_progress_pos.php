<?php
// Scenario: Set progress bar position
$xhe_host = "127.0.0.1:7019";
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
echo $setRangeResult."\n";

$initialPos = 0;
$setPosResult = WINDOW::$app->set_progress_pos($initialPos);
if ($setPosResult)
    echo "Initial progress position set successfully\n";
else
    echo "Failed to set initial progress position\n";

// Example 1
echo "\n\n2. Run progress with step position updates\n";
for($k = 0; $k < 10; $k++){
    // set current position of progress
    $currentPos = $k;
    $setPosResult = WINDOW::$app->set_progress_pos($currentPos);
    
    // set current step text
    $stepText = "step: " . ($k + 1);
    $setTextResult = WINDOW::$app->set_progress_text($stepText);
    
    // step progress
    $stepResult = WINDOW::$app->step_progress();
    
    echo "Step " . ($k + 1) . " completed\n";
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