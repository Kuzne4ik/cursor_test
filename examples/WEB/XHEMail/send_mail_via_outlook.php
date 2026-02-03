<?php
// Scenario: Send mail using Outlook

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Start
echo "\n<font color=blue>webpage->".basename (__FILE__)."</font>\n";

// Example 1
echo "Example 1. Send message via Outlook: ";
$from = "FionaPayne160@yahoo.com";
$to = "loginovskiyy-guriyy@mail.com";
$subject = "test";
$body = "test message yahoo";
$priority = 0;
echo WEB::$mail->send_mail_via_outlook($from, $to, $subject, $body, $priority)."\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>