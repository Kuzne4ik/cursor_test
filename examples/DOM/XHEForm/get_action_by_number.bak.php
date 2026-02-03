<?php $xhe_host = "127.0.0.1:5002";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>form->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон для формы : ";
echo $browser->navigate(TEST_POLYGON_URL . "form.html")."<br>";

// 2 
echo "2. Получим действие формы с номером 0 : ";
echo $form->get_action_by_number(0)."<br>";
sleep(5);

// 3 
echo "3. Получим действие у несуществующего элемента : ";
if (!$form->get_action_by_number(100500))
	echo "Нет такого элемента\n";

// 4 
echo "4. Получим действие формы с номером 0 в нулевом фрейме : ";
echo $form->get_action_by_number(0,0)."<br>";

// 5 
echo "5. Получим действие у несуществующего элемента в нулевом фрейме : ";
if (!$form->get_action_by_number(100500,0))
	echo "Нет такого элемента\n";

// 6 
echo "6. Получим действие у элемента в несуществующем фрейме : ";
if (!$form->get_action_by_number(0,100500))
	echo "нет такого фрейма<br>";

// конец
echo "\n";

// Quit
$app->quit();
?>