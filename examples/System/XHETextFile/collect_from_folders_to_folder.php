<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Cобрать все текстовые файлы в каталоге test_folder и его подкаталогах, что находится в каталоге где лежит скрипт, в каталог test_colector_folder, находящийся там же : ");
echo($textfile->collect_from_folders_to_folder("test_folder","test_colector_folder",60)."<br><br>");

// 2 
echo("2. Собранные файлы: <br><br>");
echo ($folder->get_all_items("test_colector_folder"));

// конец
echo "\n";

// Quit
$app->quit();
?>