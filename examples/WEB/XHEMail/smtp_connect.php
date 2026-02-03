<?php
// Scenario: Connect to SMTP server

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo "\n<font color=blue>webpage->".basename (__FILE__)."</font>\n";

// Step 1 - Through proxy
$proxyUrl = "socks://127.0.0.1:9150";
WEB::$mail->set_proxy($proxyUrl);

// Step 2
echo "Step 2. Send message via Rambler: ";
$ramblerServer = "smtp.rambler.ru";
$ramblerPort = 465;
$ramblerLogin = "loginovskiyy-guriyy";
$ramblerPassword = "rieqoo";
echo WEB::$mail->smtp_connect($ramblerServer, $ramblerPort, $ramblerLogin, $ramblerPassword)." ";
$from = "loginovskiyy-guriyy@rambler.ru";
$to = "loginovskiyy-guriyy@mail.com";
$subject = "test";
$body = "test message rambler";
$priority = 0;
echo WEB::$mail->send_mail_via_smtp($from, $to, $subject, $body, $priority)."\n";

// Step 3
echo "Step 3. Send message via Yahoo: ";
$yahooServer = "smtp.mail.yahoo.com";
$yahooPort = 465;
$yahooLogin = "FionaPayne160";
$yahooPassword = "k6cabV7ceX";
echo WEB::$mail->smtp_connect($yahooServer, $yahooPort, $yahooLogin, $yahooPassword)." ";
$from = "FionaPayne160@yahoo.com";
$to = "loginovskiyy-guriyy@mail.com";
$subject = "test";
$body = "test message yahoo";
$priority = 0;
echo WEB::$mail->send_mail_via_smtp($from, $to, $subject, $body, $priority)."\n";

// Step 4 - Without proxy
WEB::$mail->set_proxy("");

// Step 5
echo "Step 5. Send message via Yandex: ";
$yandexServer = "smtp.yandex.ru";
$yandexPort = 465;
$yandexLogin = "myfugow";
$yandexPassword = "1291975119";
echo WEB::$mail->smtp_connect($yandexServer, $yandexPort, $yandexLogin, $yandexPassword)." ";
$from = "myfugow@yandex.ru";
$to = "loginovskiyy-guriyy@mail.com";
$subject = "test";
$body = "test message yandex";
$priority = 0;
echo WEB::$mail->send_mail_via_smtp($from, $to, $subject, $body, $priority)."\n";

// Step 6
echo "Step 6. Send message via Mail: ";
$mailServer = "smtp.mail.ru";
$mailPort = 465;
$mailLogin = "arna.pervak";
$mailPassword = "msnijwdx";
echo WEB::$mail->smtp_connect($mailServer, $mailPort, $mailLogin, $mailPassword)." ";
$from = "arna.pervak@mail.ru";
$to = "loginovskiyy-guriyy@mail.com";
$subject = "test";
$body = "test message yahoo";
$priority = 0;
echo WEB::$mail->send_mail_via_smtp($from, $to, $subject, $body, $priority)."\n";

// Step 7
echo "Step 7. Disconnect from SMTP: ";
echo WEB::$mail->smtp_disconnect();

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
