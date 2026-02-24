<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1.  Зададим текст дочернего окна с номером 0 в нулевом главном видимом окне (окне приложения) : ";
echo $window->set_window_text_by_child_number_in_window_by_number(0,0,"New Text",true,true);

// конец
echo "\n";

// Quit
$app->quit();
?>