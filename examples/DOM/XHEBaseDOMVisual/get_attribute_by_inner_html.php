<?php
// Scenario: Example of getting an element's attribute value by its inner HTML
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get an attribute by inner HTML
$innerHtml = "`Блог`";
$innerHtmlIsExactly = true;
$targetAttributeName = 'alt';

// Get alt attribute of first anchor element with specified inner HTML
$attributeValue = DOM::$anchor->get_attribute_by_inner_html($innerHtml, $innerHtmlIsExactly, $targetAttributeName);

if ($attributeValue !== "") {
    echo "Attribute '$targetAttributeName' value for element with inner HTML '$innerHtml': $attributeValue\n\n";
} else {
    echo "Failed to get attribute '$targetAttributeName' for element with inner HTML '$innerHtml'\n\n";
}

// Example 2: Get attribute with partial inner HTML matching
$partialInnerHtml = "Ссылка тест";
$innerHtmlIsExactly = false;

// Get href attribute using partial inner HTML matching
// Note: This will match the element with inner HTML "Ссылка тест атрибута"
$attributeValue = DOM::$anchor->get_attribute_by_inner_html($partialInnerHtml, $innerHtmlIsExactly, 'href');

if ($attributeValue !== "") {
    echo "Attribute 'href' value for element with partial inner HTML '$partialInnerHtml': $attributeValue\n\n";
} else {
    echo "Note: No element found with inner HTML containing '$partialInnerHtml'\n";
    echo "Let's check what elements with 'Ссылка' actually exist:\n";
    
    // Check the element with exact inner HTML "Ссылка тест атрибута"
    $testElement = DOM::$anchor->get_by_inner_html("Ссылка тест атрибута", true);
    if ($testElement->is_exist()) {
        $hrefAttr = $testElement->get_attribute("href");
        $altAttr = $testElement->get_attribute("alt");
        echo "  - Element with inner HTML 'Ссылка тест атрибута':\n";
        echo "    href='$hrefAttr'\n";
        echo "    alt='$altAttr'\n";
    }
    echo "\n";
}

// Example 3: Get attribute by inner HTML within a specific frame
// This example demonstrates working with elements inside frame 0
$innerHtml = "Frame0: onmouseover 1"; // Actual inner HTML in frame 0
$innerHtmlIsExactly = true;

// Get alt attribute of an element within the first frame
$attributeValue = DOM::$anchor->get_attribute_by_inner_html($innerHtml, $innerHtmlIsExactly, 'alt', 0);

if ($attributeValue !== "") {
    echo "Attribute 'alt' value for element with inner HTML '$innerHtml' in frame 0: $attributeValue\n\n";
} else {
    echo "Element with inner HTML '$innerHtml' not found in frame 0 or attribute 'alt' does not exist\n";
    echo "Note: Frame 0 should contain elements with inner HTML like 'Frame0: onmouseover 1', 'Frame0: onclick 1', etc.\n";
    echo "These elements are loaded from 'anchor_fr.html' file.\n\n";
    
    // Let's also try to get an element from frame 1 for comparison
    echo "Trying frame 1 with element 'Frame1: onmouseover 1':\n";
    $frame1Value = DOM::$anchor->get_attribute_by_inner_html("Frame1: onmouseover 1", true, 'alt', 1);
    if ($frame1Value !== "") {
        echo "  Success! Frame 1 element alt: $frame1Value\n";
    } else {
        echo "  Frame 1 element not found or alt attribute missing\n";
    }
    echo "\n";
}

// Quit the application
WINDOW::$app->quit();