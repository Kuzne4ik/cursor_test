<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Получить число страниц в файле : ");
echo($wordfile->get_page_count("test\\test.docx"));

// конец
echo "\n";

sleep(1);

// Quit
$app->quit();
?>