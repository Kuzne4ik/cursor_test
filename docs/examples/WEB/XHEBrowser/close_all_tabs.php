<?php
// Scenario: Closing all browser tabs except the first one
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the close_all_tabs function

// Navigate to a website first
WEB::$browser->navigate("https://www.google.com");
WEB::$browser->wait_js(2);

// Add a new tab as last tab
WEB::$browser->add_tab();

// Get the number of browser tabs
$tabsCount = WEB::$browser->get_count();

// The new tab number
$newTabNumber = $tabsCount - 1;

// Set active new tab;
$result = WEB::$browser->set_active_browser($newTabNumber);

WEB::$browser->navigate("https://www.wikipedia.org");
WEB::$browser->wait_js(1);

// Add a new tab as last tab
WEB::$browser->add_tab();

// Get the number of browser tabs
$tabsCount = WEB::$browser->get_count();

// The new tab number
$newTabNumber = $tabsCount - 1;

// Set active new tab;
$result = WEB::$browser->set_active_browser($newTabNumber);

WEB::$browser->navigate("https://www.github.com");
WEB::$browser->wait_js(1);

echo "Opened multiple tabs:";
echo "\n1. https://www.google.com";
echo "\n2. https://www.wikipedia.org";
echo "\n3. https://www.github.com";

// Remove all tabs except first
$result = WEB::$browser->close_all_tabs();

// Get the number of browser tabs
$tabsCount = WEB::$browser->get_count();

// Display the result
if ($tabsCount == 1) {
    echo "\nSuccessfully closed all tabs except fisrt";
} else {
    echo "\nFailed to close all tabs";
}

// Quit the application
WINDOW::$app->quit();
?>