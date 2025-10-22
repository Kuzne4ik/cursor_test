<?php

/**
 * Пример использования функции get_cell_y_by_number класса XHETable
 * Example of using get_cell_y_by_number function of XHETable class
 * 
 * Получить координату Y ячейки по строке и столбцу у таблицы, таблицу найти по номеру
 * Find table by number and get cell Y coordinate
 */

$xhe_host = "127.0.0.1:7013";

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

echo "=== Пример использования get_cell_y_by_number ===\n";
echo "=== Example of using get_cell_y_by_number ===\n\n";

// Пример 1: Получение Y координаты первой ячейки (0,0)
// Example 1: Get Y coordinate of first cell (0,0)
echo "Пример 1: Получение Y координаты первой ячейки (0,0)\n";
echo "Example 1: Get Y coordinate of first cell (0,0)\n\n";

$cell_y = DOM::$table->get_cell_y_by_number(0, 0, 0); // Таблица 0, строка 0, столбец 0
echo "Y координата ячейки (0, 0): $cell_y\n";
echo "Y coordinate of cell (0, 0): $cell_y\n\n";


// Пример 2: Получение Y координаты ячейки из второй строки, третьего столбца
// Example 2: Get Y coordinate of cell from second row, third column
echo "Пример 2: Получение Y координаты ячейки из второй строки, третьего столбца\n";
echo "Example 2: Get Y coordinate of cell from second row, third column\n\n";

$cell_y_2nd_3rd = DOM::$table->get_cell_y_by_number(0, 1, 2); // Таблица 0, строка 1, столбец 2
echo "Y координата ячейки (1, 2): $cell_y_2nd_3rd\n";
echo "Y coordinate of cell (1, 2): $cell_y_2nd_3rd\n\n";


// Пример 3: Получение Y координаты из таблицы во фрейме
// Example 3: Get Y coordinate from table in frame
echo "Пример 3: Получение Y координаты из таблицы во фрейме\n";
echo "Example 3: Get Y coordinate from table in frame\n\n";

$cell_y_frame = DOM::$table->get_cell_y_by_number(0, 1, 1, "0"); // Таблица 0 во фрейме 0, строка 1, столбец 1
echo "Y координата ячейки (1, 1) из таблицы во фрейме 0: $cell_y_frame\n";
echo "Y coordinate of cell (1, 1) from table in frame 0: $cell_y_frame\n\n";


// Пример 4: Получение Y координаты из вложенных фреймов
// Example 4: Get Y coordinate from nested frames
echo "Пример 4: Получение Y координаты из вложенных фреймов\n";
echo "Example 4: Get Y coordinate from nested frames\n\n";

$cell_y_nested = DOM::$table->get_cell_y_by_number(0, 0, 0, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3, строка 0, столбец 0
echo "Y координата ячейки (0, 0) из таблицы во вложенных фреймах 1:2:3: $cell_y_nested\n";
echo "Y coordinate of cell (0, 0) from table in nested frames 1:2:3: $cell_y_nested\n\n";


// Пример 5: Получение Y координат для всех ячеек первого столбца
// Example 5: Get Y coordinates for all cells in first column
echo "Пример 5: Получение Y координат для всех ячеек первого столбца\n";
echo "Example 5: Get Y coordinates for all cells in first column\n\n";

$table_number = 0;
$col = 0; // Первый столбец
$row_count = DOM::$table->get_rows_by_number($table_number);

echo "Y координаты ячеек в столбце $col:\n";
echo "Y coordinates of cells in column $col:\n";

for ($row = 0; $row < $row_count; $row++) {
    $cell_y = DOM::$table->get_cell_y_by_number($table_number, $row, $col);
    echo "- Ячейка ($row, $col): Y=$cell_y\n";
    echo "- Cell ($row, $col): Y=$cell_y\n";
}

echo "\n";


// Пример 6: Получение Y координат для всех ячеек первой строки
// Example 6: Get Y coordinates for all cells in first row
echo "Пример 6: Получение Y координат для всех ячеек первой строки\n";
echo "Example 6: Get Y coordinates for all cells in first row\n\n";

$table_number = 0;
$row = 0; // Первая строка
$col_count = DOM::$table->get_cols_by_number($table_number);

echo "Y координаты ячеек в строке $row:\n";
echo "Y coordinates of cells in row $row:\n";

for ($col = 0; $col < $col_count; $col++) {
    $cell_y = DOM::$table->get_cell_y_by_number($table_number, $row, $col);
    echo "- Ячейка ($row, $col): Y=$cell_y\n";
    echo "- Cell ($row, $col): Y=$cell_y\n";
}

echo "\n";

echo "Все примеры get_cell_y_by_number завершены!\n";
echo "All get_cell_y_by_number examples completed!\n";


// Остановить работу
WINDOW::$app->quit();

?>