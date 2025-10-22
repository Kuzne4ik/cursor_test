<?php

/**
 * Пример использования функции get_cols_by_number класса XHETable
 * Example of using get_cols_by_number function of XHETable class
 * 
 * Получить количество столбцов таблицы, таблицу найти по номеру
 * Find table by number and get the number of columns
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

// Пример 1: Получение количества столбцов в первой таблице
// Example 1: Get number of columns in the first table
echo "Пример 1: Получение количества столбцов в первой таблице\n";
echo "Example 1: Get number of columns in the first table\n\n";

$col_count = DOM::$table->get_cols_by_number(0); // Номер таблицы 0
echo "Количество столбцов в таблице 0: " . $col_count . "\n";
echo "Number of columns in table 0: " . $col_count . "\n\n";


// Пример 2: Получение количества столбцов во второй таблице
// Example 2: Get number of columns in the second table
echo "Пример 2: Получение количества столбцов во второй таблице\n";
echo "Example 2: Get number of columns in the second table\n\n";

$col_count_2nd = DOM::$table->get_cols_by_number(1); // Номер таблицы 1
echo "Количество столбцов в таблице 1: " . $col_count_2nd . "\n";
echo "Number of columns in table 1: " . $col_count_2nd . "\n\n";


// Пример 3: Получение количества столбцов в таблице во фрейме
// Example 3: Get number of columns in table in frame
echo "Пример 3: Получение количества столбцов в таблице во фрейме\n";
echo "Example 3: Get number of columns in table in frame\n\n";

$col_count_frame = DOM::$table->get_cols_by_number(0, "0"); // Таблица 0 во фрейме 0
echo "Количество столбцов в таблице 0 во фрейме 0: " . $col_count_frame . "\n";
echo "Number of columns in table 0 in frame 0: " . $col_count_frame . "\n\n";


// Пример 4: Получение количества столбцов во вложенных фреймах
// Example 4: Get number of columns in nested frames
echo "Пример 4: Получение количества столбцов во вложенных фреймах\n";
echo "Example 4: Get number of columns in nested frames\n\n";

$col_count_nested = DOM::$table->get_cols_by_number(0, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3
echo "Количество столбцов в таблице 0 во вложенных фреймах 1:2:3: " . $col_count_nested . "\n";
echo "Number of columns in table 0 in nested frames 1:2:3: " . $col_count_nested . "\n\n";


// Пример 5: Получение количества столбцов в конкретной строке
// Example 5: Get number of columns in specific row
echo "Пример 5: Получение количества столбцов в конкретной строке\n";
echo "Example 5: Get number of columns in specific row\n\n";

// По умолчанию функция считает столбцы по первой строке (индекс 0)
// By default, function counts columns by first row (index 0)
$cols_default = DOM::$table->get_cols_by_number(0);
echo "Количество столбцов (по умолчанию, первая строка): " . $cols_default . "\n";
echo "Number of columns (default, first row): " . $cols_default . "\n";

// Считаем столбцы по третьей строке (индекс 2)
// Count columns by third row (index 2)
$cols_third_row = DOM::$table->get_cols_by_number(0, "-1", 2);
echo "Количество столбцов (третья строка): " . $cols_third_row . "\n";
echo "Number of columns (third row): " . $cols_third_row . "\n";

// Считаем столбцы по последней строке
// Count columns by last row
$last_row_index = DOM::$table->get_rows_by_number(0) - 1;
$cols_last_row = DOM::$table->get_cols_by_number(0, "-1", $last_row_index);
echo "Количество столбцов (последняя строка): " . $cols_last_row . "\n";
echo "Number of columns (last row): " . $cols_last_row . "\n\n";


// Пример 6: Анализ структуры таблицы по строкам
// Example 6: Analyze table structure by rows
echo "Пример 6: Анализ структуры таблицы по строкам\n";
echo "Example 6: Analyze table structure by rows\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);

echo "Анализ структуры таблицы $table_number:\n";
echo "Analysis of table $table_number structure:\n";

for ($row_index = 0; $row_index < min($row_count, 5); $row_index++) { // Анализируем первые 5 строк
    $cols_in_row = DOM::$table->get_cols_by_number($table_number, "-1", $row_index);
    echo "- Строка $row_index: $cols_in_row столбцов\n";
    echo "- Row $row_index: $cols_in_row columns\n";
}

echo "\n";


// Пример 7: Проверка на нерегулярные таблицы
// Example 7: Check for irregular tables
echo "Пример 7: Проверка на нерегулярные таблицы\n";
echo "Example 7: Check for irregular tables\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);
$regular_table = true;
$expected_cols = null;

for ($row_index = 0; $row_index < $row_count; $row_index++) {
    $cols_in_row = DOM::$table->get_cols_by_number($table_number, "-1", $row_index);
    
    if ($expected_cols === null) {
        $expected_cols = $cols_in_row;
    } elseif ($cols_in_row != $expected_cols) {
        $regular_table = false;
        echo "Найдена нерегулярность в строке $row_index: $cols_in_row столбцов (ожидалось $expected_cols)\n";
        echo "Irregularity found in row $row_index: $cols_in_row columns (expected $expected_cols)\n";
    }
}

if ($regular_table) {
    echo "Таблица $table_number имеет регулярную структуру\n";
    echo "Table $table_number has regular structure\n";
} else {
    echo "Таблица $table_number имеет нерегулярную структуру\n";
    echo "Table $table_number has irregular structure\n";
}

echo "\n";

echo "Все примеры get_cols_by_number завершены!\n";
echo "All get_cols_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>