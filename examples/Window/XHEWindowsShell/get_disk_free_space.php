<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получить свободное место на диске C : ";
echo ($windows->get_disk_free_space("c:")/1024/1024/1024)." Gb\n";

// 2 
echo "2. Получить свободное место на диске D : ";
echo ($windows->get_disk_free_space("d:")/1024/1024/1024)." Gb\n";

// 3 
echo "3. Получить свободное место на диске T : ";
echo ($windows->get_disk_free_space("t:"));

// конец
echo "\n";

// Quit
$app->quit();
?>