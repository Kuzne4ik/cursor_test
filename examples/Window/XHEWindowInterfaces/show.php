<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Спрячем XHE : ";
$xhe=$window->get_all_by_text("localhost")[0];
echo $xhe->show(false)."<br>";sleep(2);

// 2 
echo "2. Покажем XHE : ";
echo $xhe->show(true)."<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>