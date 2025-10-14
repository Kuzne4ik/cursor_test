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
echo "2. Выберем индекс : ";
echo $listbox->get_by_number(1)->multi_select_texts("Германия,США")."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>