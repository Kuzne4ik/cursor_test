DOM::<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_browser_notification function

// Enable browser notifications with show parameter
$result = WEB::$browser->enable_browser_notification(true, true);
echo "\n\nBrowser notifications enabled with show = true: " . ($result ? "Yes" : "No");

// Navigate to a website to test browser notifications
$url = "https://delch.github.io/notifications-api/";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(2);

echo "\n\nNavigated to: " . $url;
echo "\nPage loaded with browser notifications enabled";

// Set input `Notification title`
DOM::$input->set_inner_text_by_number(0, "test 1");
  
// Set input `Notification body`
DOM::$input->set_inner_text_by_number(1, "test 2");

// Click button `Send`  (first button on page)
DOM::$button->click_by_number(0);

// Disable browser notifications
$result2 = WEB::$browser->enable_browser_notification(false, false, false);

if ($result2) {
    echo "\n\nSuccessfully disabled browser notifications";
} else {
    echo "\n\nFailed to disable browser notifications";
}

// Остановить работу
WINDOW::$app->quit();
?>