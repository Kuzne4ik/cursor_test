<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html") . "\n";

// 2 
echo "2. Получить номер элемента по его src: ";
echo $image->get_by_attribute("src", TEST_SCREENSHOTS_URL . "01.jpg",true)->get_number() . "\n";

// 3 
echo "3. Получить номер картинки по его src: ";
echo $image->get_by_attribute("src","02.jpg",false)->get_number("image") . "\n";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>