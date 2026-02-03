<?php
// Scenario: Get message by category
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
    if ($isConnected) {
        // Example 1: Get message by exact category name
        echo("\nExample 1: Get message by exact category name: ");
        $folderName = "TEST_DOLENKO";
        $categoryName = "Желтая категория";
        $exactMatch = true;
        print_r(WEB::$msexchange->get_message_by_category($folderName, $categoryName, $exactMatch));

        // Example 2: Get message by category name and date
        echo("\nExample 2: Get message by category name and date: ");
        $messageIndex = 0;
        $isRead = false;
        $dateFrom = "09.06.2025";
        $dateTo = "09.06.2025";
        print_r(WEB::$msexchange->get_message_by_category($folderName, $categoryName, false, $messageIndex, $isRead, $dateFrom, $dateTo));

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