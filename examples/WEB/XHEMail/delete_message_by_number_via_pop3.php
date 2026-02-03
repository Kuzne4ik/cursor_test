<?php
// Scenario: Delete message by number using POP3 protocol

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
echo "Step 2. Get from field of message 0: ";
$message = WEB::$mail->get_message_by_number_via_pop3(0);
echo $message->from."\n";

// Step 3
echo "Step 3. Get subject of message 0: ";
echo $message->subject."\n";

// Step 4
echo "Step 4. Get date of message 0: ";
echo $message->date."\n";

// Step 5
echo "Step 5. Get body of message 0: ";
echo strlen($message->body)."\n";

// Step 6
echo "Step 6. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// Example 1
echo "\nExample 1. Delete message 1: ";
$messageNumber = 1;
echo WEB::$mail->delete_message_by_number_via_pop3($messageNumber)."\n";

// Step 7
echo "Step 7. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// Example 2
echo "\nExample 2. Delete all messages: ";
echo WEB::$mail->delete_all_messages_via_pop3(2)."\n";

// Step 8
echo "Step 8. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>