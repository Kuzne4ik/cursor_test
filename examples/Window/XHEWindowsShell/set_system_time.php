<?php
// Scenario: Change the system time
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

// Example 1: Set new system time to 01:02:03
$newHour = 1;
$newMinute = 2;
$newSecond = 3;
echo "\nSet new system time to 01:02:03: ";
$result1 = WINDOW::$windows->set_system_time($newHour, $newMinute, $newSecond);
if ($result1) {
    echo "Successfully set system time to 01:02:03\n";
} else {
    echo "Failed to set system time to 01:02:03\n";
}

// Pause
sleep(5);

// Example 2: Restore original system time
echo "\nRestore original system time: ";
$result2 = WINDOW::$windows->set_system_time($timeParts[0], $timeParts[1], $timeParts[2]);
if ($result2) {
    echo "Successfully restored original system time\n";
} else {
    echo "Failed to restore original system time\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>