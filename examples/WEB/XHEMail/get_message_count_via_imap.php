<?php
// Scenario: Get message count using IMAP protocol

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo("\n<span style=\"color: blue; \">webpage->" .basename (__FILE__). "</span>\n");

echo("\n\nTEST YA");

$imapServer = 'imap.yandex.ru';
$imapPort = 993;
$imapLogin =  new EncodedVariable('YandexImapLogin');
$imapPassword = new EncodedVariable('YandexImapPassword');
$sslOption = 2; // Connection encryption: 2 (ssl)
$certType = '';
$timeout = 3000;
$logPath = 'imap_log.txt';
$targetFolder = 'test';
$fromSearch = $imapLogin;

try {
    // Step 1
    echo("\nStep 1. Connect to IMAP server '$imapServer': ");
    $isConnected = WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath);
    var_export($isConnected);

    if ($isConnected) {

        // Example 1
        echo("\n\nExample 1. Get number of messages in folder '$targetFolder': ");
        echo(WEB::$mail->get_message_count_via_imap($targetFolder));
    }

}
finally {
    echo("\nDisconnect: ");
    var_export(WEB::$mail->imap_disconnect());
}

// Quit the application
WINDOW::$app->quit();
?>