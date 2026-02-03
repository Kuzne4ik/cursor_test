<?php
// Scenario: Move message by ID
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Beginning
echo("\n<font color=blue>msexchange->".basename (__FILE__)."</font>\n");

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
        $sourceFolder = "TEST_DOLENKO";
        $messageIndex = 0;
        $mes = WEB::$msexchange->get_message_by_number($sourceFolder, $messageIndex);
        if ($mes != null) {
            // Example 1: Move message to 'TEST_DOLENKO_DELETE' folder
            echo("\nExample 1: Move message to 'TEST_DOLENKO_DELETE' folder: ");
            $destinationFolder = "TEST_DOLENKO_DELETE";
            $newMessageId = WEB::$msexchange->move_message_by_id($sourceFolder, $destinationFolder, $mes->message_id);
            if ($newMessageId)
                var_export($newMessageId);
            else
                echo("Error!");

            // Step 3: Get message by index from destination folder to get message ID
            echo("\nStep 3: Get message by index 0 from folder 'TEST_DOLENKO_DELETE' to get message ID: ");
            $mes = WEB::$msexchange->get_message_by_number($destinationFolder, 0);

            // Example 2: Move message back to 'TEST_DOLENKO' folder
            echo("\nExample 2: Move message back to 'TEST_DOLENKO' folder: ");
            $newMessageId = WEB::$msexchange->move_message_by_id($destinationFolder, $sourceFolder, $mes->message_id);
            if ($newMessageId)
                var_export($newMessageId);
            else
                echo("Error!");

            // Step 4: Get message by index from original folder to verify
            echo("\nStep 4: Get message by index 0 from folder 'TEST_DOLENKO' to get message ID: ");
            $mes = WEB::$msexchange->get_message_by_number($sourceFolder, 0);
        }
    }
}
finally
{
    // Step 5: Disconnect from MS Exchange
    echo("\nStep 5: Disconnect from MS Exchange: ");
    echo(WEB::$msexchange->disconnect());
}

// Quit the application
WINDOW::$app->quit();
?>