<?php

/**
 * Пример использования функции get_cell_y_by_inner_text класса XHETable
 * Example of using get_cell_y_by_inner_text function of XHETable class
 * 
 * Получить координату Y ячейки по строке и столбцу у таблицы, таблицу найти по внутренний тексту
 * Find table by inner text and get cell Y coordinate
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

echo "=== Пример использования get_cell_y_by_inner_text ===\n";
echo "=== Example of using get_cell_y_by_inner_text ===\n\n";

// Пример 1: Получение Y координаты ячейки по точному тексту таблицы
// Example 1: Get cell Y coordinate by exact table inner text
echo "Пример 1: Получение Y координаты ячейки по точному тексту таблицы\n";
echo "Example 1: Get cell Y coordinate by exact table inner text\n\n";

$cell_y_by_text = DOM::$table->get_cell_y_by_inner_text(
    'Таблица с данными', // Внутренний текст таблицы
    true,                // Точное соответствие
    1,                   // Номер строки
    2,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "Y координата ячейки (1, 2) по точному тексту таблицы 'Таблица с данными': $cell_y_by_text\n";
echo "Y coordinate of cell (1, 2) by exact table text 'Таблица с данными': $cell_y_by_text\n\n";


// Пример 2: Получение Y координаты ячейки по частичному тексту таблицы
// Example 2: Get cell Y coordinate by partial table inner text
echo "Пример 2: Получение Y координаты ячейки по частичному тексту таблицы\n";
echo "Example 2: Get cell Y coordinate by partial table inner text\n\n";

$cell_y_partial = DOM::$table->get_cell_y_by_inner_text(
    'данными',           // Частичный текст таблицы
    false,               // Неточное соответствие
    0,                   // Номер строки
    0,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "Y координата ячейки (0, 0) по частичному тексту таблицы 'данными': $cell_y_partial\n";
echo "Y coordinate of cell (0, 0) by partial table text 'данными': $cell_y_partial\n\n";


// Пример 3: Получение Y координаты ячейки из таблицы во фрейме
// Example 3: Get cell Y coordinate from table in frame
echo "Пример 3: Получение Y координаты ячейки из таблицы во фрейме\n";
echo "Example 3: Get cell Y coordinate from table in frame\n\n";

$cell_y_frame = DOM::$table->get_cell_y_by_inner_text(
    'Данные во фрейме',  // Внутренний текст таблицы
    true,                // Точное соответствие
    1,                   // Номер строки
    1,                   // Номер столбца
    '0'                  // Фрейм 0
);

echo "Y координата ячейки (1, 1) из таблицы во фрейме 0 с текстом 'Данные во фрейме': $cell_y_frame\n";
echo "Y coordinate of cell (1, 1) from table in frame 0 with text 'Данные во фрейме': $cell_y_frame\n\n";


// Пример 4: Получение Y координаты ячейки из таблицы во вложенных фреймах
// Example 4: Get cell Y coordinate from table in nested frames
echo "Пример 4: Получение Y координаты ячейки из таблицы во вложенных фреймах\n";
echo "Example 4: Get cell Y coordinate from table in nested frames\n\n";

$cell_y_nested = DOM::$table->get_cell_y_by_inner_text(
    'Вложенные данные',  // Внутренний текст таблицы
    true,                 // Точное соответствие
    0,                    // Номер строки
    0,                    // Номер столбца
    '1:2:3'               // Вложенные фреймы
);

echo "Y координата ячейки (0, 0) из таблицы во вложенных фреймах 1:2:3 с текстом 'Вложенные данные': $cell_y_nested\n";
echo "Y coordinate of cell (0, 0) from table in nested frames 1:2:3 with text 'Вложенные данные': $cell_y_nested\n\n";


// Пример 5: Поиск таблицы с разными текстами и получение координат
// Example 5: Search table with different texts and get coordinates
echo "Пример 5: Поиск таблицы с разными текстами и получение координат\n";
echo "Example 5: Search table with different texts and get coordinates\n\n";

$search_texts = [
    ['text' => 'Таблица с данными', 'exact' => true],
    ['text' => 'Сводная таблица', 'exact' => true],
    ['text' => 'данными', 'exact' => false],
    ['text' => 'таблица', 'exact' => false]
];

echo "Поиск таблиц по разным текстам:\n";
echo "Searching tables by different texts:\n";

foreach ($search_texts as $search) {
    $cell_y = DOM::$table->get_cell_y_by_inner_text(
        $search['text'],
        $search['exact'],
        0, // Первая строка
        0  // Первый столбец
    );
    
    echo "- Текст: '{$search['text']}' (точное: " . ($search['exact'] ? 'да' : 'нет') . ")\n";
    echo "- Text: '{$search['text']}' (exact: " . ($search['exact'] ? 'yes' : 'no') . ")\n";
    
    if ($cell_y >= 0) {
        echo "  Y координата ячейки (0, 0): $cell_y\n";
        echo "  Y coordinate of cell (0, 0): $cell_y\n";
    } else {
        echo "  Таблица не найдена или ошибка\n";
        echo "  Table not found or error\n";
    }
    echo "\n";
}


// Пример 6: Получение Y координат для разных ячеек одной таблицы
// Example 6: Get Y coordinates for different cells of same table
echo "Пример 6: Получение Y координат для разных ячеек одной таблицы\n";
echo "Example 6: Get Y coordinates for different cells of same table\n\n";

$table_text = 'Таблица с данными';
$exact = true;

echo "Получение Y координат для разных ячеек таблицы с текстом '$table_text':\n";
echo "Getting Y coordinates for different cells of table with text '$table_text':\n\n";

$cells = [
    ['row' => 0, 'col' => 0],
    ['row' => 0, 'col' => 1],
    ['row' => 1, 'col' => 0],
    ['row' => 1, 'col' => 1],
    ['row' => 2, 'col' => 2]
];

foreach ($cells as $cell) {
    $cell_y = DOM::$table->get_cell_y_by_inner_text(
        $table_text,
        $exact,
        $cell['row'],
        $cell['col']
    );
    
    echo "- Ячейка ({$cell['row']}, {$cell['col']}): Y=$cell_y\n";
    echo "- Cell ({$cell['row']}, {$cell['col']}): Y=$cell_y\n";
}

echo "\n";


// Пример 7: Сравнение с методом get_cell_y_by_number
// Example 7: Compare with get_cell_y_by_number method
echo "Пример 7: Сравнение с методом get_cell_y_by_number\n";
echo "Example 7: Compare with get_cell_y_by_number method\n\n";

// Сначала находим таблицу по тексту
// First find table by text$table_text = 'Таблица с данными';
$exact = true;
$target_row = 1;
$target_col = 1;

// Получаем Y координату по тексту таблицы
// Get Y coordinate by table text
$cell_y_by_text = DOM::$table->get_cell_y_by_inner_text(
    $table_text,
    $exact,
    $target_row,
    $target_col
);

// Находим номер таблицы вручную для сравнения
// Find table number manually for comparison
$table_number = 0; // Предполагаем, что это первая таблица

// Получаем Y координату по номеру таблицы
// Get Y coordinate by table number
$cell_y_by_number = DOM::$table->get_cell_y_by_number(
    $table_number,
    $target_row,
    $target_col
);

echo "Сравнение результатов:\n";
echo "Comparison of results:\n";
echo "- get_cell_y_by_inner_text (текст: '$table_text'): Y=$cell_y_by_text\n";
echo "- get_cell_y_by_inner_text (text: '$table_text'): Y=$cell_y_by_text\n";
echo "- get_cell_y_by_number (таблица $table_number): Y=$cell_y_by_number\n";
echo "- get_cell_y_by_number (table $table_number): Y=$cell_y_by_number\n";

if ($cell_y_by_text == $cell_y_by_number) {
    echo "- Результаты совпадают\n";
    echo "- Results match\n";
} else {
    echo "- Результаты не совпадают (возможно, таблица не найдена или это другая таблица)\n";
    echo "- Results don't match (table not found or different table)\n";
}

echo "\n";


// Пример 8: Проверка существования таблицы перед получением координат
// Example 8: Check table existence before getting coordinates
echo "Пример 8: Проверка существования таблицы перед получением координат\n";
echo "Example 8: Check table existence before getting coordinates\n\n";

$table_text = 'Таблица с данными';
$exact = true;
$target_row = 0;
$target_col = 0;

// Проверяем существование таблицы
// Check if table exists
$table_element = DOM::$table->get_by_inner_text($table_text, $exact);

if ($table_element->is_exist()) {
    echo "Таблица с текстом '$table_text' найдена\n";
    echo "Table with text '$table_text' found\n";
    
    // Получаем координаты ячейки
    // Get cell coordinates
    $cell_y = DOM::$table->get_cell_y_by_inner_text(
        $table_text,
        $exact,
        $target_row,
        $target_col
    );
    
    if ($cell_y >= 0) {
        echo "Y координата ячейки ($target_row, $target_col): $cell_y\n";
        echo "Y coordinate of cell ($target_row, $target_col): $cell_y\n";
    } else {
        echo "Ошибка получения Y координаты ячейки\n";
        echo "Error getting cell Y coordinate\n";
    }
} else {
    echo "Таблица с текстом '$table_text' не найдена\n";
    echo "Table with text '$table_text' not found\n";
}

echo "\n";


echo "Все примеры get_cell_y_by_inner_text завершены!\n";
echo "All get_cell_y_by_inner_text examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>