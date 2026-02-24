<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Перейдем на полигон: ";
echo $browser->navigate("http://ya.ru")."<br>";

// 2  
echo "2. Указали что при появлении диалога, выполнить печать в файл test_print.pdf: ";
echo $window->execute_print("test\\test_print.pdf")."<br>";

// удалим старый
$file_os->delete("test\\test_print.pdf");

// 3 
echo "3. Откроем диалог печати текущей страницы : ";
echo $browser->run_command("6")."\n";

sleep(5);

// 4
echo "4. Откроем файл на просмотр : ";
echo $app->shell_execute("open","test\\test_print.pdf");

// конец
echo "\n";

// Quit
$app->quit();
?>