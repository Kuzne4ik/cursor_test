<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Зададим новый размер приложения: ";
$xhe=$window->get_by_text("localhost", false);
echo $xhe->resize(800,600)."<br>";sleep(1);

// 2 
echo "2. Переместим приложение: ";
echo $xhe->move(300,300)."<br>";sleep(1);

// 3 
echo "3. Максимизируем приложение: ";
echo $xhe->maximize()."<br>";sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>