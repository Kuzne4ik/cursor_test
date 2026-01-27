<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

$file = "test\\test_insert.txt";
$file_os->delete($file);

// 1 
echo("1. Добавим строки в начало файл file : <br><br>");
for ($i=0;$i<5;$i++)
	echo($textfile->set_string_to_file($file,"строка №$i\n",0)."<br>");

// 2 
echo("<br>2. Заменим строку в начало файла file : <br><br>");
echo($textfile->set_string_to_file($file,"строка №100\n",0,false)."<br>");

// покажем результат
$app->shell_execute("",$file);

// конец
echo "\n";

// Quit
$app->quit();
?>