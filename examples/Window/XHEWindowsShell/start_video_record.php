<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>browser->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Запустм запись экрана : ";
echo $browser->start_video_record("d://record.avi",10,70,100,100,400,400);

// действия
sleep(1);
$browser->navigate("google.com");
sleep(1);
$browser->navigate("yandex.com");

// 2 
echo "\n2. Остановим запись видео : ";
echo $browser->stop_video_record()."\n";

$app->shell_execute("","d:\\record.avi","","d:\\",true);

// 3
echo "3. Запустим запись экрана (черно-белую) : ";
echo $windows->start_video_record("d://record_gray.avi",10,70,-1,-1,-1,-1,true);

// действия
sleep(1);
$browser->navigate("google.com");
sleep(1);
$browser->navigate("yandex.com");

// 4
echo "\n4. Остановим запись видео : ";
echo $windows->stop_video_record();

$app->shell_execute("","d:\\record_gray.avi","","d:\\",true);

// конец
echo "\n";

// Quit
$app->quit();
?>

