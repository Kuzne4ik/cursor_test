<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br><br>";

// получим ссылку с именеем igvard
$obj=$anchor->get_by_name("igvard");

// 2 
echo "2. Получим все атрибуты элемента с именем 'igvard' : <br><br>";
echo $obj->get_all_attributes()."<br><br>";

// 3 
echo "3. Удалим у элемента атрибут с именем target : ";
echo $obj->remove_attribute("target")."<br><br>";

// 4 
echo "4. Получим все атрибуты элемента с именем 'igvard' : <br><br>";
echo $obj->get_all_attributes();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>