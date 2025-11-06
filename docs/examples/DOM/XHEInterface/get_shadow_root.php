<?php

// Scenario: For current page, find a custom element and get its shadow root
// Description: For current page, find a custom element and get its shadow root
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to polygon page if page was not loaded earlier
WEB::$browser->navigate("https://mdn.github.io/web-components-examples/life-cycle-callbacks/");

// Example 1: Get tag of Shadow Root element

// Click on button to create custom element
DOM::$btn->click_by_number(0);

// Get custom element by tag name
$customElements = DOM::$element->get_all_by_tag("CUSTOM-SQUARE");

// Check that custom elements were found
if ($customElements->get_count() > 0)
{
    // Get first custom element
    $customElement = $customElements->get(0);
    
    // Check that custom element was found
    if ($customElement->inner_number != -1)
    {
        // Get shadow root of custom element
        $shadowRoot = $customElement->get_shadow_root();
        
        // Check that shadow root was found
        if ($shadowRoot->inner_number != -1)
        {
            // Get tag of shadow root
            echo($shadowRoot->get_tag() . "\n");
        }
    }
}

// Stop application
WINDOW::$app->quit();
?>