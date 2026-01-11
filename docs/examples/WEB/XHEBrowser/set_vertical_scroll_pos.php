<?php
// Scenario: Demonstrates how to set the vertical scroll position of a webpage to navigate to specific sections
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_vertical_scroll_pos function

// Navigate to a website with scrollable content
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Get current vertical scroll position
$current_scroll = WEB::$browser->get_vertical_scroll_pos();
echo "\n\nCurrent vertical scroll position: " . $current_scroll;

// Set vertical scroll position 
$scroll_position = 100;

// Set the scroll position
$result = WEB::$browser->set_vertical_scroll_pos($scroll_position);
    
// Check if successful
if ($result) {
    echo "\nSuccessfully set scroll position to: " . $scroll_position . "px";
} else {
    echo "\nFailed to set scroll position to: " . $scroll_position . "px";
}
    
// Get the current scroll position to verify
$current_scroll = WEB::$browser->get_vertical_scroll_pos();
echo "\nCurrent scroll position: " . $current_scroll . "px";
    
// Wait a moment to see the effect
WEB::$browser->wait(1);

// Scroll to the top
WEB::$browser->set_vertical_scroll_pos(0);
$top_scroll = WEB::$browser->get_vertical_scroll_pos();
echo "\n\n--- Scrolled to top ---";
echo "\nScroll position: " . $top_scroll . "px";

// Quit the application
WINDOW::$app->quit();
?>