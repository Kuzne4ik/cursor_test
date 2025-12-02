<?php
// Scenario: Get the last file download process ID
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the get_last_download_id function

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
        break;
    }
    sleep(1);
} while (true);


// Остановить работу
WINDOW::$app->quit();
?>