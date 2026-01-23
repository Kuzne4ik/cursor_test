<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
    $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим содержимео листа как массив : \n\n");
$datas = $excelDataReader->get_sheet("test/test.xlsx",0);

$datasCount = count($datas);

for ($k = 0; $k < $datasCount; $k++)
{
    echo("Line #" . ($k + 1) . "\n");
    for ($j = 0; $j < count($datas[$k]); $j++)
    {
        echo($datas[$k][$j] . ", ");
    }
    echo("\n");
}


// посмотрим
$app->shell_execute("open", "test/test.xlsx");

// Quit
$app->quit();
?>