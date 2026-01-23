<?php
// Scenario: Export table data to CSV format using XHETable class
// Description: Demonstrates how to export table data to CSV file with various options for rows, columns, and formatting
// Classes used: DOM, XHETable, XHEBrowser, XHEApplication

/**
 * Example of using export_to_csv function of XHETable class
 * Export table to CSV file
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

echo "=== Example of using export_to_csv ===\n\n";

// Example 1: Export entire table to CSV file
echo "Example 1: Export entire table to CSV file\n\n";

$csv_result = DOM::$table->export_to_csv(
    'output/table_data.csv', // Путь к файлу / File path
    0,                      // Номер таблицы на странице (начинается с 0) / Table number on page (starts from 0)
    '',                     // Все строки (пустая строка) / All rows (empty string)
    '',                     // Все столбцы (пустая строка) / All columns (empty string)
    false,                  // Как текст (не как HTML) / As text (not as HTML)
    ';'                     // Разделитель / Separator
);

echo "Export result: " . ($csv_result ? 'Success' : 'Error') . "\n\n";

// Example 2: Export specific rows and columns
echo "Example 2: Export specific rows and columns\n\n";

$csv_result = DOM::$table->export_to_csv(
    'output/table_data_filtered.csv', // Путь к файлу / File path
    0,                              // Номер таблицы / Table number
    '0,2,4',                        // Строки с индексами 0, 2, 4 / Rows with indices 0, 2, 4
    '1,3,5',                        // Столбцы с индексами 1, 3, 5 / Columns with indices 1, 3, 5
    false,                          // Как текст / As text
    ','                             // Разделитель / Separator
);

echo "Export result: " . ($csv_result ? 'Success' : 'Error') . "\n\n";

// Example 3: Export as HTML
echo "Example 3: Export as HTML\n\n";

$csv_result = DOM::$table->export_to_csv(
    'output/table_data_html.csv', // Путь к файлу / File path
    0,                            // Номер таблицы / Table number
    '',                           // Все строки / All rows
    '',                           // Все столбцы / All columns
    true,                         // Как HTML / As HTML
    '|'                           // Разделитель / Separator
);

echo "Export result: " . ($csv_result ? 'Success' : 'Error') . "\n\n";

// Example 4: Export with frame specification
echo "Example 4: Export with frame specification\n\n";

$csv_result = DOM::$table->export_to_csv(
    'output/table_data_frame.csv', // Путь к файлу / File path
    0,                             // Номер таблицы / Table number
    '0,1',                         // Первые две строки / First two rows
    '0,1',                         // Первые два столбца / First two columns
    false,                         // Как текст / As text
    ';',                           // Разделитель / Separator
    '0'                            // Фрейм 0 / Frame 0
);

echo "Export result: " . ($csv_result ? 'Success' : 'Error') . "\n\n";

echo "All export_to_csv examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>