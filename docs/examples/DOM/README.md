# DOM Examples

Эта папка содержит примеры использования различных DOM классов XHE.

This folder contains examples of using various XHE DOM classes.

## Содержание / Contents

- [XHETable Examples](XHETable/) - Примеры работы с таблицами
- [XHEInterface Examples](XHEInterface/) - Примеры работы с DOM интерфейсом
- [XHEAnchor Examples](XHEAnchor/) - Примеры работы с якорями
- [XHEElement Examples](XHEElement/) - Примеры работы с DOM элементами

## XHETable Examples

Папка `XHETable/` содержит примеры использования всех функций класса XHETable:

- `export_to_csv.php` - Экспорт таблиц в формат CSV
- `export_to_xml.php` - Экспорт таблиц в формат XML
- `get_cells_by_number.php` - Получение количества ячеек
- `get_rows_by_number.php` - Получение количества строк
- `get_cols_by_number.php` - Получение количества столбцов
- `get_cell_by_number.php` - Получение текста ячейки по индексам
- `get_cell_by_pos_by_number.php` - Получение текста ячейки по позиции
- `get_row_by_number.php` - Получение текста строки
- `get_col_by_number.php` - Получение текста столбца
- `get_rows_cols_by_number.php` - Получение текста определенных строк и столбцов
- `get_cell_x_by_number.php` - Получение X координаты ячейки
- `get_cell_x_by_inner_text.php` - Получение X координаты ячейки по тексту таблицы
- `get_cell_x_by_attribute.php` - Получение X координаты ячейки по атрибуту таблицы
- `get_cell_y_by_number.php` - Получение Y координаты ячейки
- `get_cell_y_by_inner_text.php` - Получение Y координаты ячейки по тексту таблицы
- `get_cell_y_by_attribute.php` - Получение Y координаты ячейки по атрибуту таблицы

### Особенности использования / Usage Features

- Поддержка работы с фреймами (включая вложенные)
- Возможность получать данные как текст, так и HTML
- Экспорт данных в различные форматы
- Получение координат ячеек
- Комплексные примеры использования

## XHEInterface Examples

Папка `XHEInterface/` содержит примеры использования всех функций класса XHEInterface:

### Методы работы с атрибутами / Attribute Methods
- `get_attribute.php` - Получение значения атрибута
- `get_all_attributes.php` - Получение всех атрибутов
- `get_all_attributes_values.php` - Получение значений всех атрибутов
- `set_attribute.php` - Установка значения атрибута
- `add_attribute.php` - Добавление атрибута
- `remove_attribute.php` - Удаление атрибута

### Методы работы с дочерними элементами / Child Element Methods
- `get_child_by_number.php` - Получение дочернего элемента по номеру
- `get_child_by_attribute.php` - Получение дочернего элемента по атрибуту
- `get_child_by_inner_html.php` - Получение дочернего элемента по внутреннему HTML
- `get_child_by_inner_text.php` - Получение дочернего элемента по внутреннему тексту
- `get_child_by_outer_html.php` - Получение дочернего элемента по внешнему HTML
- `get_child_by_outer_text.php` - Получение дочернего элемента по внешнему тексту
- `get_child_by_xpath.php` - Получение дочернего элемента по XPath
- `get_all_child_by_attribute.php` - Получение всех дочерних элементов по атрибуту
- `get_all_child_by_inner_html.php` - Получение всех дочерних элементов по внутреннему HTML
- `get_all_child_by_inner_text.php` - Получение всех дочерних элементов по внутреннему тексту
- `get_all_child_by_xpath.php` - Получение всех дочерних элементов по XPath
- `get_child_count.php` - Получение количества дочерних элементов
- `add_child.php` - Добавление дочернего элемента
- `insert_before.php` - Вставка элемента перед другим

### Методы работы с содержимым / Content Methods
- `get_inner_html.php` - Получение внутреннего HTML
- `get_inner_text.php` - Получение внутреннего текста
- `get_outer_html.php` - Получение внешнего HTML
- `get_outer_text.php` - Получение внешнего текста
- `set_inner_html.php` - Установка внутреннего HTML
- `set_inner_text.php` - Установка внутреннего текста
- `set_value.php` - Установка значения элемента

