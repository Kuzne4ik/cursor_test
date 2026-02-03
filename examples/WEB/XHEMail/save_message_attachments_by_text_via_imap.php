<?php
// Scenario: Demonstrates saving message attachments by text via IMAP

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo("\n<span style=\"color: blue; \">mail->" .basename (__FILE__). "</span>\n");

// Set search limit for message count
echo("\nStep 1: Set search limit for message count: 100");
var_export(WEB::$mail->set_limit(100));


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
$subjectSearch = 'test';
$textSearch = 'test';

try {
    // Step 2: Connect to IMAP server
    echo("\nStep 2: Connect to IMAP server '$imapServer': ");
    $isConnected = WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath);
    var_export($isConnected);

    if ($isConnected) {

        // Example 1: Save attachments by text
        echo("\nExample 1: Save attachments of message by text '$textSearch' from folder '$targetFolder' to local folder 'test': ");
        var_export(WEB::$mail->save_message_attachments_by_text_via_imap("test", $targetFolder, $textSearch, false));

    }
}
finally {
    echo("\nDisconnect: ");
    var_export(WEB::$mail->imap_disconnect());
}


// Quit
WINDOW::$app->quit();
?>