# XHE Examples

Эта папка содержит примеры использования различных классов XHE.

This folder contains examples of using various XHE classes.

## Структура папки / Folder Structure

```
docs/examples/
├── DOM/                          # DOM классы / DOM classes
│   ├── README.md                 # Документация по DOM / DOM documentation
│   ├── XHETable/                 # Примеры работы с таблицами
│   │   ├── README.md             # Документация по XHETable
│   │   ├── export_to_csv.php     # Экспорт таблиц в CSV
│   │   ├── export_to_xml.php     # Экспорт таблиц в XML
│   │   ├── get_cells_by_number.php
│   │   ├── get_cell_by_number.php
│   │   ├── get_cell_by_pos_by_number.php
│   │   ├── get_cell_x_by_attribute.php
│   │   ├── get_cell_x_by_inner_text.php
│   │   ├── get_cell_x_by_number.php
│   │   ├── get_cell_y_by_attribute.php
│   │   ├── get_cell_y_by_inner_text.php
│   │   ├── get_cell_y_by_number.php
│   │   ├── get_cols_by_number.php
│   │   ├── get_col_by_number.php
│   │   ├── get_rows_by_number.php
│   │   ├── get_row_by_number.php
│   │   └── output/               # Папка для экспорта
│   ├── XHEInterface/             # Интерфейсные методы
│   │   ├── README.md             # Документация по XHEInterface
│   │   ├── add_attribute.php
│   │   ├── add_child.php
│   │   ├── check.php
│   │   ├── click.php
│   │   ├── ensure_visible.php
│   │   ├── event.php
│   │   ├── focus.php
│   │   ├── get_all_attributes.php
│   │   ├── get_all_attributes_values.php
│   │   ├── get_all_child_by_attribute.php
│   │   ├── get_all_child_by_inner_html.php
│   │   ├── get_all_child_by_inner_text.php
│   │   ├── get_all_child_by_xpath.php
│   │   ├── get_all_events.php
│   │   ├── get_all_parents.php
│   │   ├── get_alt.php
│   │   ├── get_attribute.php
│   │   ├── get_child_by_attribute.php
│   │   ├── get_child_by_inner_html.php
│   │   ├── get_child_by_inner_text.php
│   │   ├── get_child_by_number.php
│   │   ├── get_child_by_outer_html.php
│   │   ├── get_child_by_outer_text.php
│   │   ├── get_child_by_xpath.php
│   │   ├── get_child_count.php
│   │   ├── get_clone.php
│   │   ├── get_form_number.php
│   │   ├── get_frame_number.php
│   │   ├── get_height.php
│   │   ├── get_href.php
│   │   ├── get_id.php
│   │   ├── get_inner_html.php
│   │   ├── get_inner_text.php
│   │   ├── get_length.php
│   │   ├── get_name.php
│   │   ├── get_next.php
│   │   ├── get_number.php
│   │   ├── get_numbers_child.php
│   │   ├── get_outer_html.php
│   │   ├── get_outer_text.php
│   │   ├── get_parent.php
│   │   ├── get_parents_count.php
│   │   ├── get_parent_by_attribute.php
│   │   ├── get_prev.php
│   │   ├── get_selected_index.php
│   │   ├── get_selected_text.php
│   │   ├── get_shadow_root.php
│   │   ├── get_src.php
│   │   ├── get_tag.php
│   │   ├── get_type.php
│   │   ├── get_value.php
│   │   ├── get_width.php
│   │   ├── get_x.php
│   │   ├── get_xpath.php
│   │   ├── get_y.php
│   │   ├── input.php
│   │   ├── insert_before.php
│   │   ├── is_checked.php
│   │   ├── is_disabled.php
│   │   ├── is_exist.php
│   │   ├── is_view_now.php
│   │   ├── is_visibled.php
│   │   ├── key.php
│   │   ├── key_down.php
│   │   ├── key_up.php
│   │   ├── meta_click.php
│   │   ├── mouse_click.php
│   │   ├── mouse_double_click.php
│   │   ├── mouse_left_down.php
│   │   ├── mouse_left_up.php
│   │   ├── mouse_move.php
│   │   ├── mouse_move_to.php
│   │   ├── mouse_right_click.php
│   │   ├── mouse_right_down.php
│   │   ├── mouse_right_up.php
│   │   ├── multi_select_indexes.php
│   │   ├── multi_select_texts.php
│   │   ├── multi_select_values.php
│   │   ├── remove.php
│   │   ├── remove_attribute.php
│   │   ├── run_js.php
│   │   ├── run_selected.php
│   │   ├── save.php
│   │   ├── screenshot.php
│   │   ├── scroll.php
│   │   ├── scroll_to_view.php
│   │   ├── seek_to_end.php
│   │   ├── seek_to_pos.php
│   │   ├── select_index.php
│   │   ├── select_random.php
│   │   ├── select_text.php
│   │   ├── select_value.php
│   │   ├── send_input.php
│   │   ├── send_key.php
│   │   ├── send_key_down.php
│   │   ├── send_key_up.php
│   │   ├── send_mouse_click.php
│   │   ├── send_mouse_double_click.php
│   │   ├── send_mouse_left_down.php
│   │   ├── send_mouse_left_up.php
│   │   ├── send_mouse_move.php
│   │   ├── send_mouse_move_to.php
│   │   ├── send_mouse_right_click.php
│   │   ├── send_mouse_right_down.php
│   │   ├── send_mouse_right_up.php
│   │   ├── send_touch.php
│   │   ├── set_attribute.php
│   │   ├── set_inner_html.php
│   │   ├── set_inner_text.php
│   │   └── set_value.php
│   ├── XHEAnchor/                # Якоря / Anchors
│   │   ├── README.md             # Документация по XHEAnchor
│   │   ├── get_all_hrefs_by_attribute.php
│   │   ├── get_all_hrefs_by_inner_text.php
│   │   ├── get_by_attribute.php
│   │   ├── get_by_name.php
│   │   └── get_by_number.php
│   ├── XHEForm/                  # Формы / Forms
│   │   ├── README.md             # Документация по XHEForm
│   │   ├── get_action_by_id.php
│   │   ├── get_action_by_name.php
│   │   ├── get_action_by_number.php
│   │   ├── reset_by_name.php
│   │   ├── reset_by_number.php
│   │   ├── submit_by_action.php
│   │   ├── submit_by_attribute.php
│   │   ├── submit_by_id.php
│   │   ├── submit_by_name.php
│   │   └── submit_by_number.php
├── Tools/                        # Инструменты / Tools (будет добавлено содержимое)
└── README.md                     # Этот файл / This file
```

