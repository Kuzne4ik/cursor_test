<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Получим ширину элемента с href равным " . TEST_SITE_URL . " : ";
echo $element->get_by_attribute("href",TEST_SITE_URL)->get_width()."<br>"; 

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>