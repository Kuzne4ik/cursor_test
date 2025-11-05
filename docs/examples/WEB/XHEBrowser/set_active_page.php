<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_active_page function

// Note: Use set_active_browser only for Selenium mode

// Set browser count to 3 to have multiple browsers
WEB::$browser->set_count(3);

// Set active browser to browser number 0
$page_num = 0;
$result =  WEB::$browser->set_active_browser($page_num);

// Display the result
if ($result) {
    echo "\nSuccessfully set active page to browser: " . $page_num;
    echo "\nCurrent page should now be: https://www.wikipedia.org";
} else {
    echo "\nFailed to set active page";
}

// Set active browser to browser number 1
$page_num = 1;
$result2 = WEB::$browser->set_active_browser($page_num);

// Display the result
if ($result2) {
    echo "\nSuccessfully set active page to browser: " . $page_num;
    echo "\nCurrent page should now be: https://www.wikipedia.org";
} else {
    echo "\nFailed to set active page";
}

// Остановить работу
WINDOW::$app->quit();
?>