<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Минимизируем приложение: ";
$xhe=$window->get_by_text("localhost", false);
echo $xhe->minimize()."<br>";sleep(1);

// 2 
echo "2. Максимизировать приложение: ";
echo $xhe->maximize()."<br>";sleep(1);

// 3 
echo "3. Восстановим приложение: ";
echo $xhe->restore()."<br>";sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>