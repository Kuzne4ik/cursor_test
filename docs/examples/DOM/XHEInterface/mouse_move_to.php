<?php $xhe_host = "127.0.0.1:7010";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to google: ";
echo $browser->navigate("http://www.google.ru")."<br>";

// 2
echo "2. Move mouse to 'I'm Feeling Lucky' button: ";
echo $element->get_by_name("btnI")->mouse_move_to(1,1)."<br>";

// 3
echo "3. Navigate to "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 4
echo "4. Move mouse to 2 links: ";
echo $anchor->get_by_number(110)->mouse_move_to(1,1,"curve",2000)." ";
sleep(1);
echo $anchor->get_by_number(100)->mouse_move_to(1,1,"chaotic",2000);
sleep(1);
echo $anchor->get_by_number(10)->mouse_move_to(1,1,"circle",2000);

// 5
echo "\n5. Click at current point: ";
echo $mouse->click()."\n";
$browser->wait_for();

// end
echo "<hr><br>";

// Quit
$app->quit();
?>