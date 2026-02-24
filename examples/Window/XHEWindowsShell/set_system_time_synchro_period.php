<?php
// Scenario: Set the system time synchronization period
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Step: Get current system time
echo "Get current system time: ";
$currentTime = WINDOW::$windows->get_system_time();
echo $currentTime . "\n";
$timeParts = explode("-", $currentTime);

// Step: Set new system time to 01:02:03
$newHour = 1;
$newMinute = 2;
$newSecond = 3;
echo "\nSet new system time to 01:02:03: ";
WINDOW::$windows->set_system_time($newHour, $newMinute, $newSecond);

// Pause
sleep(5);

// Example 1: Set synchronization period to once per minute (60 seconds)
$syncPeriodMinute = 60;
echo "\nSet synchronization period to once per minute: ";
$result1 = WINDOW::$windows->set_system_time_synchro_period($syncPeriodMinute);
if ($result1) {
    echo "Successfully set synchronization period to once per minute\n";
} else {
    echo "Failed to set synchronization period to once per minute\n";
}

// Pause
sleep(365);

// Example 2: Restore synchronization period to once per week (604800 seconds - default)
$syncPeriodWeek = 604800;
echo "\nRestore synchronization period to once per week: ";
$result2 = WINDOW::$windows->set_system_time_synchro_period($syncPeriodWeek);
if ($result2) {
    echo "Successfully restored synchronization period to once per week\n";
} else {
    echo "Failed to restore synchronization period to once per week\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>