## Содержание / Contents

- [DOM Classes](DOM/) - Примеры работы с DOM элементами
  - [XHETable Examples](DOM/XHETable/) - Примеры работы с таблицами
  - [XHEInterface Examples](DOM/XHEInterface/) - Примеры работы с DOM интерфейсом
  - [XHEAnchor Examples](DOM/XHEAnchor/) - Примеры работы с якорями
  - [XHEForm Examples](DOM/XHEForm/) - Примеры работы с формами
- [Tools](Tools/) - Инструменты и утилиты (будет добавлено содержимое)

## Как использовать примеры / How to Use Examples

1. **Подключение классов** / **Class Connection**:
   ```php
   require_once 'src/Templates/Objects/DOM/xhe_table.php';
   ```

2. **Использование статических свойств** / **Using Static Properties**:
   ```php
   // Правильно:
   $result = DOM::$table->get_cell_by_number(0, 1, 2);
   
   // Неправильно (не создавать объекты):
   // $table = new XHETable();
   ```

3. **Проверка существования элементов** / **Checking Element Existence**:
   ```php
   // Проверка через метод is_exist()
   $element = DOM::$table->get_by_number(0);
   if ($element->is_exist()) {
       // Работа с элементом
   }
   
   // Альтернативная проверка через inner_number
   if ($element->inner_number > -1) {
       // Элемент существует на странице
   }
   ```

## Общие принципы / General Principles

- Все классы XHE используются как статические свойства
- Не создавайте объекты классов XHE вручную
- Всегда проверяйте существование элементов перед работой с ними
- Используйте правильные индексы (начинаются с 0)
- Учитывайте работу с фреймами при необходимости
- Для получения объекта используйте методы с префиксом `get_by_`
- Для получения коллекций используйте методы с префиксом `get_all_by_`

## Поддержка / Support

Если у вас возникли вопросы по использованию примеров, проверьте:

- Документацию по каждому классу в соответствующих README.md файлах
- Примеры в соответствующих папках
- Комментарии в коде примеров
- Структуру папок для понимания расположения файлов

--- 

*Этот README.md автоматически сгенерирован для документации примеров использования классов XHE.*

*This README.md was automatically generated for documentation of XHE class usage examples.*