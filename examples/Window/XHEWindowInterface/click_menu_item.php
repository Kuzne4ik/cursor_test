<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// запустим блокнот
$app->shell_execute("open","C:\\windows\\notepad.exe");
sleep(1);
$xhe=$window->get_by_text("Блокнот",false,true);

// 1 
echo "1. Выполнить пункт меню Печать : ";
echo $xhe->click_menu_item("0:7");

// 2
echo "\n2. Выполнить пункт меню Формат:Шрифт : ";
echo $xhe->click_menu_item("Формат:Шрифт");

// конец
echo "\n";

// Quit
$app->quit();
?>