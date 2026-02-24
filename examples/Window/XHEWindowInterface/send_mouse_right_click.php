<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Покажем контекстное меню : ";
$browser_wnd=$window->get_by_text("[localhost");
for ($i=100;$i<500;$i+=50)
{
	echo $browser_wnd->send_mouse_right_click($i,$i);
	 //$browser_wnd->mouse_move($i,10);
	sleep(2);
    $keyboard->send_key(27);   
}

// конец
echo "\n";

// Quit
$app->quit();
?>