<?php $xhe_host = "127.0.0.1:7020";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>keyboard->".basename (__FILE__)."</font>\n";

echo "1.  Два раза нажмем Enter в открытом блокноте : ";
//$app->shell_execute("run","C:/windows/notepad.exe");
$notebook=$window->get_by_class("Notepad",false,true,true);
$notebook=$notebook->get_child_by_number(0);
$notebook->foreground();
$notebook->focus();

// enter
$notebook->send_key_down("13");

// a
$notebook->send_key_down("65");

// enter
$notebook->send_key_down("13");

// конец
echo "\n";

// Quit
$app->quit();
?>