<?php

/**
 * Пример использования функции get_cell_x_by_inner_text класса XHETable
 * Example of using get_cell_x_by_inner_text function of XHETable class
 * 
 * Получить координату X ячейки по строке и столбцу у таблицы, таблицу найти по внутренний тексту
 * Find table by inner text and get cell X coordinate
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

echo "=== Пример использования get_cell_x_by_inner_text ===\n";
echo "=== Example of using get_cell_x_by_inner_text ===\n\n";

// Пример 1: Получение X координаты ячейки по точному тексту таблицы
// Example 1: Get cell X coordinate by exact table inner text
echo "Пример 1: Получение X координаты ячейки по точному тексту таблицы\n";
echo "Example 1: Get cell X coordinate by exact table inner text\n\n";

$cell_x_by_text = DOM::$table->get_cell_x_by_inner_text(
    'Таблица с данными', // Внутренний текст таблицы
    true,                // Точное соответствие
    1,                   // Номер строки
    2,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "X координата ячейки (1, 2) по точному тексту таблицы 'Таблица с данными': $cell_x_by_text\n";
echo "X coordinate of cell (1, 2) by exact table text 'Таблица с данными': $cell_x_by_text\n\n";


// Пример 2: Получение X координаты ячейки по частичному тексту таблицы
// Example 2: Get cell X coordinate by partial table inner text
echo "Пример 2: Получение X координаты ячейки по частичному тексту таблицы\n";
echo "Example 2: Get cell X coordinate by partial table inner text\n\n";

$cell_x_partial = DOM::$table->get_cell_x_by_inner_text(
    'данными',           // Частичный текст таблицы
    false,               // Неточное соответствие
    0,                   // Номер строки
    0,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "X координата ячейки (0, 0) по частичному тексту таблицы 'данными': $cell_x_partial\n";
echo "X coordinate of cell (0, 0) by partial table text 'данными': $cell_x_partial\n\n";


// Пример 3: Получение X координаты ячейки из таблицы во фрейме
// Example 3: Get cell X coordinate from table in frame
echo "Пример 3: Получение X координаты ячейки из таблицы во фрейме\n";
echo "Example 3: Get cell X coordinate from table in frame\n\n";

$cell_x_frame = DOM::$table->get_cell_x_by_inner_text(
    'Данные во фрейме',  // Внутренний текст таблицы
    true,                // Точное соответствие
    1,                   // Номер строки
    1,                   // Номер столбца
    '0'                  // Фрейм 0
);

echo "X координата ячейки (1, 1) из таблицы во фрейме 0 с текстом 'Данные во фрейме': $cell_x_frame\n";
echo "X coordinate of cell (1, 1) from table in frame 0 with text 'Данные во фрейме': $cell_x_frame\n\n";


// Пример 4: Получение X координаты ячейки из таблицы во вложенных фреймах
// Example 4: Get cell X coordinate from table in nested frames
echo "Пример 4: Получение X координаты ячейки из таблицы во вложенных фреймах\n";
echo "Example 4: Get cell X coordinate from table in nested frames\n\n";

$cell_x_nested = DOM::$table->get_cell_x_by_inner_text(
    'Вложенные данные',  // Внутренний текст таблицы
    true,                 // Точное соответствие
    0,                    // Номер строки
    0,                    // Номер столбца
    '1:2:3'               // Вложенные фреймы
);

echo "X координата ячейки (0, 0) из таблицы во вложенных фреймах 1:2:3 с текстом 'Вложенные данные': $cell_x_nested\n";
echo "X coordinate of cell (0, 0) from table in nested frames 1:2:3 with text 'Вложенные данные': $cell_x_nested\n\n";


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
    $cell_x = DOM::$table->get_cell_x_by_inner_text(
        $search['text'],
        $search['exact'],
        0, // Первая строка
        0  // Первый столбец
    );
    
    echo "- Текст: '{$search['text']}' (точное: " . ($search['exact'] ? 'да' : 'нет') . ")\n";
    echo "- Text: '{$search['text']}' (exact: " . ($search['exact'] ? 'yes' : 'no') . ")\n";
    
    if ($cell_x >= 0) {
        echo "  X координата ячейки (0, 0): $cell_x\n";
        echo "  X coordinate of cell (0, 0): $cell_x\n";
    } else {
        echo "  Таблица не найдена или ошибка\n";
        echo "  Table not found or error\n";
    }
    echo "\n";
}


// Пример 6: Получение X координат для разных ячеек одной таблицы
// Example 6: Get X coordinates for different cells of same table
echo "Пример 6: Получение X координат для разных ячеек одной таблицы\n";
echo "Example 6: Get X coordinates for different cells of same table\n\n";

$table_text = 'Таблица с данными';
$exact = true;

echo "Получение X координат для разных ячеек таблицы с текстом '$table_text':\n";
echo "Getting X coordinates for different cells of table with text '$table_text':\n\n";

$cells = [
    ['row' => 0, 'col' => 0],
    ['row' => 0, 'col' => 1],
    ['row' => 1, 'col' => 0],
    ['row' => 1, 'col' => 1],
    ['row' => 2, 'col' => 2]
];

foreach ($cells as $cell) {
    $cell_x = DOM::$table->get_cell_x_by_inner_text(
        $table_text,
        $exact,
        $cell['row'],
        $cell['col']
    );
    
    echo "- Ячейка ({$cell['row']}, {$cell['col']}): X=$cell_x\n";
    echo "- Cell ({$cell['row']}, {$cell['col']}): X=$cell_x\n";
}

echo "\n";


// Пример 7: Сравнение с методом get_cell_x_by_number
// Example 7: Compare with get_cell_x_by_number method
echo "Пример 7: Сравнение с методом get_cell_x_by_number\n";
echo "Example 7: Compare with get_cell_x_by_number method\n\n";

// Сначала находим таблицу по тексту
// First find table by text$table_text = 'Таблица с данными';
$exact = true;
$target_row = 1;
$target_col = 1;

// Получаем X координату по тексту таблицы
// Get X coordinate by table text
$cell_x_by_text = DOM::$table->get_cell_x_by_inner_text(
    $table_text,
    $exact,
    $target_row,
    $target_col);

// Находим номер таблицы вручную для сравнения
// Find table number manually for comparison
$table_number = 0; // Предполагаем, что это первая таблица

// Получаем X координату по номеру таблицы
// Get X coordinate by table number
$cell_x_by_number = DOM::$table->get_cell_x_by_number(
    $table_number,
    $target_row,
    $target_col
);

echo "Сравнение результатов:\n";
echo "Comparison of results:\n";
echo "- get_cell_x_by_inner_text (текст: '$table_text'): X=$cell_x_by_text\n";
echo "- get_cell_x_by_inner_text (text: '$table_text'): X=$cell_x_by_text\n";
echo "- get_cell_x_by_number (таблица $table_number): X=$cell_x_by_number\n";
echo "- get_cell_x_by_number (table $table_number): X=$cell_x_by_number\n";

if ($cell_x_by_text == $cell_x_by_number) {
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
    $cell_x = DOM::$table->get_cell_x_by_inner_text(
        $table_text,
        $exact,
        $target_row,
        $target_col
    );
    
    if ($cell_x >= 0) {
        echo "X координата ячейки ($target_row, $target_col): $cell_x\n";
        echo "X coordinate of cell ($target_row, $target_col): $cell_x\n";
    } else {
        echo "Ошибка получения X координаты ячейки\n";
        echo "Error getting cell X coordinate\n";
    }
} else {
    echo "Таблица с текстом '$table_text' не найдена\n";
    echo "Table with text '$table_text' not found\n";
}

echo "\n";


// Пример 9: Комплексный анализ таблиц по тексту
// Example 9: Complex analysis of tables by text
echo "Пример 9: Комплексный анализ таблиц по тексту\n";
echo "Example 9: Complex analysis of tables by text\n\n";

$search_patterns = [
    ['text' => 'Таблица с данными', 'exact' => true, 'description' => 'Основная таблица'],
    ['text' => 'Сводная', 'exact' => false, 'description' => 'Сводная таблица'],
    ['text' => 'Итоги', 'exact' => true, 'description' => 'Таблица с итогами'],
    ['text' => 'данными', 'exact' => false, 'description' => 'Любая таблица с данными']
];

$analysis_results = [];

foreach ($search_patterns as $pattern) {
    echo "Анализ таблицы: {$pattern['description']}\n";
    echo "Analysis of table: {$pattern['description']}\n";
    
    // Проверяем существование таблицы
    // Check if table exists
    $table_element = DOM::$table->get_by_inner_text($pattern['text'], $pattern['exact']);
    
    if ($table_element->is_exist()) {
        echo "- Таблица найдена\n";
        echo "- Table found\n";
        
        // Получаем координаты нескольких ячеек
        // Get coordinates of several cells
        $test_cells = [
            ['row' => 0, 'col' => 0],
            ['row' => 0, 'col' => 1],
            ['row' => 1, 'col' => 0]
        ];
        
        $cell_coordinates = [];
        foreach ($test_cells as $cell) {
            $cell_x = DOM::$table->get_cell_x_by_inner_text(
                $pattern['text'],
                $pattern['exact'],
                $cell['row'],
                $cell['col']
            );
            
            if ($cell_x >= 0) {
                $cell_coordinates[] = [
                    'row' => $cell['row'],
                    'col' => $cell['col'],
                    'x' => $cell_x
                ];
            }
        }
        
        $analysis_results[] = [
            'pattern' => $pattern,
            'found' => true,
            'cells' => $cell_coordinates
        ];
        
        echo "- Координаты ячеек:\n";
        echo "- Cell coordinates:\n";
        foreach ($cell_coordinates as $coord) {
            echo "  ({$coord['row']}, {$coord['col']}): X={$coord['x']}\n";
        }
    } else {
        echo "- Таблица не найдена\n";
        echo "- Table not found\n";
        
        $analysis_results[] = [
            'pattern' => $pattern,
            'found' => false,
            'cells' => []
        ];
    }
    
    echo "\n";
}

// Выводим сводку анализа
echo "Сводка анализа:\n";
echo "Analysis summary:\n";

$found_tables = array_filter($analysis_results, function($result) {
    return $result['found'];
});

echo "- Найдено таблиц: " . count($found_tables) . " из " . count($analysis_results) . "\n";
echo "- Tables found: " . count($found_tables) . " of " . count($analysis_results) . "\n";

foreach ($analysis_results as $result) {
    $status = $result['found'] ? 'найдена' : 'не найдена';
    $status_en = $result['found'] ? 'found' : 'not found';
    
    echo "- {$result['pattern']['description']}: $status\n";
    echo "- {$result['pattern']['description']}: $status_en\n";
}

echo "\n";


echo "Все примеры get_cell_x_by_inner_text завершены!\n";
echo "All get_cell_x_by_inner_text examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>