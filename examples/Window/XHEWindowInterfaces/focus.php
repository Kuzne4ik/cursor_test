<?php
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Зададим фокус на Блокнот: ";
$skype = WINDOW::$window->get_all_by_text("Блокнот",false)[0];
echo $skype->foreground()." ";
echo $skype->focus()."<br>";

sleep(2);

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>