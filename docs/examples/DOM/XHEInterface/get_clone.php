<?php $xhe_host = "127.0.0.1:7094";

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
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Щелкнем по элементу с href равным " . TEST_SITE_URL . " : ";
$obj_tmp=null;
{
	$obj1=$anchor->get_by_attribute("href",TEST_SITE_URL,true);
	$obj_tmp=$obj1->get_clone();
}
echo $obj_tmp->click();

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>