<?php
// Scenario: Get download information including file save path
// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The following code demonstrates the usage of the get_download_info function

// Set вo not show file download dialog;
WEB::$browser->enable_download_file_dialog(false)."\n";

// First, set default download folder
$targetFolderPath = __DIR__ . "/temp/";

// Set default download path to relative folder `test`
echo WEB::$browser->set_default_download($targetFolderPath) . "\n";
echo "\n Target folder path: " . $targetFolderPath = "test/";

// Download file
$fileUrl = TEST_POLYGON_URL . "clear_history.cs.7z";
echo WEB::$browser->navigate($fileUrl);

echo "\nDownload file by URL: " . $fileUrl;

// Get the last file download process ID
$id = WEB::$browser->get_last_download_id();
echo "\n File process download ID: " . $id;

// wait downloading
$fileIsDownload = false;
$n = 0;
do
{
    $n++;

    if ($n > 100){
        echo("File download is failed!");
        break;
    }

    // If the file download process has been completed show download informations
    if (WEB::$browser->is_download_complete($id)){
        echo("\nSuccessfully file is downloaded!");
        $fileIsDownload = true;
        break;
    }
    sleep(1);
} while (true);

// Show file download information
if ($fileIsDownload) {
    echo("\nFile download information 'save_to':");
    echo(WEB::$browser->get_download_info($id,"save_to"));
}

// Остановить работу
WINDOW::$app->quit();
?>