<?php
// Scenario: Get message by subject using POP3 protocol

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

// Example 1
echo "Example 1. Get message containing Mail failure in subject: ";
$subjectSearch = "Mail failure";
$message = WEB::$mail->get_message_by_subject_via_pop3($subjectSearch);
echo "&nbsp;&nbsp;from: ".$message->from."\n";
echo "&nbsp;&nbsp;subject: ".$message->subject."\n";
echo "&nbsp;&nbsp;date: ".$message->date."\n";
echo "&nbsp;&nbsp;body length: ".strlen($message->body)."\n\n";

// Example 2
echo "Example 2. Get message 1 containing Mail failure in subject: ";
$exactMatch = false;
$messageIndex = 1;
$message = WEB::$mail->get_message_by_subject_via_pop3($subjectSearch, $exactMatch, $messageIndex);
echo "&nbsp;&nbsp;from: ".$message->from."\n";
echo "&nbsp;&nbsp;subject: ".$message->subject."\n";
echo "&nbsp;&nbsp;date: ".$message->date."\n";
echo "&nbsp;&nbsp;body length: ".strlen($message->body)."\n\n";

// Step 2
echo "Step 2. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// Example 3
echo "Example 3. Delete message 0 containing Mail failure in subject: ";
echo WEB::$mail->delete_message_by_subject_via_pop3($subjectSearch)."\n";

// Step 3
echo "Step 3. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>