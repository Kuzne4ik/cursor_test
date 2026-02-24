<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим информацию о всех родительских элементах  : \n\n ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$parents = $xhe->get_all_parent();
foreach($parents as $parent)
	print_r($parent->get_info());

// конец
echo "\n";

// Quit
$app->quit();
?>