<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Нажмем кнопку содержащую букву 'a' в нулевом главном видимом окне : ";
echo $window->press_button_by_text_in_window_by_number(0,"a",false,true,false);

// конец
echo "\n";

// Quit
$app->quit();
?>