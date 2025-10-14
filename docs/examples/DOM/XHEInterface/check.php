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
echo("1. Перейдем на полигон: ");
echo($browser->navigate(TEST_POLYGON_URL . "checkbox.html")."<br>");

// 2 
echo("2. Чекнем : ");
echo($checkbox->get_by_number(4)->check()."<br>");

// 3 
echo("3. Получим чекнутость : ");
echo($checkbox->get_by_number(4)->is_checked()."<br>");

sleep(2);

// 4 
echo("4. Уберем чекнутость : ");
echo($checkbox->get_by_number(4)->check(false)."<br>");

// 5
echo("5. Получим чекнутость : ");
if (!$checkbox->get_by_number(4)->is_checked())
    echo("не чекнут");

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>