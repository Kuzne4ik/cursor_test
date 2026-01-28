<?php
// Scenario: Find all link ids on the current page
// Description: This script finds all links on the current page and outputs their id attributes to the console
// Classes used: XHEAnchor, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "./Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Wait for page to load
WEB::$browser->wait_for();

// Get count of links on the page
$count_links = DOM::$anchor->get_count();
echo "Всего ссылок на странице: " . $count_links . "\n";

// Array to store link ids
$link_ids = array();

// Iterate through all links on the page
for ($k = 0; $k < $count_links; $k++)
{
    // Get id of link by its number
    $link_id = DOM::$anchor->get_atribute_by_number($k, "id");
    
    // If link has id, add it to array
    if ($link_id != "")
    {
        $link_ids[] = $link_id;
    }
}

// Output all found link ids
if (count($link_ids) > 0)
{
    echo "Найденные id ссылок (способ 1 - через get_atribute_by_number):\n";
    foreach ($link_ids as $id)
    {
        echo "- " . $id . "\n";
    }
}
else
{
    echo "На странице не найдено ссылок с id\n";
}

// Второй способ поиска id всех ссылок с использованием XHEInterfaces
echo "\n=== Второй способ с использованием XHEInterfaces ===\n";

// Получаем все ссылки на странице как коллекцию XHEInterfaces
$links = DOM::$anchor->get_all();

// Проверяем, что мы нашли хотя бы одну ссылку
$links_count = $links->count();
echo "Всего ссылок на странице (через XHEInterfaces): " . $links_count . "\n";

// Массив для хранения id ссылок (второй способ)
$link_ids_2 = array();

// Проходим по всем ссылкам в коллекции
for ($k = 0; $k < $links_count; $k++)
{
    // Получаем текущую ссылку из коллекции
    $link = $links->get($k);
    
    // Получаем id ссылки
    $link_id = $link->get_id();
    
    // Если у ссылки есть id, добавляем его в массив
    if ($link_id != "")
    {
        $link_ids_2[] = $link_id;
    }
}

// Выводим все найденные id ссылок (второй способ)
if (count($link_ids_2) > 0)
{
    echo "Найденные id ссылок (способ 2 - через XHEInterfaces):\n";
    foreach ($link_ids_2 as $id)
    {
        echo "- " . $id . "\n";
    }
}
else
{
    echo "На странице не найдено ссылок с id (второй способ)\n";
}

// Сравниваем результаты двух способов
echo "\n=== Сравнение результатов ===\n";
if (count($link_ids) == count($link_ids_2))
{
    echo "Оба способа нашли одинаковое количество id: " . count($link_ids) . "\n";
    
    // Проверяем, что все id совпадают
    $diff = array_diff($link_ids, $link_ids_2);
    if (empty($diff))
    {
        echo "Все найденные id совпадают в обоих способах\n";
    }
    else
    {
        echo "Найдены различия в id между способами\n";
        echo "Различия: " . implode(", ", $diff) . "\n";
    }
}
else
{
    echo "Способы нашли разное количество id:\n";
    echo "Способ 1: " . count($link_ids) . "\n";
    echo "Способ 2: " . count($link_ids_2) . "\n";
}

// Stop the application
WINDOW::$app->quit();
?>