<?php
$xhe_host = "127.0.0.1:7013";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the save_page_as function

// First, navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait_js(3);

echo "Navigated to: " . $url;

// Save page as HTML
$html_file = "./google_page.html";
$result = WEB::$browser->save_page_as($html_file);

// Display the result
if ($result) {
    echo "\n\nSuccessfully saved page as: " . $html_file;
    echo "\nFile saved to: " . getcwd() . "/" . $html_file . "\n";
} else {
    echo "\n\nFailed to save page as: " . $html_file . "\n";
}

// Остановить работу
WINDOW::$app->quit();
?>