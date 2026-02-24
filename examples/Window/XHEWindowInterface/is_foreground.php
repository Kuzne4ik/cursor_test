<?php $xhe_host = "127.0.0.1:705";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Проверим пользовательский фокус главного видимого окна содержащего название 'localhost': ";
$xweb=$window->get_by_text("localhost");
echo $xweb->is_foreground();

// конец
echo "\n";

// Quit
$app->quit();
?>