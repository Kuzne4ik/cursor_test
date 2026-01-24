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

$app->shell_execute("open",$path);
sleep(5);

$hwnd = $window->get_by_class("XLMAIN",true,false)->get_hwnd();
$path_alias="@doc1";

// 1 
echo("\n1. Откроем : ");
echo($excel->connect_by_hwnd($hwnd,$path_alias));

echo "\n";
echo $rows= $excel->get_rows_count($path_alias,0);
echo "\n";
echo $cols= $excel->get_cols_count($path_alias,0);

// 2
echo("\n2. Выведем все ячейки : ");
for ($i=1;$i<=$rows;$i++)
{
	for ($j=1;$j<=$cols; $j++)
		echo $excel->get_cell($path_alias,0,$i,$j)."|";
	echo "\n";
}

// 3
echo("\n3. Закроем : ");
echo($excel->close($path_alias));

// конец
echo "\n";

// Quit
$app->quit();
?>