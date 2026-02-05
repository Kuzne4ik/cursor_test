<?php
// Scenario: Pause execution for specified time
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
WEB::$browser->set_count(2);
WEB::$browser->set_active_browser(1);

// step
echo "1. Navigate to Google\n";
$googleUrl = "http://www.google.com";
$navigateResult = WEB::$browser->navigate($googleUrl);
echo $navigateResult."\n";

// Example 1
echo "\n\n2. Pause for 2 seconds\n";
$pauseTime = 2000;
$pauseResult = WINDOW::$app->pause($pauseTime);
if ($pauseResult)
    echo "Pause executed successfully\n";
else
    echo "Failed to execute pause\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>