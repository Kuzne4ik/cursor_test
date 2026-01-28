<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Экспортировать постранично в в docx все страницы : ");
echo $word->export_all_pages("test\\test.docx","docx","docx");

$app->shell_execute("open","docx");
$app->pause(0);
$folder->clear("docx");

// 2
echo("\n2. Экспортировать постранично в в pdf все страницы с заданым текстом : ");
echo $wordfile->export_all_pages("test\\test.docx","pdfs","pdf",array("12345","678"),true);

$app->shell_execute("open","pdfs");

// конец
echo "\n";

sleep(1);

// Quit
$app->quit();
?>