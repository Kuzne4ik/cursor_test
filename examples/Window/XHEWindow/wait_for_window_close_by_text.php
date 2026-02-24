<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1
echo "1. Ожидаем закрытия вайбера : ";
echo($window->wait_for_window_close_by_text("Viber",true,true,true));

// конец
echo "\n";

// Quit
$app->quit();
?>