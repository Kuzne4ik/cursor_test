<?php
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the wait_js function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url);

echo "Navigated to: " . $url;
echo "\nWaiting for JavaScript execution to complete...";

// Wait for JavaScript execution to complete (default 30 seconds)
$result = WEB::$browser->wait_js();

// Display the result
if ($result) {
    echo "\n\nSuccessfully waited for JavaScript execution";
} else {
    echo "\n\nFailed to wait for JavaScript execution";
}

// Quit the application
WINDOW::$app->quit();
?>