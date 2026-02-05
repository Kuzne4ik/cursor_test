<?php
// Scenario: Get application version information
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
echo "1. Get application version\n";
$version = WINDOW::$app->get_version();
echo $version."\n";

// Example 2
echo "2. Get extended application version (Unicode, Runtime, etc.)\n";
$extended = true;
$extendedVersion = WINDOW::$app->get_version($extended);
echo $extendedVersion."\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>