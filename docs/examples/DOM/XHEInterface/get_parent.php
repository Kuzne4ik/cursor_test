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
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Получим тэги и номера родительских элементов : ";
$obj_a=$anchor->get_by_name("seonote");
$obj_p=$obj_a->get_parent();
$obj_b=$obj_p->get_parent();
$obj_h=$obj_b->get_parent();
echo $obj_p->get_tag()." ".$obj_b->get_tag()." ".$obj_h->get_tag()." : ";
echo $obj_p->get_number()." ".$obj_b->get_number()." ".$obj_h->get_number()."\n";

// 3 
echo "3. Получим тэг и номер родительского элемента c уровнем 3: ";
$obj_p=$obj_a->get_parent(3);
echo $obj_p->get_tag()." ";
echo $obj_p->get_number();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>