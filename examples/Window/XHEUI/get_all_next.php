<?php $xhe_host = "127.0.0.1:7022";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим имена всех следующих элементов : \n\n ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$nexts = $xhe->get_all_next();
foreach($nexts as $next)
	echo $next->get_info()->Name."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>