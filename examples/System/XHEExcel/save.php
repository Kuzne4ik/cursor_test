<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

// путь к файлу
$path="test\\test.xlsx";

$excel->kill();

// 1 
echo("\n1. Откроем : ");
echo($excel->open($path,true));

$rows=2;
$cols=2;
echo $rows= $excel->get_rows_count($path,0);
echo $cols= $excel->get_cols_count($path,0);

// 2
echo("\n2. Выведем все ячейки : ");
for ($i=1;$i<=$rows;$i++)
{
	for ($j=1;$j<=$cols; $j++)
		echo $excel->get_cell($path,0,$i,$j)."|";
	echo "\n";
}

// 3
echo("\n3. Сохраним: ");
echo($excel->save($path));

// 4
echo("\n4. Закроем : ");
echo($excel->close($path));

// конец
echo "\n";

// Quit
$app->quit();
?>