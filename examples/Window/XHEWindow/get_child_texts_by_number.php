<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим тексты дочерних окон приложения: <br>";
echo $window->get_child_texts_by_number(0,true,true)."<br>";

// 2 
echo "2. Получим тексты дочерних окон 5 видимого и главного окна: <br>";
echo $window->get_child_texts_by_number(5,true,true)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>