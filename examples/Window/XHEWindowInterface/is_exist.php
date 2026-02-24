<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим существование главного видимого окна содержащего название приложения: ";
$xweb=$window->get_by_text("localhost");
echo $xweb->is_exist()."<br>";

// 2 
echo "2. Проверим существование главного видимого окна содержащего название Ptych : ";
$xweb=$window->get_by_text("Ptych");
if (!$xweb->is_exist())
	echo "Нет такого окна<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>