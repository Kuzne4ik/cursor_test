<?php
// Scenario: Set initialization JavaScript to run when browser starts, then navigate to a website to demonstrate set_init_java_script function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_init_java_script function

// Set initialization JavaScript by console message
$script_text = "console.log('Browser initialized');";
$add_file = "init_script.js"; // Optional external file
$result = WEB::$browser->set_init_java_script($script_text, $add_file);

// Display the result
if ($result) {
    echo "Successfully set initialization JavaScript";
    echo "\nScript: " . $script_text;
    echo "\nExternal file: " . ($add_file ?: "None");
} else {
    echo "Failed to set initialization JavaScript";
}

// Navigate to a website to trigger the initialization script
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

// Quit the application
WINDOW::$app->quit();
?>