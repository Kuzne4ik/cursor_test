<?php

$xhe_host = "127.0.0.1:7028";

// init
require("D:/User/CSharp/Src XHE/bin/x64/Debug/net48/Templates/init.php");
$bUTF8Ver=true;
$PHP_Use_Trought_Shell=true;

echo $input->get_by_number(0)->send_input("Л");


// Quit
$app->quit();
?>