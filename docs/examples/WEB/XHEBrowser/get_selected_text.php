<?php
// Scenario: Get selected text as plain text and HTML format
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_selected_text function

// Navigate to a website with selectable content
$url = TEST_POLYGON_URL . "anchor.html";
var_export(WEB::$browser->navigate($url));
WEB::$browser->wait_js(3);

echo "\nNavigated to: " . $url;

// Select an DOM element by mouse double click
echo "\nSelect an DOM element by mouse double click: ";
var_export(DOM::$element->get_by_inner_text("Ссылки во Frame", true)->send_mouse_double_click(3, 3));

// Get Selected text as text
echo "\nSelected text as text: ";
echo(WEB::$browser->get_selected_text(false));

// Get Selected text as HTML code
echo "\nSelected text as HTML code: ";
echo(WEB::$browser->get_selected_text(true));

// Quit the application
WINDOW::$app->quit();
?>