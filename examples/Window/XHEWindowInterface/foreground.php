<?php
$xhe_host = "127.0.0.1:7011";

// подключим функциональные объекты, если еще не подключен
if (!isset($path))
    $path="../../../Templates/init.php";
require($path);

// начало
echo "\n<font color=blue>windowinterface->".basename (__FILE__)."</font>\n";

// 1
echo "\n1. Получить коллекцию окон с заголовком 'Блокнот': ";
$windowInterfaces = WINDOW::$window->get_all_by_text("Блокнот", false);

// 2
echo "\n2. Сколько элементов в коллекции: ";
$windowInterfacesCount = count($windowInterfaces);
echo $windowInterfacesCount;

// 3
echo "\n3. Получить первый интерфейс из коллекции: ";
if ($windowInterfacesCount == 0){
    echo "Не нашли окон с текстом 'Блокнот'. Завершить работу.";
    // Quit
    WINDOW::$app->quit();
}
else
{
    $notepadWindowInterface = $windowInterfaces[0];
    // 4
    echo "\n4. Вынести окно 'Блокнот' на передний план: ";
    echo $notepadWindowInterface->foreground() . " ";

    // 5
    echo "\n5. Дать фокус окну 'Блокнот': ";
    echo $notepadWindowInterface->focus() . "<br>";
}

// конец
echo "\n";

// Quit
WINDOW::$app->quit();
?>