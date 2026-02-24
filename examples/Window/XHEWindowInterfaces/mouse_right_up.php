<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Вызовем контекстное меню на панели отладки : ";
$left_pane=$window->get_all_by_text("localhost")[0]->get_child_by_text("Левая");
echo $left_pane->mouse_right_down(100,100)." ";
sleep(2);
echo $left_pane->mouse_right_up(100,100)."<br>";
sleep(2);
$keyboard->key(27);


// конец
echo "\n";

// Quit
$app->quit();
?>