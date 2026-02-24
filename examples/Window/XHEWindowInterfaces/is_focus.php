<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим фокус главного видимого окна содержащего название приложение: ";
$xweb=$window->get_all_by_text("localhost")[0];
if (!$xweb->is_focus())
	echo "без фокуса<br>";

// 2 
echo "2. Зададим фокус: ";
echo $xweb->focus()."<br>";

// 3 
echo "3. Проверим фокус: ";
echo $xweb->focus()."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>