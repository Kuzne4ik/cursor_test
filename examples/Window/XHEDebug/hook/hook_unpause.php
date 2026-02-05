<?php $xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../../Templates/init.php";
require($path);

// действия что будут выполнены после остановки скрипта
$res="Обработчик (Hook) кнопки Снять с паузы  (Unpause) <br>";
$res.="Пост-действия после снятия с паузы скрипта : <br>";
$res.="Остановили на странице : ".$webpage->get_location_url()."<br>";
$res.="Текущая память : ".($debug->get_cur_mem_size()/1024/1024)." Mb<br>";
$res.="Свободная память : ".($debug->get_free_physical_mem_size()/1024/1024)." Mb<br>";
$res.="Минимальная память стэка : ".($debug->get_min_mem_size()/1024/1024)." Mb<br>";
$res.="Максимальная память стэка : ".($debug->get_max_mem_size()/1024/1024)." Mb<br>";

// результат работы хука для передачи его в скрипт
$path_res=basename (__FILE__).".res";
file_write($path_res,$res) ;

// укажем что хук завершен (создадим файл "имя_хука.out")
$path_res=basename (__FILE__).".out";
$path_res=str_replace(".php","",$path_res);
file_write($path_res,"<unchanged>") ;


?>