<?php $xhe_host = "127.0.0.1:7024";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// чтобы быстрее
$browser->set_wait_params(5,1);

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "btn.html")."<br>";

// 2 
echo "2. Получим тэги элементов в 0 форме по значению атрибута и  его части : ";
$frm0=$form->get_by_number(0);
echo $frm0->get_child_by_attribute("id","inputs")->get_tag()." ";
echo $frm0->get_child_by_attribute("id","i",false)->get_tag();

// 3
echo "\n3. Получим тэг элемента в 0 форме по значению атрибута и его части (включая подэлементы): ";
echo $frm0->get_child_by_attribute("href","#",false,true)->get_tag();

// 3
echo "\n3. Получим тэг элемента в 0 форме по значению атрибута, используя решулярные выражения (включая подэлементы): ";
echo $frm0->get_child_by_attribute("href","/#/i",2,true)->get_tag();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>