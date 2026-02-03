<?php
// Scenario: Get message by subject
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
        // Example 1: Get message with subject, read
        echo("\nExample 1: Get message with subject, read: ");
        $folderName = "Входящие";
        $subject = "test";
        $exactMatch = true;
        $messageIndex = 0;
        $isRead = true;
        $dateFrom = "";
        $dateTo = "";
        print_r(WEB::$msexchange->get_message_by_subject($folderName, $subject, $exactMatch, $messageIndex, $isRead, $dateFrom, $dateTo));
     
        // Example 2: Get message with subject, read by date
        echo("\nExample 2: Get message with subject, read by date: ");
        $dateFrom = "28.05.2025";
        $dateTo = "28.05.2025";
        print_r(WEB::$msexchange->get_message_by_subject($folderName, $subject, $exactMatch, $messageIndex, $isRead, $dateFrom, $dateTo));
    }
}
finally
{
    // Step 2: Disconnect from MS Exchange
    echo("\nStep 2: Disconnect from MS Exchange: ");
    echo(WEB::$msexchange->disconnect());
}

// Quit the application
WINDOW::$app->quit();
?>