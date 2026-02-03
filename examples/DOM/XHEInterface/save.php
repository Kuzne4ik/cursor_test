<?php $xhe_host = "127.0.0.1:7094";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>interface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html")."<br>";

// 2 
echo "2. Сохранить рисунок по его имени в файл : ";
echo $image->get_by_name("captcha1")->save("c:\\sc.jpg")."<br>";
// покажем что сохранилось
$app->shell_execute("open","c:\\sc.jpg");

// 3 
echo "3. Сохранить рисунок по его имени в файл и выведем размеры картинки в браузере : ";
$obj=$image->get_by_name("screen2");
echo $obj->save("c:\\sc2.jpg")." ".$obj->get_width()." ".$obj->get_height()."<br>";
// покажем что сохранилось
$app->shell_execute("open","c:\\sc2.jpg");

// 4
echo "4. Перейдем на полигон: ";
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php")."<br>";

// 5
echo "5. Сохранить флэш по его номеру в файл : ";
echo $flash->get_by_number(0,0)->save("c:\\sc3.swf")."<br>";
// покажем что сохранилось
$app->shell_execute("open","c:\\sc3.swf");

// конец
echo "\n";

// Quit
$app->quit();
?>