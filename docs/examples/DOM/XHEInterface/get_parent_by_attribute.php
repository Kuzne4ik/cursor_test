<?php $xhe_host = "127.0.0.1:7094";

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
echo $browser->navigate("ya.ru")."<br>";

// 2 
echo "2. Получим тэги родительского элемента с заднным значением атрибута : ";
$obj_a=$btn->get_by_number(0);
$obj_p=$obj_a->get_parent_by_attribute("class","suggest",false);
echo $obj_p->get_tag()."\n";

// 3
echo "3. Получим несуществующй родительский элемент с заднным значением атрибута : ";
$obj_p=$obj_a->get_parent_by_attribute("class","suыыыыggest",false);
if ($obj_p->get_tag()=="")
	echo "Нет такого элемента";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>