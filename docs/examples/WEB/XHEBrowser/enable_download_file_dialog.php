<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the enable_download_file_dialog function

// First, check if download file dialog is currently enabled
$download_dialog_enabled = WEB::$browser->is_enable_download_file_dialog();
echo "Download file dialog currently enabled: " . ($download_dialog_enabled ? "Yes" : "No");

// Enable download file dialog
$result = WEB::$browser->enable_download_file_dialog(true);

// Display the result
if ($result) {
    echo "\n\nSuccessfully enabled download file dialog";
} else {
    echo "\n\nFailed to enable download file dialog";
}

// Check again
$download_dialog_enabled2 = WEB::$browser->is_enable_download_file_dialog();
echo "\nDownload file dialog enabled after enabling: " . ($download_dialog_enabled2 ? "Yes" : "No");

// Disable download file dialog
$result2 = WEB::$browser->enable_download_file_dialog(false);

echo "\n\nDisabled download file dialog: " . ($result2 ? "Success" : "Failed");

// Check again
$download_dialog_enabled3 = WEB::$browser->is_enable_download_file_dialog();
echo "\nDownload file dialog enabled after disabling: " . ($download_dialog_enabled3 ? "Yes" : "No");


// Quit the application
WINDOW::$app->quit();
?>