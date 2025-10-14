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
echo "3. Введем s (код 83) : ";
$keyboard->set_current_language("en");
echo $obj->send_key_down(83,true)." ";
echo $obj->send_key_up(83,true)."<br>";

// 4 
echo "4. Перейдем на msn : ";
echo $browser->navigate("http://msn.ru")."<br>";
sleep(2);

// 5 
echo "5. Сдвинем страницу вниз (PgDown) по элементу с заданнйо точки : ";
$obj=$webpage->get_element_from_point(81,5);
echo $obj->send_key_down(34,true)." ";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>