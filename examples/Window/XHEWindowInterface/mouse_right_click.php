<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Вызовем контекстное меню на левой панели : ";
$left_pane=$window->get_by_text("localhost")->get_child_by_text("Левая Панель",true,true)->get_ui();
echo $left_pane->mouse_right_click(100,100);

// спрячем меню
sleep(2);
$keyboard->key(27);


// конец
echo "\n";

// Quit
$app->quit();
?>