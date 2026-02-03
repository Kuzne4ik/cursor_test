<?php
// Scenario: Setting inner HTML of elements by their attributes
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements that have various attributes
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate page: '$pageUrl'\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_for();

echo "<b>Example 1: Setting inner HTML of elements by attribute</b>\n\n";

// Set inner HTML of an element with exact attribute match
// Initialize variables for method arguments
$attributeName1 = "id";
$attributeValue1 = "form1_username";
$htmlContent1 = "<div style='color: blue;'><strong>Updated username field</strong></div>";
$exactly1 = true;
$setHtmlResult = DOM::$input->set_inner_html_by_attribute($attributeName1, $attributeValue1, $exactly1, $htmlContent1);
if ($setHtmlResult) {
    echo "Example 1: Successfully set inner HTML of element with id='form1_username'\n";
} else {
    echo "Example 1: Failed to set inner HTML of element with id='form1_username'\n\n";
}

// Set inner HTML of an element with partial attribute match
// Initialize variables for method arguments
$attributeName2 = "name";
$attributeValue2 = "sex";  // Using an attribute that exists in form.html (radio buttons with name="sex")
$htmlContent2 = "<div style='color: blue;'><strong>Updated radio button field</strong></div>";
$exactly2 = false;
$setHtmlResult = DOM::$radiobox->set_inner_html_by_attribute($attributeName2, $attributeValue2, $exactly2, $htmlContent2);
if ($setHtmlResult) {
    echo "Example 2: Successfully set inner HTML of element with name containing 'sex'\n";
} else {
    echo "Example 2: Failed to set inner HTML of element with name containing 'sex'\n\n";
}

// Example 3: Set inner HTML of an element within a specific frame
echo "Example 3: Setting inner HTML of an element within a frame (frame=0)\n";
// The frame is already loaded in form.html (iframe src="./form_fr.html")
// Initialize variables for method arguments
$attributeName3 = "id";
$attributeValue3 = "form1_username";  // Using an id that exists in form_fr.html (the frame content)
$htmlContent3 = "<span style='background: yellow; padding: 5px;'>HTML content in frame element</span>";
$exactly3 = true;
$frameNumber3 = 0;
$setHtmlResult = DOM::$input->set_inner_html_by_attribute($attributeName3, $attributeValue3, $exactly3, $htmlContent3, $frameNumber3);
if ($setHtmlResult) {
    echo "Successfully set inner HTML of the element in frame 0\n";
} else {
    echo "Failed to set inner HTML of the element in frame 0\n\n";
}

// Quit the application
WINDOW::$app->quit();
?>
