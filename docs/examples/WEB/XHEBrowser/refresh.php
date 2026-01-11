<?php
// Scenario: Navigate to a website, then refresh the page to demonstrate the refresh function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the refresh function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;
echo "\nPage content loaded";

// Refresh the page with default parameters (ignore_cache = true)
$result = WEB::$browser->refresh();

// Display the result
if ($result) {
    echo "\n\nSuccessfully refreshed the page (ignoring cache)";
} else {
    echo "\n\nFailed to refresh the page";
}

// Остановить работу
WINDOW::$app->quit();
?>