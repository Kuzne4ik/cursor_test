<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// 2 
echo "2. Получим объект с именем 'onclick': ";
$obj=$anchor->get_by_name("onclick");
echo $obj->inner_number . "\n";

// 3 
echo "3. Получим все события у элемента с именем onclick: \n";
echo $obj->get_all_events() . "\n";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>