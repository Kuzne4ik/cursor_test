<?php $xhe_host = "127.0.0.1:7025";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получим свойства об XHE как об UI : \n";
$xhe=$window->get_by_text("localhost")->get_ui_element();
print_r($xhe->get_info());
print_r(strlen($xhe->get_property("Name")));
//$properties = $xhe->get_supported_properties();
//for ($i=0;$i<count($properties);$i++)
	//echo($properties[$i]." = [".$xhe->get_property($properties[$i])."]\n");

// конец
echo "\n";

// Quit
$app->quit();
?>