<?php

/**
 * Пример использования функции get_col_by_number класса XHETable
 * Example of using get_col_by_number function of XHETable class
 * 
 * Получить текст заданной строки в таблице, таблицу найти по номеру
 * Find table by number and get column
 * 
 * Примечание: В оригинальном комментарии указано "строка", но функция возвращает столбец
 * Note: Original comment mentions "row", but function returns column
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

echo "=== Пример использования get_col_by_number ===\n";
echo "=== Example of using get_col_by_number ===\n\n";

// Пример 1: Получение текста первого столбца
// Example 1: Get text of first column
echo "Пример 1: Получение текста первого столбца\n";
echo "Example 1: Get text of first column\n\n";

$col_text = DOM::$table->get_col_by_number(0, 0); // Таблица 0, столбец 0
echo "Текст первого столбца:\n$col_text\n\n";
echo "Text of first column:\n$col_text\n\n";


// Пример 2: Получение текста второго столбца
// Example 2: Get text of second column
echo "Пример 2: Получение текста второго столбца\n";
echo "Example 2: Get text of second column\n\n";

$col_text_2nd = DOM::$table->get_col_by_number(0, 1); // Таблица 0, столбец 1
echo "Текст второго столбца:\n$col_text_2nd\n\n";
echo "Text of second column:\n$col_text_2nd\n\n";


// Пример 3: Получение столбца как HTML
// Example 3: Get column as HTML
echo "Пример 3: Получение столбца как HTML\n";
echo "Example 3: Get column as HTML\n\n";

$col_html = DOM::$table->get_col_by_number(0, 0, true); // Таблица 0, столбец 0, как HTML
echo "HTML первого столбца:\n$col_html\n\n";
echo "HTML of first column:\n$col_html\n\n";


// Пример 4: Получение столбца из таблицы во фрейме
// Example 4: Get column from table in frame
echo "Пример 4: Получение столбца из таблицы во фрейме\n";
echo "Example 4: Get column from table in frame\n\n";

$col_frame = DOM::$table->get_col_by_number(0, 2, false, "0"); // Таблица 0 во фрейме 0, столбец 2
echo "Текст третьего столбца из таблицы во фрейме 0:\n$col_frame\n\n";
echo "Text of third column from table in frame 0:\n$col_frame\n\n";


// Пример 5: Получение столбца из вложенных фреймов
// Example 5: Get column from nested frames
echo "Пример 5: Получение столбца из вложенных фреймов\n";
echo "Example 5: Get column from nested frames\n\n";

$col_nested = DOM::$table->get_col_by_number(0, 1, false, "1:2:3"); // Таблица 0 во вложенных фреймах 1:2:3, столбец 1
echo "Текст второго столбца из таблицы во вложенных фреймах 1:2:3:\n$col_nested\n\n";
echo "Text of second column from table in nested frames 1:2:3:\n$col_nested\n\n";


// Пример 6: Чтение всех столбцов таблицы
// Example 6: Read all columns of table
echo "Пример 6: Чтение всех столбцов таблицы\n";
echo "Example 6: Read all columns of table\n\n";

$table_number = 0;
$col_count = DOM::$table->get_cols_by_number($table_number);

echo "Чтение всех $col_count столбцов из таблицы $table_number:\n";
echo "Reading all $col_count columns from table $table_number:\n";

for ($col_index = 0; $col_index < $col_count; $col_index++) {
    $col_text = DOM::$table->get_col_by_number($table_number, $col_index);
    echo "\n--- Столбец $col_index ---\n$col_text\n";
    echo "\n--- Column $col_index ---\n$col_text\n";
}

echo "\n";


// Пример 7: Анализ содержимого столбцов
// Example 7: Analyze column content
echo "Пример 7: Анализ содержимого столбцов\n";
echo "Example 7: Analyze column content\n\n";

$table_number = 0;
$col_count = DOM::$table->get_cols_by_number($table_number);

$analysis = [];
for ($col_index = 0; $col_index < min($col_count, 10); $col_index++) {
    $col_text = DOM::$table->get_col_by_number($table_number, $col_index);
    $analysis[$col_index] = [
        'text_length' => strlen($col_text),
        'word_count' => str_word_count($col_text),
        'contains_numbers' => preg_match('/\d/', $col_text),
        'contains_html' => strip_tags($col_text) !== $col_text
    ];
}

echo "Анализ столбцов таблицы $table_number:\n";
echo "Analysis of table $table_number columns:\n";

foreach ($analysis as $col_index => $data) {
    echo "Столбец $col_index:\n";
    echo "- Длина текста: {$data['text_length']} символов\n";
    echo "- Количество слов: {$data['word_count']}\n";
    echo "- Содержит цифры: " . ($data['contains_numbers'] ? 'Да' : 'Нет') . "\n";
    echo "- Содержит HTML: " . ($data['contains_html'] ? 'Да' : 'Нет') . "\n";

    echo "Column $col_index:\n";
    echo "- Text length: {$data['text_length']} characters\n";
    echo "- Word count: {$data['word_count']}\n";
    echo "- Contains numbers: " . ($data['contains_numbers'] ? 'Yes' : 'No') . "\n";
    echo "- Contains HTML: " . ($data['contains_html'] ? 'Yes' : 'No') . "\n";
}

echo "\n";


// Пример 8: Поиск столбцов с ключевыми словами
// Example 8: Search columns with keywords
echo "Пример 8: Поиск столбцов с ключевыми словами\n";
echo "Example 8: Search columns with keywords\n\n";

$table_number = 0;
$col_count = DOM::$table->get_cols_by_number($table_number);

$keywords = ['Имя', 'Name', 'Фамилия', 'Surname', 'Email', 'Телефон', 'Phone', 'Дата', 'Date'];
$found_columns = [];

for ($col_index = 0; $col_index < $col_count; $col_index++) {
    $col_text = DOM::$table->get_col_by_number($table_number, $col_index);
    
    foreach ($keywords as $keyword) {
        if (stripos($col_text, $keyword) !== false) {
            $found_columns[] = [
                'col_index' => $col_index,
                'text' => $col_text,
                'keyword' => $keyword
            ];
            break;
        }
    }
}

echo "Найденные столбцы с ключевыми словами:\n";
echo "Found columns with keywords:\n";

foreach ($found_columns as $col) {
    echo "--- Столбец {$col['col_index']} (ключевое слово: '{$col['keyword']}') ---\n";
    echo "{$col['text']}\n\n";
    
    echo "--- Column {$col['col_index']} (keyword: '{$col['keyword']}') ---\n";
    echo "{$col['text']}\n\n";
}

if (empty($found_columns)) {
    echo "Столбцы с ключевыми словами не найдены\n";
    echo "Columns with keywords not found\n";
}

echo "\n";


// Пример 9: Проверка существования столбца перед чтением
// Example 9: Check column existence before reading
echo "Пример 9: Проверка существования столбца перед чтением\n";
echo "Example 9: Check column existence before reading\n\n";

$table_number = 0;
$col_count = DOM::$table->get_cols_by_number($table_number);

// Проверяем существование таблицы
$table_element = DOM::$table->get_by_number($table_number);
if ($table_element->is_exist()) {
    echo "Таблица $table_number существует\n";
    echo "Table $table_number exists\n";
    
    // Проверяем существование столбца
    // Check if column exists
    $test_col = min($col_count - 1, 10);
    
    $col_text = DOM::$table->get_col_by_number($table_number, $test_col);
    
    if ($col_text !== '') {
        echo "Столбец $test_col существует и содержит данные\n";
        echo "Column $test_col exists and contains data\n";
        echo "Первые 100 символов: " . substr($col_text, 0, 100) . "...\n";
        echo "First 100 characters: " . substr($col_text, 0, 100) . "...\n";
    } else {
        echo "Столбец $test_col не содержит данных\n";
        echo "Column $test_col contains no data\n";
    }
} else {
    echo "Таблица $table_number не найдена на странице\n";
    echo "Table $table_number not found on page\n";
}

echo "\n";

echo "Все примеры get_col_by_number завершены!\n";
echo "All get_col_by_number examples completed!\n";

// Остановить работу
WINDOW::$app->quit();
?>