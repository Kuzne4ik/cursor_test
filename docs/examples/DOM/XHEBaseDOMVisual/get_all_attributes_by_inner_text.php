<?php
// Scenario: Example of getting all attributes of elements by inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

echo "Page loaded successfully\n";

// Example 1: Basic usage - get all attributes of elements by inner text
$innerText = "Блог";

// Get attribute href of anchors with inner text "Блог"
$attributes = DOM::$anchor->get_all_attributes_by_inner_text("href", $innerText, true);

// Check if the operation was successful
if ($attributes) {
    echo "Successfully retrieved attribute for anchors with inner text '$innerText'\n";
} else {
    echo "Failed to retrieve attribute for anchors with inner text '$innerText'\n";
}

echo "All attribute href of anchors with inner text '$innerText':\n";
if (count($attributes) > 0) {
    foreach ($attributes as $index => $attrValue) {
        echo "Element " . ($index + 1) . " attribute href: '$attrValue'\n";
        echo "\n";
    }
}
echo "\n";

// Quit the application
WINDOW::$app->quit();