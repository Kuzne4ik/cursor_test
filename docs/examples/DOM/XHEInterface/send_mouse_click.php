<?php 
 $xhe_host = "127.0.0.1:7011";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to Google: ";
echo $browser->navigate("http://www.google.ru");

// 2
echo "\n2. Click on the link: ";
echo $anchor->get_by_number(2)->send_mouse_click(2, 2);
sleep(1);

// 3
echo "\n3. Navigate to the test site: ";
echo $browser->navigate(TEST_POLYGON_URL . "listbox.html");
 
//4
echo "\n4. Click on the option 'Germany': ";
echo  $option->get_by_inner_text("Германия")->send_mouse_click(2, 2);
sleep(1);
  
//5
echo "\n5. Click on the option 'Russia' + with the Ctrl key: ";
echo  $option->get_by_inner_text("Россия")->send_mouse_click(2, 2, true);
sleep(1);



// end
echo "<hr><br>";

// Quit
$app->quit();
?>