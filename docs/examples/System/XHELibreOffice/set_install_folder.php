<?php
// Scenario: Set the installation folder for LibreOffice

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// начало
echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: Set the path to LibreOffice folder
echo("\n\nExample 1: Set the path to LibreOffice folder\n");
$installPath = "C:\\Program Files\\LibreOffice\\program";
$result = SYSTEM::$libreOffice->set_install_folder($installPath);
echo("Set install path to: $installPath\n");
var_export($result);

// Quit the application
WINDOW::$app->quit();
?>