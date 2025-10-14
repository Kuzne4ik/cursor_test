<?php
$xhe_host = "127.0.0.1:3035";

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
echo "2. Получим тэги родительских элементов: ";
$objs=$anchor->get_by_name("seonote")->get_all_parents();
print_r($objs->get_tag());

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>