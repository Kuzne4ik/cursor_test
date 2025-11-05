<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_default_download function

// First, set a default download folder
$download_folder = "./downloads";
WEB::$browser->set_default_download($download_folder);

echo "Set default download folder: " . $download_folder;
$result = WEB::$browser->set_default_download($download_folder);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set default download folder";
} else {
    echo "\n\nFailed to set default download folder";
}

// Navigate to a website to download file
$url = TEST_POLYGON_URL . "clear_history.cs.7z";
WEB::$browser->navigate($url);

echo "\n\nNavigated to: " . $url;
echo "\nDefault download folder is set";

// Reset default download folder
$result2 = WEB::$browser->reset_default_download();

// Display the result
if ($result2) {
    echo "\n\nSuccessfully reset default download folder";
} else {
    echo "\n\nFailed to reset default download folder";
}

// Navigate to a website to download file again
$url = TEST_POLYGON_URL . "clear_history.cs.7z";
WEB::$browser->navigate($url);
// Остановить работу
WINDOW::$app->quit();
?>