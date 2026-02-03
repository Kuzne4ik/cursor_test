<?php
// Scenario: Get message by attachment name using IMAP protocol

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo("\n<span style=\"color: blue; \">mail->" .basename (__FILE__). "</span>\n");

// Set search depth limit for number of messages
echo("\nSet search depth limit for number of messages: 100");
var_export(WEB::$mail->set_limit(100));

echo("\n\nTEST YA");
$imapServer = 'imap.yandex.ru';
$imapPort = 993;
$imapLogin =  new EncodedVariable('YandexImapLogin'); // Create variable 'YandexImapLogin' in "Security Manager"
$imapPassword = new EncodedVariable('YandexImapPassword'); // Create variable 'YandexImapPassword' in "Security Manager"
$sslOption = 2; // Connection encryption: 2 (ssl)
$certType = '';
$timeout = 3000;
$logPath = 'imap_log.txt';
$targetFolder = 'test';
$fromSearch = $imapLogin;

try {
    // Step 1
    echo("\nStep 1. Connect to IMAP server: ");
    $isConnected = WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath);
    var_export($isConnected);

    if ($isConnected) {

        // Example 1
        echo("\n\nExample 1. Get message by attachment file name 'test': ");
        $attachmentName = "test";
        $message = WEB::$mail->get_message_by_attachment_name_via_imap($targetFolder, $attachmentName);
        if (!empty($message->from)) {
            echo("id: " . $message->message_id . "\n");
            echo("from: " . $message->from . "\n");
            echo("subject: " . $message->subject . "\n");
            echo("date: " . $message->date . "\n");
            echo("body length: " . strlen($message->body) . "\n\n");
        }
        else {
            echo('Message not found!');
        }
    }
}
finally {
    echo("\nDisconnect: ");
    var_export(WEB::$mail->imap_disconnect());
}


// Quit the application
WINDOW::$app->quit();
?>