<?php

/**
 * Пример использования функции get_rows_count_by_number класса XHETable
 * Example of using get_rows_count_by_number function of XHETable class
 * 
 * Получить количество строк таблицы, таблицу найти по номеру
 * Find table by number and get the number of rows
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

echo "=== Пример использования get_rows_count_by_number ===\n";
echo "=== Example of using get_rows_count_by_number ===\n\n";

// Пример 1: Получение количества строк в первой таблице
// Example 1: Get number of rows in the first table
echo "Пример 1: Получение количества строк в первой таблице\n";
echo "Example 1: Get number of rows in the first table\n\n";

$row_count = DOM::$table->get_rows_count_by_number(0); // Номер таблицы 0
echo "Количество строк в таблице 0: " . $row_count . "\n";
echo "Number of rows in table 0: " . $row_count . "\n\n";


// Пример 2: Получение количества строк во второй таблице
// Example 2: Get number of rows in the second table
echo "Пример 2: Получение количества строк во второй таблице\n";
echo "Example 2: Get number of rows in the second table\n\n";

$row_count_2nd = DOM::$table->get_rows_count_by_number(1); // Номер таблицы 1
echo "Количество строк в таблице 1: " . $row_count_2nd . "\n";
echo "Number of rows in table 1: " . $row_count_2nd . "\n\n";


// Пример 3: Получение количества строк в таблице во фрейме
// Example 3: Get number of rows in table in frame
echo "Пример 3: Получение количества строк в таблице во фрейме\n";
echo "Example 3: Get number of rows in table in frame\n\n";

$row_count_frame = DOM::$table->get_rows_count_by_number(0, "0"); // Таблица 0 во фрейме 0
echo "Количество строк в таблице 0 во фрейме 0: " . $row_count_frame . "\n";
echo "Number of rows in table 0 in frame 0: " . $row_count_frame . "\n\n";


// Пример 4: Получение количества строк во вложенных фреймах
// Example 4: Get number of rows in nested frames
echo "Пример 4: Получение количества строк во вложенных фреймах\n";
echo "Example 4: Get number of rows in nested frames\n\n";

$row_count_nested = DOM::$table->get_rows_count_by_number(0, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3
echo "Количество строк в таблице 0 во вложенных фреймах 1:2:3: " . $row_count_nested . "\n";
echo "Number of rows in table 0 in nested frames 1:2:3: " . $row_count_nested . "\n\n";

echo "\n";


echo "Все примеры get_rows_count_by_number завершены!\n";
echo "All get_rows_count_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>