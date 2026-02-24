<?php
// Scenario: Change the system date
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Step: Get current system date
echo "Get current system date: ";
$currentDate = WINDOW::$windows->get_system_date();
echo $currentDate . "\n";
$dateParts = explode("-", $currentDate);

// Example 1: Set new system date to 2012-11-06
$newYear = 2012;
$newMonth = 11;
$newDay = 6;
echo "\nSet new system date to 2012-11-06: ";
$result1 = WINDOW::$windows->set_system_date($newYear, $newMonth, $newDay);
if ($result1) {
    echo "Successfully set system date to 2012-11-06\n";
} else {
    echo "Failed to set system date to 2012-11-06\n";
}

// Pause
sleep(5);

// Example 2: Restore original system date
echo "\nRestore original system date: ";
$result2 = WINDOW::$windows->set_system_date($dateParts[0], $dateParts[1], $dateParts[2]);
if ($result2) {
    echo "Successfully restored original system date\n";
} else {
    echo "Failed to restore original system date\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>