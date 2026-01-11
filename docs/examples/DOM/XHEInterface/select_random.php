<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
}

// beginning
echo "<hr><font color=blue>interface->".basename (__FILE__)."</font><hr>";

// 1
echo "1. Navigate to the test site: ";
echo WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html")."<br>";

// 2
echo "2. Select a random option: ";
echo $targetListbox = DOM::$listbox->get_by_number(1)->select_random()."<br>";

// Quit
WINDOW::$app->quit();
?>