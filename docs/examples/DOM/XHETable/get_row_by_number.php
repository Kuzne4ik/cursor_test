<?php

/**
 * Пример использования функции get_row_by_number класса XHETable
 * Example of using get_row_by_number function of XHETable class
 * 
 * Получить текст заданной строки в таблице, таблицу найти по номеру
 * Find table by number and get row
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

echo "=== Пример использования get_row_by_number ===\n";
echo "=== Example of using get_row_by_number ===\n\n";

// Пример 1: Получение текста первой строки (заголовка)
// Example 1: Get text of first row (header)
echo "Пример 1: Получение текста первой строки (заголовка)\n";
echo "Example 1: Get text of first row (header)\n\n";

$row_text = DOM::$table->get_row_by_number(0, 0); // Таблица 0, строка 0
echo "Текст первой строки:\n$row_text\n\n";
echo "Text of first row:\n$row_text\n\n";


// Пример 2: Получение текста второй строки
// Example 2: Get text of second row
echo "Пример 2: Получение текста второй строки\n";
echo "Example 2: Get text of second row\n\n";

$row_text_2nd = DOM::$table->get_row_by_number(0, 1); // Таблица 0, строка 1
echo "Текст второй строки:\n$row_text_2nd\n\n";
echo "Text of second row:\n$row_text_2nd\n\n";


// Пример 3: Получение строки как HTML
// Example 3: Get row as HTML
echo "Пример 3: Получение строки как HTML\n";
echo "Example 3: Get row as HTML\n\n";

$row_html = DOM::$table->get_row_by_number(0, 0, true); // Таблица 0, строка 0, как HTML
echo "HTML первой строки:\n$row_html\n\n";
echo "HTML of first row:\n$row_html\n\n";


// Пример 4: Получение строки из таблицы во фрейме
// Example 4: Get row from table in frame
echo "Пример 4: Получение строки из таблицы во фрейме\n";
echo "Example 4: Get row from table in frame\n\n";

$row_frame = DOM::$table->get_row_by_number(0, 2, false, "0"); // Таблица 0 во фрейме 0, строка 2
echo "Текст третьей строки из таблицы во фрейме 0:\n$row_frame\n\n";
echo "Text of third row from table in frame 0:\n$row_frame\n\n";


// Пример 5: Получение строки из вложенных фреймов
// Example 5: Get row from nested frames
echo "Пример 5: Получение строки из вложенных фреймов\n";
echo "Example 5: Get row from nested frames\n\n";

$row_nested = DOM::$table->get_row_by_number(0, 1, false, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3, строка 1
echo "Текст второй строки из таблицы во вложенных фреймах 1:2:3:\n$row_nested\n\n";
echo "Text of second row from table in nested frames 1:2:3:\n$row_nested\n\n";


// Пример 6: Чтение всех строк таблицы
// Example 6: Read all rows of table
echo "Пример 6: Чтение всех строк таблицы\n";
echo "Example 6: Read all rows of table\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_by_number($table_number);

echo "Чтение всех $row_count строк из таблицы $table_number:\n";
echo "Reading all $row_count rows from table $table_number:\n";

for ($row_index = 0; $row_index < $row_count; $row_index++) {
    $row_text = DOM::$table->get_row_by_number($table_number, $row_index);
    echo "\n--- Строка $row_index ---\n$row_text\n";
    echo "\n--- Row $row_index ---\n$row_text\n";
}

echo "\n";

echo "Все примеры get_row_by_number завершены!\n";
echo "All get_row_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>