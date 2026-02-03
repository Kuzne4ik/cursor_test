<?php
// Scenario: Delete message by ID using IMAP protocol

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
    // Step 1
    echo("\nStep 1. Connect to IMAP server '$imapServer': ");
    $isConnected = WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath);
    var_export($isConnected);

    if ($isConnected) {

        // Step 2
        echo("\nStep 2. Get number of messages in folder '$targetFolder': ");
        $messagesCount = WEB::$mail->get_message_count_via_imap($targetFolder);
        echo($messagesCount);

        if ($messagesCount == 0) {
            // Step 3
            echo("\nStep 3. Add message to folder '$targetFolder':");
            $from = $imapLogin;
            $to = $imapLogin;
            $subject = $subjectSearch;
            $body = "test";
            $priority = 0;
            echo(WEB::$mail->add_message_via_imap($targetFolder, $from, $to, $subject, $body, $priority));
        }

        // Step 4
        echo("\nStep 4. Get message 0 in folder '$targetFolder': ");
        $message = WEB::$mail->get_message_by_number_via_imap($targetFolder, 0);
        echo("id: " . $message->message_id . "\n");
        echo("from: " . $message->from . "\n");
        echo("subject: " . $message->subject . "\n");
        echo("date: " . $message->date . "\n");
        echo("body length: " . strlen($message->body) . "\n\n");

        // Step 5
        echo("\nStep 5. Get number of messages in folder '$targetFolder': ");
        echo(WEB::$mail->get_message_count_via_imap($targetFolder));

        // Example 1
        echo("\n\nExample 1. Delete message by its Id = '$message->message_id' in folder '$targetFolder': ");
        echo(WEB::$mail->delete_message_by_id_via_imap($targetFolder, $message->message_id));

        // Step 6
        echo("\nStep 6. Get number of messages in folder '$targetFolder': ");
        echo(WEB::$mail->get_message_count_via_imap($targetFolder));
    }
}
finally {
    echo("\nDisconnect: ");
    echo(WEB::$mail->imap_disconnect());
}


// Quit the application
WINDOW::$app->quit();
?>