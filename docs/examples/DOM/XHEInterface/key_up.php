<?php $xhe_host = "127.0.0.1:7014";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>keyboard->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на яндекс : ";
echo $browser->navigate("http://ya.ru")."<br>";

// 2 
echo "2. Получим строку поиска : ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3 
echo "3. Нажмем a : ";
echo $obj->key_down("a")."  +  ";
echo $obj->key_up("a");

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>