<?php
// Scenario: Set window blinking effect
$xhe_host = "127.0.0.1:5006";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Set blinking\n";
$enableBlink = true;
$blinkResult = WINDOW::$app->set_blink($enableBlink);
if ($blinkResult)
    echo "Blinking enabled successfully\n";
else
    echo "Failed to enable blinking\n";

// pause
sleep(2);

// Example 2
echo "\n\n2. Stop blinking\n";
$enableBlink = false;
$blinkResult = WINDOW::$app->set_blink($enableBlink);
if ($blinkResult)
    echo "Blinking disabled successfully\n";
else
    echo "Failed to disable blinking\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>