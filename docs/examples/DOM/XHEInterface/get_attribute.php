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
echo "2. Получим атрибут 'href' у элемента с текстом, содержащим onclick : ";
echo $anchor->get_by_inner_text("onclick",false)->get_attribute("href")."<br>";

// 3 
echo "3. Получим атрибут 'href' , 'id' , 'name' у элемента с текстом, содержащим onclick : ";
$obj=$anchor->get_by_inner_text("onclick",false);
echo $obj->get_attribute("href")." ".$obj->get_attribute("id")." ".$obj->get_attribute("name")."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>