<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>sound->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Распознаем файл с английскими цифрами (0-9) : ";
echo $sound->recognize_file_with_digits("test/mp3/4196092774.mp3")."\n";

// 2
echo "2. Распознаем файл с английскими цифрами (0-9) : ";
echo $sound->recognize_file_with_digits("test/mp3/80692.mp3")."\n";

// 3
echo "<center><h5>Cкачаем файл с Recaptcha V2</h5></center>";
echo "3. Перейдем на полигон: ";
echo $browser->navigate("https://www.google.com/recaptcha/api2/demo")."<br>";

// 4
echo "4. Нажмем Я не робот  : ";
while (!$div->get_by_attribute("class","recaptcha-checkbox-checkmark",false,0)->is_visibled())sleep(1);
echo $check=$div->get_by_attribute("class","recaptcha-checkbox-checkmark",false,0)->send_mouse_click(4,4)."\n";

// 5
echo "5. Нажмем аудио вариант капчи : ";
while (!$btn->get_by_name("recaptcha-audio-button",1)->is_visibled())
{
	$div->get_by_attribute("class","recaptcha-checkbox-checkmark",false,0)->send_mouse_click(4,4);
	sleep(1);
}
echo $btn->get_by_name("recaptcha-audio-button",1)->send_mouse_click(5,5)."\n";
sleep(4);

// 6
echo "6. Нажмем скачать : "; 
$window->execute_download_file();
$browser->set_default_download("download");
$browser->enable_download_file_dialog(true);
$file_os->delete("download/audio.mp3");
while (!$anchor->get_by_href("api2/payload/audio.mp3",false,1)->is_visibled())
{
	$btn->get_by_name("recaptcha-audio-button",1)->send_mouse_click(5,5)."\n";
	sleep(1);
}
echo $anchor->get_by_href("api2/payload/audio.mp3",false,1)->send_mouse_click(5,5)."\n";
sleep(3);
// ждем закачку
while (!$file_os->is_exist("download/audio.mp3"))
  sleep(1);


// 7
echo "7. Распознаем файл с английскими цифрами (0-9) : ";
echo $digits=$sound->recognize_file_with_digits("download/audio.mp3")."";
sleep(1);
if ($digits==false)
{
	echo "нет аудио файла в правильном формате. (возможно слишком часто запрашиваем звуковой файл. повторите позже.)";
	$app->quit();
}

// 8
echo "\n8. Введем результат : ";
$browser->set_active_browser(0);
echo $input->get_by_name("audio-response",1)->send_input($digits)."\n";
$btn->get_by_id("recaptcha-verify-button",false,1)->send_mouse_click();


// конец
echo "\n";

// Quit
$app->quit();
?>