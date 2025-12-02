<?php
// Scenario: Navigate to a website and run jQuery commands to get page title, count links, and change background color to demonstrate run_jquery function
$xhe_host = "127.0.0.1:7013";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the run_jquery function

// Navigate to a website first
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Run jQuery to get the page title
$script_text = "%%RETURN%% $('title').text();";
$version = "3"; // Optional jQuery version
$result = WEB::$browser->run_jquery($script_text, $version);

echo "\n\nPage title (jQuery): " . $result;

// Run jQuery to get all links on the page
$script_text2 = "%%RETURN%% $('a').length;";
$result2 = WEB::$browser->run_jquery($script_text2, $version);

echo "\nNumber of links on page (jQuery): " . $result2;

// Run jQuery to change page background color
$script_text3 = "$('body').css('background-color', '#f0f0f0');";
$result3 = WEB::$browser->run_jquery($script_text3);

echo "\n\nChanged page background color";
echo "\nResult: " . ($result3 ? "Success" : "Failed");


// Quit the application
WINDOW::$app->quit();
?>