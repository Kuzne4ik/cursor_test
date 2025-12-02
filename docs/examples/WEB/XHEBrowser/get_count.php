<?php
// Scenario: Get current number of browser tabs and set browser count
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_count function

// Get the current number of browser tabs
$count = WEB::$browser->get_count();

// Display the result
echo "Current browser count: " . $count;

// You can also set a browser tabs count and then verify it
WEB::$browser->set_count(2);
$verified_count = WEB::$browser->get_count();
echo "\nAfter setting count to 2, current count: " . $verified_count;

// Remove all tabs except first
WEB::$browser->close_all_tabs();

// Остановить работу
WINDOW::$app->quit();
?>