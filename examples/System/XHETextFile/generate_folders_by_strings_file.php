<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// очистим то что будем создавать
$folder->delete("test_generated");

// 1 
echo("1. Создать каталоги с именами взятыми из строк файла в задангном каталоге : ");
echo($textfile->generate_folders_by_strings_file("test\\test_generated.txt","test_generated",60));

// покажем результаты
$app->shell_execute("","test_generated");

// конец
echo "\n";

// Quit
$app->quit();
?>