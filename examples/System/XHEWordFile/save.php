<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>textfile->".basename (__FILE__)."</font>\n";

$path = "test\\test.docx";
//$debug->view_tab_as_text("Отладка",true);

// открыть с возможностью записи
$wordfile->open($path,false);

// 1 шаг
echo "1. Получем свойства всех фигур : \n";
$nums = $wordfile->get_shapes_count($path);
for ($i=0;$i<$nums;$i++)
{
	echo($i.":");
	echo($wordfile->get_shape_properties($path,$i)."\n");
}

// сохранить
$wordfile->save($path);
// закрыть
$wordfile->close($path);

// конец
echo "\n";

sleep(1);

// Quit
$app->quit();
?>