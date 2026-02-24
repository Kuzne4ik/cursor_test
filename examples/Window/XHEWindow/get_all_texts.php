<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст видимых главных окон : <br>";
echo $window->get_all_texts(true,true)."<br><br>";

// 2 
echo "2. Получим текст видимых окон : <br>";
echo $window->get_all_texts(true,false)."<br><br>";

// 3 
echo "3. Получим текст главных окон : <br>";
echo $window->get_all_texts(false,true)."<br><br>";

// 4 
echo "4. Получим текст всех окон : <br>";
echo $window->get_all_texts(false,false)."<br><br>";

// конец
echo "\n";

// Quit
$app->quit();
?>