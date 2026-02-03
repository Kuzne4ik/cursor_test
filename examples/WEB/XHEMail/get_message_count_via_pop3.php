<?php
// Scenario: Get message count using POP3 protocol

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
echo "Step 1. Connect to POP3 Yandex: ";
$pop3Server = "pop.rambler.ru";
$pop3Port = 995;
$username = "loginovskiyy-guriyy";
$password = "rieqoo";
echo WEB::$mail->pop3_connect($pop3Server, $pop3Port, $username, $password)."\n";

// Step 2
echo "Step 2. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// Step 3
echo "Step 3. Connect to POP3 mail.ru: ";
$pop3Server = "pop.mail.ru";
$pop3Port = 995;
$username = "arna.pervak";
$password = "msnijwdx";
echo WEB::$mail->pop3_connect($pop3Server, $pop3Port, $username, $password)."\n";

// Step 4
echo "Step 4. Get number of messages: ";
echo WEB::$mail->get_message_count_via_pop3()."\n";

// Step 5
echo "Step 5. Disconnect from POP3: ";
echo WEB::$mail->pop3_disconnect()."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>