<?php
// Scenario: Set document complete JavaScript to run when page loads, then navigate to a website to demonstrate set_document_complete_java_script function
 $xhe_host = "127.0.0.1:7013";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_document_complete_java_script function

// Set document complete JavaScript
$script_text = "console.log('Document fully loaded');";
$result = WEB::$browser->set_document_complete_java_script($script_text);

// Display the result
if ($result) {
    echo "Successfully set document complete JavaScript";
    echo "\nScript: " . $script_text;
} else {
    echo "Failed to set document complete JavaScript";
}

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);


// Quit the application
WINDOW::$app->quit();
?>