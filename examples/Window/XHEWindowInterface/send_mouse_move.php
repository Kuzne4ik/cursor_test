<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Выделим текст в редакторе : ";
$browser_wnd=$window->get_by_text("[localhots");
for ($i=200;$i<500;$i+=50)
{	
	echo $browser_wnd->send_mouse_left_down($i,$i)." ";
	//echo $browser_wnd->send_mouse_move(0,$i+50)." ";
   echo $browser_wnd->send_mouse_left_up(0,$i+50)." ";
   sleep(3);
}
echo $browser_wnd->send_mouse_left_up($i,$i);

// конец
echo "\n";

// Quit
$app->quit();
?>