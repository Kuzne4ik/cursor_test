<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Сделаем выбор в редакторе : ";
$browser_wnd=$window->get_by_text("[local");
for ($i=100;$i<500;$i+=50)
{
	echo $browser_wnd->send_mouse_double_click(200,$i);
	$browser_wnd->mouse_move(200,$i);
   sleep(2);
}

// 2
echo "\n2. Сделаем двойной щелчок в Панели Отладки : ";
$debug_pane=$window->get_by_text("[localhost")->get_child_by_text("Панель Отладки",true,true);
$res=$debug_pane->send_mouse_double_click(100,100);
sleep(5);echo $res;

// Quit
$app->quit();
?>