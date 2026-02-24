<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Щелкнем меню файл : ";
$xhe=$window->get_by_text("localhost")->get_ui_element();
$mfile=$xhe->get_by_property("Name","Редактор");
echo $mfile->invoke();
 sleep(2);
$mprint=$mfile->get_by_property("Name","Най",exactly:false);
echo $mprint->invoke();

// конец
echo "\n";

// Quit
$app->quit();
?>