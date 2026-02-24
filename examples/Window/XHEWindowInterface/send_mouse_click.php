<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Передвинем курсор в редакторе : ";
$browser_wnd=$window->get_by_text("[localhost");
for ($i=200;$i<500;$i+=10)
{
	echo $browser_wnd->send_mouse_click($i,$i);
	echo $browser_wnd->mouse_move($i,$i);
    sleep(3);
}

// конец
echo "\n";

// Quit
$app->quit();
?>