<?php
// Scenario: Connect to MS Exchange and disconnect
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Beginning
echo "\n<font color=blue>msexchange->".basename (__FILE__)."</font>\n";

// Access credentials
require("./in/login.php");

global $ms_api_url, $ms_api_user_name_or_email, $ms_api_user_password, $ms_api_userDomain, $useAutodiscoverEWSUrl;

try{
    // Step 1: Connect to MS Exchange
    echo("Step 1: Connect to MS Exchange: ");
    $isConnected = WEB::$msexchange->connect($ms_api_url, $ms_api_user_name_or_email, $ms_api_user_password, $ms_api_userDomain, $useAutodiscoverEWSUrl);
    var_export($isConnected);
    if ($isConnected)
    {
        // Step 2: Get Inbox folders (usually no subfolders)
        echo("\nStep 2: Get Inbox folders (usually no subfolders): ");
        $inboxFolderName = "Входящие";
        print_r(WEB::$msexchange->get_folders($inboxFolderName));

        // Step 3: Get root folders (empty name)
        echo("\nStep 3: Get root folders (empty name): ");
        $rootFolderName = "";
        print_r(WEB::$msexchange->get_folders($rootFolderName));

        // Step 4: Get root folders (system name)
        echo("\nStep 4: Get root folders (system name): ");
        print_r(WEB::$msexchange->get_folders(MSExchangeMailHelper::ROOT_FOLDER_NAME));
    }
}
finally
{
    // Example 1: Disconnect from MS Exchange
    echo("\nExample 1: Disconnect from MS Exchange: ");
    echo(WEB::$msexchange->disconnect());
}

// Quit the application
WINDOW::$app->quit();
?>