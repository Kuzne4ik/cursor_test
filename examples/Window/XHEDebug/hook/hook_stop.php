<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../../Templates/init.php";
require($path);

// время работы хука 3000 миллисекунд по умолчанию или столько сколько указано в файле hook_time.txt в каталоге программы

// действия что будут выполнены после остановки скрипта
$out="\nОбработчик (Hook) кнопки Остановить скрипт  (Stop)\n";
$out.="Пост-действия после останова скрипта : \n";
$out.="Остановили на странице : ".$webpage->get_location_url()."\n";
$out.="Текущая память : ".($debug->get_cur_mem_size()/1024/1024)." Mb\n";
$out.="Свободная память : ".($debug->get_free_physical_mem_size()/1024/1024)." Mb\n";
$out.="Минимальная память стэка : ".($debug->get_min_mem_size()/1024/1024)." Mb\n";
$out.="Максимальная память стэка : ".($debug->get_max_mem_size()/1024/1024)." Mb\n";

// результат работы хука для передачи его в сообщение
$path_res=basename (__FILE__).".out";
$debug->message_box($out);

// укажем что хук завершен (создадим файл "имя_хука.out")
$path_res=basename (__FILE__).".out";
$path_res=str_replace(".php","",$path_res);
file_write($path_res,"<unchanged>") ;

// конец
$app->quit();
?>