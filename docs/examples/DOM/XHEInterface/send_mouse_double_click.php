<?php $xhe_host = "127.0.0.1:3031";

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
echo "2. Сделаем двойной щелчок на элементе с текстом 'Google' : ";
$img=$image->get_by_number(0);
echo $img->send_mouse_double_click($img->get_width()/2,-10);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>