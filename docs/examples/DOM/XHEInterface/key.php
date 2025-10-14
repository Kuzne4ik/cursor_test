<?php $xhe_host = "127.0.0.1:7010";

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
echo "2. Получим строку поиска как элемент : ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3 
echo "3. Нажмем клавишу s (код 83) : ";
$keyboard->set_current_language("en");
$app->set_foreground_window();
echo $obj->focus()." ".$obj->key(83);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>