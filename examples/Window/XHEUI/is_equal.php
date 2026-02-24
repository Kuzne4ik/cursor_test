<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Сравним элементы : ";
$xhe1=$window->get_by_text("localhost")->get_ui_element();
$xhe2 = $xhe1->get_prev()->get_next();
echo ($xhe1->is_equal($xhe2));
echo ($xhe1->is_equal($xhe2->get_prev()));

// конец
echo "\n";

// Quit
$app->quit();
?>