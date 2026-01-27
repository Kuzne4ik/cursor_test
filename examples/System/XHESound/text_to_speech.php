<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>sound->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Преобразуем текст в звук через API (метод по умолчанию) : ";
$result = $sound->text_to_speech("Hello, this is a test message.", "test/tts_api_output.mp3");
echo $result ? "true" : "false";
echo "\n";

// 2 
echo "2. Преобразуем текст в звук через API с указанием голоса : ";
$result = $sound->text_to_speech("Привет, это тестовое сообщение.", "test/tts_api_voice.mp3", "api", "nova");
echo $result ? "true" : "false";
echo "\n";

// 3 
echo "3. Преобразуем текст в звук через локальный метод (piper-tts) : ";
$result = $sound->text_to_speech("Test message for local TTS.", "test/tts_local_output.wav", "local");
echo $result ? "true" : "false";
echo "\n";

// 4 
echo "4. Преобразуем текст в звук через локальный метод с указанием модели голоса : ";
$result = $sound->text_to_speech("Тестовое сообщение для локального синтеза.", "test/tts_local_voice.wav", "local", "ru_RU-denis-medium");
echo $result ? "true" : "false";
echo "\n";

// конец
echo "\n";

// Quit
$app->quit();
?>

