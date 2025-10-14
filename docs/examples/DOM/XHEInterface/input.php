<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>keyboard->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на яндекс : ";
echo $browser->navigate("http://ya.ru")."<br>";

// 2 
echo "2. Получим строку поиска : ";
$obj=$input->get_by_number(0);
echo $obj->inner_number."<br>";

// 3 
echo "3. Введем 'Web абвгдеё template' : ";
echo $obj->input("Web абвгдеё template")."<br>";

// 4 
echo"4. Ввод с паузой 100 мс ' abc template абвгдеёжзийклмнопрстуфхцчщыьъэю' : ";
echo $obj->input(" abc template абвгдеёжзийклмнопрстуфхцчщыьъэюя",100);

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>