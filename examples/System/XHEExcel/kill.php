<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("\n1. Откроем  : ");
echo($app->shell_execute("open","test\\test.xlsx"));

// 2
echo("\n2. Закроем : ");
echo($excel->kill());

// конец
echo "\n";

// Quit
$app->quit();
?>