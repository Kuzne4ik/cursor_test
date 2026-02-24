<?php
// Scenario: Demonstrates how to find UI elements by a single property

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction
$windowText = "localhost";
$xheElement = WINDOW::$window->get_by_text($windowText)->get_ui_element();

// Example 1: Get all clickable menu items by exact match
$propertyName = "LocalizedControlType";
$propertyValue = "menu item";
$menuItems = $xheElement->get_all_by_property($propertyName, $propertyValue);

if ($menuItems && $menuItems->count() > 0) {
    echo("Example 1: Found " . $menuItems->count() . " clickable menu items\n");
    foreach($menuItems as $index => $menuItem) {
        $menuItemInfo = $menuItem->get_info();
        echo("Menu item #$index: " . $menuItemInfo->Name . "\n");
    }
} else {
    echo("Example 1: No clickable menu items found\n");
}

// Example 2: Get all elements by partial match
$propertyName2 = "LocalizedControlType";
$propertyValue2 = "element";
$exactly = false;
$allElements = $xheElement->get_all_by_property($propertyName2, $propertyValue2, $exactly);

if ($allElements && $allElements->count() > 0) {
    echo("\nExample 2: Found " . $allElements->count() . " elements with partial match\n");
    foreach($allElements as $index => $element) {
        $elementInfo = $element->get_info();
        echo("Element #$index: " . $elementInfo->Name . "\n");
    }
} else {
    echo("\nExample 2: No elements found with partial match\n");
}

// Quit the application
WINDOW::$app->quit();
?>