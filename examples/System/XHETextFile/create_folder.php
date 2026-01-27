<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// удалим
$folder->delete("test_create_folder");

// 1 
echo("1. Cоздать каталог с именем test_create_folder, в каталоге где лежат скрипт : ");
echo($textfile->create_folder("test_create_folder",60));

// конец
echo "\n";

// Quit
$app->quit();
?>