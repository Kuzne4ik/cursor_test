# XHETable Examples

Эта папка содержит полные примеры использования всех функций класса XHETable для работы с таблицами в DOM.

This folder contains comprehensive examples of using all XHETable class functions for working with tables in DOM.

## Структура / Structure

### Основные функции / Main Functions

| Функция / Function | Описание / Description | Файл / File |
|-------------------|----------------------|-------------|
| `export_to_csv` | Экспорт таблиц в формат CSV | [export_to_csv.php](export_to_csv.php) |
| `export_to_xml` | Экспорт таблиц в формат XML | [export_to_xml.php](export_to_xml.php) |
| `get_cells_by_number` | Получение количества ячеек | [get_cells_by_number.php](get_cells_by_number.php) |
| `get_rows_by_number` | Получение количества строк | [get_rows_by_number.php](get_rows_by_number.php) |
| `get_cols_by_number` | Получение количества столбцов | [get_cols_by_number.php](get_cols_by_number.php) |
| `get_cell_by_number` | Получение текста ячейки по индексам | [get_cell_by_number.php](get_cell_by_number.php) |
| `get_cell_by_pos_by_number` | Получение текста ячейки по позиции | [get_cell_by_pos_by_number.php](get_cell_by_pos_by_number.php) |
| `get_row_by_number` | Получение текста строки | [get_row_by_number.php](get_row_by_number.php) |
| `get_col_by_number` | Получение текста столбца | [get_col_by_number.php](get_col_by_number.php) |
| `get_rows_cols_by_number` | Получение текста определенных строк и столбцов | [get_rows_cols_by_number.php](get_rows_cols_by_number.php) |

### Функции координат / Coordinate Functions

| Функция / Function | Описание / Description | Файл / File |
|-------------------|----------------------|-------------|
| `get_cell_x_by_number` | Получение X координаты ячейки | [get_cell_x_by_number.php](get_cell_x_by_number.php) |
| `get_cell_x_by_inner_text` | Получение X координаты по тексту таблицы | [get_cell_x_by_inner_text.php](get_cell_x_by_inner_text.php) |
| `get_cell_x_by_attribute` | Получение X координаты по атрибуту таблицы | [get_cell_x_by_attribute.php](get_cell_x_by_attribute.php) |
| `get_cell_y_by_number` | Получение Y координаты ячейки | [get_cell_y_by_number.php](get_cell_y_by_number.php) |
| `get_cell_y_by_inner_text` | Получение Y координаты по тексту таблицы | [get_cell_y_by_inner_text.php](get_cell_y_by_inner_text.php) |
| `get_cell_y_by_attribute` | Получение Y координаты по атрибуту таблицы | [get_cell_y_by_attribute.php](get_cell_y_by_attribute.php) |

## Особенности использования / Usage Features

### 🎯 Основные возможности / Key Features

- **Двуязычные комментарии** / **Bilingual comments** - русский и английский
- **Поддержка фреймов** / **Frame support** - простые и вложенные фреймы
- **Режимы вывода** / **Output modes** - текст и HTML
- **Экспорт данных** / **Data export** - CSV и XML форматы
- **Получение координат** / **Coordinate retrieval** - X и Y координаты ячеек
- **Комплексные примеры** / **Complex examples** - реальные сценарии использования

### 📋 Параметры функций / Function Parameters

- `number` - номер таблицы на странице (начинается с 0)
- `row` - индекс строки (начинается с 0)
- `col` - индекс столбца (начинается с 0)
- `frame` - номер фрейма или строка с номерами фреймов ("1:2:3" для вложенных)
- `as_html` - возвращать HTML вместо текста
- `as_exactly` - точное соответствие для поиска

### 🔧 Советы по использованию / Usage Tips

1. **Проверяйте существование элементов** / **Check element existence**:
   ```php
   $element = DOM::$table->get_by_number(0);
   if ($element->is_exist()) {
       // Работаем с элементом
   }
   ```

2. **Используйте правильные индексы** / **Use correct indices**:
   - Таблицы нумеруются с 0
   - Строки и столбцы нумеруются с 0
   - Позиции ячеек начинаются с 0

3. **Работа с фреймами** / **Working with frames**:
   ```php
   // Простой фрейм
   DOM::$table->get_cell_by_number(0, 1, 2, false, "0");
   
   // Вложенные фреймы
   DOM::$table->get_cell_by_number(0, 1, 2, false, "1:2:3");
   ```

4. **Экспорт данных** / **Data export**:
   ```php
   // Экспорт всей таблицы
   DOM::$table->export_to_csv('output.csv', 0, '', '', false, ',');
   
   // Экспорт определенных строк и столбцов
   DOM::$table->export_to_csv('output.csv', 0, '0,2,4', '1,3', false, ';');
   ```

## 🚀 Быстрый старт / Quick Start

1. **Подключение классов** / **Class Connection**:
   ```php
   require_once 'src/Templates/Objects/DOM/xhe_table.php';
   ```

2. **Базовый пример** / **Basic example**:
   ```php
   // Получение количества ячеек
   $cell_count = DOM::$table->get_cells_by_number(0);
   echo "Количество ячеек: {$cell_count}";
   ```

3. **Получение данных ячейки** / **Get cell data**:
   ```php
   // Текст ячейки
   $cell_text = DOM::$table->get_cell_by_number(0, 1, 2);
   
   // HTML ячейки
   $cell_html = DOM::$table->get_cell_by_number(0, 1, 2, true);
   ```

## 📚 Дополнительные ресурсы / Additional Resources

- [Общая документация DOM](../README.md) - DOM documentation
- [Примеры XHEInterface](../XHEInterface/) - XHEInterface examples
- [Примеры XHEAnchor](../XHEAnchor/) - XHEAnchor examples

## 🎯 Рекомендации / Recommendations

- Всегда проверяйте существование элементов перед работой с ними
- Используйте правильные индексы (начинаются с 0)
- Для сложных сценариев используйте комплексные примеры
- Учитывайте особенности работы с фреймами
- Обращайте внимание на пометки `deprecated` для устаревших функций

---

*Этот README.md автоматически сгенерирован для документации примеров использования XHETable.*

*This README.md was automatically generated for documentation of XHETable usage examples.*