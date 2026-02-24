<?php $xhe_host = "127.0.0.1:7027";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Завершить сеанс: ";
echo $windows->logoff();

// конец
echo "\n";

// Quit
$app->quit();
?>