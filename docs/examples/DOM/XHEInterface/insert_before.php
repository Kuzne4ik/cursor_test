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
echo "2. Вставим input в body : ";
echo $anchor->get_by_number(0)->insert_before("input","")."\n";

// 3 
echo "3. Вставим anchor в body : ";
echo $anchor->get_by_number(0)->insert_before("a","new child test anchor");

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>