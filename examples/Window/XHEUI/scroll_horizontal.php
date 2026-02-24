<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Скрол по горизонтали : ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
print_r($xhe->scroll_horizontal(50));

// конец
echo "\n";

// Quit
$app->quit();
?>