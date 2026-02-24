<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим текст всех дочерних окон XHE 1 уровня: ";
$xhe=$window->get_by_text("Human",false);
for ($i=0;$i<$xhe->get_child_count();$i++)
	echo $xhe->get_child_by_number($i)->get_text()."<br>";

// 2 
echo "\n\n2. Получим текст всех дочерних окон XHE: ";
$xhe=$window->get_by_text("Human",false);
for ($i=0;$i<$xhe->get_child_count(true);$i++)
	echo $xhe->get_child_by_number($i,true)->get_text()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>