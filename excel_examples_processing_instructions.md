# Инструкции по обработке PHP-файлов из папки examples/System/XHEExcel

## Обзор
Этот документ содержит инструкции по проверке и выполнению PHP-файлов из папки `examples/System/XHEExcel`. Каждый файл демонстрирует различные функции XHE Excel API.

## Изученные правила

### 1. Правило инициализации кода
Каждый PHP-скрипт должен начинаться со следующего блока кода:
```php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
```

### 2. Правило завершения приложения
Каждый PHP-скрипт должен заканчиваться следующим кодом:
```php
// Quit the application
WINDOW::$app->quit();
```

### 3. Правило использования XHE классов
XHE классы используются как статические свойства, без создания объекта:
- `DOM::$anchor` для работы с anchor элементами
- `DOM::$button` для работы с кнопками
- `DOM::$input` для работы с input полями
- `SYSTEM::$excel` для работы с Excel
- и т.д.

### 4. Правило для XHEInterface
Методы с префиксом `get_by_` возвращают объект типа `XHEInterface`. Для проверки существования элемента используется метод `is_exist()` или проверка значения поля `inner_number`.

### 5. Правило для XHEInterfaces
Методы с префиксом `get_all_by_` возвращают объект типа `XHEInterfaces`. Для получения количества элементов используется метод `count()`.

### 6. Правило для документации
- Комментарии в PHP-файлах должны быть на английском языке
- Каждый пример файла должен содержать вверху комментарий с префиксом `Scenario:`
- Для новых строк используется `\n` вместо `<br>`

## План выполнения

### Шаг 1: Бэкап файла test/test.xlsx
Перед запуском любых PHP-файлов необходимо создать бэкап файла `test/test.xlsx`, так как многие скрипты вносят изменения в этот файл.

### Шаг 2: Запуск PHP-файлов
Каждый PHP-файл из папки `examples/System/XHEExcel` должен быть запущен с использованием команды:
```
"C:\BizApps\RPAbot Studio 7.0.76\PHP\php.exe" [путь_к_файлу]
```

### Шаг 3: Проверка вывода на ошибки
После запуска каждого файла необходимо проверить вывод консоли на наличие ошибок.

### Шаг 4: Восстановление test/test.xlsx
После каждого запуска PHP-файла, который вносит изменения в `test/test.xlsx`, необходимо восстановить файл из бэкапа.

## Список файлов для обработки

Ниже представлен список всех PHP-файлов из папки `examples/System/XHEExcel`, которые нужно обработать:

