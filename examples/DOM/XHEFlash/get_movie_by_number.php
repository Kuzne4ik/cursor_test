<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>flash->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php")."<br>";

// 2 
echo "2. Получим анимацию флэш по номеру :  ";
echo $flash->get_movie_by_number(0,0)."\n";

// 3 
echo "3. Зададим анимацию флэш по номеру с интернета :  ";
echo $flash->set_movie_by_number("http://htmlka.com/wp-content/uploads/2011/08/bubble.swf",0,0)."\n";

sleep(3);

// 4 
echo "4. Сбросим анимацию флэш по номеру :  ";
echo $flash->set_movie_by_number("",0,0)."\n";

sleep(1);

// 5 
echo "5. Зададим анимацию флэш по номеру с диска :  ";
echo $flash->set_movie_by_number("test\\test.swf",0,0)."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>