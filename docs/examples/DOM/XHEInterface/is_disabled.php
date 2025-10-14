<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "btn.html")."<br>";

// 2 
echo "2. Заблокирована ли кнопка с таким именем : ";
echo $btn->get_by_name("add_comment_button")->is_disabled()."<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>