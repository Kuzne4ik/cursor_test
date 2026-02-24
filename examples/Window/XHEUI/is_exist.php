<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим информацию об XHE как об UI : ";
$anyDesk=$window->get_by_text("AnyDesk")->get_ui_element();
echo ($anyDesk->is_exist());

// закроем и проверим
$window->get_by_text("AnyDesk")->close();
echo ($anyDesk->is_exist());

// конец
echo "\n";

// Quit
$app->quit();
?>