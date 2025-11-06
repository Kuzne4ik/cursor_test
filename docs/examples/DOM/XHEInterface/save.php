<?php $xhe_host = "127.0.0.1:7094";

// connect functional objects, if not already connected
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to polygon: ";
echo $browser->navigate(TEST_POLYGON_URL . "image.html")."<br>";

// 2
echo "2. Save image by its name to file: ";
echo $image->get_by_name("captcha1")->save("c:\\sc.jpg")."<br>";
// show what was saved
$app->shell_execute("open","c:\\sc.jpg");

// 3
echo "3. Save image by its name to file and display image dimensions in browser: ";
$obj=$image->get_by_name("screen2");
echo $obj->save("c:\\sc2.jpg")." ".$obj->get_width()." ".$obj->get_height()."<br>";
// show what was saved
$app->shell_execute("open","c:\\sc2.jpg");

// 4
echo "4. Navigate to polygon: ";
echo $browser->navigate("http://www.puzzleweb.ru/html/examples/object_width.php")."<br>";

// 5
echo "5. Save flash by its number to file: ";
echo $flash->get_by_number(0,0)->save("c:\\sc3.swf")."<br>";
// show what was saved
$app->shell_execute("open","c:\\sc3.swf");

// end
echo "<hr><br>";

// Quit
$app->quit();
?>