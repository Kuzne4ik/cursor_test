<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Cобрать все текстовые файлы в каталоге test_folder, что находится в каталоге где лежит скрипт, в один файл : ");
echo($textfile->collect_from_folders_to_file("test_folder","test\\test_txt_collected.txt",60)."<br>" );

// 2 
echo("2. Cобрать все bat и xml файлы в каталоге test_folder, что находится в каталоге где лежит скрипт, в один файл : ");
echo($textfile->collect_from_folders_to_file("test_folder","test\\test_xml_bat_collected.txt",60,"bat;xml"));

// покажем результаты
$app->shell_execute("","test\\test_txt_collected.txt");
$app->shell_execute("","test\\test_xml_bat_collected.txt");

// конец
echo "\n";

// Quit
$app->quit();
?>