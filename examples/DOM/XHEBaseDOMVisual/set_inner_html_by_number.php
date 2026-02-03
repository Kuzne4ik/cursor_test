<?php
// Scenario: Setting inner HTML of elements by their number on the page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

echo "<b>Setting inner HTML of elements by number</b>\n\n";

// Example 1: Set inner HTML of the first element by number (index 0)
echo "Example 1: Setting inner HTML of the first element (index 0)\n";
$htmlContent = "<strong>New HTML content</strong> for the first element";
$number = 0;
$setHtmlResult = DOM::$anchor->set_inner_html_by_number($number, $htmlContent);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of the first element\n";
    
    // Verify the change by getting the inner HTML
    $innerHTML = DOM::$anchor->get_inner_html_by_number($number);
    echo "New inner HTML: " . htmlspecialchars($innerHTML) . "\n\n";
} else {
    echo "Failed to set inner HTML of the first element\n\n";
}

// Example 2: Set inner HTML of the second element by number (index 1)
echo "Example 2: Setting inner HTML of the second element (index 1)\n";
$htmlContent = "<div style='color: blue;'><em>Updated HTML content</em></div>";
$number = 1;
$setHtmlResult = DOM::$anchor->set_inner_html_by_number($number, $htmlContent);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of the second element\n";
    
    // Verify the change by getting the inner HTML
    $innerHTML = DOM::$anchor->get_inner_html_by_number($number);
    echo "New inner HTML: " . htmlspecialchars($innerHTML) . "\n\n";
} else {
    echo "Failed to set inner HTML of the second element\n\n";
}

// Example 3: Set inner HTML of an element within a specific frame
echo "Example 3: Setting inner HTML of an element within a frame (frame=0)\n";
$htmlContent = "<span style='background: yellow;'>HTML content in frame</span>";
$number = 0;
$frameNumber = 0;
$setHtmlResult = DOM::$anchor->set_inner_html_by_number($number, $htmlContent, $frameNumber);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of the element in frame 0\n";
    
    // Verify the change by getting the inner HTML from the frame
    $innerHTML = DOM::$anchor->get_inner_html_by_number($number, $frameNumber);
    echo "New inner HTML in frame: " . htmlspecialchars($innerHTML) . "\n\n";
} else {
    echo "Failed to set inner HTML of the element in frame 0\n\n";
}


// Quit the application
WINDOW::$app->quit();
?>