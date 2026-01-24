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
echo($excelfile->add_sheet("test\\test.xlsx","new sheet1"));

// 2
echo("\n2. Получим число листов : ");
echo($cnt=$excelfile->get_sheets_count("test\\test.xlsx"));

// 3
echo("\n3. Удалим лист по номеру : ");
echo($excelfile->remove_sheet_by_number("test\\test.xlsx",$cnt-1));

// 4
echo("\n4. Получим число листов : ");
echo($excelfile->get_sheets_count("test\\test.xlsx"));

// конец
echo "\n";

// Quit
$app->quit();
?>