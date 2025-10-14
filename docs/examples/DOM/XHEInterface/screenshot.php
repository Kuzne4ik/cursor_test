<?php $xhe_host = "127.0.0.1:3039";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";


// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html")."<br>";

// 2 
echo "2. Сохранить рисунок по его имени в файл : ";
echo $image->get_by_name("captcha1")->screenshot("c:\\sc.jpg")."<br>";
// покажем что сохранилось
$app->shell_execute("open","c:\\sc.jpg");

// 3 
echo "3. Сохранить рисунок по его имени в файл и выведем размеры картинки в браузере : ";
$obj=$image->get_by_name("screen2");
$obj->focus();
echo $obj->screenshot("c:\\sc2.jpg")." ".$obj->get_width()." ".$obj->get_height()."<br>";
// покажем что сохранилось
$app->shell_execute("open","c:\\sc2.jpg");

echo "4. Сохранить рисунок (упрощенный) по его имени в файл : ";
echo $image->get_by_name("screen1",0)->screenshot("c:\\sc2.jpg",true)."<br>";
// покажем что сохранилось
$app->shell_execute("open","c:\\sc2.jpg");

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>