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

// 2 
echo "2. Получим объект с именем list : ";
$obj=$anchor->get_by_name("list");
echo $obj->inner_number."<br><br>";

// 3 
echo "3. Получим все атрибуты у элемента с именем list : <br><br>";
echo $obj->get_all_attributes()."<br><br>";

// 4 
echo "4. Добавить id1=value_id1 : ";
echo $obj->add_attribute("id1","value_id1")."<br><br>";

// 5 
echo "5. Получим все атрибуты у элемента с именем list : <br><br>";
echo $obj->get_all_attributes()."<br><br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>