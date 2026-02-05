<?php
// Scenario: Set application window as foreground window
$xhe_host = "127.0.0.1:703";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
echo "\n\n1. Set focus to adjacent window\n";
$ctrl = true;
$shift = false;
$alt = true;
$sendKeysResult = SYSTEM::$keyboard->send_key(9, $ctrl, $shift, $alt, false);
echo $sendKeysResult."\n";

// pause
WINDOW::$app->minimize_to_tray();
sleep(4);

// Example 1
echo "\n\n2. Set application window as current\n";
$setForegroundResult = WINDOW::$app->set_foreground_window();
if ($setForegroundResult)
    echo "Application set as foreground window successfully\n";
else
    echo "Failed to set application as foreground window\n";

// step
echo "\n\n3. Set focus to adjacent window\n";
$sendKeysResult = SYSTEM::$keyboard->send_key(9, $ctrl, $shift, $alt, false);
echo $sendKeysResult."\n";

sleep(4);

// Example 2
echo "\n\n4. Set application window as current\n";
$setForegroundResult = WINDOW::$app->set_foreground_window();
if ($setForegroundResult)
    echo "Application set as foreground window successfully again\n";
else
    echo "Failed to set application as foreground window again\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>