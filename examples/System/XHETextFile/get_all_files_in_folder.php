<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

// 1 
echo("1. Получить все каталоги в каталоге виндовс (1 уровня) : <br><br>");
echo ($textfile->get_all_files_in_folder("C:\\Windows\\","",false,true, 60)."<br>");

// 2 
echo("<br>2. Получить все каталоги и подкаталоги в каталоге виндовс хелп : <br><br>");
echo ($textfile->get_all_files_in_folder("C:\\Windows\\Help\\","",true,true,900)."<br>");

// 3 
echo("<br>3. Получить все файлы типа exe  и каталоги в папке виндовс : <br><br>");
echo ($textfile->get_all_files_in_folder("C:\\Windows\\","*.exe",false,false,900));

// конец
echo "\n";

// Quit
$app->quit();
?>