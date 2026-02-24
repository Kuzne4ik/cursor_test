<?php $xhe_host = "127.0.0.1:5006";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
  $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windows->".basename (__FILE__)."</font>\n";

// 1 
echo "1. Получить папку c Windows : ";
echo ($windows->get_special_folder("Windows"))."\n";

// 2
echo "2. Получить папку c Windows : ";
echo ($windows->get_special_folder("Temp"))."\n";

// 3
echo "3. Получить папку c автозагрузкой  : ";
echo ($windows->get_special_folder("Startup"))."\n";

// конец
echo "\n";

// Quit
$app->quit();
?>

/* полный список папок:
Desktop;
Programs
Personal
MyDocuments
Favorites
Startup
Recent
SendTo
StartMenu
MyMusic
MyVideos
DesktopDirectory
MyComputer
NetworkShortcuts
Fonts
Templates
CommonStartMenu
CommonPrograms
CommonStartup
CommonDesktopDirectory
ApplicationData
PrinterShortcuts
LocalApplicationData
InternetCache
Cookies
History
CommonApplicationData
Windows
System
ProgramFiles
MyPictures
UserProfile
SystemX86
ProgramFilesX86
CommonProgramFiles
CommonProgramFilesX86
CommonTemplates
CommonDocuments
CommonAdminTools
AdminTools
CommonMusic
CommonPictures
CommonVideos":
Resources
LocalizedResources
CommonOemLinks
CDBurning*/