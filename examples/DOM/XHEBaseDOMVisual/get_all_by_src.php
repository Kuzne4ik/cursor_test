<?php
// Scenario: Examples of using get_all_by_src function to retrieve multiple DOM elements by their src attribute
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

echo "\n\n=== Examples of using get_all_by_src function ===\n\n";

// Example 1: Get elements by exact src match
$src = "./screenshots/captcha.jpg";
$elements = DOM::$image->get_all_by_src($src, true);

// Get count of elements
$count = $elements->get_count();
echo "\n\nTotal elements found with exact src '{$src}': {$count}";

// Example 2: Iterate through retrieved elements and display their details
echo "\n\nIterating through elements with exact src '{$src}':";
for ($k = 0; $k < $count; $k++) {
    $findedElement = $elements->get($k);
    if ($findedElement->is_exist()) {
        echo "\nElement #{$k}:";
        echo "\n  Tag: " . $findedElement->get_tag();
        echo "\n  Name: " . $findedElement->get_name();
        echo "\n  ID: " . $findedElement->get_id();
        echo "\n  Src: " . $findedElement->get_src();
        echo "\n  Alt: " . $findedElement->get_alt();
    }
}

// Quit the application
WINDOW::$app->quit();
?>