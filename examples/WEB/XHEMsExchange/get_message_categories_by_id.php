<?php
// Scenario: Get message categories by ID
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
        // Step 2: Get message by index to get message ID
        echo("\nStep 2: Get message by index 0 from folder 'TEST_DOLENKO' to get message ID: ");
        $folderName = "TEST_DOLENKO";
        $messageIndex = 0;
        $mes = WEB::$msexchange->get_message_by_number($folderName, $messageIndex);
        if ($mes != null) {
            // Example 1: Get message categories by ID and folder
            echo("\nExample 1: Get message categories by ID and folder 'TEST_DOLENKO': ");
            print_r(WEB::$msexchange->get_message_categories_by_id($folderName, $mes->message_id));
        }
        else
            echo("Error: Failed to get message by index 0 from folder 'TEST_DOLENKO'");
    }
}
finally
{
    // Step 3: Disconnect from MS Exchange
    echo("\nStep 3: Disconnect from MS Exchange: ");
    echo(WEB::$msexchange->disconnect());
}

// Quit the application
WINDOW::$app->quit();
?>