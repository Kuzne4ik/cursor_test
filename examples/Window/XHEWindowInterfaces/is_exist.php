<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим существование главного видимого окна содержащего название localhost : ";
$xweb=$window->get_all_by_text("localhost")[0];
echo $xweb->is_exist()."<br>";

// 2 
echo "2. Проверим существование главного видимого окна содержащего название Ptych : ";
$xweb=$window->get_all_by_text("Ptych");
if ($xweb->get_count()==0)
	echo "нет такого окна<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>