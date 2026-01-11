<?php
// Scenario: Adding a new browser tab, setting it as active, navigating to a website, and cleaning up tabs
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the add_tab function

// Add a new tab as last tab
$result = WEB::$browser->add_tab();

// Display the result
if ($result) {
    echo "Successfully added a new tab\n";
} else {
    echo "Failed to add a new tab\n";
}

// Get the number of browser tabs
$tabsCount = WEB::$browser->get_count();

// The new tab number
$newTabNumber = $tabsCount - 1;

// Set active new tab;
$result = WEB::$browser->set_active_browser($newTabNumber);

// Display the result
if ($result) {
    echo "Successfully set active a new tab\n";
} else {
    echo "Failed to set active a new tab\n";
}

// Navigate to Wikipedia in the new tab
WEB::$browser->navigate("https://www.wikipedia.org");

// Wait the site page loading
WEB::$browser->wait_js(3);

echo "\nSuccessfully navigated to Wikipedia in the new tab\n";

// Remove all tabs except first
$result = WEB::$browser->close_all_tabs();

// Quit
WINDOW::$app->quit();
?>