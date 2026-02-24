<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Закроем FAR через WM_CLOSE = 0x0010 : ";
$far=$window->get_by_text("Far",false);
echo $far->message(0x0010,0,0)."<br>";sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>