1. `add_autofilter.php` - Добавление и очистка автофильтров
2. `add_link.php` - Добавление гиперссылок
3. `add_macro.php` - Добавление макроса
4. `add_macro_from_file.php` - Запуск макроса по имени
5. `add_row.php` - Добавление строки
6. `add_rows.php` - Добавление нескольких строк
7. `add_sheet.php` - Добавление листа
8. `autosize_col.php` - Автоподбор ширины столбца
9. `autosize_row.php` - Автоподбор высоты строки
10. `clear_autofilters.php` - Очистка автофильтров
11. `clear_cell.php` - Очистка содержимого ячейки
12. `close.php` - Закрытие Excel файла
13. `connect_by_hwnd.php` - Подключение к Excel по HWND
14. `convert.php` - Конвертация Excel файлов
15. `copy_range_and_paste_to_range.php` - Копирование и вставка диапазона
16. `copy_range_to_clipboard.php` - Копирование диапазона в буфер обмена
17. `create.php` - Создание нового Excel файла
18. `cut_range_and_paste_to_range.php` - Вырезание и вставка диапазона
19. `cut_range_to_clipboard.php` - Вырезание диапазона в буфер обмена
20. `dedupe_range.php` - Удаление дубликатов в диапазоне
21. `dedupe_sheet.php` - Удаление дубликатов на листе
22. `export_sheets.php` - Экспорт листов в отдельные файлы
23. `export_to_access.php` - Экспорт в Access
24. `follow_link_by_number.php` - Переход по ссылке по номеру
25. `follow_link_by_text.php` - Переход по ссылке по тексту
26. `get_all_pos_by_text.php` - Получение всех позиций по тексту
27. `get_and_clear_range.php` - Получение и очистка диапазона
28. `get_cell.php` - Получение значения ячейки
29. `get_cell_font.php` - Получение шрифта ячейки
30. `get_cols_count.php` - Получение количества столбцов
31. `get_pos_by_text.php` - Получение позиции по тексту
32. `get_range.php` - Получение диапазона
33. `get_row.php` - Получение строки
34. `get_rows_count.php` - Получение количества строк
35. `get_sheet.php` - Получение листа
36. `get_sheets_count.php` - Получение количества листов
37. `get_sheets_names.php` - Получение имен листов
38. `get_sheet_name.php` - Получение имени листа
39. `get_sheet_number_by_name.php` - Получение номера листа по имени
40. `is_row_hidden.php` - Проверка скрытия строки
41. `kill.php` - Завершение процессов Excel
42. `merge_cells.php` - Объединение ячеек
43. `open.php` - Открытие Excel файла
44. `paste_range_from_clipboard.php` - Вставка диапазона из буфера обмена
45. `refresh_sheet.php` - Обновление листа
46. `remove_row.php` - Удаление строки
47. `remove_rows_by_number.php` - Удаление строк по номеру
48. `remove_rows_by_ranges.php` - Удаление строк по диапазонам
49. `remove_rows_by_text.php` - Удаление строк по тексту
50. `remove_sheet_by_name.php` - Удаление листа по имени
51. `remove_sheet_by_number.php` - Удаление листа по номеру
52. `run_macro_by_name.php` - Запуск макроса по имени
53. `save.php` - Сохранение файла
54. `set_cell.php` - Установка значения ячейки
55. `set_cell_font.php` - Установка шрифта ячейки
56. `set_cell_font_bold.php` - Установка жирного шрифта
57. `set_cell_font_italic.php` - Установка курсивного шрифта
58. `set_cell_font_name.php` - Установка имени шрифта
59. `set_cell_font_shadow.php` - Установка тени шрифта
60. `set_cell_font_size.php` - Установка размера шрифта
61. `set_cell_font_striketrough.php` - Установка зачеркнутого шрифта
62. `set_cell_font_undrline.php` - Установка подчеркнутого шрифта
63. `set_cell_format.php` - Установка формата ячейки
64. `set_col_format.php` - Установка формата столбца
65. `set_col_width.php` - Установка ширины столбца
66. `set_connection_source_data_file_by_number.php` - Установка файла источника данных
67. `set_range_name.php` - Установка имени диапазона
68. `set_row.php` - Установка значений строки
69. `set_row_format.php` - Установка формата строки
70. `set_row_height.php` - Установка высоты строки
71. `set_sheet.php` - Установка содержимого листа
72. `set_sheet_name.php` - Установка имени листа
73. `set_sheet_zoom.php` - Установка масштаба листа
74. `show_row.php` - Показ/скрытие строки
75. `sort_sheet.php` - Сортировка листа
76. `split_sheet_by_rows.php` - Разделение листа по строкам
77. `unmerge_cells.php` - Разъединение ячеек

## Особые замечания

### Файлы, использующие test/test.xlsm вместо test.xlsx
Некоторые файлы используют макросы и поэтому работают с файлом `.xlsm`:
- `add_macro.php`
- `add_macro_from_file.php`
- `run_macro_by_name.php`

Для этих файлов также необходимо создать бэкап и восстановление `test/test.xlsm`.

### Файлы, создающие новые файлы
Некоторые скрипты создают новые файлы:
- `create.php` - создает `test/test_create.xlsx`
- `convert.php` - создает несколько файлов при конвертации
- `export_sheets.php` - создает файлы в папке `sheets`
- `split_sheet_by_rows.php` - создает файлы в папке `sheets`

После выполнения этих скриптов необходимо удалять созданные файлы перед следующим запуском.

### Файлы, требующие дополнительных файлов
Некоторые скрипты требуют наличия дополнительных файлов:
- `export_to_access.php` требует наличия файла `d:/Empty.accdb`
- `convert.php` требует наличия файлов для конвертации в папке `test/`
- `refresh_sheet.php` требует наличия файла `D:/1.xlsx`

## Процесс выполнения

1. Создать бэкапы файлов:
   - `test/test.xlsx`
   - `test/test.xlsm` (если существует)

2. Для каждого PHP-файла из списка выше:
   - Восстановить бэкапы файлов
   - Удалить временные файлы, если они были созданы предыдущим скриптом
   - Запустить PHP-файл с помощью команды `php.exe`
   - Проверить вывод на наличие ошибок
   - Записать результат в отчет

3. Составить итоговый отчет о выполнении задачи.

## Пример запуска PHP-файла
```
cd "c:\BizApps\RPAbot Studio 7.0.76\My Robots\cursor_test\examples\System\XHEExcel"
"C:\BizApps\RPAbot Studio 7.0.76\PHP\php.exe" add_autofilter.php
```

## Ожидаемые результаты

После выполнения всех инструкций будет проверена работоспособность всех примеров использования XHE Excel API, составлен отчет о найденных ошибках и особенностях работы каждого примера.