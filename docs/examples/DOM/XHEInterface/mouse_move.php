<?php $xhe_host = "127.0.0.1:7011";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to google: ";
echo $browser->navigate("http://google.ru")."<br>";

// 2
echo "2. Move mouse to 'I'm Feeling Lucky' button: ";
echo $button->get_by_name("btnI")->mouse_move(1,1)."<br>";

// 3
echo "3. Click at current point: ";
echo $mouse->click()."\n";
$browser->wait_for();

// 4
echo "4. Navigate to "  .TEST_SITE_URL . ": ";
echo $browser->navigate(TEST_SITE_URL)."<br>";

// 5
echo "5. Move mouse to 2 links: ";
echo $anchor->get_by_number(110)->mouse_move(1,1)." ";
sleep(1);
echo $anchor->get_by_number(100)->mouse_move(1,1);
sleep(1);
echo $anchor->get_by_number(10)->mouse_move(1,1,1);

// end
echo "<hr><br>";

// Quit
$app->quit();
?>