<?php
// Scenario: Setting inner HTML of elements by their name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate page: '$pageUrl'\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_for();

echo "<b>Setting inner HTML of elements by name</b>\n\n";

// Example 1: Set inner HTML of an element with name="onclick1"
echo "Example 1: Setting inner HTML of element with name='onclick1'\n";
$htmlContent = "<div style='color: blue;'><strong>New HTML content</strong> for onclick1</div>";
$name = "onclick1";
$setHtmlResult = DOM::$anchor->set_inner_html_by_name($name, $htmlContent);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of element with name='onclick1'\n";
    
    // Verify the change by getting the inner HTML
    $innerHTML = DOM::$anchor->get_inner_html_by_name($name);
    echo "New inner HTML: " . htmlspecialchars($innerHTML) . "\n\n";
} else {
    echo "Failed to set inner HTML of element with name='onclick1'\n\n";
}

// Example 2: Set inner HTML of an element with name="mouseover1"
echo "Example 2: Setting inner HTML of element with name='mouseover1'\n";
$htmlContent = "<h2 style='color: red;'>Updated heading HTML</h2><p>With additional paragraph</p>";
$name = "mouseover1";
$setHtmlResult = DOM::$anchor->set_inner_html_by_name($name, $htmlContent);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of element with name='mouseover1'\n";
    
    // Verify the change by getting the inner HTML
    $innerHTML = DOM::$anchor->get_inner_html_by_name($name);
    echo "New inner HTML: " . htmlspecialchars($innerHTML) . "\n\n";
} else {
    echo "Failed to set inner HTML of element with name='mouseover1'\n\n";
}

// Example 3: Set inner HTML of an element within a specific frame
echo "Example 3: Setting inner HTML of an element within a frame (frame=0)\n";
$htmlContent = "<span style='background: yellow; padding: 5px;'>HTML content in frame element</span>";
$setHtmlResult = DOM::$anchor->set_inner_html_by_name("f0_onclick1", $htmlContent, 0);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of the element in frame 0\n";
    
    // Verify the change by getting the inner HTML from the frame
    $innerHTML = DOM::$anchor->get_inner_html_by_name("f0_onclick1", 0);
    echo "New inner HTML in frame: " . htmlspecialchars($innerHTML) . "\n\n";
} else {
    echo "Failed to set inner HTML of the element in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>