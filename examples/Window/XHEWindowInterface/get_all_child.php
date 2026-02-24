<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим имена классов дочерних окон Хумана : <br>";
print_r($window->get_by_text("Human",false)->get_all_child()->get_class_name());

// 2 
echo "2. Получим имена классов всех дочерних окон Хумана : <br>";
print_r($window->get_by_text("Human",false)->get_all_child(true)->get_class_name());

// конец
echo "\n";

// Quit
$app->quit();
?>