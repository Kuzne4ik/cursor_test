<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "listbox.html")."<br>";

// 2 
echo "2. Получим число опций : ";
echo $listbox->get_by_number(1)->get_length()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>