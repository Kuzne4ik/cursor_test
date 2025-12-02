<?php
// Scenario: Downloading a file and canceling the download process
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the cancel_download function
// 1 
echo "1. Указать не показывать диалог закачки файлов: ";
echo WEB::$browser->enable_download_file_dialog(false) . "\n";

// 2 
echo "2. Зададим путь для закачки по умолчанию : ";
echo WEB::$browser->set_default_download("test/") . "\n";

// 3
echo "3. Скачаем файл : ";
echo WEB::$browser->navigate(TEST_POLYGON_URL . "clear_history.cs.7z") . "\n";

// 4
echo "4. Получим id последней закачки: ";
$idd = WEB::$browser->get_last_download_id();
echo $idd . "\n";

// 5
echo "5. Выведем информацию о процессе закачки: ";
$num=0;
while (!WEB::$browser->is_download_complete($idd)) {
    echo WEB::$browser->get_download_info($idd) . "\n";
    sleep(1);
    // остановим загрузку
    if ($num == 2) {
        echo "6. Остановим загрузку : ";
        echo WEB::$browser->cancel_download($idd) . "\n";
    }
    $num++;
}
?>