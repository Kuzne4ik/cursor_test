<?php $xhe_host = "127.0.0.1:5005";

// connect the functional objects if not already connected
if (!isset($path)){  
  $path = "../../../Templates/init.php";
  require($path);
}

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
$browser->navigate(TEST_POLYGON_URL . "input.html");

// 2
echo "2. Set inner text for the element with attribute 'name' equal to 'ist': ";
echo $element->get_by_attribute("name","ist",false)->set_inner_text("НОВЫЙ ВНУТРЕННИЙ ТЕКСТ")."<br>";

// Quit
$app->quit();
?>