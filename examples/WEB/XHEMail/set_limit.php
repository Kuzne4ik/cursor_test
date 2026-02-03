<?php
// Scenario: Set search limit for message operations

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo("\n<span style=\"color: blue; \">mail->" .basename (__FILE__). "</span>\n");

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

        // Step 4. Set new limit on number of requests for reading data from server within current command
        // Search for messages within folder is performed in the range of number of messages in target folder.
        // If the number of messages in target folder exceeds the limit,
        // then iterations during message search will be performed until the limit is exceeded!
        echo("\nStep 4. Set new limit = 100 on number of requests for reading data from server within current command: ");
        $limitValue = 100;
        WEB::$mail->set_limit($limitValue);

        // Step 5
        echo("\nStep 5. Get message 101 in folder '$targetFolder' by subject 'test101': ");
        $subjectSearch = "test101";
        $message = WEB::$mail->get_message_by_subject_via_imap($targetFolder, $subjectSearch, false, 101);
        if ($message->from){
            echo("\nid: " . $message->message_id);
            echo("\nsubject: " . $message->subject);
            echo("\nfrom: " . $message->from);
            echo("\ndate: " . $message->date);
            echo("\nread: " . $message->is_readed);
            echo("\nbody length: " . strlen($message->body) . "\n");
        }
        else 
        {
            echo("\nMessage in folder '$targetFolder' by subject was not found!");
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