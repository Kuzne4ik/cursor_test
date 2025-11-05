<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_browser_message_boxes function

// Enable browser message boxes
$result = WEB::$browser->enable_browser_message_boxes(true);

// Display the result
if ($result) {
    echo "\n\nSuccessfully enabled browser message boxes";
} else {
    echo "\n\nFailed to enable browser message boxes";
}

// Disable (skip dialog with answer) browser message boxes, with different default answer 'OK'
$result2 = WEB::$browser->enable_browser_message_boxes(false, "OK");
// Display the result
if ($result2) {
    echo "\n\nSuccessfully disabled browser message boxes. Default answer: Ok";
} else {
    echo "\n\nFailed to disable browser message boxes";
}

// Остановить работу
WINDOW::$app->quit();
?>