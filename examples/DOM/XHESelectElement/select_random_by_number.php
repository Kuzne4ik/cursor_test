<?php
// Scenario: Demonstrates how to select a random option in a select element found by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select a random option in a select element found by number
// The parameter is the number of the select element on the page (0-based)
$success = DOM::$listbox->select_random_by_number(0, -1);

if ($success) {
    echo "Successfully selected a random option in the first select element\n\n";
} else {
    echo "Failed to select a random option or the select element was not found\n\n";
}

// Select a random option in a select element found by number with frame parameter
// Parameters:
// - $number: The number of the select element on the page (0-based)
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->select_random_by_number(0, 0);

if ($successWithFrame) {
    echo "Successfully selected a random option in the first select element in frame 0\n\n";
} else {
    echo "Failed to select a random option or the select element was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>