<?php
// Scenario: Set script processing mode to Unicode
$xhe_host = "127.0.0.1:7013";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Set script processing as Unicode\n";
$unicodeMode = true;
$setUnicodeResult = WINDOW::$app->set_script_as_unicode($unicodeMode);
if ($setUnicodeResult)
    echo "Unicode mode enabled successfully\n";
else
    echo "Failed to enable Unicode mode\n";

// Example 2
echo "\n\n2. Set script processing as Windows-1251\n";
$unicodeMode = false;
$setUnicodeResult = WINDOW::$app->set_script_as_unicode($unicodeMode);
if ($setUnicodeResult)
    echo "Unicode mode disabled successfully\n";
else
    echo "Failed to disable Unicode mode\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>