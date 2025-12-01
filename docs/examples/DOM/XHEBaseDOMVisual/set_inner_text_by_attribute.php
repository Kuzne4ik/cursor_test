<?php
// Scenario: Setting inner text of elements by their attributes
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements that have various attributes
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

echo "<b>Setting inner text of elements by attribute</b>\n\n";

// Example 1: Set inner text of an element with exact attribute match
echo "Example 1: Setting inner text with exact attribute match (id='id_onclick1')\n";
$attrName = "id";
$attrValue = "id_onclick1";
$exactly = true;
$text = "New text for id_onclick1";
$setTextResult = DOM::$anchor->set_inner_text_by_attribute($attrName, $attrValue, $exactly, $text);
if ($setTextResult) {
    echo "Successfully set inner text of element with id='id_onclick1'\n";
    
    // Verify the change by getting the inner text
    $innerText = DOM::$anchor->get_inner_text_by_attribute($attrName, $attrValue, $exactly);
    echo "New inner text: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of element with id='id_onclick1'\n\n";
}

// Example 2: Set inner text of an element with partial attribute match
echo "Example 2: Setting inner text with partial attribute match (data-action contains 'click')\n";
$attrName = "data-action";
$attrValue = "click";
$exactly = false;
$text = "Updated click text";
$setTextResult = DOM::$anchor->set_inner_text_by_attribute($attrName, $attrValue, $exactly, $text);
if ($setTextResult) {
    echo "Successfully set inner text of element with data-action containing 'click'\n";
    
    // Verify the change by getting the inner text
    $innerText = DOM::$anchor->get_inner_text_by_attribute($attrName, $attrValue, $exactly);
    echo "New inner text: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of element with data-action containing 'click'\n\n";
}

// Example 3: Set inner text of an element within a specific frame
echo "Example 3: Setting inner text of an element within a frame (frame=0)\n";
$setTextResult = DOM::$anchor->set_inner_text_by_attribute("name", "f0_onclick1", true, "Text in frame element", 0);
if ($setTextResult) {
    echo "Successfully set inner text of the element in frame 0\n";
    
    // Verify the change by getting the inner text from the frame
    $innerText = DOM::$anchor->get_inner_text_by_attribute("name", "f0_onclick1", true, 0);
    echo "New inner text in frame: " . htmlspecialchars($innerText) . "\n\n";
} else {
    echo "Failed to set inner text of the element in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>