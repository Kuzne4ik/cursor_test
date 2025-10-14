<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон для формы : ";
echo $browser->navigate(TEST_POLYGON_URL . "btn.html")."<br>";

// 2 
echo "2. Получим номера всех элементов в форме с номером 0 : ";
echo $form->get_by_number(0)->get_numbers_child("")."\n";

// 3
echo "3. Получим номера всех элементов в форме с номером 0 (включая подэлементы): ";
echo $form->get_by_number(0)->get_numbers_child("",true)."\n";

// 4
echo "4. Получим номера всех anchor в форме с номером 0 (включая подэлементы): ";
echo $form->get_by_number(0)->get_numbers_child("anchor",true)."\n";

// 5
echo "5. Получим номера всех btn в форме с номером 0 (включая подэлементы): ";
echo $form->get_by_number(0)->get_numbers_child("btn",true)."\n";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>