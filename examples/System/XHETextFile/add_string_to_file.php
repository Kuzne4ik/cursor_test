<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
$file = "test\\add_string.txt";
//$file = "D:\\add_string.txt";
echo("1. Добавляем строки в файл : \n\n");
for ($i=0;$i<10;$i++)
{
	echo ("Добавили строку: строка №".$i." : ");
	echo ($textfile->add_string_to_file($file,"строка_ №".$i."\r\n",60)."<br>");
}

// покажем результаты
$app->shell_execute("",$file);

// конец
echo "\n";

// Quit
$app->quit();
?>