<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>keyboard->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Зададим текст в навигацию по первой букве : ";
$navigate=$window->get_by_text("localhost", false)->get_child_by_number(0)->get_child_by_class("XTPToolBar")->get_child_by_class("RichEdit");
echo $navigate->send_key_up(89,1)." ".$navigate->send_key_up(65,1)." ";sleep(2);
echo $navigate->key(13)."<br>";sleep(1);

// конец
echo "\n";

// Quit
$app->quit();
?>