### Методы работы с родительскими элементами / Parent Element Methods
- `get_parent.php` - Получение родительского элемента
- `get_parent_by_attribute.php` - Получение родительского элемента по атрибуту
- `get_all_parents.php` - Получение всех родительских элементов
- `get_parents_count.php` - Получение количества родительских элементов

### Методы работы с событиями / Event Methods
- `event.php` - Генерация события
- `get_all_events.php` - Получение всех событий

### Методы работы с фокусом и видимостью / Focus and Visibility Methods
- `focus.php` - Установка фокуса на элемент
- `ensure_visible.php` - Обеспечение видимости элемента
- `scroll.php` - Прокрутка к элементу
- `scroll_to_view.php` - Прокрутка элемента в область видимости
- `is_view_now.php` - Проверка видимости элемента в данный момент
- `is_visibled.php` - Проверка видимости элемента
- `is_exist.php` - Проверка существования элемента

### Методы работы с кликами и мышью / Click and Mouse Methods
- `click.php` - Клик по элементу
- `mouse_click.php` - Клик мышью
- `mouse_double_click.php` - Двойной клик мышью
- `mouse_left_down.php` - Нажатие левой кнопки мыши
- `mouse_left_up.php` - Отпускание левой кнопки мыши
- `mouse_right_click.php` - Клик правой кнопкой мыши
- `mouse_right_down.php` - Нажатие правой кнопки мыши
- `mouse_right_up.php` - Отпускание правой кнопки мыши
- `mouse_move.php` - Перемещение мыши
- `mouse_move_to.php` - Перемещение мыши к элементу
- `meta_click.php` - Мета-клик
- `send_mouse_click.php` - Отправка клика мышью
- `send_mouse_double_click.php` - Отправка двойного клика мышью
- `send_mouse_left_down.php` - Отправка нажатия левой кнопки мыши
- `send_mouse_left_up.php` - Отправка отпускания левой кнопки мыши
- `send_mouse_right_click.php` - Отправка клика правой кнопкой мыши
- `send_mouse_right_down.php` - Отправка нажатия правой кнопки мыши
- `send_mouse_right_up.php` - Отправка отпускания правой кнопки мыши
- `send_mouse_move.php` - Отправка перемещения мыши
- `send_mouse_move_to.php` - Отправка перемещения мыши к элементу

### Методы работы с клавиатурой / Keyboard Methods
- `key.php` - Нажатие клавиши
- `key_down.php` - Нажатие клавиши (без отпускания)
- `key_up.php` - Отпускание клавиши
- `send_key.php` - Отправка нажатия клавиши
- `send_key_down.php` - Отправка нажатия клавиши (без отпускания)
- `send_key_up.php` - Отправка отпускания клавиши
- `input.php` - Ввод текста
- `send_input.php` - Отправка ввода текста

### Методы работы с выбором / Selection Methods
- `select_index.php` - Выбор по индексу
- `select_text.php` - Выбор по тексту
- `select_value.php` - Выбор по значению
- `select_random.php` - Случайный выбор
- `multi_select_indexes.php` - Множественный выбор по индексам
- `multi_select_texts.php` - Множественный выбор по текстам
- `multi_select_values.php` - Множественный выбор по значениям
- `get_selected_index.php` - Получение выбранного индекса
- `get_selected_text.php` - Получение выбранного текста
- `run_selected.php` - Запуск выбранного элемента

### Методы работы с координатами и размерами / Coordinate and Size Methods
- `get_x.php` - Получение X координаты
- `get_y.php` - Получение Y координаты
- `get_width.php` - Получение ширины
- `get_height.php` - Получение высоты

### Методы работы с навигацией / Navigation Methods
- `get_next.php` - Получение следующего элемента
- `get_prev.php` - Получение предыдущего элемента

### Методы работы с формами / Form Methods
- `get_form_number.php` - Получение номера формы
- `is_checked.php` - Проверка, отмечен ли элемент
- `is_disabled.php` - Проверка, отключен ли элемент

