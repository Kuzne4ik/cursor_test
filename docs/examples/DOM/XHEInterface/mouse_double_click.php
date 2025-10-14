<?php $xhe_host = "127.0.0.1:7014";

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
$img=$image->get_by_id("logo",false);
echo $img->mouse_double_click($img->get_width()+5,5);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>