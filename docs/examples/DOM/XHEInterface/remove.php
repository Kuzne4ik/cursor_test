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
echo "2. Удалим 0 ссылку: ";
echo $anchor->get_by_number(0)->remove()."\n";

// 3 
echo "3. Удалим 0 фрейм : ";
echo $frame->get_by_number(0)->remove();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>