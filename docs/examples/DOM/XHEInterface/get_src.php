<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html")."<br>";

// 2 
echo "2. Получить src рисунка по его имени : ";
echo $image->get_by_name("screen1")->get_src("src")."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>