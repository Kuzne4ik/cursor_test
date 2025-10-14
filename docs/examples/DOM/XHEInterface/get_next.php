<?php
$xhe_host = "127.0.0.1:7094";

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
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// 2 
echo "2. Получим тэг и номер следующего : ";
$obj_a = $anchor->get_by_name("carnote");
$obj_p = $obj_a->get_next();
echo $obj_p->get_tag()." ".$obj_p->get_number("element") . "\n";

// 3
echo "3. Получим тэг и номер предыдущего : ";
$obj_p = $obj_a->get_prev();
echo $obj_p->get_tag() . " " . $obj_p->get_number("element") . "\n";

// 4 
echo "4. Получим тэг и номер текущего : ";
echo $obj_a->get_tag() . " " . $obj_a->get_number("element") . "\n";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>