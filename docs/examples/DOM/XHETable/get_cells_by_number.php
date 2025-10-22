<?php

/**
 * Пример использования функции get_cells_by_number класса XHETable
 * Example of using get_cells_by_number function of XHETable class
 * 
 * Получить количество ячеек таблицы, таблицу найти по номеру
 * Find table by number and get the number of cells
 */

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

echo "=== Пример использования get_cells_by_number ===\n";
echo "=== Example of using get_cells_by_number ===\n\n";

// Пример 1: Получение количества ячеек в первой таблице
// Example 1: Get number of cells in the first table
echo "Пример 1: Получение количества ячеек в первой таблице\n";
echo "Example 1: Get number of cells in the first table\n\n";

$cell_count = DOM::$table->get_cells_by_number(0); // Номер таблицы 0
echo "Количество ячеек в таблице 0: " . $cell_count . "\n";
echo "Number of cells in table 0: " . $cell_count . "\n\n";


// Пример 2: Получение количества ячеек во второй таблице
// Example 2: Get number of cells in the second table
echo "Пример 2: Получение количества ячеек во второй таблице\n";
echo "Example 2: Get number of cells in the second table\n\n";

$cell_count_2nd = DOM::$table->get_cells_by_number(1); // Номер таблицы 1
echo "Количество ячеек в таблице 1: " . $cell_count_2nd . "\n";
echo "Number of cells in table 1: " . $cell_count_2nd . "\n\n";


// Пример 3: Получение количества ячеек в таблице во фрейме
// Example 3: Get number of cells in table in frame
echo "Пример 3: Получение количества ячеек в таблице во фрейме\n";
echo "Example 3: Get number of cells in table in frame\n\n";

$cell_count_frame = DOM::$table->get_cells_by_number(0, "0"); // Таблица 0 во фрейме 0
echo "Количество ячеек в таблице 0 во фрейме 0: " . $cell_count_frame . "\n";
echo "Number of cells in table 0 in frame 0: " . $cell_count_frame . "\n\n";


// Пример 4: Получение количества ячеек во вложенных фреймах
// Example 4: Get number of cells in nested frames
echo "Пример 4: Получение количества ячеек во вложенных фреймах\n";
echo "Example 4: Get number of cells in nested frames\n\n";

$cell_count_nested = DOM::$table->get_cells_by_number(0, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3
echo "Количество ячеек в таблице 0 во вложенных фреймах 1:2:3: " . $cell_count_nested . "\n";
echo "Number of cells in table 0 in nested frames 1:2:3: " . $cell_count_nested . "\n\n";


// Пример 5: Комплексное использование с другими функциями
// Example 5: Complex usage with other functions
echo "Пример 5: Комплексное использование с другими функциями\n";
echo "Example 5: Complex usage with other functions\n\n";

// Получаем информацию о нескольких таблицах
// Get information about multiple tables
$tables_info = [];
for ($i = 0; $i < 3; $i++) {
    $tables_info[] = [
        'table_number' => $i,
        'cell_count' => DOM::$table->get_cells_by_number($i)
    ];
}

echo "Информация о первых 3 таблицах:\n";
echo "Information about first 3 tables:\n";
foreach ($tables_info as $info) {
    echo "- Таблица {$info['table_number']}: {$info['cell_count']} ячеек\n";
    echo "- Table {$info['table_number']}: {$info['cell_count']} cells\n";
}

echo "\n";


// Пример 6: Проверка существования таблицы перед получением ячеек
// Example 6: Check table existence before getting cells
echo "Пример 6: Проверка существования таблицы перед получением ячеек\n";
echo "Example 6: Check table existence before getting cells\n\n";

$table_number = 5; // Попытка получить информацию о таблице с номером 5
$element = DOM::$table->get_by_number($table_number);

if ($element->is_exist()) {
    $cell_count = DOM::$table->get_cells_by_number($table_number);
    echo "Таблица $table_number существует и содержит $cell_count ячеек\n";
    echo "Table $table_number exists and contains $cell_count cells\n";
} else {
    echo "Таблица $table_number не найдена на странице\n";
    echo "Table $table_number not found on page\n";
}

echo "\n";


echo "Все примеры get_cells_by_number завершены!\n";
echo "All get_cells_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>