<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>keyboard->".basename (__FILE__)."</font>\n";

echo "1.  Два раза нажмем Enter в открытом блокноте : ";
$notebook=$window->get_by_class("Notepad",false,true,true)->get_ui();
$notebook=$notebook->get_child(0);
$notebook->focus();

// enter
$notebook->send_key_down("13");
$notebook->send_key_up("13");

// a
$notebook->send_key_down("65");
$notebook->send_key_up("65");

// enter
$notebook->send_key_down("13");
$notebook->send_key_up("13");

// конец
echo "\n";

// Quit
$app->quit();
?>