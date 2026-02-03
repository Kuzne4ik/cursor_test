<?php
// Scenario: Get message by ID using POP3 protocol

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo "\n<font color=blue>webpage->".basename (__FILE__)."</font>\n";

// Step 1
echo "Step 1. Connect to IMAP server: ";
$imapServer = "imap.mail.ru";
$imapPort = 993;
$imapLogin = "@mail.ru";
$imapPassword = "xxx";
echo WEB::$mail->imap_connect($imapServer, $imapPort, $imapLogin, $imapPassword)."\n";

// Step 2
echo "Step 2. Get message 0: ";
$message = WEB::$mail->get_message_by_number_via_imap("", 0);
echo "&nbsp;&nbsp;from: ".$message->from."\n";

// Step 3
echo "Step 3. Get message by Id: ";
$messageId = $message->message_id;
$message = WEB::$mail->get_message_by_id_via_imap("", $messageId);
echo "&nbsp;&nbsp;from: ".$message->from."\n";

// Step 4
echo "Step 4. Disconnect: ";
echo WEB::$mail->imap_disconnect()."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>