<?php $xhe_host = "127.0.0.1:5005";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "input.html")."<br>";

// 2 
echo "2. Зададим value для элемента с именем равным равным txt1 : ";
echo $input->get_by_number(3)->set_value("НОВОЕ ЗНАЧЕНИЕ")."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>