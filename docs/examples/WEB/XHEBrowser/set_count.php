<?php
// Scenario: Set the number of browser instances to 3 and verify the change to demonstrate set_count function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_count function

// Set the number of browser instances
$count = 3; // Number of browser instances to create
$result = WEB::$browser->set_count($count);

// Display the result
if ($result) {
    echo "Successfully set browser count to: " . $count;
} else {
    echo "Failed to set browser count";
}

// Get the current count to verify
$current_count = WEB::$browser->get_count();
echo "\nCurrent browser count: " . $current_count;

// Remove all tabs except first
$result = WEB::$browser->close_all_tabs();

// Остановить работу
WINDOW::$app->quit();
?>