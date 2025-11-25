<?php
// Scenario: Get the value of a specific attribute of an element by its inner text

// XHE host and initialization
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements having inner text
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Get attribute value of element by its inner text (exact match)
$innerText = "Имя:"; // Label text that actually exists as inner text
$attributeName = "for";
$attributeValue = DOM::$element->get_attribute_by_inner_text($innerText,  true, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for element with inner text '$innerText': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for element with inner text '$innerText' or element doesn't exist";
}

// Example 2: Get another attribute value of the same element
$innerText = "Мужчина"; // Radio button label text
$attributeName = "for";
$attributeValue = DOM::$element->get_attribute_by_inner_text($innerText,  true, $attributeName);

if ($attributeValue !== "") {
    echo "\n\nValue of attribute '$attributeName' for element with inner text '$innerText': $attributeValue";
} else {
    echo "\n\nAttribute '$attributeName' not found for element with inner text '$innerText' or element doesn't exist";
}

// Example 3: Get attribute value of element by its inner text within a specific frame
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Get attribute value of element in the first frame (frame=0)
    $innerText = "Имя:"; // Label text that exists in frame
    $attributeName = "for";
    $attributeValue = DOM::$element->get_attribute_by_inner_text($innerText,  true, $attributeName, 0);
    
    if ($attributeValue !== "") {
        echo "\n\nValue of attribute '$attributeName' for element with inner text '$innerText' in frame 0: $attributeValue";
    } else {
        echo "\n\nAttribute '$attributeName' not found for element with inner text '$innerText' in frame 0 or element doesn't exist";
        echo "\nNote: Frame 0 contains the same form structure as the main page with labels like 'Имя:', 'Пароль:', etc.";
    }
} else {
    echo "\n\nNo frames found on the page";
    echo "\nNote: The page should have one frame loaded from 'form_fr.html'";
}

// Quit the application
WINDOW::$app->quit();