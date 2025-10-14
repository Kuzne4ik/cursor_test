<?php $xhe_host = "127.0.0.1:5005";

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
echo "2. Получим нулевой ввод : ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3 
echo "3. Сделаем поиск sr : ";
$keyboard->set_current_language("en");
echo $obj->send_key("s",true)." ";
echo $obj->send_key(114,false)." ";
sleep(1);
echo $obj->send_key(13,false);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>