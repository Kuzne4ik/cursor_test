<?php
// Scenario: Setting inner text of elements by their name attribute
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

echo "<b>Setting inner text of elements by name</b>\n\n";

// Example 1: Set inner text of an element with name="onclick1"
echo "Example 1: Setting inner text of element with name='onclick1'\n";
$setTextResult = DOM::$anchor->set_inner_text_by_name("onclick1", "New text for onclick1");
if ($setTextResult) {
    echo "Successfully set inner text of element with name='onclick1'\n";
    
    // Verify the change by getting the inner text
    $innerText = DOM::$anchor->get_inner_text_by_name("onclick1");
    echo "New inner text: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of element with name='onclick1'\n\n";
}

// Example 2: Set inner text of an element with name="onclick2"
echo "\nExample 2: Setting inner text of element with name='onclick2'\n";
$setTextResult = DOM::$anchor->set_inner_text_by_name("onclick2", "Updated heading text");
if ($setTextResult) {
    echo "Successfully set inner text of element with name='onclick2'\n";
    
    // Verify the change by getting the inner text
    $innerText = DOM::$anchor->get_inner_text_by_name("onclick2");
    echo "New inner text: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of element with name='onclick2'\n\n";
}

// Example 3: Set inner text of an element within a specific frame
echo "\nExample 3: Setting inner text of an element within a frame (frame=0)\n";
$setTextResult = DOM::$anchor->set_inner_text_by_name("f0_onclick1", "Text in frame element", 0);
if ($setTextResult) {
    echo "Successfully set inner text of the element in frame 0\n";
    
    // Verify the change by getting the inner text from the frame
    $innerText = DOM::$anchor->get_inner_text_by_name("f0_onclick1", 0);
    echo "New inner text in frame: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of the element in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>