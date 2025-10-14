<?php $xhe_host = "127.0.0.1:7024";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// чтобы быстрее
$browser->set_wait_params(5,1);

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "btn.html")."<br>";

// 2 
echo "2. Получим тэги всех элементов в 0 форме : ";
$frm0=$form->get_by_number(0);
for ($i=0;$i<$frm0->get_child_count();$i++)
	echo $frm0->get_child_by_number($i)->get_tag()." ";

// 3
echo "\n3. Получим тэги всех элементов в 0 форме (включая подэлементы): ";
$frm0=$form->get_by_number(0);
for ($i=0;$i<$frm0->get_child_count(true);$i++)
{
	echo $frm0->get_child_by_number($i,true)->get_tag()." ";
}

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>