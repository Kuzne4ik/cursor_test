<?php
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the wait_download_and_get_file_path function

// First, set default download folder
$download_folder = "./downloads";
WEB::$browser->set_default_download($download_folder);

echo "Set default download folder: " . $download_folder;

// Navigate to a website
$url = TEST_POLYGON_URL . "clear_history.cs.7z";
WEB::$browser->navigate($url);

echo "\n\nNavigated to: " . $url;

// Wait for download with wait time (100 seconds)
$file_path = WEB::$browser->wait_download_and_get_file_path(100);
echo "\n\nWaited for download";
echo "\nFile path: '" . $file_path . "'";

// Quit the application
WINDOW::$app->quit();
?>