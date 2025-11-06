<?php $xhe_host = "127.0.0.1:3031";

// connect the functional objects if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to Google: ";
echo $browser->navigate("http://google.ru")."<br>";

// 2
echo "2. Move the mouse to the 'I'm Feeling Lucky' button: ";
echo $button->get_by_number(3)->send_mouse_move(5,5)." ";
sleep(3);
echo $button->get_by_number(3)->send_mouse_move(5,5)."<br>";

sleep(3);

// 3
echo "1. Navigate to "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "4. Move the mouse to links: ";
echo $anchor->get_by_number(110)->send_mouse_move(1,1,true,4)." ";
sleep(1);
echo $anchor->get_by_number(100)->send_mouse_move(1,1,true,4)." ";
sleep(1);
echo $anchor->get_by_number(10)->send_mouse_move(1,1,true,4)." ";

// end
echo "<hr><br>";

// Quit
$app->quit();
?>