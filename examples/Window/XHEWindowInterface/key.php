<?php
 $xhe_host = "localhost:7013";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

$n = 0;
while ($n < 2)
{
	// Найти окно приложения 'Notepad' по значению свойства class
	$notebook = WINDOW::$window->get_by_class("Notepad", true,true,true);
	
	if ($notebook->inner_number != -1){
	   	
	   	// Установить приложение выше всех других окон
		$notebook->foreground();
		
		// 1
		echo "\n1. Вставим из буфера обмена 'v + Ctrl' (v как буква) : ";
		echo $notebook->get_child_by_number(0)->key("v",false,true);
		sleep(1);
	
		// 2
		echo "\n2. Нажать клавишу пробел по Alt-коду 32 : ";
		echo $notebook->key(32, true);
		sleep(1);
		
		// 3
		echo "\n3. Нажать клавишу 'p' как буква): ";	 
		echo $notebook->get_child_by_number(0)->key("p", false);
	
		// 4
		echo "\n4. Открыть диалог печати сочетание 'p + Ctrl' (p как буква): ";	
		echo $notebook->get_child_by_number(0)->key("p", false,true);
		sleep(1);

		// 5
		echo "\n5. Закрыть диалог печати  нажать ESC по Alt-коду  27: ";
		$notebook_p=$window->get_by_text("Печать",false,false,true);	
		echo $notebook_p->key("27", true);	
		sleep(1);
	}
	else{
	echo("Окно приложения Notepad не найдено");
	}
	
	$n++;
}

//WINDOW::$app->kill_process("Notepad");

// Quit
WINDOW::$app->quit();
?>