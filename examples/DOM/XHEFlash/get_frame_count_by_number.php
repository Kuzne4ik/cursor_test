<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>flash->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo WEB::$browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php") . "\n";

// 2 
echo "2. Остановим флэш с номером 0 в нулевом фрейме: ";
echo DOM::$flash->stop_by_number(0,0) . "\n";

// 3 
echo "3. Получим число кадров в 0 флэше на 0 странице: ";
$frame_count = DOM::$flash->get_frame_count_by_number(0,0);
echo $frame_count."\n\n";

// 4 
echo "4. Прокрутим флэш по кадрам: ";
for($k=0;$k<$frame_count-1;$k++)
{
	echo DOM::$flash->go_to_frame_by_number($k,0,0)." ";
	echo DOM::$flash->get_current_frame_by_number(0,0)." ";
    usleep(10000);
}

// 5 
echo "\n\n5. Прокрутим флэш по кадрам назад: ";
for($k=0;$k<$frame_count;$k++)
{
    echo DOM::$flash->back_by_number(0, 0) . " ";
    echo DOM::$flash->get_current_frame_by_number(0, 0) . " ";
    usleep(10000);
}

// 6 
echo "\n\n6. Прокрутим флэш по кадрам вперед: ";
for($k=0;$k<$frame_count-2;$k++)
{
	echo DOM::$flash->forward_by_number(0,0)." ";
	echo DOM::$flash->get_current_frame_by_number(0,0)." ";
    usleep(10000);
}

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>