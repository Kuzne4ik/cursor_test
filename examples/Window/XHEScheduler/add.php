<?php $xhe_host = "127.0.0.1:7012";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>window->".basename (__FILE__)."</font>\n";

  $d ="2015-07-01";
  $t = "00:00:00";
echo $scheduler->add($debug->get_cur_script_path(),
    0,
    $d,
    $t,
    1,
    true
  );  



// конец
echo "\n";

// Quit
$app->quit();
?>