<?php
// Scenario: Check if a file download process is completed
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the is_download_complete function

// First, set default download folder
$download_folder = "./downloads";
WEB::$browser->set_default_download($download_folder);

echo "\nSet default download folder: " . $download_folder;

// Test download file is completed with zero download ID
$zero_id = 0;
$is_complete_zero = WEB::$browser->is_download_complete($zero_id);
echo "\nDownload complete for ID " . $zero_id . ": " . ($is_complete_zero ? "Yes" : "No") . "\n";

// Quit the application
WINDOW::$app->quit();
?>