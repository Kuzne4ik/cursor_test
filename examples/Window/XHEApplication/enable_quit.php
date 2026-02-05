<?php
// Scenario: Enable/disable application quit functionality
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Disable exit by app->quit\n";
$enableQuit = false;
$enableResult1 = WINDOW::$app->enable_quit($enableQuit);
if ($enableResult1)
    echo "Quit disabled successfully\n";
else
    echo "Failed to disable quit\n";

// Example 2
echo "\n\n2. Try to exit\n";
$quitResult = WINDOW::$app->quit();
if (!$quitResult)
	echo "Exit disabled as expected\n";
else
	echo "Exit succeeded unexpectedly\n";

// Example 3
echo "\n\n3. Enable exit by app->quit\n";
$enableQuit = true;
$enableResult2 = WINDOW::$app->enable_quit($enableQuit);
if ($enableResult2)
    echo "Quit enabled successfully\n";
else
    echo "Failed to enable quit\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>