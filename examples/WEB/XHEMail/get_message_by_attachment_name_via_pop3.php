<?php
// Scenario: Get message by attachment name using POP3 protocol

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
$login = "xxx@mail.ru";
$password = "xxx";
echo WEB::$mail->pop3_connect($pop3Server, $pop3Port, $login, $password)."\n";

// Example 1
echo "Example 1. Get message: ";
$attachmentName = "te";
$exactMatch = false;
$message = WEB::$mail->get_message_by_attachment_name_via_pop3($attachmentName, $exactMatch);
echo "&nbsp;&nbsp;from: ".$message->from."\n";
echo "&nbsp;&nbsp;subject: ".$message->subject."\n";
echo "&nbsp;&nbsp;date: ".$message->date."\n";
echo "&nbsp;&nbsp;body length: ".strlen($message->body)."\n\n";

// Step 2
echo "Step 2. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
