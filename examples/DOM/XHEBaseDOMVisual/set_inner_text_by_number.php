<?php
// Scenario: Setting inner text of elements by their number on the page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

echo "<b>Setting inner text of elements by number</b>\n\n";

// Example 1: Set inner text of the first element by number (index 0)
echo "Example 1: Setting inner text of the first element (index 0)\n";
$setTextResult = DOM::$anchor->set_inner_text_by_number(0, "New text for first element");
if ($setTextResult) {
    echo "Successfully set inner text of the first element\n";
    
    // Verify the change by getting the inner text
    $innerText = DOM::$anchor->get_inner_text_by_number(0);
    echo "New inner text: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of the first element\n\n";
}

// Example 2: Set inner text of the second element by number (index 1)
echo "Example 2: Setting inner text of the second element (index 1)\n";
$setTextResult = DOM::$anchor->set_inner_text_by_number(1, "Updated text for second element");
if ($setTextResult) {
    echo "Successfully set inner text of the second element\n";
    
    // Verify the change by getting the inner text
    $innerText = DOM::$anchor->get_inner_text_by_number(1);
    echo "New inner text: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of the second element\n\n";
}

// Example 3: Set inner text of an element within a specific frame
echo "Example 3: Setting inner text of an element within a frame (frame=0)\n";
$setTextResult = DOM::$anchor->set_inner_text_by_number(0, "Text in frame element", 0);
if ($setTextResult) {
    echo "Successfully set inner text of the element in frame 0\n";
    
    // Verify the change by getting the inner text from the frame
    $innerText = DOM::$anchor->get_inner_text_by_number(0, 0);
    echo "New inner text in frame: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of the element in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>