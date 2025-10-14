<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "textarea.html")."<br>";

// 2 
echo "2. Перейдем на 10 позицию : ";
echo $textarea->get_by_number(0)->seek_to_pos(10)."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>