<?php
// Scenario: Demonstrates how to compare two UI elements for equality

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction
$windowText = "localhost";
$xheElement1 = WINDOW::$window->get_by_text($windowText)->get_ui_element();

// Step: Get the next element and then the previous element (should return to original)
$xheElement2 = $xheElement1->get_prev()->get_next();

// Example 1: Compare element with its previous->next (should be equal)
$isEqual1 = $xheElement1->is_equal($xheElement2);

if ($isEqual1) {
    echo("Example 1: Elements are equal (as expected)\n");
} else {
    echo("Example 1: Elements are not equal (unexpected)\n");
}

// Step: Get the previous element of the second element
$xheElement3 = $xheElement2->get_prev();

// Example 2: Compare element with previous element of the second element (should not be equal)
$isEqual2 = $xheElement1->is_equal($xheElement3);

if ($isEqual2) {
    echo("Example 2: Elements are equal (unexpected)\n");
} else {
    echo("Example 2: Elements are not equal (as expected)\n");
}

// Quit the application
WINDOW::$app->quit();
?>