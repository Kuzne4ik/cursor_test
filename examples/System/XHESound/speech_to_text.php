<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>sound->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Распознаем речь из аудиофайла через API (метод по умолчанию) : ";
$result = $sound->speech_to_text("test/audio8.wav");
echo $result;
echo "\n";

// 2 
echo "2. Распознаем речь из аудиофайла через API с указанием языка : ";
$result = $sound->speech_to_text("test/audio8.wav", "api", "ru");
echo $result;
echo "\n";

// 3 
echo "3. Распознаем речь из аудиофайла через локальный метод (whisper.cpp) : ";
$result = $sound->speech_to_text("test/audio8.wav", "local");
echo $result;
echo "\n";

// 4 
echo "4. Распознаем речь из аудиофайла через локальный метод с указанием языка и модели : ";
$result = $sound->speech_to_text("test/audio8.wav", "local", "ru", 60, "ggml-base.bin");
echo $result;
echo "\n";

// 5 
echo "5. Распознаем речь из MP3 файла через API : ";
$result = $sound->speech_to_text("test/mp3/68323.mp3");
echo $result;
echo "\n";

// конец
echo "\n";

// Quit
$app->quit();
?>

