<?php

$xhe_host = "127.0.0.1:7025";

// init
require("D:/User/CSharp/Src XHE/bin/x64/Debug/net48/Templates/init.php");
$bUTF8Ver=true;
$PHP_Use_Trought_Shell=true;

// 2 
echo "2. Переместим мышь в меню 'Шрифт' за 2 секунды: ";
echo $mouse->move_on_screen(60,225,2)."<br>";

// Quit
$app->quit();
?>