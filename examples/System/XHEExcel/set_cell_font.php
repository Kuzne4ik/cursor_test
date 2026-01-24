<?php $xhe_host = "127.0.0.1:7026";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path = "../../../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>excelfile->".basename (__FILE__)."</font>\n";

$excel->kill();

// шрифт
$font=new XHEFont();
$font->name="Arial";
$font->is_bold=true;
$font->is_italic=true;
$font->is_striketrough=true;
$font->is_underline=true;
$font->is_shadow=true;
$font->size=20;

// 1 
echo("1. Зададим шрифт ячейки : ".$font." => ");
echo($excel->set_cell_font("test\\test.xlsx",0,6,"A",$font));



// конец
echo "\n";

// Quit
$app->quit();
?>