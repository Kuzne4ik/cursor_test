<?php
// Scenario: Initialize and step through progress bar with automatic advancement
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Step 1
echo "\nStep 1. Initialize progress bar\n";
$showProgressBar = true;
$minRange = 0;
$maxRange = 10;
$initialPos = 0;
$showProgressBarResult = WINDOW::$app->show_progress_bar($showProgressBar);
$setProgressRangeResult = WINDOW::$app->set_progress_range($minRange, $maxRange);
$setProgressPosResult = WINDOW::$app->set_progress_pos($initialPos);
if ($showProgressBarResult && $setProgressRangeResult && $setProgressPosResult)
    echo "Progress bar initialized successfully\n";
else
    echo "Failed to initialize progress bar\n";

// Example 1
echo "\n\n2. Run progress loop\n";
for($k = 0; $k < 10; $k++) {
    // Set current progress position
    $stepProgressResult = WINDOW::$app->step_progress();
    sleep(1);
    echo $k." ";
}

// Example 2
echo "\n\n3. Hide progress bar\n";
$resetPosition = 0;
$hideProgressBar = false;
$resetProgressPosResult = WINDOW::$app->set_progress_pos($resetPosition);
$hideProgressBarResult = WINDOW::$app->show_progress_bar($hideProgressBar);
if ($resetProgressPosResult && $hideProgressBarResult)
    echo "Progress bar hidden successfully\n";
else
    echo "Failed to hide progress bar\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>