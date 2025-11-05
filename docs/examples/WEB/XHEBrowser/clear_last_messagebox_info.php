<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the clear_last_messagebox_info function

// First, disable (skip with default answer 'ОК') browser message boxes 
WEB::$browser->enable_browser_message_boxes(false, "ОК");

echo "Browser message boxes disable";

// Navigate to a website
$url = "https://www.wikipedia.org";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;

// Test with JavaScript alert to generate message box info
$js_alert = "alert('Test alert message');";
WEB::$browser->run_java_script($js_alert);
WEB::$browser->wait(2);

// Get message box information before clearing
$caption_before = WEB::$browser->get_last_messagebox_caption();
$text_before = WEB::$browser->get_last_messagebox_text();
$type_before = WEB::$browser->get_last_messagebox_type();

echo "\n\nBefore clearing:";
echo "\nCaption: '" . $caption_before . "'";
echo "\nText: '" . $text_before . "'";
echo "\nType: '" . $type_before . "'";

// Clear last message box info
$result = WEB::$browser->clear_last_messagebox_info();

// Display the result
if ($result) {
    echo "\n\nSuccessfully cleared last message box info";
} else {
    echo "\n\nFailed to clear last message box info";
}

// Get message box information after clearing
$caption_after = WEB::$browser->get_last_messagebox_caption();
$text_after = WEB::$browser->get_last_messagebox_text();
$type_after = WEB::$browser->get_last_messagebox_type();

echo "\n\nAfter clearing:";
echo "\nCaption: '" . $caption_after . "'";
echo "\nText: '" . $text_after . "'";
echo "\nType: '" . $type_after . "'";

// Остановить работу
WINDOW::$app->quit();
?>