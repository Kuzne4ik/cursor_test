<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Сделаем двойной щелчок в Панели Отладки : ";
$debug_pane=$window->get_by_text("[localhost")->get_child_by_text("Панель Отладки",true,true)->get_ui_element();
 //echo $debug_pane->mouse_move(100,90);
 sleep(1);
echo $debug_pane->mouse_double_click(100,90);
 
// конец
echo "\n";

// Quit
$app->quit();
?>