<?php $xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>sound->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Изменим формат файла mp3 на flac : ";
echo $sound->convert_file("test/mp3/68323.mp3","test/audio.flac")."\n";

// 2 
echo "2. Изменим формат файла mp3 на wav 8 kHz : ";
echo $sound->convert_file("test/mp3/68323.mp3","test/audio8.wav","8000");

// конец
echo "\n";

// Quit
$app->quit();
?>