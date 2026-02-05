<?php
// Scenario: Display debug notification boxes with different durations
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Display a 5-second notification
echo "Example 1: Display a 5-second notification\n";
$message1 = "Debug notification (5 seconds)\nnotification\n\nwithout stopping script for display";
$duration1 = 5;
$result1 = WINDOW::$debug->notification_box($message1, $duration1);
if ($result1)
    echo "5-second notification displayed successfully\n";
else
    echo "Failed to display 5-second notification\n";

// Example 2: Display a 7-second notification
echo "\nExample 2: Display a 7-second notification\n";
$message2 = "Debug notification (7 seconds)\nnotification\n\nwithout stopping script for display";
$duration2 = 7;
$result2 = WINDOW::$debug->notification_box($message2, $duration2);
if ($result2)
    echo "7-second notification displayed successfully\n";
else
    echo "Failed to display 7-second notification\n";

// Example 3: Display a 9-second notification
echo "\nExample 3: Display a 9-second notification\n";
$message3 = "Debug notification (9 seconds)\nnotification\n\nwithout stopping script for display";
$duration3 = 9;
$result3 = WINDOW::$debug->notification_box($message3, $duration3);
if ($result3)
    echo "9-second notification displayed successfully\n";
else
    echo "Failed to display 9-second notification\n";

// Example 4: Display an infinite notification
echo "\nExample 4: Display an infinite notification\n";
$message4 = "Debug infinite notification\nnotification\n\nwithout stopping script for display";
$duration4 = 0; // 0 means infinite
$result4 = WINDOW::$debug->notification_box($message4, $duration4);
if ($result4)
    echo "Infinite notification displayed successfully\n";
else
    echo "Failed to display infinite notification\n";

// Quit the application
WINDOW::$app->quit();
?>