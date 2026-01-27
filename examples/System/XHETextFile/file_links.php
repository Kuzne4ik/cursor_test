<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// форматировать содержимое файла

$File_Src = "Test.txt";

$str = $textfile->read_file($File_Src,$timeout) ;
echo "Исходный файл $File_Src : <br>";
$str = str_replace("\r\n","<br>",$str);
echo $str."<br><br>";

$Tgt_file = "Linked.txt";
echo "1. Форматировать содержимое файла $File_Src, результат записать  в $Tgt_file (строки разделены символом новой строки): "."<br><br>";
if( $textfile->file_links($File_Src,$Tgt_file,10)=="true")
{
	$str = $textfile->read_file($Tgt_file,$timeout) ;
	$str = str_replace("\r\n","<br>",$str);
	echo "Результирующий файл: <br>".$str."<br>";	
}
else echo "Операция НЕ выполнена!";

echo "<br>";


$Tgt_file = "Randed.txt";
echo "2. Форматировать содержимое файла $File_Src, результат записать  в $Tgt_file(строки идут без разделителя): "."<br><br>";
if( $textfile->file_links($File_Src,$Tgt_file,10,"N")=="true")
{
	$str = $textfile->read_file($Tgt_file,$timeout) ;
	$str = str_replace("\r\n","<br>",$str);
	echo "Результирующий файл: <br>".$str."<br>";	
}
else echo "Операция НЕ выполнена!";

echo "<br>";

$Tgt_file = "RandedSpace.txt";
echo "3. Форматировать содержимое файла $File_Src, результат записать  в $Tgt_file(строки разделены пробелом):<br><br>";
if( $textfile->file_links($File_Src,$Tgt_file,10,"S")=="true")
{
	$str = $textfile->read_file($Tgt_file,$timeout) ;
	$str = str_replace("\r\n","<br>",$str);
	echo "Результирующий файл: <br>".$str."<br>";	
}
else echo "Операция НЕ выполнена!";

// конец
echo "\n";

// Quit
$app->quit();
?>