<?php
// Scenario: Navigate to a website and set hardware information for a modern PC to demonstrate set_hardware_info function
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_hardware_info function

// First, navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Set hardware info for a modern PC
$hardwareConcurrency = 8;
$deviceMemory = 8;
$devicePixelRatio = 1.5;

$result = WEB::$browser->set_hardware_info($hardwareConcurrency, $deviceMemory, $devicePixelRatio);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set hardware info";
    echo "\nHardware Concurrency: " . $hardwareConcurrency;
    echo "\nDevice Memory: " . $deviceMemory . "GB";
    echo "\nDevice Pixel Ratio: " . $devicePixelRatio;
} else {
    echo "\n\nFailed to set hardware info";
}

// Display the result by standart Browser objects
echo "window.devicePixelRatio: " . $browser->run_java_script("window.devicePixelRatio") . "\n";
echo "navigator.hardwareConcurrency: " . $browser->run_java_script("navigator.hardwareConcurrency") . "\n";
echo "navigator.deviceMemory: " . $browser->run_java_script("navigator.deviceMemory") . "\n";

// Quit the application
WINDOW::$app->quit();
?>