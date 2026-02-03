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
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php") . "\n";

// 2 
echo "2. Получим текущую метку для флэша с номером 0 в 0 фрейме: ";
echo $flash->get_current_label_by_number("end_frame",0,0) . "\n";

// 3 
echo "3. Вызовем заданную метку во флэш с номером 0 в 0 фрейме: ";
echo $flash->call_label_by_number("Fresh Sheet","10",0,0) . "\n";

// 4 
echo "4. Вызовем заданный фрейм во флэш с номером 0 в 0 фрейме: ";
echo $flash->call_frame_by_number(3,"10",0,0) . "\n";

// 5 
echo "5. Зададим переменной 'a' значение 10 во флэш с номером 0 в 0 фрейме: ";
echo $flash->set_variable_by_number("a","10",0,0) . "\n";

// 6 
echo "6. Получим значение переменной 'a' во флэш с номером 0 в 0 фрейме: ";
echo $flash->get_variable_by_number("a",0,0) . "\n";

// конец
echo "\n";

// Quit
$app->quit();
?>