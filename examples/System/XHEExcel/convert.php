<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Конвертнем xlsx->xsl: ");
echo($excel->convert("test\\test_to_convert.xls", "test\\test_from_xlsx.xls") . "\n");

// 2
echo("n2. Конвертнем xls->xslx: ");
echo($excel->convert("test\\test_from_xlsx.xls", "test\\test_from_xls.xlsx") . "\n");

// 3 Разделитель запятая (аргумент delimiter не используется)
echo("3. Конвертнем xlsx->csv: ");
echo($excel->convert("test\\test_to_convert.xlsx", "test\\test_from_xlsx.csv") . "\n");

// 4 разделитель табуляция (аргумент delimiter не используется)
echo("4. Конвертнем xlsx->txt: ");
echo($excel->convert("test\\test_to_convert.xlsx", "test\\test_from_xlsx.txt") . "\n");

// 5
echo("5. Конвертнем xlsx->html: ");
echo($excel->convert("test\\test_to_convert.xlsx", "test\\test_from_xlsx.html") . "\n");

// 6 Разделитель запятая
echo("5. Конвертнем csv->html разделитель запятая (,): ");
echo($excel->convert("test\\test_to_convert_comma.csv", "test\\test_from_comma_csv.xlsx", 3000, ",") . "\n");

// 7 Разделитель точка с запятой
echo("7. Конвертнем csv->html разделитель точка с запятой (;): ");
echo($excel->convert("test\\test_to_convert_semicolon.csv", "test\\test_from_semicolon_csv.xlsx", 3000, ";") . "\n");



// конец
echo "\n";

// Quit
$app->quit();
?>