<?php

/**
 * Пример использования функции get_cell_y_by_attribute класса XHETable
 * Example of using get_cell_y_by_attribute function of XHETable class
 * 
 * Получить координату Y ячейки по строке и столбцу у таблицы, таблицу найти по атрибуту
 * Find table by attribute and get cell Y coordinate
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

echo "=== Пример использования get_cell_y_by_attribute ===\n";
echo "=== Example of using get_cell_y_by_attribute ===\n\n";

// Пример 1: Получение Y координаты ячейки по ID таблицы
// Example 1: Get cell Y coordinate by table ID
echo "Пример 1: Получение Y координаты ячейки по ID таблицы\n";
echo "Example 1: Get cell Y coordinate by table ID\n\n";

$cell_y_by_id = DOM::$table->get_cell_y_by_attribute(
    'id',                // Имя атрибута
    'my-table',          // Значение атрибута
    true,                // Точное соответствие
    1,                   // Номер строки
    2,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "Y координата ячейки (1, 2) по ID таблицы 'my-table': $cell_y_by_id\n";
echo "Y coordinate of cell (1, 2) by table ID 'my-table': $cell_y_by_id\n\n";


// Пример 2: Получение Y координаты ячейки по классу таблицы
// Example 2: Get cell Y coordinate by table class
echo "Пример 2: Получение Y координаты ячейки по классу таблицы\n";
echo "Example 2: Get cell Y coordinate by table class\n\n";

$cell_y_by_class = DOM::$table->get_cell_y_by_attribute(
    'class',             // Имя атрибута
    'data-table',        // Значение атрибута
    true,                // Точное соответствие
    0,                   // Номер строки
    0,                   // Номер столбец
    "-1"                 // Фрейм
);

echo "Y координата ячейки (0, 0) по классу таблицы 'data-table': $cell_y_by_class\n";
echo "Y coordinate of cell (0, 0) by table class 'data-table': $cell_y_by_class\n\n";


// Пример 3: Получение Y координаты ячейки по частичному совпадению атрибута
// Example 3: Get cell Y coordinate by partial attribute match
echo "Пример 3: Получение Y координаты ячейки по частичному совпадению атрибута\n";
echo "Example 3: Get cell Y coordinate by partial attribute match\n\n";

$cell_y_partial = DOM::$table->get_cell_y_by_attribute(
    'class',             // Имя атрибута
    'table',             // Частичное значение
    false,               // Неточное соответствие
    1,                   // Номер строки
    1,                   // Номер столбца
    "-1"                 // Фрейм
);

echo "Y координата ячейки (1, 1) по частичному классу 'table': $cell_y_partial\n";
echo "Y coordinate of cell (1, 1) by partial class 'table': $cell_y_partial\n\n";


// Пример 4: Получение Y координаты ячейки из таблицы во фрейме
// Example 4: Get cell Y coordinate from table in frame
echo "Пример 4: Получение Y координаты ячейки из таблицы во фрейме\n";
echo "Example 4: Get cell Y coordinate from table in frame\n\n";

$cell_y_frame = DOM::$table->get_cell_y_by_attribute(
    'id',                // Имя атрибута
    'frame-table',       // Значение атрибута
    true,                // Точное соответствие
    0,                   // Номер строки
    0,                   // Номер столбца
    '0'                  // Фрейм 0
);

echo "Y координата ячейки (0, 0) из таблицы во фрейме 0 с ID 'frame-table': $cell_y_frame\n";
echo "Y coordinate of cell (0, 0) from table in frame 0 with ID 'frame-table': $cell_y_frame\n\n";


// Пример 5: Получение Y координаты ячейки из таблицы во вложенных фреймах
// Example 5: Get cell Y coordinate from table in nested frames
echo "Пример 5: Получение Y координаты ячейки из таблицы во вложенных фреймах\n";
echo "Example 5: Get cell Y coordinate from table in nested frames\n\n";

$cell_y_nested = DOM::$table->get_cell_y_by_attribute(
    'class',             // Имя атрибута
    'nested-data',       // Значение атрибута
    true,                // Точное соответствие
    1,                   // Номер строки
    2,                   // Номер столбца
    '1:2:3'              // Вложенные фреймы
);

echo "Y координата ячейки (1, 2) из таблицы во вложенных фреймах 1:2:3 с классом 'nested-data': $cell_y_nested\n";
echo "Y coordinate of cell (1, 2) from table in nested frames 1:2:3 with class 'nested-data': $cell_y_nested\n\n";


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
    $cell_y = DOM::$table->get_cell_y_by_attribute(
        $attr['attr'],
        $attr['value'],
        $attr['exact'],
        0, // Первая строка
        0  // Первый столбец
    );
    
    echo "- Атрибут: {$attr['attr']}='{$attr['value']}' (точное: " . ($attr['exact'] ? 'да' : 'нет') . ")\n";
    echo "- Attribute: {$attr['attr']}='{$attr['value']}' (exact: " . ($attr['exact'] ? 'yes' : 'no') . ")\n";
    
    if ($cell_y >= 0) {
        echo "  Y координата ячейки (0, 0): $cell_y\n";
        echo "  Y coordinate of cell (0, 0): $cell_y\n";
    } else {
        echo "  Таблица не найдена или ошибка\n";
        echo "  Table not found or error\n";
    }
    echo "\n";
}


// Пример 7: Получение Y координат для разных ячеек одной таблицы
// Example 7: Get Y coordinates for different cells of same table
echo "Пример 7: Получение Y координат для разных ячеек одной таблицы\n";
echo "Example 7: Get Y coordinates for different cells of same table\n\n";

$table_attr = ['name' => 'id', 'value' => 'my-table', 'exact' => true];

echo "Получение Y координат для разных ячеек таблицы с ID '{$table_attr['value']}':\n";
echo "Getting Y coordinates for different cells of table with ID '{$table_attr['value']}':\n\n";

$cells = [
    ['row' => 0, 'col' => 0],
    ['row' => 0, 'col' => 1],
    ['row' => 1, 'col' => 0],
    ['row' => 1, 'col' => 1],
    ['row' => 2, 'col' => 2]
];

foreach ($cells as $cell) {
    $cell_y = DOM::$table->get_cell_y_by_attribute(
        $table_attr['name'],
        $table_attr['value'],
        $table_attr['exact'],
        $cell['row'],
        $cell['col']
    );
    
    echo "- Ячейка ({$cell['row']}, {$cell['col']}): Y=$cell_y\n";
    echo "- Cell ({$cell['row']}, {$cell['col']}): Y=$cell_y\n";
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
    $cell_y = DOM::$table->get_cell_y_by_attribute(
        $attr_name,
        $attr_value,
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
    echo "Таблица с атрибутом $attr_name='$attr_value' не найдена\n";
    echo "Table with attribute $attr_name='$attr_value' not found\n";
}

echo "\n";


echo "Все примеры get_cell_y_by_attribute завершены!\n";
echo "All get_cell_y_by_attribute examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>