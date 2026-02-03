<?php
// Scenario: Send an email with attachments
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

        // Prepare attachment file path
        $attachment_file_path = __DIR__ . "/test/test.bmp";

        // Prepare attachments array
        $attachments = array();
        $attachments[] = $attachment_file_path;

        // Example 1: Send email to self with attachment
        echo("Example 1: Send email to self with attachment: ");
        $toAddress = $ms_api_user_name_or_email;
        $fromAddress = $ms_api_user_name_or_email;
        $subject = "test";
        $messageBody = "test test message";
        $importance = 1;
        $ccAddress = $ms_api_user_name_or_email;
        $bccAddress = $ms_api_user_name_or_email;
        var_export(WEB::$msexchange->send_mail(
            $toAddress,
            $fromAddress,
            $subject,
            $messageBody,
            $importance,
            $ccAddress,
            $bccAddress,
            $fromAddress,
            $attachments
        ));

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