### Методы работы с фреймами / Frame Methods
- `get_frame_number.php` - Получение номера фрейма

### Методы работы с различными свойствами / Various Property Methods
- `get_alt.php` - Получение alt текста
- `get_href.php` - Получение href ссылки
- `get_id.php` - Получение ID элемента
- `get_name.php` - Получение имени элемента
- `get_number.php` - Получение номера элемента
- `get_numbers_child.php` - Получение номеров дочерних элементов
- `get_src.php` - Получение src атрибута
- `get_tag.php` - Получение тега элемента
- `get_type.php` - Получение типа элемента
- `get_value.php` - Получение значения элемента
- `get_xpath.php` - Получение XPath элемента
- `get_length.php` - Получение длины элемента

### Методы работы с клонированием и удалением / Clone and Remove Methods
- `get_clone.php` - Клонирование элемента
- `remove.php` - Удаление элемента

### Методы работы с JavaScript и скриншотами / JavaScript and Screenshot Methods
- `run_js.php` - Выполнение JavaScript
- `screenshot.php` - Создание скриншота элемента

### Методы работы с сохранением и теневым DOM / Save and Shadow DOM Methods
- `save.php` - Сохранение элемента
- `get_shadow_root.php` - Получение корня теневого DOM

### Методы работы с прокруткой и позиционированием / Scroll and Positioning Methods
- `seek_to_pos.php` - Перемещение к позиции
- `seek_to_end.php` - Перемещение в конец

### Методы работы с сенсорными событиями / Touch Event Methods
- `send_touch.php` - Отправка сенсорного события

## XHEElement Examples

Папка `XHEElement/` содержит примеры использования всех функций класса XHEElement:

### Методы получения элементов / Element Retrieval Methods
- `get_tag_by_number.php` - Получение тега элемента по номеру
- `get_x_by_tag_by_number.php` - Получение X координаты элемента по тегу и номеру
- `get_y_by_tag_by_number.php` - Получение Y координаты элемента по тегу и номеру
- `get_all_by_tag.php` - Получение всех элементов по тегу
- `convert_number.php` - Преобразование номера элемента в номер другого объекта
- `get_by_query_selector.php` - Получение элемента с помощью CSS селектора
- `get_all_by_query_selector.php` - Получение всех элементов с помощью CSS селектора
- `get_by_js.php` - Получение элемента с помощью JavaScript
- `get_all_by_js.php` - Получение всех элементов с помощью JavaScript

### Особенности использования / Usage Features

- Поддержка работы с элементами через JavaScript
- Возможность получения элементов по CSS селекторам
- Получение координат элементов
- Преобразование между различными типами объектов
- Комплексные примеры использования

## XHEAnchor Examples

Папка `XHEAnchor/` содержит примеры использования всех функций класса XHEAnchor:

- `get_by_attribute.php` - Получение якоря по атрибуту
- `get_by_name.php` - Получение якоря по имени
- `get_by_number.php` - Получение якоря по номеру
- `get_all_hrefs_by_attribute.php` - Получение всех href по атрибуту
- `get_all_hrefs_by_inner_text.php` - Получение всех href по внутреннему тексту

## Как использовать / How to Use

1. Убедитесь, что необходимые классы подключены
2. Укажите правильные пути к файлам при экспорте
3. Используйте правильные индесы таблиц (начинаются с 0)
4. При работе с фреймами указывайте правильные номера фреймов

## Примечания / Notes

- Все примеры написаны на русском и английском языках
- Функции помеченные как `deprecated` не рекомендуется использовать в продакшене
- Для работы с фреймами используйте формат "1:2:3" для вложенных фреймов
- Каждый пример является отдельным PHP файлом с полным кодом использования
- Все примеры следуют стандартной структуре с подключением init.php в начале и quit() в конце

---

*Этот README.md автоматически сгенерирован для документации примеров использования DOM классов XHE.*

*This README.md was automatically generated for documentation of XHE DOM class usage examples.*