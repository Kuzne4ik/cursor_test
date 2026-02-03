<?php $xhe_host = "127.0.0.1:7010";

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
echo "2. Получим цвет фона в 0 флэше в 0 фрейме: ";
echo $flash->get_background_color_by_number(0,0)."\n";

// 3 
echo "3. Зададим цвет фона в 0 флэше в 0 фрейме: ";
echo $flash->set_background_color_by_number(20000,0,0)."\n";

// 4 
echo "4. Получим цвет фона в 0 флэше в 0 фрейме: ";
echo $flash->get_background_color_by_number(0,0)."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>