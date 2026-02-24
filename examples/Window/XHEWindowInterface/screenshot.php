<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Сделаем скриншот приложения: ";
echo $window->get_by_text("localhost",false)->screenshot("test\\1.bmp")."<br>";

$app->shell_execute("open","test\\1.bmp");
sleep(5);

// 2
echo "2. Сделаем скриншот приложения включая не клиентскую часть : ";
echo $window->get_by_text("localhost",false)->screenshot("test\\1.bmp",-1,-1,-1,-1,true,true)."<br>";

$app->shell_execute("open","test\\1.bmp");


// конец
echo "\n";

// Quit
$app->quit();
?>