<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Пошлем сообщение о закрытие эмулятора 0x10 (WM_CLOSE) : ";
echo $window->send_message_by_number(0,0x10,0,0,true,true);

// конец
echo "\n";

// Quit
$app->quit();
?>