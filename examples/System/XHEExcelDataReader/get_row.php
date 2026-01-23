<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// 1 
echo("1. Получим 1 строку как массив: \n");
$items = $excelDataReader->get_row("test/test.xlsx", 0, 2);
$itemsCount = count($items);

$alphachar = range('A', 'Z');
$alphacharCount = count($alphachar);

for ($k = 0; $k < $itemsCount; $k++)
{
    if ($alphacharCount > $k)
        echo($alphachar[$k] . "(" .  ($k  + 1)  . ") =>" . $items[$k] . "\n");
    else
        echo(($k  + 1) . "=>" . $items[$k] . "\n");
}


// посмотрим
$app->shell_execute("open", "test/test.xlsx");

// Quit
$app->quit();
?>