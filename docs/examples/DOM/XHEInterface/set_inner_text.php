<?php $xhe_host = "127.0.0.1:5005";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){  
  $path = "../../../Templates/init.php";
  require($path);
}

// начало
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1 
echo "1. Перейдем на полигон: ";
$browser->navigate(TEST_POLYGON_URL . "input.html");

// 2 
echo "2. Зададим внутренний текст для элемента с атриубутом 'name' равным 'ist': ";
echo $element->get_by_attribute("name","ist",false)->set_inner_text("НОВЫЙ ВНУТРЕННИЙ ТЕКСТ")."<br>";

// Quit
$app->quit();
?>