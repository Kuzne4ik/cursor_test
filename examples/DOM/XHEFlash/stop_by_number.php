<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>flash->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php")."<br>";

sleep(2);

// 2 
echo "2. Остановим флэш с номером 0 в нулевом фрейме: ";
echo $flash->stop_by_number(0,0)."\n";

sleep(2);

// 3 
echo "3. Запустим флэш с номером 0 в нулевом фрйеме : ";
echo $flash->play_by_number(0,0)."\n";

sleep(2);

// 4 
echo "4. Остановим флэш с номером 0 в нулевом фрейме : ";
echo $flash->stop_by_number(0,0)."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>