<?php
// Scenario: Connect to IMAP server

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
$imapLogin =  new EncodedVariable('YandexImapLogin'); // Create variable 'YandexImapLogin' in "Security Manager"
$imapPassword = new EncodedVariable('YandexImapPassword'); // Create variable 'YandexImapPassword' in "Security Manager"
$sslOption = 2; // Connection encryption: 2 (ssl)
$certType = '';
$timeout = 3000;
$logPath = 'imap_log.txt';
$targetFolder = 'test';
$fromSearch = $imapLogin;

/*
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
*/

try
{
    // Step 1 - Without proxy
    WEB::$mail->set_proxy("");

    // Step 2
    echo("\nStep 2. Connect to IMAP server '$imapServer': ");
    $isConnected = WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword, $sslOption, $certType, $timeout, $logPath);
    var_export($isConnected);

    if ($isConnected) {

        // Step 3
        echo("\nStep 3. Get number of messages in folder '$targetFolder': ");
        $messagesCount = WEB::$mail->get_message_count_via_imap($targetFolder);
        echo($messagesCount);
    }
}
finally {
    echo("\nDisconnect: ");
    var_export(WEB::$mail->imap_disconnect());
}


// Quit the application
WINDOW::$app->quit();
?>