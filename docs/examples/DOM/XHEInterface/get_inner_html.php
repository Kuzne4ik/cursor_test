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
echo "2. Получим html текст элемента с id равным id_click : ";
echo $element->get_by_attribute("id","id_onclick",true)->get_inner_html()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>