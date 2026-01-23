<?php
// Scenario: Get row text by table number using XHETable class
// Description: Demonstrates how to find a table by its number and retrieve text content from a specific row
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using get_row_by_number function of XHETable class
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

echo "=== Example of using get_row_by_number ===\n\n";

// Example 1: Get text of first row (header)
echo "Example 1: Get text of first row (header)\n\n";

$row_text = DOM::$table->get_row_by_number(0, 0); // Таблица 0, строка 0
echo "Text of first row:\n$row_text\n\n";

// Example 2: Get text of second row
echo "Example 2: Get text of second row\n\n";

$row_text_2nd = DOM::$table->get_row_by_number(0, 1); // Таблица 0, строка 1
echo "Text of second row:\n$row_text_2nd\n\n";

// Example 3: Get row as HTML
echo "Example 3: Get row as HTML\n\n";

$row_html = DOM::$table->get_row_by_number(0, 0, true); // Таблица 0, строка 0, как HTML
echo "HTML of first row:\n$row_html\n\n";

// Example 4: Get row from table in frame
echo "Example 4: Get row from table in frame\n\n";

$row_frame = DOM::$table->get_row_by_number(0, 2, false, "0"); // Таблица 0 во фрейме 0, строка 2
echo "Text of third row from table in frame 0:\n$row_frame\n\n";

// Example 5: Get row from nested frames
echo "Example 5: Get row from nested frames\n\n";

$row_nested = DOM::$table->get_row_by_number(0, 1, false, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3, строка 1
echo "Text of second row from table in nested frames 1:2:3:\n$row_nested\n\n";

// Example 6: Read all rows of table
echo "Example 6: Read all rows of table\n\n";

$table_number = 0;
$row_count = DOM::$table->get_rows_count_by_number($table_number);

echo "Reading all $row_count rows from table $table_number:\n";

for ($row_index = 0; $row_index < $row_count; $row_index++) {
    $row_text = DOM::$table->get_row_by_number($table_number, $row_index);
    echo "\n--- Строка $row_index ---\n$row_text\n";
    echo "\n--- Row $row_index ---\n$row_text\n";
}

echo "\n";

// Остановить работу
WINDOW::$app->quit();
?>