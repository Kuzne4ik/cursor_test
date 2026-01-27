<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>sound->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Подготовим файл : ";
echo $sound->convert_file("test/mp3/4196092774.mp3","test/mp3/4196092774.wav","8000")."\n";

// 2 
echo "2. Распознаем файл с английскими цифрами (0-9) используя CMU Sphinx : ";
echo $sound->recognize_file("test/mp3/4196092774.wav","digits\\digits.dict","digits\\digits.gram","cmusphinx-en-us-8khz-5.2","-samprate 8000 -remove_dc yes -remove_noise no -vad_threshold 3.4 -vad_prespeech 19 -vad_postspeech 37 -silprob 2.5")."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>