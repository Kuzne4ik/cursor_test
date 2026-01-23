<?php
// Scenario: Check if download file dialog is enabled, enable it, navigate to a website, then disable it to demonstrate the is_enable_download_file_dialog function
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_enable_download_file_dialog function

// First, check if download file dialog is currently enabled
$download_dialog_enabled = WEB::$browser->is_enable_download_file_dialog();
echo "Download file dialog currently enabled: " . ($download_dialog_enabled ? "Yes" : "No");

// Enable download file dialog
WEB::$browser->enable_download_file_dialog(true);

// Check again after enabling
$download_dialog_enabled2 = WEB::$browser->is_enable_download_file_dialog();
echo "\nDownload file dialog enabled after enabling: " . ($download_dialog_enabled2 ? "Yes" : "No");

// Navigate to a website
$url = "https://www.google.com";
WEB::$browser->navigate($url);
WEB::$browser->wait(3);

echo "\n\nNavigated to: " . $url;
echo "\nDownload file dialog is enabled";

// Disable download file dialog
WEB::$browser->enable_download_file_dialog(false) . "\n";

// Check again after disabling
$download_dialog_enabled3 = WEB::$browser->is_enable_download_file_dialog();
echo "\nDownload file dialog enabled after disabling: " . ($download_dialog_enabled3 ? "Yes" : "No") . "\n";

// Остановить работу
WINDOW::$app->quit();
?>