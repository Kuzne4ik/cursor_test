<?php

/**
 * Пример использования функции get_cols_count_by_number класса XHETable
 * Example of using get_cols_count_by_number function of XHETable class
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

$col_count = DOM::$table->get_cols_count_by_number(0); // Номер таблицы 0
echo "Количество столбцов в таблице 0: " . $col_count . "\n";
echo "Number of columns in table 0: " . $col_count . "\n\n";


// Пример 2: Получение количества столбцов во второй таблице
// Example 2: Get number of columns in the second table
echo "Пример 2: Получение количества столбцов во второй таблице\n";
echo "Example 2: Get number of columns in the second table\n\n";

$col_count_2nd = DOM::$table->get_cols_count_by_number(1); // Номер таблицы 1
echo "Количество столбцов в таблице 1: " . $col_count_2nd . "\n";
echo "Number of columns in table 1: " . $col_count_2nd . "\n\n";


// Пример 3: Получение количества столбцов в таблице во фрейме
// Example 3: Get number of columns in table in frame
echo "Пример 3: Получение количества столбцов в таблице во фрейме\n";
echo "Example 3: Get number of columns in table in frame\n\n";

$col_count_frame = DOM::$table->get_cols_count_by_number(0, "0"); // Таблица 0 во фрейме 0
echo "Количество столбцов в таблице 0 во фрейме 0: " . $col_count_frame . "\n";
echo "Number of columns in table 0 in frame 0: " . $col_count_frame . "\n\n";


// Пример 4: Получение количества столбцов во вложенных фреймах
// Example 4: Get number of columns in nested frames
echo "Пример 4: Получение количества столбцов во вложенных фреймах\n";
echo "Example 4: Get number of columns in nested frames\n\n";

$col_count_nested = DOM::$table->get_cols_count_by_number(0, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3
echo "Количество столбцов в таблице 0 во вложенных фреймах 1:2:3: " . $col_count_nested . "\n";
echo "Number of columns in table 0 in nested frames 1:2:3: " . $col_count_nested . "\n\n";


// Пример 5: Получение количества столбцов в конкретной строке
// Example 5: Get number of columns in specific row
echo "Пример 5: Получение количества столбцов в конкретной строке\n";
echo "Example 5: Get number of columns in specific row\n\n";

// По умолчанию функция считает столбцы по первой строке (индекс 0)
// By default, function counts columns by first row (index 0)
$cols_default = DOM::$table->get_cols_count_by_number(0);
echo "Количество столбцов (по умолчанию, первая строка): " . $cols_default . "\n";
echo "Number of columns (default, first row): " . $cols_default . "\n";

// Считаем столбцы по третьей строке (индекс 2)
// Count columns by third row (index 2)
$cols_third_row = DOM::$table->get_cols_count_by_number(0, "-1", 2);
echo "Количество столбцов (третья строка): " . $cols_third_row . "\n";
echo "Number of columns (third row): " . $cols_third_row . "\n";

echo "Все примеры get_cols_count_by_number завершены!\n";
echo "All get_cols_count_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>