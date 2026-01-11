<?php
// Scenario: Get current page height, set custom height, then verify the change to demonstrate set_height function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_height function

// First, get current page height
$current_height = WEB::$browser->get_page_height();
echo "Current page height: " . $current_height . "px";

// Set custom height
$custom_height = 768;
$result = WEB::$browser->set_height($custom_height);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set page height to: " . $custom_height . "px";
} else {
    echo "\n\nFailed to set page height";
}

// Verify the change
$updated_height = WEB::$browser->get_page_height();
echo "\nUpdated page height: " . $updated_height . "px";


// Quit the application
WINDOW::$app->quit();
?>