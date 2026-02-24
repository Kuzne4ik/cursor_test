<?php $xhe_host = "127.0.0.1:3038";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим число дочерних окон с заданным текстом : ";
$xhe=$window->get_by_text("Human",false);
$wnds=$xhe->get_all_child_by_text("кон",false,true);
echo $wnds->get_count();
for($i=0;$i<$wnds->get_count();$i++)
{
	echo $wnds->get($i)->get_text();
}

// конец
echo "\n";

// Quit
$app->quit();
?>