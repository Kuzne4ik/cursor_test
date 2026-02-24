<?php
// Scenario: Take screenshots of the desktop or specific regions
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Screenshot of entire desktop (monitor 1)
$filePath1 = "test/all0.jpg";
echo "Screenshot of entire desktop (monitor 1): ";
$result1 = WINDOW::$windows->screenshot($filePath1);
echo $result1 . "\n";
WINDOW::$app->shell_execute("open", "test/all0.jpg");

// Example 2: Screenshot of entire desktop (monitor 2) - simplified
$filePath2 = "test/all1.jpg";
$monitor2 = 1;
$simplified = true;
echo "\nScreenshot of entire desktop (monitor 2) - simplified: ";
$result2 = WINDOW::$windows->screenshot($filePath2, -1, -1, -1, -1, $simplified, $monitor2);
echo $result2 . "\n";
WINDOW::$app->shell_execute("open", "test/all1.jpg");

// Example 3: Screenshot of part of desktop (monitor 1)
$filePath3 = "test/part0.jpg";
$x = 100;
$y = 100;
$width = 100;
$height = 100;
echo "\nScreenshot of part of desktop (monitor 1): ";
$result3 = WINDOW::$windows->screenshot($filePath3, $x, $y, $width, $height);
echo $result3 . "\n";
WINDOW::$app->shell_execute("open", "test/part0.jpg");

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>