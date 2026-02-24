<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим window interface по UI элементу и его текст: ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
echo($xhe->get_window_interface()->get_text());

// 2
$xhe=$window->get_by_text("localhost")->get_ui_element();
// панель в строке статуса
$zoom_pane = $xhe->get_child(0)->get_next(1)->get_child(0)->get_next();
// убедимся что нет окна у этого UI
$zoom_pane->get_window_info();
// выведем имя UI
echo(($zoom_pane->get_info()->Name));
echo "\n2. Получим window interface окна, содержащего этот UI элементу и его класс: ";
echo($zoom_pane->get_window_interface(true)->get_class_name());

// конец
echo "\n";

// Quit
$app->quit();
?>