<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Удалим все задачи из расписания скриптов : ";
echo $scheduler->delete_all()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>