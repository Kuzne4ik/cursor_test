<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Выведем разрешение основного экрана : ";
echo $windows->get_screen_width()."x";
echo $windows->get_screen_height();

// 2
echo "\n2. Выведем разрешение 0 экрана : ";
echo $windows->get_screen_width(0)."x";
echo $windows->get_screen_height(0)." ";
echo $windows->get_screen_width(0,false)."x";
echo $windows->get_screen_height(0,false)." ";

// 3
echo "\n3. Выведем разрешение 1 экрана : ";
echo $windows->get_screen_width(1)."x";
echo $windows->get_screen_height(1);
echo $windows->get_screen_width(1,false)."x";
echo $windows->get_screen_height(1,false)." ";

// 4
echo "\n4. Выведем разрешение 2 экрана : ";
echo $windows->get_screen_width(2)."x";
echo $windows->get_screen_height(2);

// конец
echo "\n";

// Quit
$app->quit();
?>