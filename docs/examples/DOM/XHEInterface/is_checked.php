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
echo("1. Navigate to polygon: ");
echo($browser->navigate(TEST_POLYGON_URL . "checkbox.html")."<br>");

// 2
echo("2. Check: ");
echo($checkbox->get_by_number(4)->check()."<br>");

// 3
echo("3. Get checked state: ");
echo($checkbox->get_by_number(4)->is_checked()."<br>");

sleep(2);

// 4
echo("4. Uncheck: ");
echo($checkbox->get_by_number(4)->check(false)."<br>");

// 5
echo("5. Get checked state: ");
if (!$checkbox->get_by_number(4)->is_checked())
    echo("not checked");

// end
echo "<hr><br>";

// Quit
$app->quit();
?>