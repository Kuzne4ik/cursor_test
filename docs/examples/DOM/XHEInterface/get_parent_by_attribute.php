<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// for speed
$browser->set_wait_params(5,1);

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate("ya.ru")."<br>";

// 2
echo "2. Get tags of parent element with specified attribute value: ";
$obj_a=$btn->get_by_number(0);
$obj_p=$obj_a->get_parent_by_attribute("class","suggest",false);
echo $obj_p->get_tag()."\n";

// 3
echo "3. Get non-existent parent element with specified attribute value: ";
$obj_p=$obj_a->get_parent_by_attribute("class","suыыыыggest",false);
if ($obj_p->get_tag()=="")
	echo "No such element";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>