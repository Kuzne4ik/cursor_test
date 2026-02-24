<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим имена всех доступных для щелчка меню: ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$menus=$xhe->get_all_by_property("LocalizedControlType","элемент меню");
foreach($menus as $menu)
echo $menu->get_info()->Name."\n";

// 2
echo "\n2. Получим имена всех (частичное соответствие): ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$menus=$xhe->get_all_by_property("LocalizedControlType","элемент",exactly:false);
foreach($menus as $menu)
	echo $menu->get_info()->Name."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>