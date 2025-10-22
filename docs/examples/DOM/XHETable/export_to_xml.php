<?php

/**
 * Пример использования функции export_to_xml класса XHETable
 * Example of using export_to_xml function of XHETable class
 * 
 * Экспорт DOM элемента таблица в текстовый файл в формате XML, таблицу найти по номеру
 * Export table to XML file
 */

// Строка подключения к API XHE
$xhe_host = "127.0.0.1:7010";

// Путь к файлу init.php
if (!isset($path))
{
    // Путь к файлу init.php для подключения к API XHE
    $path = "../../../../../../Templates/init.php";
    // При подключении файла init.php, будет доступен весь функционал классов для работы с API XHE
    require($path);
}

// Перейти на страницу полигона, если ранее страница не была загружена
WEB::$browser->navigate(TEST_POLYGON_URL . "table.html");
echo "=== Пример использования export_to_xml ===\n";
echo "=== Example of using export_to_xml ===\n\n";

// Пример 1: Экспорт всей таблицы в XML файл
// Example 1: Export entire table to XML file
echo "Пример 1: Экспорт всей таблицы в XML файл\n";
echo "Example 1: Export entire table to XML file\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data.xml', // Путь к файлу / File path
    0,                      // Номер таблицы на странице (начинается с 0) / Table number on page (starts from 0)
    '',                     // Все строки (пустая строка) / All rows (empty string)
    '',                     // Все столбцы (пустая строка) / All columns (empty string)
    false                   // Как текст (не как HTML) / As text (not as HTML)
);

echo "Результат экспорта: " . ($xml_result ? 'Успешно' : 'Ошибка') . "\n";
echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


// Пример 2: Экспорт определенных строк и столбцов
// Example 2: Export specific rows and columns
echo "Пример 2: Экспорт определенных строк и столбцов\n";
echo "Example 2: Export specific rows and columns\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data_filtered.xml', // Путь к файлу / File path
    0,                              // Номер таблицы / Table number
    '0,2,4',                        // Строки с индексами 0, 2, 4 / Rows with indices 0, 2, 4
    '1,3,5',                        // Столбцы с индексами 1, 3, 5 / Columns with indices 1, 3, 5
    false                           // Как текст / As text
);

echo "Результат экспорта: " . ($xml_result ? 'Успешно' : 'Ошибка') . "\n";
echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


// Пример 3: Экспорт как HTML
// Example 3: Export as HTML
echo "Пример 3: Экспорт как HTML\n";
echo "Example 3: Export as HTML\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data_html.xml', // Путь к файлу / File path
    0,                           // Номер таблицы / Table number
    '',                          // Все строки / All rows
    '',                          // Все столбцы / All columns
    true                         // Как HTML / As HTML
);

echo "Результат экспорта: " . ($xml_result ? 'Успешно' : 'Ошибка') . "\n";
echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


// Пример 4: Экспорт с указанием фрейма
// Example 4: Export with frame specification
echo "Пример 4: Экспорт с указанием фрейма\n";
echo "Example 4: Export with frame specification\n\n";

$xml_result = DOM::$table->export_to_xml(
    'output/table_data_frame.xml', // Путь к файлу / File path
    0,                            // Номер таблицы / Table number
    '0,1',                        // Первые две строки / First two rows
    '0,1',                        // Первые два столбца / First two columns
    false,                        // Как текст / As text
    '0'                           // Фрейм 0 / Frame 0
);

echo "Результат экспорта: " . ($xml_result ? 'Успешно' : 'Ошибка') . "\n";
echo "Export result: " . ($xml_result ? 'Success' : 'Error') . "\n\n";


echo "Все примеры export_to_xml завершены!\n";
echo "All export_to_xml examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>