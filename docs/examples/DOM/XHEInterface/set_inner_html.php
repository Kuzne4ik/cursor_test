<?php $xhe_host = "127.0.0.1:5005";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "anchor.html")."<br>";

// 2 
echo "2. Зададим html текст для элемента с name равным  igvard : ";
echo $anchor->get_by_attribute("name","igvard",true)->set_inner_html("<b>НОВЫЙ HTML</b>")."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>