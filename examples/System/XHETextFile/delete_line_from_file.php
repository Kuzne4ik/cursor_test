<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// подготовим файлы
$path="test\\test_delete.txt";
$file_os->delete($path);
$file_os->copy("test\\test_dedupe.txt",$path);

// 1 
echo("1. Получить число строк в файле : ");
echo $textfile->get_lines_count($path)."\n";
 
// 2
echo("2. Удалить строку из файла : ");
echo $textfile->delete_line_from_file($path,2)."\n";

// 3
echo("3. Получить число строк в файле : ");
echo $textfile->get_lines_count($path)."\n";

// конец
echo "\n";

// Quit                    
$app->quit();
?>