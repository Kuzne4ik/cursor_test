<?php
// Scenario: Getting a DOM element by its class attribute and interacting with it
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having class attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Get element by exact class match
echo "\n\nExample 1: Get element by exact class match";
$elementClass = "container";
$foundElement = DOM::$div->get_by_class($elementClass);
if ($foundElement->is_exist()) {
    echo "Element with class '{$elementClass}' found\n";
    echo "Element tag: " . $foundElement->get_tag() . "\n";
    echo "Element inner text: " . $foundElement->get_inner_text() . "\n";
} else {
    echo "Element with class '{$elementClass}' not found\n";
}

// Example 2: Get element by partial class match
echo "\n\nExample 2: Get element by partial class match";
$partialClass = "inner";
$foundPartialElement = DOM::$div->get_by_class($partialClass, false);
if ($foundPartialElement->is_exist()) {
    echo "\nElement with partial class '{$partialClass}' found\n";
    echo "Element tag: " . $foundPartialElement->get_tag() . "\n";
    echo "Element inner text: " . $foundPartialElement->get_inner_text() . "\n";
} else {
    echo "\nElement with partial class '{$partialClass}' not found\n";
}

// Example 3: Get element by class within a specific frame (frame=0)
echo "\n\nExample 3: Get element by class within a specific frame (frame=0)";
$frameElementClass = "link pageNextPrev {page:6}"; // Actual class that exists in frame
$foundFrameElement = DOM::$anchor->get_by_class($frameElementClass, true, "0");
if ($foundFrameElement->is_exist()) {
    echo "\nElement with class '{$frameElementClass}' in frame 0 found\n";
    echo "Element tag: " . $foundFrameElement->get_tag() . "\n";
    echo "Element inner text: " . $foundFrameElement->get_inner_text() . "\n";
} else {
        echo "\nElement with class '{$frameElementClass}' in frame 0 not found\n";
        echo "Note: Frame 0 contains elements with classes like 'link pageNextPrev {page:6}', etc.";
}

// Quit the application
WINDOW::$app->quit();