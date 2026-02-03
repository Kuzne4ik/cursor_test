<?php
// Scenario: Demonstrates moving messages by number via IMAP

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

try {
    // Step 2: Connect to IMAP server
    echo("\nStep 2: Connect to IMAP server '$imapServer': ");
    $isConnected = WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath);
    var_export($isConnected);

    if ($isConnected) {

        // Step 3: Get message count in folder
        echo("\nStep 3: Get message count in folder '$targetFolder': ");
        $messagesCount = WEB::$mail->get_message_count_via_imap($targetFolder);
        echo($messagesCount);

        if ($messagesCount == 0) {
            // Step 4: Add test message to folder
            echo("\nStep 4: Add test message to folder '$targetFolder':");
            echo(WEB::$mail->add_message_via_imap($targetFolder, $imapLogin, $imapLogin, $subjectSearch, "test", 0));
        }

        // Step 5: Get message by number
        echo("\nStep 5: Get message by number in folder '$targetFolder': ");
        $message = WEB::$mail->get_message_by_number_via_imap($targetFolder, 0);
        echo("\nid: " . $message->message_id);
        echo("\nsubject: " . $message->subject);
        echo("\nfrom: " . $message->from);
        echo("\ndate: " . $message->date);
        echo("\nbody length: " . strlen($message->body) . "\n");

        // Example 1: Move message by number
        echo("\nExample 1: Move message by number 0 from folder '$targetFolder': ");
        echo(WEB::$mail->move_message_by_number_via_imap($targetFolder, "test2", 0));

        // Step 6: Get final message count
        echo("\nStep 6: Get message count in folder 'test': ");
        $messagesCount = WEB::$mail->get_message_count_via_imap($targetFolder);
        echo($messagesCount);

    }
}
finally {
    echo("\nDisconnect: ");
    var_export(WEB::$mail->imap_disconnect());
}


// Quit
WINDOW::$app->quit();
?>