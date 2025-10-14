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

// получим элемент
$obj=$element->get_by_inner_text("onclick",false);

// 2 
echo "2. Получим все атрибуты у элемента с именем 'onclick' : <br><br>";
echo $obj->get_all_attributes_values()."<br><br>";

// 3 
echo "3. Зададим у элемента с внутренним текстом 'ссылка onclick' атрибут с именем target=12345 : ";
echo $obj->set_attribute("target","12345")."<br><br>";

// 5 
echo "5. Получим все атрибуты у элемента с именем 'onclick' : <br><br>";
echo $obj->get_all_attributes_values("onclick")."<br><br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>