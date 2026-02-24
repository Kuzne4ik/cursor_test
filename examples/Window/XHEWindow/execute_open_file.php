<?php
$xhe_host = "127.0.0.1:7013";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

while (true)
{
	// 1 
	echo "1. Перейдем на полигон: ";
	echo $browser->navigate(TEST_POLYGON_URL . "inputfile.html")."<br>";
    sleep(1);

	// 2  
	echo "2. Указали что при появлении диалога, задавать имя файла: ";
	echo $window->execute_open_file("ф","test\\file.txt","&Открыть",false,true)."<br>";

	//  3 
	echo "3. Откроем диалог выбора файла : ";
	$obj=$inputfile->get_by_name("Name");
    echo($obj->focus()."\n");
    $obj->send_mouse_click();

    sleep(1);

	// 4  
	echo "4. Указали что при появлении диалога, задавать несколько имен файлов: ";
	echo $window->execute_open_file("ф","\"c:\\file1.txt\" \"c:\\file2.txt\" " ,"&Открыть",false,true)."<br>";

	//  5 
	echo "5. Откроем диалог выбора файла : ";
	$obj=$inputfile->get_by_name("Name1");
    echo($obj->focus()."\n");
    $obj->send_mouse_click();

	sleep(2);
}
/* для Selenium моделей
$path="C:\\222.txt";
$browser->navigate("https://the-internet.herokuapp.com/upload");
$window->execute_open_file("id:file-upload",$path,"");
$app->pause(0);

$browser->navigate("https://the-internet.herokuapp.com/upload");
$inputfile->get_by_number(0)->mouse_click(5,5);
sleep(2);
$window->execute_open_file("dlg:Открытие",$path,"");
$app->pause(0);

$browser->navigate("https://the-internet.herokuapp.com/upload");
$window->execute_open_file("xpath:/html/body/div[2]/div/div[1]/form/input[1]",$path,"");
$app->pause(0);*/
// конец
echo "\n";

// Quit
$app->quit();
?>
