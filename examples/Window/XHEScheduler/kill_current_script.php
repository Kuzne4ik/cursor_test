<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Укажем принудительно завершать выполняющийся скрипт : ";
echo $scheduler->kill_current_script(true)."<br>";

sleep(3);

// 2 
echo "2. Укажем принудительно не завершать выполняющийся скрипт : ";
echo $scheduler->kill_current_script(false)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>