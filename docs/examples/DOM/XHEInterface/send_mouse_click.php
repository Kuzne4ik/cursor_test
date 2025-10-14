<?php 
 $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем в гугл : ";
echo $browser->navigate("http://www.google.ru");

// 2 
echo "\n2. Кликнем на ссылке : ";
echo $anchor->get_by_number(2)->send_mouse_click(2, 2);
sleep(1);

// 3
echo "\n3. Перейдем на полигон: ";
echo $browser->navigate(TEST_POLYGON_URL . "listbox.html");
 
//4  
echo "\n4. Кликнем на опцию  'Германия': "; 
echo  $option->get_by_inner_text("Германия")->send_mouse_click(2, 2);
sleep(1);
  
//5
echo "\n5. Кликнем на опцию 'Россия' + с клавишей Ctrl: "; 
echo  $option->get_by_inner_text("Россия")->send_mouse_click(2, 2, true);
sleep(1);



// конец
echo "<hr><br>";

// Quit
$app->quit();
?>