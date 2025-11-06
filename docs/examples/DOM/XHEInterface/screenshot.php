<?php $xhe_host = "127.0.0.1:3039";

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
echo $image->get_by_name("captcha1")->screenshot("c:\\sc.jpg")."<br>";
// show what was saved
$app->shell_execute("open","c:\\sc.jpg");

// 3
echo "3. Save image by its name to file and display image dimensions in browser: ";
$obj=$image->get_by_name("screen2");
$obj->focus();
echo $obj->screenshot("c:\\sc2.jpg")." ".$obj->get_width()." ".$obj->get_height()."<br>";
// show what was saved
$app->shell_execute("open","c:\\sc2.jpg");

echo "4. Save image (simplified) by its name to file: ";
echo $image->get_by_name("screen1",0)->screenshot("c:\\sc2.jpg",true)."<br>";
// show what was saved
$app->shell_execute("open","c:\\sc2.jpg");

// end
echo "<hr><br>";

// Quit
$app->quit();
?>