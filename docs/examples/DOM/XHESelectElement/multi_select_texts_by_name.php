<?php
// Scenario: Demonstrates how to select multiple options by texts in a select element found by name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with listbox elements
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Wait for page to load
WEB::$browser->wait_js();

// Select multiple options by texts in a multi-select element found by its name attribute
// Parameters:
// - $name: The name attribute of the multi-select element
// - $texts: A string containing comma-separated text contents of options to select
$success = DOM::$listbox->multi_select_texts_by_name("contries", "Canada,United States,United Kingdom", -1);

if ($success) {
    echo "Successfully selected options with texts 'Canada', 'United States', and 'United Kingdom' in multi-select element with name 'contries'\n\n";
} else {
    echo "Failed to select options or multi-select element with name 'contries' was not found\n\n";
}

// Select multiple options by texts in a multi-select element found by its name attribute with frame parameter
// Parameters:
// - $name: The name attribute of the multi-select element
// - $texts: A string containing comma-separated text contents of options to select
// - $frame: The frame number where the element is located (0-based)
$successWithFrame = DOM::$listbox->multi_select_texts_by_name("contries", "France,Germany,Italy", 0);

if ($successWithFrame) {
    echo "Successfully selected options with texts 'France', 'Germany', and 'Italy' in multi-select element with name 'contries' in frame 0\n\n";
} else {
    echo "Failed to select options or multi-select element with name 'contries' was not found in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>