<?php

/**
 * Пример использования функции get_cell_x_by_attribute класса XHETable
 * Example of using get_cell_x_by_attribute function of XHETable class
 * 
 * Получить координату X ячейки по строке и столбцу у таблицы, таблицу найти по атрибуту
 * Find table by attribute and get cell X coordinate
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

echo "=== Пример использования get_cell_x_by_attribute ===\n";
echo "=== Example of using get_cell_x_by_attribute ===\n\n";

// Пример 1: Получение X координаты ячейки по ID таблицы
// Example 1: Get cell X coordinate by table ID
echo "Пример 1: Получение X координаты ячейки по ID таблицы\n";
echo "Example 1: Get cell X coordinate by table ID\n\n";

$cell_x_by_id = DOM::$table->get_cell_x_by_attribute(
    'id',                // Имя атрибута
    'my-table',          // Значение атрибута
    true,                // Точное соответствие
    1,                   // Номер строки
    2,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "X координата ячейки (1, 2) по ID таблицы 'my-table': $cell_x_by_id\n";
echo "X coordinate of cell (1, 2) by table ID 'my-table': $cell_x_by_id\n\n";


// Пример 2: Получение X координаты ячейки по классу таблицы
// Example 2: Get cell X coordinate by table class
echo "Пример 2: Получение X координаты ячейки по классу таблицы\n";
echo "Example 2: Get cell X coordinate by table class\n\n";

$cell_x_by_class = DOM::$table->get_cell_x_by_attribute(
    'class',             // Имя атрибута
    'data-table',        // Значение атрибута
    true,                // Точное соответствие
    0,                   // Номер строки
    0,                   // Номер столбец
    "-1"                 // Фрейм
);

echo "X координата ячейки (0, 0) по классу таблицы 'data-table': $cell_x_by_class\n";
echo "X coordinate of cell (0, 0) by table class 'data-table': $cell_x_by_class\n\n";


// Пример 3: Получение X координаты ячейки по частичному совпадению атрибута
// Example 3: Get cell X coordinate by partial attribute match
echo "Пример 3: Получение X координаты ячейки по частичному совпадению атрибута\n";
echo "Example 3: Get cell X coordinate by partial attribute match\n\n";

$cell_x_partial = DOM::$table->get_cell_x_by_attribute(
    'class',             // Имя атрибута
    'table',             // Частичное значение
    false,               // Неточное соответствие
    1,                   // Номер строки
    1,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "X координата ячейки (1, 1) по частичному классу 'table': $cell_x_partial\n";
echo "X coordinate of cell (1, 1) by partial class 'table': $cell_x_partial\n\n";


// Пример 4: Получение X координаты ячейки из таблицы во фрейме
// Example 4: Get cell X coordinate from table in frame
echo "Пример 4: Получение X координаты ячейки из таблицы во фрейме\n";
echo "Example 4: Get cell X coordinate from table in frame\n\n";

$cell_x_frame = DOM::$table->get_cell_x_by_attribute(
    'id',                // Имя атрибута
    'frame-table',       // Значение атрибута
    true,                // Точное соответствие
    0,                   // Номер строки
    0,                   // Номер столбца
    '0'                  // Фрейм 0
);

echo "X координата ячейки (0, 0) из таблицы во фрейме 0 с ID 'frame-table': $cell_x_frame\n";
echo "X coordinate of cell (0, 0) from table in frame 0 with ID 'frame-table': $cell_x_frame\n\n";


// Пример 5: Получение X координаты ячейки из таблицы во вложенных фреймах
// Example 5: Get cell X coordinate from table in nested frames
echo "Пример 5: Получение X координаты ячейки из таблицы во вложенных фреймах\n";
echo "Example 5: Get cell X coordinate from table in nested frames\n\n";

$cell_x_nested = DOM::$table->get_cell_x_by_attribute(
    'class',             // Имя атрибута
    'nested-data',       // Значение атрибута
    true,                // Точное соответствие
    1,                   // Номер строки
    2,                   // Номер столбца
    '1:2:3'              // Вложенные фреймы
);

echo "X координата ячейки (1, 2) из таблицы во вложенных фреймах 1:2:3 с классом 'nested-data': $cell_x_nested\n";
echo "X coordinate of cell (1, 2) from table in nested frames 1:2:3 with class 'nested-data': $cell_x_nested\n\n";


// Пример 6: Поиск таблиц по разным атрибутам
// Example 6: Search tables by different attributes
echo "Пример 6: Поиск таблиц по разным атрибутам\n";
echo "Example 6: Search tables by different attributes\n\n";

$attributes = [
    ['attr' => 'id', 'value' => 'my-table', 'exact' => true],
    ['attr' => 'class', 'value' => 'data-table', 'exact' => true],
    ['attr' => 'data-type', 'value' => 'report', 'exact' => true],
    ['attr' => 'class', 'value' => 'table', 'exact' => false]
];

echo "Поиск таблиц по разным атрибутам:\n";
echo "Searching tables by different attributes:\n";

foreach ($attributes as $attr) {
    $cell_x = DOM::$table->get_cell_x_by_attribute(
        $attr['attr'],
        $attr['value'],
        $attr['exact'],
        0, // Первая строка
        0  // Первый столбец
    );
    
    echo "- Атрибут: {$attr['attr']}='{$attr['value']}' (точное: " . ($attr['exact'] ? 'да' : 'нет') . ")\n";
    echo "- Attribute: {$attr['attr']}='{$attr['value']}' (exact: " . ($attr['exact'] ? 'yes' : 'no') . ")\n";
    
    if ($cell_x >= 0) {
        echo "  X координата ячейки (0, 0): $cell_x\n";
        echo "  X coordinate of cell (0, 0): $cell_x\n";
    } else {
        echo "  Таблица не найдена или ошибка\n";
        echo "  Table not found or error\n";
    }
    echo "\n";
}


// Пример 7: Получение X координат для разных ячеек одной таблицы
// Example 7: Get X coordinates for different cells of same table
echo "Пример 7: Получение X координат для разных ячеек одной таблицы\n";
echo "Example 7: Get X coordinates for different cells of same table\n\n";

$table_attr = ['name' => 'id', 'value' => 'my-table', 'exact' => true];

echo "Получение X координат для разных ячеек таблицы с ID '{$table_attr['value']}':\n";
echo "Getting X coordinates for different cells of table with ID '{$table_attr['value']}':\n\n";

$cells = [
    ['row' => 0, 'col' => 0],
    ['row' => 0, 'col' => 1],
    ['row' => 1, 'col' => 0],
    ['row' => 1, 'col' => 1],
    ['row' => 2, 'col' => 2]
];

foreach ($cells as $cell) {
    $cell_x = DOM::$table->get_cell_x_by_attribute(
        $table_attr['name'],
        $table_attr['value'],
        $table_attr['exact'],
        $cell['row'],
        $cell['col']
    );
    
    echo "- Ячейка ({$cell['row']}, {$cell['col']}): X=$cell_x\n";
    echo "- Cell ({$cell['row']}, {$cell['col']}): X=$cell_x\n";
}

echo "\n";


// Пример 8: Проверка существования таблицы перед получением координат
// Example 8: Check table existence before getting coordinates
echo "Пример 8: Проверка существования таблицы перед получением координат\n";
echo "Example 8: Check table existence before getting coordinates\n\n";

$attr_name = 'id';
$attr_value = 'my-table';
$exact = true;
$target_row = 0;
$target_col = 0;

// Проверяем существование таблицы
// Check if table exists
$table_element = DOM::$table->get_by_attribute($attr_name, $attr_value, $exact);

if ($table_element->is_exist()) {
    echo "Таблица с атрибутом $attr_name='$attr_value' найдена\n";
    echo "Table with attribute $attr_name='$attr_value' found\n";
    
    // Получаем координаты ячейки
    // Get cell coordinates
    $cell_x = DOM::$table->get_cell_x_by_attribute(
        $attr_name,
        $attr_value,
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
    echo "Таблица с атрибутом $attr_name='$attr_value' не найдена\n";
    echo "Table with attribute $attr_name='$attr_value' not found\n";
}

echo "\n";


// Пример 9: Комплексный анализ таблиц по атрибутам
// Example 9: Complex analysis of tables by attributes
echo "Пример 9: Комплексный анализ таблиц по атрибутам\n";
echo "Example 9: Complex analysis of tables by attributes\n\n";

$attribute_patterns = [
    ['attr' => 'id', 'value' => 'main-table', 'exact' => true, 'description' => 'Основная таблица'],
    ['attr' => 'class', 'value' => 'summary-table', 'exact' => true, 'description' => 'Сводная таблица'],
    ['attr' => 'data-type', 'value' => 'report', 'exact' => true, 'description' => 'Отчетная таблица'],
    ['attr' => 'role', 'value' => 'grid', 'exact' => true, 'description' => 'Таблица сетки']
];

$analysis_results = [];

foreach ($attribute_patterns as $pattern) {
    echo "Анализ таблицы: {$pattern['description']}\n";
    echo "Analysis of table: {$pattern['description']}\n";
    
    // Проверяем существование таблицы
    // Check if table exists
    $table_element = DOM::$table->get_by_attribute($pattern['attr'], $pattern['value'], $pattern['exact']);
    
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
            $cell_x = DOM::$table->get_cell_x_by_attribute(
                $pattern['attr'],
                $pattern['value'],
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


echo "Все примеры get_cell_x_by_attribute завершены!\n";
echo "All get_cell_x_by_attribute examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>