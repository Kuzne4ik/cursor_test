<?php $xhe_host = "127.0.0.1:7023";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Добавим лист : ");
echo($excel->add_sheet("test\\test.xlsx","new sheet2"));

// 2
echo("\n2. Получим номер листа по имени : ");
echo($excel->get_sheet_number_by_name("test\\test.xlsx","new sheet2"));

// 3
echo("\n3. Удалим лист по имени : ");
echo($excel->remove_sheet_by_name("test\\test.xlsx","new sheet2"));

// 4
echo("\n4. Получим номер листа по имени : ");
echo($excel->get_sheet_number_by_name("test\\test.xlsx","new sheet2"));

// конец
echo "\n";

// Quit
$app->quit();
?>