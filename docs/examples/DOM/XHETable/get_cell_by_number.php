<?php

/**
 * Пример использования функции get_cell_by_number класса XHETable
 * Example of using get_cell_by_number function of XHETable class
 * 
 * Получить текст ячейки в таблице, таблицу найти по номеру
 * Find table by number and get cell text
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

echo "=== Пример использования get_cell_by_number ===\n";
echo "=== Example of using get_cell_by_number ===\n\n";

// Пример 1: Получение текста ячейки из первой строки, первого столбца
// Example 1: Get cell text from first row, first column
echo "Пример 1: Получение текста ячейки из первой строки, первого столбца\n";
echo "Example 1: Get cell text from first row, first column\n\n";

$cell_text = DOM::$table->get_cell_by_number(0, 0, 0); // Таблица 0, строка 0, столбец 0
echo "Текст ячейки (таблица 0, строка 0, столбец 0): '" . $cell_text . "'\n";
echo "Cell text (table 0, row 0, column 0): '" . $cell_text . "'\n\n";


// Пример 2: Получение текста ячейки из второй строки, третьего столбца
// Example 2: Get cell text from second row, third column
echo "Пример 2: Получение текста ячейки из второй строки, третьего столбца\n";
echo "Example 2: Get cell text from second row, third column\n\n";

$cell_text_2nd_3rd = DOM::$table->get_cell_by_number(0, 1, 2); // Таблица 0, строка 1, столбец 2
echo "Текст ячейки (таблица 0, строка 1, столбец 2): '" . $cell_text_2nd_3rd . "'\n";
echo "Cell text (table 0, row 1, column 2): '" . $cell_text_2nd_3rd . "'\n\n";


// Пример 3: Получение ячейки как HTML вместо текста
// Example 3: Get cell as HTML instead of text
echo "Пример 3: Получение ячейки как HTML вместо текста\n";
echo "Example 3: Get cell as HTML instead of text\n\n";

$cell_html = DOM::$table->get_cell_by_number(0, 0, 0, true); // Как HTML
echo "HTML ячейки (таблица 0, строка 0, столбец 0):\n" . $cell_html . "\n\n";


// Пример 4: Получение ячейки из таблицы во фрейме
// Example 4: Get cell from table in frame
echo "Пример 4: Получение ячейки из таблицы во фрейме\n";
echo "Example 4: Get cell from table in frame\n\n";

$cell_frame = DOM::$table->get_cell_by_number(0, 1, 2, false, "0"); // Таблица 0 во фрейме 0
echo "Текст ячейки (таблица 0 во фрейме 0, строка 1, столбец 2): '" . $cell_frame . "'\n";
echo "Cell text (table 0 in frame 0, row 1, column 2): '" . $cell_frame . "'\n\n";


// Пример 5: Получение ячейки из вложенных фреймов
// Example 5: Get cell from nested frames
echo "Пример 5: Получение ячейки из вложенных фреймов\n";
echo "Example 5: Get cell from nested frames\n\n";

$cell_nested = DOM::$table->get_cell_by_number(0, 0, 0, false, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3
echo "Текст ячейки (таблица 0 во вложенных фреймах 1:2:3, строка 0, столбец 0): '" . $cell_nested . "\n";
echo "Cell text (table 0 in nested frames 1:2:3, row 0, column 0): '" . $cell_nested . "'\n\n";


// Пример 6: Чтение данных из таблицы для анализа
// Example 6: Read data from table for analysis
echo "Пример 6: Чтение данных из таблицы для анализа\n";
echo "Example 6: Read data from table for analysis\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

echo "Чтение данных из таблицы $table_number:\n";
echo "Reading data from table $table_number:\n";

$table_data = [];
for ($row = 0; $row < min($row_count, 5); $row++) { // Читаем первые 5 строк
    $row_data = [];
    for ($col = 0; $col < min($col_count, 5); $col++) { // Читаем первые 5 столбцов
        $cell_value = DOM::$table->get_cell_by_number($table_number, $row, $col);
        $row_data[] = $cell_value;
    }
    $table_data[] = $row_data;
}

// Выводим данные в виде таблицы
// Output data as table
echo "\nДанные таблицы:\n";
echo "\nTable data:\n";
foreach ($table_data as $row_index => $row) {
    echo "Строка $row_index: " . implode(" | ", $row) . "\n";
    echo "Row $row_index: " . implode(" | ", $row) . "\n";
}

echo "\n";


// Пример 7: Поиск конкретных значений в таблице
// Example 7: Search for specific values in table
echo "Пример 7: Поиск конкретных значений в таблице\n";
echo "Example 7: Search for specific values in table\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

$target_values = ['Итог', 'Total', 'Сумма', 'Sum'];
$found_cells = [];

for ($row = 0; $row < $row_count; $row++) {
    for ($col = 0; $col < $col_count; $col++) {
        $cell_value = DOM::$table->get_cell_by_number($table_number, $row, $col);
        
        foreach ($target_values as $target) {
            if (stripos($cell_value, $target) !== false) {
                $found_cells[] = [
                    'row' => $row,
                    'col' => $col,
                    'value' => $cell_value
                ];
                break;
            }
        }
    }
}

echo "Найденные ячейки с ключевыми словами:\n";
echo "Found cells with keywords:\n";
foreach ($found_cells as $cell) {
    echo "- Строка {$cell['row']}, столбец {$cell['col']}: '{$cell['value']}'\n";
    echo "- Row {$cell['row']}, column {$cell['col']}: '{$cell['value']}'\n";
}

echo "\n";


// Пример 8: Проверка существования ячейки перед чтением
// Example 8: Check cell existence before reading
echo "Пример 8: Проверка существования ячейки перед чтением\n";
echo "Example 8: Check cell existence before reading\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

// Проверяем существование таблицы
$table_element = DOM::$table->get_by_number($table_number);
if ($table_element->is_exist()) {
    echo "Таблица $table_number существует\n";
    echo "Table $table_number exists\n";
    
    // Проверяем существование ячейки
    // Check if cell exists
    $test_row = min($row_count - 1, 10);
    $test_col = min($col_count - 1, 10);
    
    $cell_value = DOM::$table->get_cell_by_number($table_number, $test_row, $test_col);
    
    if ($cell_value !== '') {
        echo "Ячейка ($test_row, $test_col) существует и содержит: '$cell_value'\n";
        echo "Cell ($test_row, $test_col) exists and contains: '$cell_value'\n";
    } else {
        echo "Ячейка ($test_row, $test_col) не содержит данных\n";
        echo "Cell ($test_row, $test_col) contains no data\n";
    }
} else {
    echo "Таблица $table_number не найдена на странице\n";
    echo "Table $table_number not found on page\n";
}

echo "\n";


echo "Все примеры get_cell_by_number завершены!\n";
echo "All get_cell_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>