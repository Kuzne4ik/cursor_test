<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим имена всех предыдущих элементов : \n\n ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$prevs = $xhe->get_all_prev();
foreach($prevs as $prev)
	echo $prev->get_info()->Name."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>