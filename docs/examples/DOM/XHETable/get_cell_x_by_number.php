<?php

/**
 * Пример использования функции get_cell_x_by_number класса XHETable
 * Example of using get_cell_x_by_number function of XHETable class
 * 
 * Получить координату X ячейки по строке и столбцу у таблицы, таблицу найти по номеру
 * Find table by number and get cell X coordinate
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

echo "=== Пример использования get_cell_x_by_number ===\n";
echo "=== Example of using get_cell_x_by_number ===\n\n";

// Пример 1: Получение X координаты первой ячейки (0,0)
// Example 1: Get X coordinate of first cell (0,0)
echo "Пример 1: Получение X координаты первой ячейки (0,0)\n";
echo "Example 1: Get X coordinate of first cell (0,0)\n\n";

$cell_x = DOM::$table->get_cell_x_by_number(0, 0, 0); // Таблица 0, строка 0, столбец 0
echo "X координата ячейки (0, 0): $cell_x\n";
echo "X coordinate of cell (0, 0): $cell_x\n\n";


// Пример 2: Получение X координаты ячейки из второй строки, третьего столбца
// Example 2: Get X coordinate of cell from second row, third column
echo "Пример 2: Получение X координаты ячейки из второй строки, третьего столбца\n";
echo "Example 2: Get X coordinate of cell from second row, third column\n\n";

$cell_x_2nd_3rd = DOM::$table->get_cell_x_by_number(0, 1, 2); // Таблица 0, строка 1, столбец 2
echo "X координата ячейки (1, 2): $cell_x_2nd_3rd\n";
echo "X coordinate of cell (1, 2): $cell_x_2nd_3rd\n\n";


// Пример 3: Получение X координаты из таблицы во фрейме
// Example 3: Get X coordinate from table in frame
echo "Пример 3: Получение X координаты из таблицы во фрейме\n";
echo "Example 3: Get X coordinate from table in frame\n\n";

$cell_x_frame = DOM::$table->get_cell_x_by_number(0, 1, 1, "0"); // Таблица 0 во фрейме 0, строка 1, столбец 1
echo "X координата ячейки (1, 1) из таблицы во фрейме 0: $cell_x_frame\n";
echo "X coordinate of cell (1, 1) from table in frame 0: $cell_x_frame\n\n";


// Пример 4: Получение X координаты из вложенных фреймов
// Example 4: Get X coordinate from nested frames
echo "Пример 4: Получение X координаты из вложенных фреймов\n";
echo "Example 4: Get X coordinate from nested frames\n\n";

$cell_x_nested = DOM::$table->get_cell_x_by_number(0, 0, 0, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3, строка 0, столбец 0
echo "X координата ячейки (0, 0) из таблицы во вложенных фреймах 1:2:3: $cell_x_nested\n";
echo "X coordinate of cell (0, 0) from table in nested frames 1:2:3: $cell_x_nested\n\n";


// Пример 5: Получение X координат для всех ячеек первой строки
// Example 5: Get X coordinates for all cells in first row
echo "Пример 5: Получение X координат для всех ячеек первой строки\n";
echo "Example 5: Get X coordinates for all cells in first row\n\n";

$table_number = 0;
$row = 0; // Первая строка
$col_count = DOM::$table->get_cols_by_number($table_number);

echo "X координаты ячеек в строке $row:\n";
echo "X coordinates of cells in row $row:\n";

for ($col = 0; $col < $col_count; $col++) {
    $cell_x = DOM::$table->get_cell_x_by_number($table_number, $row, $col);
    echo "- Ячейка ($row, $col): X=$cell_x\n";
    echo "- Cell ($row, $col): X=$cell_x\n";
}

echo "\n";


// Пример 6: Получение X координат для всех ячеек первого столбца
// Example 6: Get X coordinates for all cells in first column
echo "Пример 6: Получение X координат для всех ячеек первого столбца\n";
echo "Example 6: Get X coordinates for all cells in first column\n\n";

$table_number = 0;
$col = 0; // Первый столбец
$row_count = DOM::$table->get_rows_by_number($table_number);

echo "X координаты ячеек в столбце $col:\n";
echo "X coordinates of cells in column $col:\n";

for ($row = 0; $row < $row_count; $row++) {
    $cell_x = DOM::$table->get_cell_x_by_number($table_number, $row, $col);
    echo "- Ячейка ($row, $col): X=$cell_x\n";
    echo "- Cell ($row, $col): X=$cell_x\n";
}

echo "\n";


// Пример 7: Анализ расположения ячеек таблицы
// Example 7: Analyze table cell positioning
echo "Пример 7: Анализ расположения ячеек таблицы\n";
echo "Example 7: Analyze table cell positioning\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$col_count = DOM::$table->get_cols_by_number($table_number);

// Анализируем расположение ячеек в небольшой области таблицы
// Analyze cell positioning in a small area of the table
echo "Анализ расположения ячеек в первых 3 строках и 3 столбцах:\n";
echo "Analysis of cell positioning in first 3 rows and 3 columns:\n\n";

$position_analysis = [];
for ($row = 0; $row < min($row_count, 3); $row++) {
    for ($col = 0; $col < min($col_count, 3); $col++) {
        $cell_x = DOM::$table->get_cell_x_by_number($table_number, $row, $col);
        $position_analysis[] = [
            'row' => $row,
            'col' => $col,
            'x' => $cell_x
        ];
    }
}

// Выводим результаты анализа
echo "Результаты анализа:\n";
echo "Analysis results:\n";

foreach ($position_analysis as $pos) {
    echo "- Ячейка ({$pos['row']}, {$pos['col']}): X={$pos['x']}\n";
    echo "- Cell ({$pos['row']}, {$pos['col']}): X={$pos['x']}\n";
}

// Проверяем возрастание координат X
// Check if X coordinates are increasing$last_x = null;
$x_increasing = true;

$last_x = null;
foreach ($position_analysis as $pos) {
    if ($last_x !== null && $pos['x'] < $last_x) {
        $x_increasing = false;
        break;
    }
    $last_x = $pos['x'];
}

echo "\nКоординаты X " . ($x_increasing ? 'возрастают' : 'не являются строго возрастающими') . "\n";
echo "X coordinates are " . ($x_increasing ? 'increasing' : 'not strictly increasing') . "\n\n";


// Пример 8: Проверка существования ячейки перед получением координат
// Example 8: Check cell existence before getting coordinates
echo "Пример 8: Проверка существования ячейки перед получением координат\n";
echo "Example 8: Check cell existence before getting coordinates\n\n";

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
    
    $cell_x = DOM::$table->get_cell_x_by_number($table_number, $test_row, $test_col);
    
    if ($cell_x >= 0) {
        echo "Ячейка ($test_row, $test_col) существует, X координата: $cell_x\n";
        echo "Cell ($test_row, $test_col) exists, X coordinate: $cell_x\n";
    } else {
        echo "Ячейка ($test_row, $test_col) не найдена или ошибка получения координат\n";
        echo "Cell ($test_row, $test_col) not found or error getting coordinates\n";
    }
} else {
    echo "Таблица $table_number не найдена на странице\n";
    echo "Table $table_number not found on page\n";
}

echo "\n";

echo "Все примеры get_cell_x_by_number завершены!\n";
echo "All get_cell_x_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>