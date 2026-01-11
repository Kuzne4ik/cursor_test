<?php
// Scenario: Examples of using get_all_by_name function to retrieve multiple DOM elements by their name attribute
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to anchor.html\n";

    echo "Page loaded successfully\n";

    echo "\n\n=== Examples of using get_all_by_name function ===\n\n";

    // Example 1: Get elements by name
    $name = "mouseover1";
    $elements = DOM::$anchor->get_all_by_name($name);

    // Check if the operation was successful
    if ($elements->get_count() > 0) {
        echo "Successfully retrieved elements with name '{$name}'\n";

        // Get count of elements
        $count = $elements->get_count();
        echo "\n\nTotal elements found with name '{$name}': {$count}";

        // Example 2: Iterate through retrieved elements and display their details
        echo "\n\nIterating through elements with name '{$name}':";
        for ($i = 0; $i < $count; $i++) {
            $targetElement = $elements->get($i);
            if ($targetElement !== false && $targetElement->is_exist()) {
                echo "\nElement #{$i}:";

                $nameAttr = $targetElement->get_name();
                if ($nameAttr) {
                    echo "\n  Name: " . $nameAttr;
                } else {
                    echo "\n  Failed to get name";
                }

                $id = $targetElement->get_id();
                if ($id) {
                    echo "\n  ID: " . $id;
                } else {
                    echo "\n  Failed to get ID";
                }

                $type = $targetElement->get_attribute("type");
                if ($type) {
                    echo "\n  Type: " . $type;
                } else {
                    echo "\n  Failed to get type";
                }

                $value = $targetElement->get_value();
                if ($value) {
                    echo "\n  Value: " . $value;
                } else {
                    echo "\n  Failed to get value";
                }
            } else {
                echo "\nFailed to get element #{$i}";
            }
        }
    } else {
        echo "Failed to retrieve elements with name '{$name}'\n";
    }


} else {
    echo "Failed to navigate to anchor.html\n";
}

// Quit the application
WINDOW::$app->quit();
?>