<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Выведем разрешение экрана : ";
echo $x=$windows->get_screen_width();
echo " x ".$y=$windows->get_screen_height();

// 2 
echo "\n2. Зададим новое разрешение экрана : 1024 x 768 : ";
echo $windows->set_screen_resolution(1024,768)."<br>";
sleep(6);

// 3 
echo "3. Выведем новое разрешение экрана : ";
echo $windows->get_screen_width()."x";
echo $windows->get_screen_height()."<br>";

// пауза
sleep(5);

// 4 
echo "4. Зададим старое разрешение экрана : ";
echo $windows->set_screen_resolution($x,$y);

// конец
echo "\n";

// Quit
$app->quit();
?>