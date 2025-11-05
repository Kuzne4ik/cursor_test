<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the call_java_script function

// Navigate to a website first
$url = "https://www.wikipedia.org/";
WEB::$browser->navigate($url);
WEB::$browser->wait(2);

echo "Navigated to: " . $url;

// Call JavaScript function to get the page title
$func_name = "myFunction";
$parameters = "";
$result = WEB::$browser->call_java_script($func_name, "");

// Display the result
if ($result) {
    echo "Successfully found the JS function by his name and run the one\n";
} else {
    echo "Failed the JS function not found\n";
}


// Остановить работу
WINDOW::$app->quit();
?>