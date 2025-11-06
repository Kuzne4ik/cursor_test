<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon for form: ";
echo $browser->navigate(TEST_POLYGON_URL . "btn.html")."<br>";

// 2
echo "2. Get numbers of all elements in form with number 0: ";
echo $form->get_by_number(0)->get_numbers_child("")."\n";

// 3
echo "3. Get numbers of all elements in form with number 0 (including sub-elements): ";
echo $form->get_by_number(0)->get_numbers_child("",true)."\n";

// 4
echo "4. Get numbers of all anchors in form with number 0 (including sub-elements): ";
echo $form->get_by_number(0)->get_numbers_child("anchor",true)."\n";

// 5
echo "5. Get numbers of all buttons in form with number 0 (including sub-elements): ";
echo $form->get_by_number(0)->get_numbers_child("btn",true)."\n";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>