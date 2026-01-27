<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Получить заданные строки ( 5 строк, начиная со 2 ) из файла  (нумерация строк(линий) начинается с 0) : <br><br>");
echo($textfile->get_lines_from_file("test\\test_dedupe.txt",2,5,60));

// конец
echo "\n";

// Quit                    
$app->quit();
?>