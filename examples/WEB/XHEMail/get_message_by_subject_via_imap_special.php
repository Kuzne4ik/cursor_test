<?php
// Scenario: Demonstrates getting messages by subject via IMAP with multiple email providers

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


/**
 * @param string $imap_server
 * @param int $imap_port
 * @param string $imap_login
 * @param string $imap_password
 * @param int $ssl_option
 * @param string $cert_type
 * @param int $timeout
 * @param string $log_path
 * @param string $target_folder
 * @param string $subject_search
 * @return void
 */
function call(string $imap_server, int $imap_port, string $imap_login, string $imap_password, int $ssl_option, string $cert_type, int $timeout, string $log_path, string $target_folder, string $subject_search): void
{
    try {
        // Step 2: Connect to IMAP server
        echo("\nStep 2: Connect to IMAP server '$imap_server': ");
        $isConnected = WEB::$mail->imap_connect($imap_server, $imap_port, $imap_login, $imap_password, $ssl_option, $cert_type, $timeout, $log_path);
        var_export($isConnected);

        if ($isConnected) {

            // Step 3: Get message count in folder
            echo("\nStep 3: Get message count in folder '$target_folder': ");
            $messagesCount = WEB::$mail->get_message_count_via_imap($target_folder);
            echo($messagesCount);

            if ($messagesCount == 0) {
                // Step 4: Add test message to folder
                echo("\nStep 4: Add test message to folder '$target_folder':");
                echo(WEB::$mail->add_message_via_imap($target_folder, $imap_login, $imap_login, "test", "test", 0));
            }

            // Example 1: Get message by subject
            echo("\nExample 1: Get message by subject '$subject_search' in folder '$target_folder': ");
            $message = WEB::$mail->get_message_by_subject_via_imap($target_folder, $subject_search, false, 0);
            if (!empty($message->from)) {
                echo("\nid: " . $message->message_id);
                echo("\nfrom: " . $message->from);
                echo("\nsubject: " . $message->subject);
                echo("\ndate: " . $message->date);
                echo("\nread: " . $message->is_readed);
                echo("\nbody length: " . strlen($message->body) . "\n");
            } else {
                echo('Message not found!');
            }
        }
    } finally {
        // Step 5: Disconnect
        echo("\nStep 5: Disconnect: ");
        var_export(WEB::$mail->imap_disconnect());
    }
}

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
$fromSearch = 'test';
$subjectSearch = 'test';

call($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath, $targetFolder, $subjectSearch);

echo("\n\nTEST MAIL.RU");

$imapServer = 'imap.mail.ru';
$imapPort = 993;
$imapLogin =  new EncodedVariable('MailRUImapLogin');
$imapPassword = new EncodedVariable('MailRUImapPassword');
$sslOption = 2; // Connection encryption: 2 (ssl)
$certType = '';
$timeout = 3000;
$logPath = 'imap_log.txt';
$targetFolder = 'test';
$fromSearch = $imapLogin;
$subjectSearch = 'test';

call($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath, $targetFolder, $subjectSearch);
