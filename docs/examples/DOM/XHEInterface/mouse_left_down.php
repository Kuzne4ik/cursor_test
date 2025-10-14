<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем в гугл : ";
echo $browser->navigate("http://google.ru")."<br>";

// 2 
echo "2. Нажмем мышь с паузой на отпускание на кнопке 'Мне повезет' : ";
echo $element->get_by_name("btnI")->mouse_left_down(1,1)." ";
sleep(3);
echo $element->get_by_name("btnI")->mouse_left_up(1,1)."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>