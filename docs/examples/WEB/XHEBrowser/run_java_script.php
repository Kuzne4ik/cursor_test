<?php
// Scenario: Navigate to a website and run JavaScript to get page title to demonstrate run_java_script function
$xhe_host = "127.0.0.1:7013";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the run_java_script function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Run JavaScript to get the page title
$script_text = "document.title;";
$result = WEB::$browser->run_java_script($script_text);

echo "\n\nPage title: " . $result . "\n";

// Quit the application
WINDOW::$app->quit();
?>