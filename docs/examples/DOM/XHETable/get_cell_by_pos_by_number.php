<?php

/**
 * Пример использования функции get_cell_by_pos_by_number класса XHETable
 * Example of using get_cell_by_pos_by_number function of XHETable class
 * 
 * Получить текст ячейки по позиции в таблице, таблицу найти по номеру
 * Find table by number and get cell by position
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
echo "=== Пример использования get_cell_by_pos_by_number ===\n";
echo "=== Example of using get_cell_by_pos_by_number ===\n\n";

// Пример 1: Получение ячейки по позиции 0 (первая ячейка)
// Example 1: Get cell by position 0 (first cell)
echo "Пример 1: Получение ячейки по позиции 0 (первая ячейка)\n";
echo "Example 1: Get cell by position 0 (first cell)\n\n";

$cell_by_pos = DOM::$table->get_cell_by_pos_by_number(0, 0); // Таблица 0, позиция 0
echo "Текст ячейки по позиции 0: '" . $cell_by_pos . "'\n";
echo "Cell text by position 0: '" . $cell_by_pos . "'\n\n";


// Пример 2: Получение ячейки по позиции 5 (шестая ячейка)
// Example 2: Get cell by position 5 (sixth cell)
echo "Пример 2: Получение ячейки по позиции 5 (шестая ячейка)\n";
echo "Example 2: Get cell by position 5 (sixth cell)\n\n";

$cell_by_pos_5 = DOM::$table->get_cell_by_pos_by_number(0, 5); // Таблица 0, позиция 5
echo "Текст ячейки по позиции 5: '" . $cell_by_pos_5 . "'\n";
echo "Cell text by position 5: '" . $cell_by_pos_5 . "'\n\n";


// Пример 3: Получение ячейки по позиции как HTML
// Example 3: Get cell by position as HTML
echo "Пример 3: Получение ячейки по позиции как HTML\n";
echo "Example 3: Get cell by position as HTML\n\n";

$cell_html = DOM::$table->get_cell_by_pos_by_number(0, 1, true); // Таблица 0, позиция 1, как HTML
echo "HTML ячейки по позиции 1:\n" . $cell_html . "\n\n";


// Пример 4: Получение ячейки по позиции из таблицы во фрейме
// Example 4: Get cell by position from table in frame
echo "Пример 4: Получение ячейки по позиции из таблицы во фрейме\n";
echo "Example 4: Get cell by position from table in frame\n\n";

$cell_frame = DOM::$table->get_cell_by_pos_by_number(0, 2, false, "0"); // Таблица 0 во фрейме 0, позиция 2
echo "Текст ячейки по позиции 2 из таблицы во фрейме 0: '" . $cell_frame . "'\n";
echo "Cell text by position 2 from table in frame 0: '" . $cell_frame . "'\n\n";


// Пример 5: Получение ячейки по позиции из вложенных фреймов
// Example 5: Get cell by position from nested frames
echo "Пример 5: Получение ячейки по позиции из вложенных фреймов\n";
echo "Example 5: Get cell by position from nested frames\n\n";

$cell_nested = DOM::$table->get_cell_by_pos_by_number(0, 3, false, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3, позиция 3
echo "Текст ячейки по позиции 3 из таблицы во вложенных фреймах 1:2:3: '" . $cell_nested . "'\n";
echo "Cell text by position 3 from table in nested frames 1:2:3: '" . $cell_nested . "'\n\n";


// Пример 6: Чтение нескольких ячеек по позициям
// Example 6: Read multiple cells by positions
echo "Пример 6: Чтение нескольких ячеек по позициям\n";
echo "Example 6: Read multiple cells by positions\n\n";

$positions = [0, 1, 2, 3, 4]; // Первые 5 позиций
echo "Чтение ячеек по позициям:\n";
echo "Reading cells by positions:\n";

foreach ($positions as $position) {
    $cell_value = DOM::$table->get_cell_by_pos_by_number(0, $position);
    echo "- Позиция $position: '" . $cell_value . "'\n";
    echo "- Position $position: '" . $cell_value . "'\n";
}

echo "\n";


// Пример 7: Сравнение get_cell_by_number и get_cell_by_pos_by_number
// Example 7: Compare get_cell_by_number and get_cell_by_pos_by_number
echo "Пример 7: Сравнение get_cell_by_number и get_cell_by_pos_by_number\n";
echo "Example 7: Compare get_cell_by_number and get_cell_by_pos_by_number\n\n";

// Получаем информацию о структуре таблицы
// Get table structure information
$row_count = DOM::$table->get_rows_by_number(0);
$col_count = DOM::$table->get_cols_by_number(0);

echo "Структура таблицы: $row_count строк, $col_count столбцов\n";
echo "Table structure: $row_count rows, $col_count columns\n";

// Сравнение результатов
// Compare results
$cell_by_number = DOM::$table->get_cell_by_number(0, 1, 2); // Строка 1, столбец 2
$cell_by_pos = DOM::$table->get_cell_by_pos_by_number(0, 7); // Позиция 7 (1*col_count + 2)

echo "\nСравнение результатов:\n";
echo "\nComparison of results:\n";
echo "- get_cell_by_number (строка 1, столбец 2): '" . $cell_by_number . "'\n";
echo "- get_cell_by_pos_by_number (позиция 7): '" . $cell_by_pos . "'\n";
echo "\n";


// Пример 8: Поиск по позициям с использованием HTML вывода
// Example 8: Search by positions using HTML output
echo "Пример 8: Поиск по позициям с использованием HTML вывода\n";
echo "Example 8: Search by positions using HTML output\n\n";

$positions = [0, 1, 2];
echo "Чтение ячеек по позициям как HTML:\n";
echo "Reading cells by positions as HTML:\n";

foreach ($positions as $position) {
    $cell_html = DOM::$table->get_cell_by_pos_by_number(0, $position, true);
    echo "- Позиция $position (HTML):\n" . $cell_html . "\n\n";
    echo "- Position $position (HTML):\n" . $cell_html . "\n\n";
}


// Пример 9: Проверка существования позиции перед чтением
// Example 9: Check position existence before reading
echo "Пример 9: Проверка существования позиции перед чтением\n";
echo "Example 9: Check position existence before reading\n\n";

// Сначала получаем общее количество ячеек
// First get total number of cells
$total_cells = DOM::$table->get_cells_by_number(0);
echo "Всего ячеек в таблице: $total_cells\n";
echo "Total cells in table: $total_cells\n";

// Проверяем разные позиции
// Check different positions
$test_positions = [0, 5, 10, 15];

foreach ($test_positions as $position) {
    $cell_value = DOM::$table->get_cell_by_pos_by_number(0, $position);
    
    if ($cell_value !== '') {
        echo "Позиция $position: '$cell_value'\n";
        echo "Position $position: '$cell_value'\n";
    } else {
        echo "Позиция $position: пустая ячейка или позиция не существует\n";
        echo "Position $position: empty cell or position doesn't exist\n";
    }
}

echo "\n";


echo "Все примеры get_cell_by_pos_by_number завершены!\n";
echo "All get_cell_by_pos_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>