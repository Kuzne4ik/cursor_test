<?php
// Scenario: Open 3 browsers with different pages, then set active page to browser number 1 to demonstrate set_active_page function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the set_active_page function

// Set browser count to 3 to have multiple browsers
WEB::$browser->set_count(3);

// Set active browser to browser number 0
WEB::$browser->set_active_browser(0);
WEB::$browser->navigate("https://www.google.com");
WEB::$browser->wait(2);

// Set active browser to browser number 1
WEB::$browser->set_active_browser(1);
WEB::$browser->navigate("https://www.wikipedia.org");
WEB::$browser->wait(2);

// Set active browser to browser number 2
WEB::$browser->set_active_browser(2);
WEB::$browser->navigate("https://www.github.com");
WEB::$browser->wait(2);

echo "Opened 3 browsers with different pages:";
echo "\nBrowser 0: https://www.google.com";
echo "\nBrowser 1: https://www.wikipedia.org";
echo "\nBrowser 2: https://www.github.com";

// Set active page to browser number 1 (0-based index)
$page_num = 1;
$result = WEB::$browser->set_active_page($page_num);

// Display the result
if ($result) {
    echo "\nSuccessfully set active page to browser: " . $page_num;
    echo "\nCurrent page should now be: https://www.wikipedia.org";
} else {
    echo "\nFailed to set active page";
}

// Quit the application
WINDOW::$app->quit();
?>