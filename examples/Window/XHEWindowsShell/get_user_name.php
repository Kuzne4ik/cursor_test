<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Выведем имя залогиненного в Windows пользователя : ";
echo $windows->get_user_name();

// конец
echo "\n";

// Quit
$app->quit();
?>