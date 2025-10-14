<?php
$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "form.html") . "<br>";

// 2 
echo "2. Получить номер формы у элемента ввода с 2 номером: ";
echo $input->get_by_number(2)->get_form_number() ."<br>";

// 3 
echo "3. Получить номер формы несуществующего элемента: ";
echo $button->get_by_number(2)->get_form_number() . "<br>";

// конец
echo "<hr><br>";

// Quit
$app->quit();
?>