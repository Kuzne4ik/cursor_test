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
for ($k=0;$k<500;$k+=50)
{
	echo $browser_wnd->send_mouse_right_down($k,$k);
    echo $browser_wnd->send_mouse_right_up($k,$k);
    sleep(1);
    $keyboard->key(27);    
}

// конец
echo "\n";

// Quit
$app->quit();
?>