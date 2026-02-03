<?php
// Scenario: Delete message by from field using POP3 protocol

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
echo "Step 1. Set POP3 configuration: ";
$pop3Server = "pop.mail.ru";
$pop3Port = 995;
$username = "arna.pervak";
$password = "msnijwdx";
echo WEB::$mail->pop3_connect($pop3Server, $pop3Port, $username, $password)."\n";

// Step 2
echo "Step 2. Get message containing @corp.mail.ru in from field: ";
$fromSearch = "@corp.mail.ru";
$message = WEB::$mail->get_message_by_from_via_pop3($fromSearch);
echo "\n\nfrom: ".$message->from."\n";
echo "\n\nsubject: ".$message->subject."\n";
echo "\n\ndate: ".$message->date."\n";
echo "\n\nbody length: ".strlen($message->body)."\n\n";

// Step 3
echo "Step 3. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// Example 1
echo "\nExample 1. Delete message: ";
echo WEB::$mail->delete_message_by_from_via_pop3($fromSearch)."\n";

// Step 4
echo "Step 4. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>