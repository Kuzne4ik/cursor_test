<?php $xhe_host = "127.0.0.1:7025";

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
echo "2. Получить х и y у элемента с заданным  xpath : ";
$elm = $body->get_by_number(0);
$obj = $elm->get_child_by_xpath("/a[2]");
echo $obj->get_x()." ".$obj->get_y();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>