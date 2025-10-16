# PHP RPA Reference

## DOM

### `XHEBaseObject` — Base class XHEBaseObject to implementing request to API

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `call(string $command, int $timeout = -1): mixed`  

- `call_boolean(string $command, array $params, int $timeout = -1): bool`  

- `call_int(string $command, array $params, int $timeout = -1): int`  

- `call_get(string $command, array $params, int $timeout = -1): mixed`  

- `get_command_string(string $command, array $params): string`  

---

### `XHEBaseList` — Базовый класс для классов реализующий запросы к ядру согласно правилам системы

**Методы**:
- `__construct(string $inner_numbers, string $server, string $password = ''): void`  

- `__call(string $name, array $arguments): array`  

- `offsetExists(mixed $offset): bool`  

- `offsetGet(mixed $offset): mixed`  

- `offsetSet(mixed $offset, mixed $value): void`  

- `offsetUnset(mixed $offset): void`  

- `getIterator(): Traversable`  

- `count(): int`  

- `get_count(): int`  

- `get(int $index): false|mixed`  

---

### `XHEPosition` — Для представления объекта координат

**Методы**:
- `__construct(string $x, string $y): void`  

---

### `XHERange` — Для представления объекта Range для работы с Excel файлами

**Методы**:
- `__construct(string $left, int $top, string $right, int $bottom): void`  

- `__toString(): string`  

---

### `XHEFont` — Для хранения данных Шрифта

**Методы**:
- `__toString(): string`  

---

### `XHEWebGLParams` — WebGL Context Info

**Методы**:
---

### `XHEBaseDOM` — Base class for handling DOM elements in current loaded HTML page

**Методы**:
---

### `XHEBaseDOMVisual` — Base class for handling DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `wait_element_exist_by_number(int $number, string $frame = '-1'): bool`  

- `wait_element_exist_by_name(string $name, string $frame = '-1'): bool`  

- `wait_element_exist_by_id(string $id, bool $exactly = true, string $frame = '-1'): bool`  

- `wait_element_exist_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): bool`  

- `wait_element_exist_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): bool`  

- `wait_element_exist_by_outer_text(string $outer_text, bool $exactly = true, string $frame = '-1'): bool`  

- `wait_element_exist_by_outer_html(string $outer_html, bool $exactly = true, string $frame = '-1'): bool`  

- `wait_element_exist_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `wait_element_exist_by_xpath(string $xpath): bool`  

- `wait_element_exist_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, string $form_name, string $frame = '-1'): bool`  

- `wait_element_exist_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, int $form_number, string $frame = '-1'): bool`  

- `click_by_number(int $number, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_name(string $name, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_id(string $id, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_value(string $value, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_alt(string $alt, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_src(string $src, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_href(string $url, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_inner_text(string $text, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_number_by_form_number(int $number, int $form_number, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_name_by_form_number(string $name, int $form_number, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, int $form_number, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_number_by_form_name(int $number, string $form_name, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_name_by_form_name(string $name, string $form_name, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, string $form_name, string $frame = '-1', bool $wait_browser = true): bool`  

- `click_random(string $frame = '-1', bool $wait_browser = true): int`  

- `send_event_by_number(int $number, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `send_event_by_name(string $name, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `send_event_by_id(string $id, mixed $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `send_event_by_href(string $url, mixed $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `send_event_by_inner_text(string $text, bool $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `send_event_by_inner_html(string $html, bool $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `send_event_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool`  

- `set_focus_by_number(int $number, string $frame = '-1'): bool`  

- `set_focus_by_name(string $name, string $frame = '-1'): bool`  

- `set_focus_by_href(string $href, bool $exactly = true, string $frame = '-1'): bool`  

- `set_focus_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): bool`  

- `set_focus_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): bool`  

- `set_focus_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `set_value_by_number(int $number, string $value, string $frame = '-1'): bool`  

- `set_value_by_name(string $name, string $value, string $frame = '-1'): bool`  

- `set_value_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $value, string $frame = '-1'): bool`  

- `set_value_by_number_by_form_number(int $number, string $value, int $form_number, string $frame = '-1'): bool`  

- `set_value_by_name_by_form_number(string $name, string $value, int $form_number, string $frame = '-1'): bool`  

- `set_value_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, string $value, int $form_number, string $frame = '-1'): bool`  

- `set_value_by_number_by_form_name(int $number, string $value, string $form_name, string $frame = '-1'): bool`  

- `set_value_by_name_by_form_name(string $name, string $value, string $form_name, string $frame = '-1'): bool`  

- `set_value_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, string $value, string $form_name, string $frame = '-1'): bool`  

- `set_inner_text_by_number(int $number, string $text, string $frame = '-1'): bool`  

- `set_inner_text_by_name(string $name, string $text, string $frame = '-1'): bool`  

- `set_inner_text_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $text, string $frame = '-1'): bool`  

- `set_inner_html_by_number(int $number, string $html, string $frame = '-1'): bool`  

- `set_inner_html_by_name(string $name, string $html, string $frame = '-1'): bool`  

- `set_inner_html_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $html, string $frame = '-1'): bool`  

- `add_attribute_by_number(int $number, string $name_attr, string $value_attr, string $frame = '-1'): bool`  

- `add_attribute_by_name(string $name, string $name_attr, string $value_attr, string $frame = '-1'): bool`  

- `add_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `add_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `add_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `set_attribute_by_number(int $number, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `set_attribute_by_name(string $name, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `set_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `set_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `set_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool`  

- `remove_attribute_by_number(int $number, string $name_atr, string $frame = '-1'): bool`  

- `remove_attribute_by_name(string $name, string $name_atr, string $frame = '-1'): bool`  

- `remove_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $frame = '-1'): bool`  

- `remove_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $frame = '-1'): bool`  

- `remove_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame = '-1'): bool`  

- `screenshot_by_number(string $file_path, int $number, string $frame = '-1', bool $as_gray = false): bool`  

- `screenshot_by_name(string $file_path, string $name, string $frame = '-1', bool $as_gray = false): bool`  

- `screenshot_by_src(string $file_path, string $src, bool $exactly = true, string $frame = '-1', bool $as_gray = false): bool`  

- `screenshot_by_attribute(string $file_path, string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1', bool $as_gray = false): bool`  

- `is_exist_by_number(int $number, string $frame = '-1'): bool`  

- `is_exist_by_name(string $name, string $frame = '-1'): bool`  

- `is_exist_by_id(string $id, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_href(string $href, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_alt(string $alt, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_src(string $src, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `is_exist_by_xpath(string $xpath): bool`  

- `is_exist_by_attribute_by_form_number(string $atr_name, string $atr_value, bool $exactly, int $form_number, string $frame = '-1'): bool`  

- `is_exist_by_attribute_by_form_name(string $atr_name, string $atr_value, bool $exactly, string $form_name, string $frame = '-1'): bool`  

- `get_number_by_name(string $name, string $frame = '-1'): int`  

- `get_number_by_id(string $id, string $frame = '-1'): int`  

- `get_number_by_src(string $src, bool $exactly = true, string $frame = '-1'): int`  

- `get_number_by_href(string $href, bool $exactly = true, string $frame = '-1'): int`  

- `get_number_by_inner_text(string $innertext, bool $exactly = true, string $frame = '-1'): int`  

- `get_number_by_inner_html(string $innerhtml, bool $exactly = true, string $frame = '-1'): int`  

- `get_number_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1'): int`  

- `get_name_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_attribute_by_number(int $number, string $name_atr, string $frame = '-1'): string|bool`  

- `get_attribute_by_name(string $name, string $name_atr, string $frame = '-1'): string|bool`  

- `get_attribute_by_src(string $src, bool $exactly, string $name_atr, string $frame = '-1'): string|bool`  

- `get_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $frame = '-1'): string|bool`  

- `get_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $frame = '-1'): string`  

- `get_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame = '-1'): string|bool`  

- `get_value_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_value_by_name(string $name, string $frame = '-1'): string|bool`  

- `get_value_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1'): string|bool`  

- `get_src_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_src_by_name(string $name, string $frame = '-1'): string|bool`  

- `get_alt_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_alt_by_name(string $name, string $frame = '-1'): string|bool`  

- `get_href_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_href_by_name(string $name, string $frame = '-1'): string|bool`  

- `get_href_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): string|bool`  

- `get_inner_text_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_inner_text_by_name(string $name, string $frame = '-1'): string|bool`  

- `get_inner_text_by_id(string $id, string $frame = '-1'): string|bool`  

- `get_inner_text_by_href(string $href, bool $exactly = true, string $frame = '-1'): string|bool`  

- `get_inner_text_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): string|bool`  

- `get_inner_html_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_inner_html_by_name(string $name, string $frame = '-1'): string|bool`  

- `get_inner_html_by_id(string $id, string $frame = '-1'): string`  

- `get_inner_html_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): string|bool`  

- `is_disabled_by_number(int $number, string $frame = '-1'): bool`  

- `is_disabled_by_name(string $name, string $frame = '-1'): bool`  

- `get_all_attributes_by_number(int $number, string $frame = '-1'): string`  

- `get_all_attributes_by_name(string $name, string $frame = '-1'): string`  

- `get_all_attributes_by_src(string $src, bool $exactly = true, string $frame = '-1'): string`  

- `get_all_attributes_values_by_number(int $number, string $frame = '-1'): string`  

- `get_all_attributes_values_by_name(string $name, string $frame = '-1'): string`  

- `get_all_attributes_values_by_src(string $src, bool $exactly = true, string $frame = '-1'): string`  

- `get_all_events_by_number(int $number, string $frame = '-1'): string`  

- `get_all_events_by_name(string $name, string $frame = '-1'): string`  

- `get_all_events_by_src(string $src, bool $exactly = true, string $frame = '-1'): string`  

- `get_numbers_child_by_number(int $number, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string`  

- `get_numbers_child_by_name(string $name, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string`  

- `get_numbers_child_by_id(string $id, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string`  

- `get_numbers_child_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string`  

- `get_x_by_number(int $number, string $frame = '-1'): int`  

- `get_x_by_name(string $name, string $frame = '-1'): int`  

- `get_x_by_href(string $href, bool $exactly = true, string $frame = '-1'): int`  

- `get_x_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): int`  

- `get_x_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): int`  

- `get_x_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int`  

- `get_y_by_number(int $number, string $frame = '-1'): int`  

- `get_y_by_name(string $name, string $frame = '-1'): int`  

- `get_y_by_href(string $href, bool $exactly = true, string $frame = '-1'): int`  

- `get_y_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): int`  

- `get_y_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): int`  

- `get_y_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int`  

- `get_width_by_number(int $number, string $frame = '-1'): int`  

- `get_width_by_name(string $name, string $frame = '-1'): int`  

- `get_width_by_src(string $src, bool $exactly = true, string $frame = '-1'): int`  

- `get_width_by_href(string $href, bool $exactly = true, string $frame = '-1'): int`  

- `get_width_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int`  

- `get_height_by_number(int $number, string $frame = '-1'): int`  

- `get_height_by_name(string $name, string $frame = '-1'): int`  

- `get_height_by_src(string $src, bool $exactly = true, string $frame = '-1'): int`  

- `get_height_by_href(string $href, bool $exactly = true, string $frame = '-1'): int`  

- `get_height_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int`  

- `send_keyboard_input_by_number(int $number, string $string, string $timeout = '0:2', string $frame = '-1'): bool`  

- `send_keyboard_input_by_name(string $name, string $string, string $timeout = '0:2', string $frame = '-1'): bool`  

- `send_keyboard_input_by_inner_text(string $inner_text, bool $exactly, string $string, string $timeout = '0:2', string $frame = '-1'): bool`  

- `send_keyboard_input_by_inner_html(string $inner_html, bool $exactly, string $string, string $timeout = '0:2', string $frame = '-1'): bool`  

- `send_keyboard_input_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $string, string $timeout = '0:2', string $frame = '-1'): bool`  

- `get_count(string $frame = '-1'): int`  

- `get_count_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int`  

- `get_all_numbers_by_inner_text(string $text, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_numbers_by_inner_html(string $html, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_numbers_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_inner_texts(string $separator = '<br>', string $text_filter = '', string $frame = '-1'): string`  

- `get_all_inner_texts_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_inner_htmls_by_inner_text(string $text, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_inner_htmls_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_attributes_by_inner_text(string $attr_name_need, string $text, bool $exactly = false, string $frame = '-1'): array`  

- `get_all_attributes_by_attribute(string $attr_name_need, string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array`  

- `get_by_number(int $number, string $frame = '-1'): XHEInterface`  

- `get_by_name(string $name, string $frame = '-1'): XHEInterface`  

- `get_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_outer_text(string $outer_text, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_outer_html(string $outer_html, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_id(string $id, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_src(string $src, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_class(string $class, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_href(string $href, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_alt(string $alt, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_value(string $value, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): XHEInterface`  

- `get_by_properties(string $properties, string $frame = '-1'): XHEInterface`  

- `get_by_xpath(string $xpath): XHEInterface`  

- `get_all(string $frame = '-1'): XHEInterfaces`  

- `get_all_by_number(string $numbers, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_inner_text(string $inner_text, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_inner_html(string $inner_html, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_outer_text(string $outer_text, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_outer_html(string $outer_html, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_name(string $name, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_id(string $id, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_class(string $class, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_src(string $src, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_href(string $href, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_alt(string $alt, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_value(string $value, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_xpath(string $xpath): XHEInterfaces`  

- `get_all_by_properties(string $properties, string $frame = '-1'): XHEInterfaces`  

- `run_js_by_number(int $number, string $js, string $frame = '-1'): string`  

- `run_js_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $js, string $frame = '-1'): string`  

---

### `XHEBaseCaptcha_1` — Базовый класс для классов которые работают с API сервисами по распознаванию каптч

**Методы**:
- `getBaseUrl(): string`  

- `get_last_capcha_id(): string`  

- `get_last_capcha_filename(): string`  

- `get_last_capcha_result(): string`  

- `__construct(string $server, int $soft_id = 0, bool $is_ssl = true): void`  

- `call(string $command): string`  

- `set_default_params(): bool`  

- `recognize_image(string $filename): false|string`  

- `report_bug_capcha(string $key, string $id): string`  

- `recognize(string $filename, string $apikey, string $path = '', bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, int $is_phrase = 0, int $is_regsense = 0, int $is_numeric = 0, int $min_len = 0, int $max_len = 0, int $language = 0, int $is_question = 0, int $is_calc = 0, string $instructions = '', string $textcaptcha = '', int $id_constructor = 0, int $is_invoice = 0, int $is_recaptcha = 0, string $textinstructions = '', string $imginstructions = '', int $coordinatescaptcha = 0, string $method = '', int $angle = 0, string $file_1 = '', string $file_2 = '', string $file_3 = '', int $is_audio_recaptcha = 0, int $is_solveaudio = 0): false|string`  

- `get_result(string $apikey, string $path, string $task_id, bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, int $is_invoice = 0): false|string`  

- `recognize_userrecaptcha(string $apikey, string $path, string $pageurl, string $googlekey, int $invisible = 0, string $proxy = '', string $proxytype = '', string $method = 'userrecaptcha'): bool|string`  

- `recognize_geetest_captcha(string $apikey, string $path, string $pageurl, string $gt, string $challenge, string $api_server = '', string $proxy = '', string $proxytype = '', string $method = 'geetest'): false|string`  

---

### `XHEBaseSMS` — API SMS service

**Методы**:
- `__construct(string $api = '', string $servis = 'https://api.sms-activate.ae', string $ref = ''): void`  

- `change_service(string $api, string $servis, string $ref): void`  

- `get_numbers_status(int $country = 0, string $operator = 'any'): false|string`  

- `get_balance(): false|string`  

- `get_phone_number(string $service = 'ot', string $operator = 'any', int $country = 0): bool`  

- `get_code(int $wt = 10, int $timeout = 10): bool`  

- `set_status(int $status = 6): bool`  

---

### `XHEAnchor` — For handling DOM anchor elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_all_hrefs(string $separator = '<br>', string $frame = '-1'): string`  
  **Примеры**:
  ```php
  DOM::$anchor->get_all_hrefs(';', -1)
  ```

- `get_all_hrefs_by_inner_text(string $inner_text, string $separator = '<br>', string $frame = '-1'): string`  
  **Примеры**:
  ```php
  DOM::$anchor->get_all_hrefs_by_inner_text('search text', ';', -1)
  ```

- `get_all_hrefs_by_inner_text_2(string $inner_text, bool $exactly = true, string $separator = '<br>', string $frame = '-1'): string`  

- `get_all_hrefs_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $separator = '<br>', string $frame = '-1'): string`  

- `get_all_inner_texts_by_href(string $href, string $separator = '<br>', bool $exactly = true, string $frame = '-1'): string`  

- `get_all_external_inner_texts_and_hrefs(string $href, bool $navigate = false, string $separator = '<br>', string $frame = '-1'): string`  

- `get_all_internal_inner_texts_and_hrefs(string $href, bool $navigate = false, string $separator = '<br>', string $frame = '-1'): string`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `is_exist_with_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `is_exist_with_attribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `is_exist_with_name(string $name): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `is_exist_with_inner_text(string $text, bool $exactly = true): bool`  

- `is_exist_with_href(string $href, bool $exactly = true): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `remove_atribute_by_name(string $name, string $name_atr): bool`  

- `remove_atribute_by_number(int $number, string $name_atr): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `add_atribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr): bool`  

- `add_atribute_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr): bool`  

- `get_number_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): int`  

- `set_focus_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): bool`  

- `is_exist_with_atribute_in_frame_by_number(string $atr_name, string $atr_value, bool $exactly, string $frame_number): bool`  

- `remove_atribute_by_name_in_frame(string $name, string $name_atr, string $frame_number): bool`  

- `remove_atribute_by_number_in_frame(int $number, string $name_atr, string $frame_number): bool`  

- `remove_atribute_by_attribute_in_frame_by_number(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame_number): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `is_exist_by_atribute_in_frame(string $atr_name, string $atr_value, string $frame, bool $exactly = true): bool`  

- `get_all_urls(string $separator = '<br>'): string`  

- `get_all_urls_by_inner_text(string $inner_text, string $separator = '<br>'): string`  

- `get_all_urls_in_frame(string $frame, string $separator = '<br>'): string`  

- `get_all_urls_by_inner_text_in_frame(string $inner_text, string $frame, string $separator = '<br>'): string`  

- `get_all_external_texts_and_url(string $url, bool $navigate = false, string $separator = '<br>'): string`  

- `get_all_external_texts_and_url_in_frame(string $url, string $frame, string $separator = '<br>'): string`  

- `click_within_iframe_by_name(string $name, string $frame): bool`  

- `click_within_iframe_by_number(int $number, string $frame): bool`  

- `click_within_iframe_by_inner_text(string $text, bool $exactly, string $frame): bool`  

- `click_within_iframe_by_href(string $url, mixed $exactly, string $frame): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `remove_attribute_by_attribute_in_frame_by_number(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame_number): bool`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_by_name_in_frame(string $name, string $frame): bool`  

- `click_by_name_in_frame(string $name, string $frame): bool`  

- `add_attribute_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_by_number_in_frame(int $number, string $frame): bool`  

- `click_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_by_href_in_frame(string $url, mixed $exactly, string $frame): bool`  

- `click_by_inner_text_in_frame(string $text, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `send_event_by_href_in_frame(string $url, bool $exactly, string $event, string $frame): bool`  

- `send_event_by_atribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool`  

- `send_event_by_attribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `remove_attribute_by_name_in_frame(string $name, string $name_atr, string $frame_number): bool`  

- `remove_attribute_by_number_in_frame(int $number, string $name_atr, string $frame_number): bool`  

- `remove_attribute_by_attribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame_number): bool`  

- `is_exist_by_inner_text_in_frame(string $text, string $frame, bool $exactly = true): bool`  

- `is_exist_by_href_in_frame(string $href, string $frame, bool $exactly = true): bool`  

- `is_exist_by_attribute_in_frame(string $atr_name, string $atr_value, string $frame, bool $exactly = true): bool`  

- `get_attribute_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_all_inner_texts_in_frame(string $frame, string $separator = '<br>'): string`  

- `get_all_hrefs_in_frame(string $frame, string $separator = '<br>'): string`  

- `get_all_hrefs_by_inner_text_in_frame(string $inner_text, string $frame, string $separator = '<br>'): string`  

- `get_all_external_inner_texts_and_hrefs_in_frame(string $url, string $frame, bool $navigate = false, string $separator = '<br>'): string`  

---

### `XHEB` — For handling DOM elements tag <b> in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEBlockquote` — For handling Blockquote DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEBody` — For handling body DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `disable_onunload_message(string $frame = '-1'): bool`  

- `set_text_within_iframe_by_name(string $name, string $text, string $framenum): bool`  

- `set_text_within_iframe_by_number(int $number, string $text, string $framenum): bool`  

- `get_text_within_iframe_by_name(string $name, string $framenum): string`  

- `get_text_within_iframe_by_number(int $number, string $framenum): string`  

- `set_text_by_name(string $name, string $text, string $frame = '-1'): bool`  

- `set_text_by_number(int $number, string $text, string $frame = '-1'): bool`  

- `get_text_by_name(string $name, string $frame = '-1'): string`  

- `get_text_by_number(int $number, string $frame = '-1'): string`  

---

### `XHEButton` — For handling button DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_count_within_iframe_by_number(string $number): int`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_name(string $name, string $frame): bool`  

- `click_within_iframe_by_number(int $number, string $frame): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_inner_text(string $text, bool $exactly = true): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `is_exist_with_inner_text_in_frame_by_number(string $text, bool $exactly, string $frame_num): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHECanvas` — For handling canvas DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `draw_image_by_number(int $number, string $path, string $frame = '-1'): bool`  

---

### `XHECheckButton` — For handling checkbutton DOM elements  in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_all(string $frame = '-1'): bool`  

- `check_by_number(int $number, bool $check, string $frame = '-1'): bool`  

- `check_by_name(string $name, bool $check, string $frame = '-1'): bool`  

- `check_by_value(string $value, bool $exactly, bool $check, string $frame = '-1'): bool`  

- `check_by_attribute(string $attr_name, string $attr_value, bool $exactly, bool $check, string $frame = '-1'): bool`  

- `check_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, bool $check, int $form_number, string $frame = '-1'): bool`  

- `check_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, bool $check, string $form_name, string $frame = '-1'): bool`  

- `check_all(bool $check = true, string $frame = '-1'): bool`  

- `is_check_by_name(string $name, string $frame = '-1'): bool`  

- `is_check_by_number(int $number, string $frame = '-1'): bool`  

- `is_check_by_value(string $value, bool $exactly = true, string $frame = '-1'): bool`  

- `is_check_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `set_checked_by_name(string $name, bool $check): bool`  

- `set_checked_by_number(int $number, bool $check): bool`  

- `set_checked_by_value(string $value, bool $check): bool`  

- `set_all_checked(bool $check): bool`  

- `is_checked_by_name(string $name): bool`  

- `is_checked_by_number(int $number): bool`  

- `is_checked_by_value(string $value): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHECode` — For handling code DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEDiv` — For handling div DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEElement` — For handling DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_tag_by_number(int $number, string $frame = '-1'): string`  

- `get_x_by_tag_by_number(string $tag, int $number, string $frame = '-1'): int`  

- `get_y_by_tag_by_number(string $tag, int $number, string $frame = '-1'): int`  

- `get_all_by_tag(string $tag, string $frame = '-1'): XHEInterfaces`  

- `convert_number(int $number, string $object_name, string $frame = '-1'): int`  

- `get_by_query_selector(string $selector, string $frame = '-1'): XHEInterface`  

- `get_all_by_query_selector(string $selector, string $frame = '-1'): XHEInterfaces`  

- `get_by_js(string $js, string $add_file = '', string $frame = '-1'): XHEInterface`  

- `get_all_by_js(string $js, string $add_file = '', string $frame = '-1'): XHEInterfaces`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_element_value_by_name(string $name, string $frame = '-1'): string`  

- `get_element_innerText_by_name(string $name, string $frame = '-1'): string`  

- `get_element_innerHtml_by_name(string $name, string $frame = '-1'): string`  

- `get_element_innerText_by_number(int $number, string $frame = '-1'): string`  

- `get_element_innerHtml_by_number(int $number, string $frame = '-1'): string`  

- `get_element_innerText_by_id(string $id, string $frame = '-1'): string`  

- `get_element_innerHtml_by_id(string $id, string $frame = '-1'): string`  

- `get_element_attribute_by_name(string $name, string $attribute, string $frame = '-1'): string`  

- `get_element_attribute_by_number(int $number, string $attribute, string $frame = '-1'): string`  

- `is_exist_with_name(string $name): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `set_element_attribute_by_name(string $name, string $attribute, string $value): bool`  

- `set_element_value_by_name(string $name, string $text): bool`  

- `click_on_element_by_name(string $name): bool`  

- `click_on_element_by_number(int $number): bool`  

- `click_on_element_by_inner_text(string $inner_text, bool $exactly = true): bool`  

- `get_left_offset_on_page_by_att(string $name_attr, string $value_attr, bool $exactly = true, string $frame = '-1'): int`  

- `get_top_offset_on_page_by_att(string $name_attr, string $value_attr, bool $exactly = true, string $frame = '-1'): int`  

- `get_left_offset_on_page_by_name(string $name): int`  

- `get_top_offset_on_page_by_name(string $name): int`  

- `get_left_offset_on_page_by_href(string $href, bool $exactly = false): int`  

- `get_top_offset_on_page_by_href(string $href, bool $exactly = false): int`  

- `get_left_offset_on_page_by_tag_by_number(string $tag, int $number): int`  

- `get_top_offset_on_page_by_tag_by_number(string $tag, int $number): int`  

- `click_on_element_by_name_withiniframe(string $name, string $frame): bool`  

- `click_on_element_by_inner_text_withiniframe(string $inner_text, string $frame, bool $exactly): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `send_event_by_href_in_frame(string $url, bool $exactly, string $event, string $frame): bool`  

- `send_event_by_atribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool`  

- `send_event_by_attribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool`  

- `get_count_within_iframe_by_number(string $number): int`  

- `set_text_html_by_attribute(string $attr_name, string $attr_value, string $html, bool $exactly = true, string $frame = '-1'): bool`  

- `set_inner_html_by_atribute(string $attr_name, string $attr_value, string $html, bool $exactly = true, string $frame = '-1'): bool`  

- `set_inner_text_by_atribute(string $attr_name, string $attr_value, string $text, bool $exactly = true, string $frame = '-1'): bool`  

---

### `XHEEmbed` — For handling embed DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_in_by_number(int $number, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

- `click_in_by_name(string $name, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

- `click_in_by_src(string $src, bool $exactly = true, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

- `click_in_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

---

### `XHEFlash` — For flash anchor DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_version_by_number(int $number, string $frame = '-1'): void`  

- `get_ready_state_by_number(int $number, string $frame = '-1'): void`  

- `is_playing_by_number(int $number, string $frame = '-1'): bool`  

- `play_by_number(int $number, string $frame = '-1'): bool`  

- `forward_by_number(int $number, string $frame = '-1'): bool`  

- `back_by_number(int $number, string $frame = '-1'): bool`  

- `stop_by_number(int $number, string $frame = '-1'): bool`  

- `go_to_frame_by_number(mixed $frame_number, int $number, string $frame = '-1'): bool`  

- `get_current_frame_by_number(int $number, string $frame = '-1'): void`  

- `get_frame_count_by_number(int $number, string $frame = '-1'): void`  

- `get_background_color_by_number(int $number, string $frame = '-1'): void`  

- `set_background_color_by_number(mixed $color, int $number, string $frame = '-1'): bool`  

- `get_movie_by_number(int $number, string $frame = '-1'): void`  

- `set_movie_by_number(mixed $path, int $number, string $frame = '-1'): bool`  

- `get_current_label_by_number(mixed $time, int $number, string $frame = '-1'): void`  

- `call_label_by_number(mixed $label, mixed $time, int $number, string $frame = '-1'): bool`  

- `call_frame_by_number(mixed $frame_number, mixed $time, int $number, string $frame = '-1'): bool`  

- `get_variable_by_number(mixed $name, int $number, string $frame = '-1'): void`  

- `set_variable_by_number(mixed $name, mixed $value, int $number, string $frame = '-1'): bool`  

---

### `XHEFooter` — For handling footer DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEForm` — For handling form DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `submit_by_number(int $number, string $frame = '-1'): bool`  

- `submit_by_name(string $name, string $frame = '-1'): bool`  

- `submit_by_id(string $id, string $frame = '-1'): bool`  

- `submit_by_action(string $action, bool $exactly = true, string $frame = '-1'): bool`  

- `submit_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `reset_by_number(int $number, string $frame = '-1'): bool`  

- `reset_by_name(string $name, string $frame = '-1'): bool`  

- `get_action_by_number(int $number, string $frame = '-1'): string`  

- `get_action_by_name(string $name, string $frame = '-1'): string`  

- `get_action_by_id(string $id, string $frame = '-1'): string`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_content_by_name(string $name, bool $as_html, string $frame = '-1'): string`  

- `get_content_by_id(string $id, bool $as_html, string $frame = '-1'): string`  

- `get_content_by_number(int $number, bool $as_html, string $frame = '-1'): string`  

- `get_all_elements_by_name(string $name, string $element_type = '', string $frame = '-1'): string`  

- `get_all_elements_by_id(string $id, string $element_type = '', string $frame = '-1'): string`  

- `get_all_elements_by_number(int $number, string $element_type = '', string $frame = '-1'): string`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

---

### `XHEFrame` — For handling frame DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_body_by_number(int $number, bool $as_html, string $frame = '-1'): string`  

- `set_body_by_number(int $number, string $html_body, string $frame = '-1'): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_all_elements_by_number(int $number, string $frame = '-1'): string`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHEH` — For handling h (header) DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, int $number, string $password = ''): void`  

---

### `XHEHead` — For handling head DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEHeader` — For handling header DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEHiddenInput` — For handling hiddeninput DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEHtml` — For handling HTML DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEI` — For handling i DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEImage` — For handling image DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `show_by_number(int $number, string $frame = '-1'): bool`  

- `show_by_name(string $name, string $frame = '-1'): bool`  

- `show_by_src(string $src, bool $exactly = true, string $frame = '-1'): bool`  

- `show_by_alt(string $alt, bool $exactly = true, string $frame = '-1'): bool`  

- `show_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `is_complete_by_number(int $number, string $frame = '-1'): bool`  

- `is_complete_by_name(string $name, string $frame = '-1'): bool`  

- `get_file_create_date_by_number(int $number, string $frame = '-1'): string`  

- `get_file_create_date_by_name(string $name, string $frame = '-1'): string`  

- `get_file_modification_date_by_number(int $number, string $frame = '-1'): string`  

- `get_file_modification_date_by_name(string $name, string $frame = '-1'): string`  

- `get_file_size_by_number(int $number, string $frame = '-1'): int`  

- `get_file_size_by_name(string $name, string $frame = '-1'): int`  

- `recognize_captcha(string $file_path, int $type): string`  

- `recognize_by_anticaptcha(string $src, string $file_path, string $key, string $path = 'https://anti-captcha.com', bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, bool $is_phrase = false, bool $is_regsense = false, bool $is_numeric = false, int $min_len = 0, int $max_len = 0, string $frame = '-1', int $is_russian = 0): string`  

- `recognize_by_rucaptcha(string $src, string $file_path, string $key, string $path = 'http://rucaptcha.com', bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, bool $is_phrase = false, bool $is_regsense = false, bool $is_numeric = false, int $min_len = 0, int $max_len = 0, string $frame = '-1', int $is_russian = 0): string`  

- `recognize_by_bypasscaptcha(string $systemkey, string $file_path, string $src = '', string $frame = '-1'): string`  

- `get_image(string $src_path, string $image_path, int $x, int $y, int $width, int $height): bool`  

- `get_x_of_image(string $src_path, string $image_path, float $koeff = 0.95): int`  

- `get_y_of_image(string $src_path, string $image_path, float $koeff = 0.95): int`  

- `get_pos_of_image(string $src_path, string $image_path, float $koeff = 0.95): XHEPosition`  

- `get_all_pos_of_image(string $src_path, string $image_path, float $koeff = 0.95): array`  

- `add_image(string $src_path, string $image_path, string $side = 'right'): bool`  

- `create_median_image_by_folder_of_images(string $image_path, string $folder): bool`  

- `save_as_gray(string $inpath, string $outpath): bool`  

- `save_as_blackhat(string $inpath, string $outpath): bool`  

- `resize(string $inpath, string $outpath, float $scale, int $scaleType = 1): bool`  

- `invert(string $inpath, string $outpath): bool`  

- `remove_noise(string $inpath, string $outpath, int $kernel_size = 3): bool`  

- `get_mrz_image(string $inpath, string $outpath): bool`  

- `fix_skew_text(string $inpath, string $outpath): bool`  

- `parse_mrz(string $mrz, string $mrz_type = 'PNRUS'): false|\stdClass`  

- `preprocess_for_ocr(string $inpath, string $outpath, int $image_size = 1800, int $binary_treshhold = 180, bool $need_deskew = true): bool`  

- `convert(string $inpath, string $outpath): bool`  

- `unborder(string $inpath, string $outpath, int $struct_x = 220, int $struct_y = 20, int $smooth_xy = 3): bool`  

- `get_rotated_angle(string $inpath, int $min = -8, int $max = 8, int $step = 1): int`  

- `rotate(string $inpath, string $outpath, int $angle, float $center_x = -1, float $center_y = -1): bool`  

- `rewidth(string $inpath, string $outpath, int $width): bool`  

- `get_qr_code(string $inpath, string $outpath): bool`  

- `recognize_qr_code(string $path): string`  

- `create_qr_code(string $path, string $text, int $width = 300, int $height = 300): bool`  

- `remove_lines(string $inpath, string $outpath, bool $is_remove_h = true, bool $is_remove_v = true, int $struct_h = 50, int $struct_v = 50, int $thickness = 5): bool`  

- `get_lines(string $path, bool $is_h = true, bool $is_v = true, int $struct_h = 50, int $struct_v = 50, bool $is_draw = false): mixed|null`  

- `filter_by_color(string $inpath, string $outpath, string $min_color, string $max_color): bool`  

- `get_dpi(string $path, bool $is_horizontal = true, bool $in_pixels = false): string`  

- `is_complete(int $number): bool`  

- `get_href_by_name(string $name, string $frame = '-1'): string`  

- `get_href_by_number(int $number, string $frame = '-1'): string`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): bool`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `save_to_file_by_number(int $number, string $file_path): bool`  

- `save_to_file_by_name(string $name, string $file_path): bool`  

- `save_to_file_by_url(string $url, string $file_path, bool $exactly = true): bool`  

- `save_to_file_by_number_withinIframe_number(int $number, string $file_path, string $framenum): bool`  

- `save_to_file_by_name_withinIframe_number(string $name, string $file_path, string $framenum): bool`  

- `save_to_file_by_url_withinIframe_number(string $url, string $file_path, string $framenum, bool $exactly = true): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `recognize_captcha_by_url(mixed $url, mixed $exactly, mixed $login, mixed $password): void`  

---

### `XHEInput` — For handling input DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_alt_text_by_name(string $name): string`  

- `get_alt_text_by_number(int $number): string`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `is_exist_within_iframe_with_name(string $name, string $frame): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `set_value_within_iframe_by_name(string $name, string $value, string $frame): bool`  

- `set_value_within_iframe_by_number(int $number, string $value, string $frame): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHEInputButton` — For handling input type button DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_name(string $name, string $frame): bool`  

- `click_within_iframe_by_number(int $number, string $frame): bool`  

- `click_within_iframe_num_by_name(string $name, string $frame): bool`  

- `click_within_iframe_num_by_number(int $number, string $frame): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_inner_text(string $text, bool $exactly = true): bool`  

- `is_exist_with_inner_text_in_frame_by_number(string $text, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_all_inner_texts_in_frame_by_number(string $frame_num, string $separator = '<br>'): string`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHEInputFile` — For handling input type file DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(int $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `set_value_by_name_by_frame_num(string $name, string $value, string $framenum): bool`  

- `set_value_by_number_by_frame_num(int $number, string $value, string $framenum): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHEInputImage` — For handling input type image DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_name(string $name, string $frame): bool`  

- `click_within_iframe_by_number(int $number, string $frame): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `save_to_file_by_number(int $number, string $file_path): bool`  

- `save_to_file_by_name(string $name, string $file_path): bool`  

- `save_to_file_by_attribute(string $atr_name, string $atr_value, string $file_path, bool $exactly = true): bool`  

- `save_to_file_by_atribute(string $atr_name, string $atr_value, string $file_path, bool $exactly = true): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHEInterface` — For handling DOM elements as interface in current loaded HTML page

**Методы**:
- `__construct(int $inner_number, string $server, string $password = ''): void`  

- `__destruct(): void`  

- `__toString(): string`  

- `get_clone(): XHEInterface`  

- `meta_click(bool $wait_browser = true): bool`  

- `click(bool $wait_browser = true): bool`  
  **Примеры**:
  ```php
  $objInterface->click();
  ```

- `event(string $event, bool $wait_browser = true): bool`  
  **Примеры**:
  ```php
  $objInterface->event('onchange');
  ```

- `focus(): bool`  
  **Примеры**:
  ```php
  $objInterface->focus()
  ```

- `scroll_to_view(string $start, bool $smooth = false): bool`  

- `scroll(string $scroll_action): bool`  

- `check(bool $needCheck = true): bool`  
  **Примеры**:
  ```php
  $objInterface->check(true);
  ```

- `select_index(int $index): bool`  

- `select_text(string $text, bool $exactly = true): bool`  

- `select_value(string $value, bool $exactly = true): bool`  
  **Примеры**:
  ```php
  $objInterface->select_value('Europe');
  ```

- `select_random(): bool`  

- `multi_select_indexes(string $indexes): bool`  

- `multi_select_values(string $values): bool`  

- `multi_select_texts(string $texts): bool`  

- `get_length(): int`  

- `get_selected_index(): int`  

- `get_selected_text(): string`  

- `seek_to_end(): bool`  

- `seek_to_pos(int $pos): bool`  

- `set_value(string $value): bool`  

- `set_inner_text(string $inner_text): bool`  

- `set_inner_html(string $inner_html): bool`  

- `add_attribute(string $name_atr, string $value_atr): bool`  

- `set_attribute(string $name_atr, string $value_atr): bool`  

- `remove_attribute(string $name_atr): bool`  

- `screenshot(string $file_path, bool $as_gray = false): bool`  

- `save(string $file_path): bool`  

- `run_js(string $js): mixed`  

- `get_tag(): string`  

- `get_type(): string`  

- `get_name(): string`  

- `get_id(): string`  

- `get_number(string $object_name = ''): int`  

- `get_inner_text(): string`  

- `get_inner_html(): string`  

- `get_outer_text(): string`  

- `get_outer_html(): string`  

- `get_computed_style(string $style_name = '', string $pseudo = ''): string`  

- `get_value(): string`  

- `get_href(): string`  

- `get_src(): string`  

- `get_alt(): string`  

- `get_attribute(string $name_atr): string`  

- `get_frame_number(): string`  

- `get_form_number(): int`  

- `get_all_attributes(): string`  

- `get_all_attributes_values(): string`  

- `get_all_events(): string`  

- `is_disabled(): bool`  

- `is_checked(): bool`  

- `is_exist(): bool`  

- `is_visibled(): bool`  

- `is_view_now(): bool`  

- `ensure_visible(bool $smooth = false, string $side = 'start'): bool`  

- `get_numbers_child(string $element_type = '', bool $include_subchildren = false): string`  

- `get_x(bool $in_view = false): int`  

- `get_y(bool $in_view = false): int`  

- `get_width(): int`  

- `get_height(): int`  

- `get_xpath(): string`  

- `get_parents_count(): int`  

- `get_all_parents(): XHEInterfaces`  

- `get_parent(int $level = 1): XHEInterface`  

- `get_parent_by_attribute(string $atr_name, string $atr_value, bool $exactly = true): XHEInterface`  

- `get_next(): XHEInterface`  

- `get_prev(): XHEInterface`  

- `add_child(string $tag, string $inner_html): bool`  

- `insert_before(string $tag, string $inner_html): bool`  

- `remove(): bool`  

- `get_child_count(bool $include_subchildren = false): int`  

- `get_child_by_number(int $number, bool $include_subchildren = false): XHEInterface`  

- `get_shadow_root(): XHEInterface`  

- `get_child_by_inner_text(string $inner_text, bool $exactly = false, bool $include_subchildren = false): XHEInterface`  

- `get_child_by_inner_html(string $inner_html, bool $exactly = false, bool $include_subchildren = false): XHEInterface`  

- `get_child_by_outer_text(string $outer_text, bool $exactly = false, bool $include_subchildren = false): XHEInterface`  

- `get_child_by_outer_html(string $outer_html, bool $exactly = false, bool $include_subchildren = false): XHEInterface`  

- `get_child_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, bool $include_subchildren = false): XHEInterface`  

- `get_child_by_xpath(string $xpath): XHEInterface`  

- `get_all_child_by_xpath(string $xpath): XHEInterfaces`  

- `get_all_child_by_inner_text(string $inner_text, bool $exactly = false, bool $include_subchildren = false): XHEInterfaces`  

- `get_all_child_by_inner_html(string $inner_html, bool $exactly = false, bool $include_subchildren = false): XHEInterfaces`  

- `get_all_child_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, bool $include_subchildren = false): XHEInterfaces`  

- `mouse_move_to(int $dx = -1, int $dy = -1, string $type_ = 'curve', int $time_ = 1000): bool`  

- `mouse_move(int $dx = -1, int $dy = -1, int $time = 0, int $tremble = 0): bool`  

- `mouse_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_double_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_left_down(int $dx = -1, int $dy = -1): bool`  

- `mouse_left_up(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_down(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_up(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_move_to(int $dx = -1, int $dy = -1, string $type_ = 'curve', int $time_ = 1000): bool`  

- `send_touch(int $id, int $touch_type, int $dx = -1, int $dy = -1, int $radiusX = 0, int $radiusY = 0, float $rotationAngle = 0, float $pressure = 0, int $modiefiers = 0, int $pointerType = 0): bool`  

- `send_mouse_move(int $dx = -1, int $dy = -1, int $time = 0, int $tremble = 0, string $buttons = ''): bool`  

- `send_mouse_click(int $dx = -1, int $dy = -1, bool $addCtrl = false): bool`  

- `send_mouse_double_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_left_down(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_left_up(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_down(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_up(int $dx = -1, int $dy = -1): bool`  

- `send_input(string $string, string $timeout = '0:2', bool $inFlash = false, bool $auto_change = true): bool`  

- `send_key(string $key, bool $is_key = false): bool`  

- `send_key_down(string $key, bool $is_key = false): bool`  

- `send_key_up(string $key, bool $is_key = false): bool`  

- `input(string $_string, string $timeout = '0:2', bool $inFlash = false, bool $auto_change = true): bool`  

- `key(string $code): bool`  

- `key_down(string $key): bool`  

- `key_up(string $key): bool`  

- `press_key_by_code(string $code): bool`  

---

### `XHEInterfaces` — A collection class for working with Interface DOM elements

**Методы**:
- `__construct(string $inner_numbers, string $server, string $password = ''): void`  

- `get_by_xxx(string $xxx, string $condition, bool $exactly): false|mixed`  

- `get_by_name(string $name, bool $exactly = true): false|\XHEInterface`  

- `get_by_id(string $id, bool $exactly = true): false|\XHEInterface`  

- `get_by_inner_text(string $inner_text, bool $exactly = true): false|\XHEInterface`  

- `get_by_inner_html(string $inner_html, bool $exactly = true): false|\XHEInterface`  

- `get_by_outer_text(string $outer_text, bool $exactly = true): false|\XHEInterface`  

- `get_by_outer_html(string $outer_html, bool $exactly = true): false|\XHEInterface`  

- `get_by_src(string $src, bool $exactly = true): false|\XHEInterface`  

- `get_by_href(string $href, bool $exactly = true): false|\XHEInterface`  

- `get_by_alt(string $alt, bool $exactly = true): false|\XHEInterface`  

- `get_by_value(string $value, bool $exactly = true): false|\XHEInterface`  

- `get_by_attribute(string $attr_name, string $attr_value, bool $exactly = true): false|\XHEInterface`  

- `get_all_by_xxx(string $xxx, string $condition, bool $exactly): XHEInterfaces`  

- `get_all_by_name(string $name, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_id(string $id, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_inner_text(string $inner_text, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_inner_html(string $inner_html, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_src(string $src, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_href(string $href, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_alt(string $alt, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_value(string $value, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

- `get_all_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): XHEInterfaces`  

---

### `XHELabel` — For handling label DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHELi` — For handling li DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEMeta` — For handling meta DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEObject` — Base class for handling object DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_in_by_number(int $number, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

- `click_in_by_name(string $name, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

- `click_in_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, int $x = -1, int $y = -1, string $frame = '-1'): bool`  

---

### `XHEOption` — For handling option DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEP` — For handling p DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEPre` — For handling pre DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHERadioButton` — For handling input type radio DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click_by_name_and_value(string $name, string $value = '', string $frame = '-1', bool $wait_browser = true): bool`  

- `check_by_number(int $number, bool $check, string $frame = '-1'): bool`  

- `check_by_name(string $name, bool $check, string $frame = '-1'): bool`  

- `check_by_value(string $value, bool $exactly, bool $check, string $frame = '-1'): bool`  

- `check_by_attribute(string $attr_name, string $attr_value, bool $exactly, bool $check, string $frame = '-1'): bool`  

- `check_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, bool $check, int $form_number, string $frame = '-1'): bool`  

- `check_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, bool $check, string $form_name, string $frame = '-1'): bool`  

- `check_all(bool $check = true, string $frame = '-1'): bool`  

- `is_check_by_number(int $number, string $frame = '-1'): bool`  

- `is_check_by_name(string $name, string $frame = '-1'): bool`  

- `is_check_by_value(string $value, bool $exactly = true, string $frame = '-1'): bool`  

- `is_check_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_name(string $name, string $frame): bool`  

- `click_within_iframe_by_number(int $number, string $frame): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `set_checked_by_name(string $name, bool $check): bool`  

- `set_checked_by_number(int $number, bool $check): bool`  

- `set_checked_by_value(string $value, bool $check): bool`  

- `is_checked_by_name(string $name): bool`  

- `is_checked_by_number(int $number): bool`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHES` — For handling s DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEScriptElement` — For handling script DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_defer_by_number(int $number, bool $defer, string $frame = '-1'): bool`  

- `set_defer_by_src(string $src, bool $defer, string $frame = '-1'): bool`  

- `set_htmlFor_by_number(int $number, string $htmlFor, string $frame = '-1'): bool`  

- `set_htmlFor_by_src(string $src, string $htmlFor, string $frame = '-1'): bool`  

- `set_event_by_number(int $number, string $event, string $frame = '-1'): bool`  

- `set_event_by_src(string $src, string $event, string $frame = '-1'): bool`  

- `set_src_by_number(int $number, string $src, string $frame = '-1'): bool`  

- `set_text_by_number(int $number, string $text, string $frame = '-1'): bool`  

- `set_text_by_src(string $src, string $text, string $frame = '-1'): bool`  

- `set_type_by_number(string $number, string $type, string $frame = '-1'): bool`  

- `set_type_by_src(string $src, string $type, string $frame = '-1'): bool`  

- `get_defer_by_number(int $number, string $frame = '-1'): bool`  

- `get_defer_by_src(string $src, string $frame = '-1'): bool`  

- `get_htmlFor_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_htmlFor_by_src(string $src, string $frame = '-1'): string|bool`  

- `get_event_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_event_by_src(string $src, string $frame = '-1'): string|bool`  

- `get_readyState_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_readyState_by_src(string $src, string $frame = '-1'): string|bool`  

- `get_text_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_text_by_src(string $src, string $frame = '-1'): string|bool`  

- `get_type_by_number(int $number, string $frame = '-1'): string|bool`  

- `get_type_by_src(string $src, string $frame = '-1'): string|bool`  

- `is_all_completed(): bool`  

- `get_count_within_iframe_by_number(string $number): int`  

---

### `XHESection` — For handling section DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHESelectElement` — For handling listbox DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `select_index_by_number(int $number, int $index, string $frame = '-1'): bool`  

- `select_index_by_name(string $name, int $index, string $frame = '-1'): bool`  

- `select_index_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr, int $index, string $frame = '-1'): bool`  

- `select_text_by_number(int $number, string $text, bool $exactly = true, string $frame = '-1'): bool`  

- `select_text_by_name(string $name, string $text, bool $exactly = true, string $frame = '-1'): bool`  

- `select_text_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr, string $text, bool $exactly = true, string $frame = '-1'): bool`  

- `select_value_by_number(int $number, string $value, bool $exactly = true, string $frame = '-1'): bool`  

- `select_value_by_name(string $name, string $value, bool $exactly = true, string $frame = '-1'): bool`  

- `select_value_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr, string $value, bool $exactly = true, string $frame = '-1'): bool`  

- `select_index_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly_attr, int $index, int $form_number, string $frame = '-1'): bool`  

- `select_index_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly_attr, int $index, string $form_name, string $frame = '-1'): bool`  

- `select_text_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly_attr, string $text, bool $exactly, int $form_number, string $frame = '-1'): bool`  

- `select_text_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly_attr, string $text, bool $exactly, string $form_name, string $frame = '-1'): bool`  

- `select_value_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly_attr, string $value, bool $exactly, int $form_number, string $frame = '-1'): bool`  

- `select_value_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly_attr, string $value, bool $exactly, string $form_name, string $frame = '-1'): bool`  

- `select_random_by_number(int $number, string $frame = '-1'): bool`  

- `select_random_by_name(string $name, string $frame = '-1'): bool`  

- `select_random_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr = true, string $frame = '-1'): bool`  

- `multi_select_indexes_by_number(int $number, string $indexes, string $frame = '-1'): bool`  

- `multi_select_indexes_by_name(string $name, string $indexes, string $frame = '-1'): bool`  

- `multi_select_values_by_number(int $number, string $values, string $frame = '-1'): bool`  

- `multi_select_values_by_name(string $name, string $values, string $frame = '-1'): bool`  

- `multi_select_texts_by_number(int $number, string $texts, string $frame = '-1'): bool`  

- `multi_select_texts_by_name(string $name, string $texts, string $frame = '-1'): bool`  

- `get_selected_index_by_number(int $number, string $frame = '-1'): bool`  

- `get_selected_index_by_name(string $name, string $frame = '-1'): int`  

- `get_selected_index_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int`  

- `get_selected_text_by_number(int $number, string $frame = '-1'): false|string`  

- `get_selected_text_by_name(string $name, string $frame = '-1'): false|string`  

- `get_selected_text_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): false|string`  

- `get_size_by_number(int $number, string $frame = '-1'): int`  

- `get_size_by_name(string $name, string $frame = '-1'): int`  

- `get_size_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int`  

- `get_length_by_number(int $number, string $frame = '-1'): int`  

- `get_length_by_name(string $name, string $frame = '-1'): int`  

- `get_length_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int`  

- `get_type_by_number(int $number, string $frame = '-1'): string`  

- `get_type_by_name(string $name, string $frame = '-1'): string`  

- `get_type_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): string`  

- `get_all_texts_by_number(int $number, string $frame = '-1'): string`  

- `get_all_texts_by_name(string $name, string $frame = '-1'): string`  

- `get_all_texts_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): string`  

- `get_all_values_by_number(int $number, string $frame = '-1'): string`  

- `get_all_values_by_name(string $name, string $frame = '-1'): string`  

- `get_all_values_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): string`  

- `add_option_by_number(int $number, string $text, string $value, string $frame = '-1'): bool`  

- `add_option_by_name(string $name, string $text, string $value, string $frame = '-1'): bool`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, mixed $event): void`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, mixed $frame_number): string`  

- `select_random_value_by_num(int $num): bool`  

- `select_value_by_num(string $value, int $num): bool`  

- `select_option_value_by_num(int $num, string $innername): bool`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, mixed $frame_num): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `select_part_value_by_name(string $name, string $value, bool $exactly): bool`  

- `select_random_value_by_name(string $name): bool`  

- `select_random_value_by_number(int $num): bool`  

- `select_num_value_by_name(string $name, mixed $num): bool`  

- `select_num_value_by_number(int $number, int $num): bool`  

- `select_num_by_inner_name(int $num, string $innername): bool`  

- `select_name_by_inner_name(string $name, string $innername): bool`  

- `select_option_text_by_name(string $name, string $value): bool`  

- `select_option_text_by_num(string $value, int $num): bool`  

- `select_option_value_by_number(int $num, string $innername): bool`  

- `select_option_value_by_name(string $name, string $innername): bool`  

- `get_cur_option_text_by_name(string $name): false|string`  

- `get_cur_option_text_by_number(int $number): false|string`  

- `select_value_within_iframe_by_name(string $name, string $value, string $frame): bool`  

- `select_value_within_iframe_by_num(string $value, int $num, string $frame): bool`  

- `select_part_value_within_iframe_by_name(string $name, string $value, bool $exactly, string $frame): bool`  

- `select_num_value_within_iframe_by_name(string $name, int $num, string $frame): bool`  

- `select_num_value_within_iframe_by_number(int $number, int $num, string $frame): bool`  

- `select_num_within_iframe_by_inner_name(int $num, string $innername, string $frame): bool`  

- `select_name_within_iframe_by_inner_name(string $name, string $innername, string $frame): bool`  

- `multi_select_name_by_number(string $name, string $values): bool`  

- `multi_select_name_by_num(string $name, string $values): bool`  

- `multi_select_name_by_text(string $name, string $values): bool`  

- `multi_select_num_by_text(int $num, string $values): bool`  

- `multi_select_name_by_inner_name(string $name, string $values): bool`  

- `multi_select_num_by_inner_name(int $num, string $values): bool`  

---

### `XHESpan` — For handling span DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEStrong` — For handling strong DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEStyle` — For handling style DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHETable` — For handling table DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `export_to_csv(string $file_path, int $number, string $rows = '', string $cols = '', bool $as_html = true, string $separator = ';', string $frame = '-1'): bool`  

- `export_to_xml(string $file_path, int $number, string $rows = '', string $cols = '', bool $as_html = true, string $frame = '-1'): bool`  

- `get_cells_by_number(int $number, string $frame = '-1'): int`  

- `get_rows_by_number(int $number, string $frame = '-1'): int`  

- `get_cols_by_number(int $number, string $frame = '-1', int $row = 0): int`  

- `get_cell_by_number(int $number, int $row, int $col, bool $as_html = false, string $frame = '-1'): string`  

- `get_cell_by_pos_by_number(int $number, int $pos, bool $as_html = false, string $frame = '-1'): string`  

- `get_row_by_number(int $number, int $row, bool $as_html = false, string $frame = '-1'): string`  

- `get_col_by_number(int $number, int $col, bool $as_html = false, string $frame = '-1'): string`  

- `get_rows_cols_by_number(int $number, string $rows, string $cols, bool $as_html = false, string $separator = '<br>', string $frame = '-1'): string`  

- `get_cell_x_by_number(int $number, int $row, int $col, string $frame = '-1'): int`  

- `get_cell_x_by_inner_text(string $inner_text, bool $exactly, int $row, int $col, string $frame = '-1'): int`  

- `get_cell_x_by_attribute(string $attr_name, string $attr_value, bool $exactly, int $row, int $col, string $frame = '-1'): int`  

- `get_cell_y_by_number(int $number, int $row, int $col, string $frame = '-1'): int`  

- `get_cell_y_by_inner_text(string $inner_text, bool $exactly, int $row, int $col, string $frame = '-1'): int`  

- `get_cell_y_by_attribute(string $attr_name, string $attr_value, bool $exactly, int $row, int $col, string $frame = '-1'): int`  

- `get_count_within_iframe_by_number(string $number): int`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_inner_html(int $number, string $frame = '-1'): string`  

- `get_cell_count_by_number(int $number, string $frame = '-1'): int`  

---

### `XHETD` — For handling td DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHETextArea` — For handling textarea DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `seek_to_end_by_number(int $number, string $frame = '-1'): bool`  

- `seek_to_end_by_name(string $name, string $frame = '-1'): bool`  

- `seek_to_end_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): bool`  

- `seek_to_pos_by_number(int $number, int $pos, string $frame = '-1'): bool`  

- `seek_to_pos_by_name(string $name, int $pos, string $frame = '-1'): bool`  

- `seek_to_pos_by_attribute(string $attr_name, string $attr_value, bool $exactly, int $pos, string $frame = '-1'): bool`  

- `set_readonly_by_number(int $number, bool $readonly, string $frame = '-1'): bool`  

- `set_readonly_by_name(string $name, bool $readonly, string $frame = '-1'): bool`  

- `get_readonly_by_number(int $number, string $frame = '-1'): bool`  

- `get_readonly_by_name(string $name, string $frame = '-1'): bool`  

- `get_rows_by_number(int $number, string $frame = '-1'): int`  

- `get_rows_by_name(string $name, string $frame = '-1'): int`  

- `get_cols_by_number(int $number, string $frame = '-1'): int`  

- `get_cols_by_name(string $name, string $frame = '-1'): int`  

- `click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool`  

- `send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool`  

- `get_atribute_by_name(string $name, string $name_attr): string`  

- `get_atribute_by_number(int $number, string $name_attr): string`  

- `get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string`  

- `get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `get_count_within_iframe_by_number(string $number): int`  

- `is_exist_with_name(string $name, string $frame = '-1'): bool`  

- `click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool`  

- `click_random_in_frame(string $frame): int`  

- `send_event_by_name_in_frame(string $name, string $event, string $frame): bool`  

- `send_event_by_number_in_frame(int $number, string $event, string $frame): bool`  

- `send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool`  

- `set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool`  

- `add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool`  

- `set_value_within_iframe_by_name(string $name, string $value, string $frame): bool`  

- `set_value_within_iframe_by_number(int $number, string $value, string $frame): bool`  

- `is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool`  

- `is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool`  

- `get_value_within_iframe_by_name(string $name, string $frame): string`  

- `get_value_within_iframe_by_number(int $number, string $frame): string`  

- `get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string`  

- `add_atribute_by_number(int $number, string $name_atr, mixed $value_atr): bool`  

- `get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

- `get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int`  

---

### `XHETH` — For handling th DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHETR` — For handling TR DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEU` — For handling U DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEUl` — For handling UL DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

### `XHEVideo` — For handling video DOM elements in current loaded HTML page

**Методы**:
- `__construct(string $server, string $password = ''): void`  

---

## OTHER

### `EncodedVariable` — Encoded Variable

**Методы**:
- `__construct(string $unique_name): void`  

- `__toString(): string`  

---

### `EncodedString` — Encoded String

**Методы**:
- `__construct(string $str, string $key): void`  

- `__toString(): string`  

---

### `XHEExcelFileCompatible` — Класс базовый для XHEExcelFile. Для устаревших функций

**Методы**:
- `convert(string $inpath, string $outpath, int $timeout = 600): bool`  

- `set_col_number_format(string $path, int $sheet, string $col, string $format, bool $is_predefined = true, bool $except_header = false): bool`  

- `set_cell_number_format(string $path, int $sheet, int $row, string $col, string $format, bool $is_predefined = true): bool`  

- `set_range_number_format(string $path, int $sheet, string $range, string $format, bool $is_predefined = true): bool`  

- `set_range_type(string $path, int $sheet, string $range, string $type_): bool`  

- `set_col_type(string $path, int $sheet, string $col, string $type_, bool $except_header = false): bool`  

- `set_cell_type(string $path, int $sheet, int $row, string $col, string $type_): bool`  

---

### `XHEFile_osCompatible` — XHEFile_osCompatible

**Методы**:
- `get_file_name(mixed $path): void`  

- `get_file_title(mixed $path): void`  

- `get_file_ext(mixed $path): void`  

- `get_file_folder(mixed $path): void`  

- `get_file_disk(mixed $path): void`  

---

### `XHEFolderCompatible` — XHEFolderCompatible

**Методы**:
- `create_folder(mixed $path): void`  

- `get_folder_name(mixed $path): void`  

- `get_folder_disk(mixed $path): void`  

---

### `XHEWordCompatible` — XHEWordCompatible

**Методы**:
- `get_page_count(mixed $path): void`  

---

### `XHEWordFileCompatible` — XHEWordFileCompatible

**Методы**:
- `convert(string $inpath, string $outpath, int $timeout = 600): void`  

- `get_page_count(string $path): void`  

- `export_pages(string $inpath, string $outpath, int $from_page, int $count = 1): void`  

- `export_all_pages(string $inpath, string $to_folder, string $ext = 'pdf'): void`  

- `read_table_by_number(string $path, int $number, bool $as_array = false): void`  

- `compare(string $inpath1, string $inpath2): void`  

---

### `XHEBd` — Perform operations with Data base. Supported Data bases: "mysql", "mssql", "postgresql", "oracle", "sqlite"

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(string $alias, string $connection_str, string $bd_type = 'mysql'): bool`  

- `disconnect(string $alias): bool`  

- `query(string $alias, string $query, int $timeout = 60): string`  

- `query_arrays(string $alias, string $query, int $timeout = 60): ?array`  

- `query_dicts(string $alias, string $query, int $timeout = 60): ?array`  

---

### `XHEClipboard` — Perform operations with operating system clipboard

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_text(): string`  

- `clear(): bool`  

- `put_text(string $text): bool`  

- `put_html(string $html, string $url = ''): bool`  

---

### `XHECryptography` — Performs encryption and decryption operations

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `crypt_text(string $text, string $key): string`  

- `uncrypt_text(string $text, string $key): string`  

- `hash_text(string $text): string`  

- `crypt_file(string $inpath, string $outpath, string $key): bool`  

- `uncrypt_file(string $inpath, string $outpath, string $key): bool`  

- `hash_file(string $path, string $algoritm = 'sha256'): string`  

- `get_totp(string $key, int $step = 30, string $algoritm = 'sha1'): string`  

- `get_hotp(string $key, int $counter, string $algoritm = 'sha1'): string`  

---

### `XHEExcel` — Perform operations with Excel files used Microsoft Excel application

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `create(string $path, string $sheet_name, mixed $header_datas = '', int $timeout = 6000): bool`  

- `open(string $path, bool $read_only = false, bool $visibled = false, int $timeout = 3000, string $password = ''): bool`  

- `connect_by_hwnd(string $hwnd, string $path_alias, int $timeout = 3000): bool`  

- `save(string $path, int $timeout = 3000, string $password = ''): bool`  

- `close(string $path): bool`  

- `open_app(string $path): bool`  

- `get_sheets_count(string $path): int`  

- `get_sheets_names(string $path): ?array`  

- `get_sheet_name(string $path, int $sheet): string`  

- `set_sheet_name(string $path, int $sheet, string $name): bool`  

- `set_sheet_zoom(string $path, int $sheet, int $zoom): bool`  

- `get_sheet(string $path, int $sheet, int $timeout = 3000, mixed $only_visible = false, bool $use_value2 = true): ?array`  

- `set_sheet(string $path, int $sheet, array $sheet_array, int $timeout = 3000, int $row = 1, string $col = 'A'): bool`  

- `add_sheet(string $path, string $name): bool`  

- `remove_sheet_by_number(string $path, int $number): bool`  

- `remove_sheet_by_name(string $path, string $name): bool`  

- `get_sheet_number_by_name(string $path, string $name, bool $exactly = true): int`  

- `sort_sheet(string $path, int $sheet, string $col, bool $is_ascending = true, bool $is_header_exists = false, int $timeout = 3000): bool`  

- `dedupe_sheet(string $path, int $sheet, string $use_cols = '*', int $timeout = 3000): bool`  

- `get_rows_count(string $path, int $sheet): int`  

- `add_row(string $path, int $sheet, array $row_array): bool`  

- `get_row(string $path, int $sheet, int $row, bool $use_value2 = true, bool $only_visible = false): ?array`  

- `set_row(string $path, int $sheet, int $row, array $row_array): bool`  

- `add_rows(string $path, int $sheet, array $rows_array, int $timeout = 3000): bool`  

- `remove_row(string $path, int $sheet, int $row): bool`  

- `remove_rows_by_number(string $path, int $sheet, int $row, int $count): bool`  

- `remove_rows_by_text(string $path, int $sheet, string $text, string $col = ''): bool`  

- `remove_rows_by_ranges(string $path, int $sheet, string $ranges): bool`  

- `set_row_format(string $path, int $sheet, int $row, string $format): bool`  

- `autosize_row(string $path, int $sheet, int $row = -1, int $timeout = 3000): bool`  

- `set_row_height(string $path, int $sheet, int $row, float $height, int $timeout = 3000): bool`  

- `show_row(string $path, int $sheet, int $row, bool $show = true): bool`  

- `is_row_hidden(string $path, int $sheet, int $row): bool`  

- `get_cols_count(string $path, int $sheet, int $row = -1): int`  

- `set_col_format(string $path, int $sheet, string $col, string $format): bool`  

- `autosize_col(string $path, int $sheet, string $col = '', int $timeout = 3000): bool`  

- `set_col_width(string $path, int $sheet, string $col, float $width, int $timeout = 3000): bool`  

- `get_cell(string $path, int $sheet, int $row, string $col, bool $use_value2 = true): string`  

- `set_cell(string $path, int $sheet, int $row, string $col, string $text): bool`  

- `clear_cell(string $path, int $sheet, int $row, string $col): bool`  

- `set_cell_format(string $path, int $sheet, int $row, string $col, string $format): bool`  

- `merge_cells(string $path, int $sheet, string $begin_address, string $end_address, bool $across = false): bool`  

- `unmerge_cells(string $path, int $sheet, string $begin_address, string $end_address): bool`  

- `get_cell_font(string $path, int $sheet, int $row, string $col): ?stdClass`  

- `set_cell_font(string $path, int $sheet, int $row, string $col, XHEFont $font): bool`  

- `set_cell_font_bold(string $path, int $sheet, int $row, string $col, bool $is_bold = true): bool`  

- `set_cell_font_italic(string $path, int $sheet, int $row, string $col, bool $is_italic = true): bool`  

- `set_cell_font_underline(string $path, int $sheet, int $row, string $col, bool $is_underline = true): bool`  

- `set_cell_font_striketrough(string $path, int $sheet, int $row, string $col, bool $is_striketrough = true): bool`  

- `set_cell_font_shadow(string $path, int $sheet, int $row, string $col, bool $is_shadow = true): bool`  

- `set_cell_font_size(string $path, int $sheet, int $row, string $col, float $size): bool`  

- `set_cell_font_name(string $path, int $sheet, int $row, string $col, string $name): bool`  

- `kill(): bool`  

- `convert(string $inpath, string $outpath, int $timeout = 3000, string $delimeter = ''): bool`  

- `export_sheets(string $path, string $to_folder, int $timeout = 3000): bool`  

- `split_sheet_by_rows(string $path, string $to_folder, int $sheet_number, int $rows_per_file, int $timeout = 3000): bool`  

- `export_to_access(string $path, string $dbpath, string $sheet_name, string $table_name, int $timeout = 3000): bool`  

- `run_macro_by_name(string $path, int $active_sheet, string $macro_name, string $file_name = '', array $macro_args = null): bool`  

- `add_macro(string $path, string $macro_name, string $macro_code): bool`  

- `add_macro_from_file(string $path, string $macro_name, string $macro_file): bool`  

- `add_link(string $path, int $sheet, int $row, string $col, string $text, string $address, string $tip = ''): bool`  

- `follow_link_by_number(string $path, int $active_sheet, int $number, int $timeout = 3000): bool`  

- `follow_link_by_text(string $path, int $active_sheet, string $text, bool $exactly = false, int $skip = 0, int $timeout = 3000): bool`  

- `get_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, bool $is_match_case = true, string $col = '', int $timeout = 3000): XHEPosition`  

- `get_all_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, bool $is_match_case = true, string $col = '', int $timeout = 3000): array`  

- `get_range(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): ?array`  

- `get_and_clear_range(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): ?array`  

- `set_range_name(string $path, int $sheet, string $begin_cell, string $end_cell, string $name, int $timeout = 3000): bool`  

- `copy_range_to_clipboard(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): bool`  

- `cut_range_to_clipboard(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): bool`  

- `paste_range_from_clipboard(string $path, int $sheet, int $row, string $col, int $timeout = 3000): bool`  

- `dedupe_range(string $path, int $sheet, string $begin_cell, string $end_cell, string $use_cols = '*', int $timeout = 3000): bool`  

- `cut_range_and_paste_to_range(string $path, int $src_sheet, int $target_sheet, string $src_begin_cell, string $src_end_cell, string $target_begin_cell, string $target_end_cell, int $timeout = 3000): bool`  

- `copy_range_and_paste_to_range(string $path, int $src_sheet, int $target_sheet, string $src_begin_cell, string $src_end_cell, string $target_begin_cell, string $target_end_cell, int $timeout = 3000): bool`  

- `add_autofilter(string $path, int $sheet, string $range, int $col, string $condition1 = '', string $operator1 = '', string $condition2 = '', int $timeout = 3000): bool`  

- `clear_autofilters(string $path, int $sheet, int $timeout = 3000): bool`  

- `set_connection_source_data_file_by_number(string $path, int $number, string $source_data_file_path): bool`  

- `refresh_sheet(string $path, int $sheet): bool`  

---

### `XHEExcelDataReader` — Perform operations with Excel files used ExcelDataReader library

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_password(string $excelpassword): bool`  

- `get_sheet_name(string $path, int $sheet): string`  

- `get_sheets_count(string $path): int`  

- `get_sheet(string $path, int $sheet, int $timeout = 3000): ?array`  

- `get_rows_count(string $path, int $sheet): int`  

- `get_row(string $path, int $sheet, int $row): ?array`  

- `get_cols_count(string $path, int $sheet): int`  

- `get_cell(string $path, int $sheet, int $row, int $col): string`  

---

### `XHEExcelFile` — Perform operations with Excel files used library ClosedXML

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `create(string $path, string $sheet_name, mixed $header_datas = '', int $timeout = 6000): bool`  

- `open(string $path, int $timeout = 3000, bool $is_wait_busy = false, int $wait_busy_seconds = 180): bool`  

- `is_opened(string $path): bool`  

- `save(string $path, int $timeout = 3000): bool`  

- `close(string $path): bool`  

- `extract_images(string $path, string $to_folder): bool`  

- `get_sheets_count(string $path): int`  

- `set_sheet_zoom(string $path, int $sheet, int $zoom): bool`  

- `get_sheets_names(string $path): ?array`  

- `get_name_for_new_sheet(string $path, string $name): string`  

- `add_sheet(string $path, string $name): bool`  

- `remove_sheet_by_number(string $path, int $number): bool`  

- `remove_sheet_by_name(string $path, string $name): bool`  

- `remove_sheets_by_name(string $path, array $names): bool`  

- `get_sheet_number_by_name(string $path, string $name, bool $exactly = true): int`  

- `get_active_sheet_number(string $path): int`  

- `set_active_sheet_by_number(string $path, int $sheet): bool`  

- `read_sheet(string $path, int $sheet, int $timeout = 3000): string`  

- `get_sheet(string $path, int $sheet, int $timeout = 3000): ?array`  

- `get_sheet_by_page(string $path, int $sheet, int $skip = 0, int $limit = 10, int $timeout = 3000): ?array`  

- `set_sheet(string $path, int $sheet, array $sheet_array, int $timeout = 3000, int $row = 1, string $col = 'A'): bool`  

- `get_sheet_name(string $path, int $sheet): string`  

- `set_sheet_name(string $path, int $sheet, string $name): bool`  

- `clear_sheet(string $path, int $sheet): bool`  

- `copy_sheet(string $path, int $sheet_number, string $newSheetName = ''): bool`  

- `set_sheet_color(string $path, int $sheet, string $color): bool`  

- `sort_sheet(string $path, int $sheet, string $cols, bool $is_ascending = true, bool $is_header_exists = false, int $timeout = 3000): bool`  

- `dedupe_sheet(string $path, int $sheet, string $use_cols = '*', bool $is_header_exists = false, int $timeout = 3000, int $header_length = 1): bool`  

- `split_sheet_by_rows(string $path, string $to_folder, int $sheet_number, int $rows_per_file, int $timeout = 3000): bool`  

- `get_rows_count(string $path, int $sheet, bool $only_used = false): int`  

- `get_row(string $path, int $sheet, int $row): ?array`  

- `set_row(string $path, int $sheet, int $row, array $row_array): bool`  

- `add_row(string $path, int $sheet, array $row_array): bool`  

- `insert_row(string $path, int $sheet, int $row, int $count = 1): bool`  

- `remove_row(string $path, int $sheet, int $row): bool`  

- `add_rows(string $path, int $sheet, array $rows_array, int $timeout = 3000): bool`  

- `remove_rows_by_number(string $path, int $sheet, int $row, int $count): bool`  

- `remove_rows_by_text(string $path, int $sheet, string $text, mixed $col = ''): bool`  

- `remove_rows_by_ranges(string $path, int $sheet, string $ranges): bool`  

- `clear_row(string $path, int $sheet, int $row): bool`  

- `copy_row(string $in_path, string $in_sheet, string $in_row, string $out_path, string $out_sheet, string $out_row): bool`  

- `get_col(string $path, int $sheet, string $col): ?array`  

- `set_col(string $path, int $sheet, string $col, array $col_array): bool`  

- `add_col(string $path, int $sheet, array $col_array): bool`  

- `insert_col(string $path, int $sheet, string $col, int $count = 1): bool`  

- `remove_col(string $path, int $sheet, string $col, bool $shift_to_left = true): bool`  

- `clear_col(string $path, int $sheet, string $col): bool`  

- `set_row_color(string $path, int $sheet, int $row, string $color): bool`  

- `set_row_background_color(string $path, int $sheet, int $row, string $color): bool`  

- `set_row_border(string $path, int $sheet, int $row, string $color, int $border_type = 13, string $aligment = 'all'): bool`  

- `autosize_row(string $path, int $sheet, int $row = -1, int $timeout = 3000): bool`  

- `set_row_height(string $path, int $sheet, int $row, float $height, int $timeout = 3000): bool`  

- `get_cols_count(string $path, int $sheet, int $row = -1, bool $only_used = false): int`  

- `autosize_col(string $path, int $sheet, string $col = '', int $timeout = 3000): bool`  

- `set_col_width(string $path, int $sheet, string $col, float $width, int $timeout = 3000): bool`  

- `set_col_color(string $path, int $sheet, string $col, string $color): bool`  

- `set_col_background_color(string $path, int $sheet, string $col, string $color): bool`  

- `set_col_border(string $path, int $sheet, string $col, string $color, int $border_type = 13, string $aligment = 'all'): bool`  

- `set_col_format(string $path, int $sheet, string $col, string $format, bool $is_predefined = false, bool $except_header = false): bool`  

- `add_cell(string $path, int $sheet, int $row, string $text): bool`  

- `get_cell(string $path, int $sheet, int $row, string $col): string`  

- `set_cell(string $path, int $sheet, int $row, string $col, string $text, string $type = ''): bool`  

- `clear_cell(string $path, int $sheet, int $row, mixed $col): bool`  

- `get_cell_type(string $path, int $sheet, int $row, string $col): string`  

- `set_cell_format(string $path, int $sheet, int $row, string $col, string $format, bool $is_predefined = true): bool`  

- `set_cell_color(string $path, int $sheet, int $row, string $col, string $color): bool`  

- `set_cell_background_color(string $path, int $sheet, int $row, string $col, string $color): bool`  

- `set_cell_border(string $path, int $sheet, int $row, string $col, string $color, int $border_type = 13, string $aligment = 'all'): bool`  

- `get_cell_color(string $path, int $sheet, int $row, string $col): string`  

- `get_cell_background_color(string $path, int $sheet, int $row, string $col): string`  

- `get_cell_font(string $path, int $sheet, int $row, string $col): ?stdClass`  

- `set_cell_font(string $path, int $sheet, int $row, string $col, XHEFont $font): bool`  

- `get_merged_cell_range(string $path, int $sheet, int $row, string $col): false|\XHERange`  

- `get_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, string $col = '', int $timeout = 3000): XHEPosition`  

- `get_all_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, string $col = '', int $timeout = 3000): array`  

- `add_link(string $path, int $sheet, int $row, string $col, string $text, string $address, string $tip = ''): bool`  

- `set_range_name(string $path, int $sheet, string $range, string $name): bool`  

- `clear_range(string $path, int $sheet, string $range, string $options = 'All'): bool`  

- `copy_range(string $path, int $sheet, string $range, int $to_sheet, int $row, string $col): bool`  

- `move_range(string $path, int $sheet, string $range, int $to_sheet, int $row, string $col): bool`  

- `set_range_format(string $path, int $sheet, string $range, string $format, bool $is_predefined = true): bool`  

- `set_range_border(string $path, int $sheet, string $range, string $color, int $border_type = 13, string $aligment = 'all'): bool`  

- `dedupe_range(string $path, int $sheet, string $range, string $use_cols = '*', int $timeout = 3000): bool`  

- `add_autofilter(string $path, int $sheet, string $range, int $col, string $condition1 = '', string $value1 = '', string $operator1 = '', string $condition2 = '', string $value2 = '', int $timeout = 3000): bool`  

- `clear_autofilters(string $path, int $sheet, int $timeout = 3000): bool`  

- `get_range(string $path, int $sheet, string $range, int $timeout = 3000): ?array`  

- `get_and_clear_range(string $path, int $sheet, string $range, int $timeout = 3000): ?array`  

- `convert(string $inpath, string $outpath, int $timeout = 600): bool`  

- `set_col_number_format(string $path, int $sheet, string $col, string $format, bool $is_predefined = true, bool $except_header = false): bool`  

- `set_cell_number_format(string $path, int $sheet, int $row, string $col, string $format, bool $is_predefined = true): bool`  

- `set_range_number_format(string $path, int $sheet, string $range, string $format, bool $is_predefined = true): bool`  

- `set_range_type(string $path, int $sheet, string $range, string $type_): bool`  

- `set_col_type(string $path, int $sheet, string $col, string $type_, bool $except_header = false): bool`  

- `set_cell_type(string $path, int $sheet, int $row, string $col, string $type_): bool`  

---

### `XHEFile_os` — Perform operations with files

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `copy(string $path, string $new_path, bool $fail_if_exist = false): bool`  

- `move(string $path, string $new_path, bool $fail_if_exist = false): bool`  

- `rename(string $path, string $new_path): bool`  

- `delete(string $path): bool`  

- `wait_copy(string $path, int $wait_count = 2000, int $wait_step = 5, bool $is_verbose = true): bool`  

- `unzip(string $path, string $to_folder, string $encoding = 'cp866'): bool`  

- `un7z(string $path, string $to_folder, string $path_to_7z = 'C:\\Program Files\\7-Zip'): bool`  

- `wait_for_exist(string $path, int $wait_count = 60, int $wait_step = 1, bool $is_verbose = true): bool`  

- `is_exist(string $path): bool`  

- `get_name(string $path): string`  

- `get_title(string $path): string`  

- `get_ext(string $path): string`  

- `get_folder(string $path, int $level = 0): string`  

- `get_disk(string $path): string|false`  

- `get_size(string $path): int`  

- `get_random_file_content(string $folder, string $ext, bool $include_subfolders, int $timeout = -1): string|false`  

- `get_creation_date(string $path, bool $time = false): string|false`  

- `get_modification_date(string $path, bool $time = false): string|false`  

- `get_lastacess_date(string $path, bool $time = false): string|false`  

- `is_normal(string $path): bool`  

- `is_readonly(string $path): bool`  

- `is_hidden(string $path): bool`  

- `is_system(string $path): bool`  

- `is_archive(string $path): bool`  

- `set_normal(string $path, bool $on = true): bool`  

- `set_readonly(string $path, bool $on = true): bool`  

- `set_hidden(string $path, bool $on = true): bool`  

- `set_system(string $path, bool $on = true): bool`  

- `set_archive(string $path, bool $on = true): bool`  

- `get_file_name(string $path): string`  

- `get_file_title(string $path): string`  

- `get_file_ext(string $path): string`  

- `get_file_folder(string $path): string`  

- `get_file_disk(string $path): string|bool`  

---

### `XHEFolder` — Perform operations with folders

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `create(string $path): bool`  

- `copy(string $path, string $new_folder_place, bool $flag_fail_exist = true, int $timeout = 3000): bool`  

- `move(string $path, string $new_folder_place, int $timeout = 3000): bool`  

- `rename(string $path, string $new_folder_name, int $timeout = 3000): bool`  

- `delete(string $path): bool`  

- `clear(string $path, int $timeout = 3000): bool`  

- `rar(string $path, string $path_to_rar = '', string $options = 'u -m5 -mdE -s -r -ed -ep1', int $timeout = 3000): bool`  

- `zip(string $path, string $to_file, int $timeout = 3000): bool`  

- `is_exist(string $path): bool`  

- `get_name(string $path): string`  

- `get_disk(string $path): string|false`  

- `get_size(string $path): int`  

- `get_items_count(string $path, bool $include_subfolders = false, bool $only_folders = false, int $timeout = 3000): int`  

- `get_all_items(string $path, bool $include_subfolders = false, bool $only_folders = false, int $timeout = 3000): string|false`  

- `get_all_files(string $path, bool $include_subfolders = false, string $mask = '*.*', int $timeout = 3000): ?array`  

- `get_all_folders(string $path, bool $include_subfolders = false, string $mask = '*.*', int $timeout = 3000): ?string`  

- `get_random_file(string $path, string $extension = 'txt', bool $include_subfolders = false, int $timeout = 3000): bool|string`  

- `get_creation_date(string $path, bool $time = false): string|false`  

- `get_modification_date(string $path, bool $time = false): string|false`  

- `get_lastacess_date(string $path, bool $time = false): string|false`  

- `is_normal(string $path): bool`  

- `is_readonly(string $path): bool`  

- `is_hidden(string $path): bool`  

- `is_system(string $path): bool`  

- `is_archive(string $path): bool`  

- `set_normal(string $path, bool $on = true): bool`  

- `set_readonly(string $path, bool $on = true): bool`  

- `set_hidden(string $path, bool $on = true): bool`  

- `set_system(string $path, bool $on = true): bool`  

- `set_archive(string $path, bool $on = true): bool`  

- `create_folder(string $path): bool`  

- `get_folder_name(string $path): string`  

- `get_folder_disk(string $path): string|false`  

---

### `XHEKeyboard` — Performs text input operations from the keyboard

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `input(string $string, string $timeout = '20:40', bool $inFlash = false, bool $auto_change = true): bool`  

- `key(string $code, bool $is_key = true, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `key_down(string $key, bool $is_key = true): bool`  

- `key_up(string $key, bool $is_key = true): bool`  

- `press_key_by_code(string $code, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `send_input(string $string, string $timeout = '0:2', bool $inFlash = false, bool $auto_change = true): bool`  

- `send_key(string $key, bool $is_key = false, mixed $ctrl = false, mixed $alt = false, mixed $shift = false): bool`  

- `send_key_down(string $key, bool $is_key = false): bool`  

- `send_key_up(string $key, bool $is_key = false): bool`  

- `set_ctrl_prefix(bool $on): bool`  

- `set_alt_prefix(bool $on): bool`  

- `set_shift_prefix(bool $on): bool`  

- `press_caps_lock(): bool`  

- `press_num_lock(): bool`  

- `press_scroll_lock(): bool`  

- `is_caps_lock_pressed(): bool`  

- `is_num_lock_pressed(): bool`  

- `is_scroll_lock_pressed(): bool`  

- `get_current_language(): string`  

- `set_current_language(string $language): bool`  

---

### `XHELibreOffice` — Perform operations with Excel files used library ClosedXML LibreOffice application

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_install_folder(string $folder): bool`  

- `convert(string $inpath, string $outpath, string $infilter = '', int $timeout = 3000): bool`  

---

### `XHELibreOfficeCalc` — Для работы с файлами OpenDocumentFormat на базе библиотеки

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_sheet_name(string $path, int $sheet): string`  

- `get_sheets_count(string $path): int`  

- `get_sheets_names(string $path): ?array`  

- `get_sheet(string $path, int $sheet, int $timeout = 3000): ?array`  

- `get_sheet_number_by_name(string $path, string $table_name, bool $exactly = true): int`  

- `get_cell(string $path, int $sheet, int $row, int $col): string`  

- `get_cell_by_position(string $path, int $sheet, string $cell_position): string`  

- `set_cell_color(string $path, int $sheet, int $row, int $col, string $foreground_color, string $background_color): bool`  

- `set_cell_color_by_position(string $path, int $sheet, string $cell_position, string $foreground_color, string $background_color): bool`  

- `set_cell(string $path, int $sheet, int $row, int $col, string $cell_content): bool`  

- `set_cell_by_position(string $path, int $sheet, string $cell_position, string $cell_content): bool`  

- `cell_add_annotation(string $path, int $sheet, int $row, int $col, string $annotation_author, string $annotation_comment, string $json_annotation_settings = ''): bool`  

- `cell_add_annotation_by_position(string $path, int $sheet, string $cell_position, string $annotation_author, string $annotation_comment, string $json_annotation_settings = ''): bool`  

- `add_define_range_name(string $path, string $range_name, string $range): bool`  

- `add_row(string $path, int $sheet, array $row_array): bool`  

- `get_row(string $path, int $sheet, int $row): ?array`  

- `get_rows_count(string $path, int $sheet): int`  

- `set_row_height(string $path, int $sheet, int $row, string $height, int $timeout = 3000): bool`  

- `get_cols_count(string $path, int $sheet): int`  

- `set_col_width(string $path, int $sheet, int $col, string $width, int $timeout = 3000): bool`  

---

### `XHEMouse` — Perform operations with Computer mouse

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `click(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `click_to_screen(int $x = -1, int $y = -1): bool`  

- `double_click(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `left_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `left_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `right_button_click(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `right_button_click_to_screen(int $x = -1, int $y = -1): bool`  

- `right_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `right_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `move(int $x, int $y, bool $scroll = true, int $time = 0, int $tremble = 2, string $buttons = ''): bool`  

- `move_on_screen(int $x, int $y, int $time = 0, int $tremble = 2, string $buttons = ''): bool`  

- `wheel(int $time, int $x = -1, int $y = -1): bool`  

- `move_to(int $x, int $y, string $type_, int $time_): bool`  

- `send_click(int $x = -1, int $y = -1, bool $scroll = true, bool $addCtrl = false): bool`  

- `send_double_click(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `send_left_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `send_left_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `send_right_button_click(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `send_right_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `send_right_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool`  

- `send_move(int $x = -1, int $y = -1, bool $scroll = true, int $time = 0, int $tremble = 5, string $buttons = ''): bool`  

- `send_wheel(int $n, int $x = 1200, int $y = 600, int $key = 0): bool`  

- `send_move_to(int $x, int $y, string $type_, int $time_): bool`  

- `send_touch(int $id, int $touch_type, int $x = -1, int $y = -1, int $radiusX = 0, int $radiusY = 0, float $rotationAngle = 0, float $pressure = 0, int $modiefiers = 0, int $pointerType = 0): bool`  

- `send_touch_to(int $x0, int $y0, int $x, int $y, string $type_, int $time_): bool`  

- `get_position(bool $in_browser = false, bool $virtual = false): string`  

- `get_x(bool $in_browser = false, bool $virtual = false): int`  

- `get_y(bool $in_browser = false, bool $virtual = false): int`  

- `send_click_to_flash_player(int $x, int $y, int $flash_num, bool $bUseFlashXY = false, bool $scroll = true): bool`  

- `send_right_click_to_flash_player(int $x, int $y, int $flash_num, bool $bUseFlashXY = false, bool $scroll = true): bool`  

- `send_mouse_move_to_flash_player(int $x, int $y, int $flash_num, bool $bUseFlashXY = false, bool $scroll = true): bool`  

- `get_mouse_pos_to_flash_player(int $flash_num, string $x = '', string $y = ''): string`  

---

### `XHEMsgFile` — Perform operations with a file containing a letter in Outlook format (.msg)

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `read(string $path): ?XHEMailMessage`  

- `save_attachments(string $path, string $to_folder): bool`  

---

### `XHEPdfFile` — Perform operations with PDF files

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `is_pdf_file(string $path): bool`  

- `get_info(string $path, string $name): string`  

- `get_page_count(string $path, int $timeout = 6000): int`  

- `get_images_count(string $path): int`  

- `get_links_count(string $path): int`  

- `get_link_by_number(string $path, int $number): string`  

- `get_all_links(string $path): ?array`  

- `read(string $path, string $method = ''): string`  

- `read_page(string $path, int $page, string $method = ''): string`  

- `get_page_number_by_text(string $path, string $text, int $exactly = 1, int $skip = 0, string $method = ''): string`  

- `write(string $path, string $content): bool`  

- `combine(string $outpath, array $inpaths, bool $is_compressed = false, int $timeout = 6000, string $method = ''): bool`  

- `extract_images(string $path, string $to_folder, int $timeout = 6000): bool`  

- `compress_images(string $inpath, string $outpath, int $quality = 20, int $timeout = 6000): bool`  

- `print_pages(string $path, string $to_folder, float $scale = 1, int $timeout = 6000): bool`  

- `split(string $path, mixed $to_folder, int $pages_per_file = 1, int $timeout = 6000): bool`  

- `insert_image(string $path, int $page, string $image_path, int $x, int $y, int $timeout = 6000): bool`  

---

### `XHESound` — For converting and playing audio files

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `beep(): bool`  

- `play_sound(string $path): bool`  

- `convert_file(string $src_path, string $new_path, string $Hz = '', int $timeout = 60): bool`  

- `recognize_file_with_digits(string $path, int $timeout = 60): string|bool`  

- `recognize_file(string $path, string $dict, string $jsgf, string $hmm, string $add_params = '', int $timeout = 60): string|bool`  

---

### `XHETextFile` — Perform operations with text files

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_file_folder(string $path, int $timeout = -1): string`  

- `get_lines_count(string $path, int $timeout = -1): int`  

- `get_encoding(string $path): string`  

- `create_folder(string $path, int $timeout = -1): bool`  

- `generate_folders_by_strings_file(string $file, string $folder, int $timeout = -1): bool`  

- `get_all_files_in_folder(string $path, string $masks = '', bool $include_subfolders = false, mixed $only_folders = false, int $timeout = -1): string|false`  

- `collect_from_folders_to_file(string $infolderpath, string $outfilepath, int $timeout = -1, string $extension = 'txt'): bool`  

- `split_to_part(string $infilepath, string $outfilepath, int $numparts, int $timeout = -1): bool`  

- `collect_from_folders_to_folder(string $infolderpath, string $outfolderpath, int $timeout = -1): bool`  

- `sort(string $infilepath, string $outfilepath, int $timeout = 1000, string $encoding = 'utf-8'): bool`  

- `dedupe(string $infilepath, string $outfilepath, int $timeout = -1, string $encoding = ''): bool`  

- `randomize_to(string $infilepath, string $outfilepath, int $timeout = -1): bool`  

- `revert_strings_file(string $infile, string $outfile, int $timeout = -1): bool`  

- `replace_string(string $infile, string $outfile, string $old_str, string $new_str, int $timeout = -1): bool`  

- `exclude_strings_file_from_file(string $infile, string $excluding_file, string $outfile, int $timeout = -1): bool`  

- `file_links(string $infilepath, string $outfilepath, int $num_lines, string $type_make = 'L', int $timeout = -1): bool`  

- `write_file(string $file, string $content, int $timeout = -1, bool $create_folders = false, string $encoding = ''): bool`  

- `add_string_to_file(string $file, string $str, int $timeout = -1, string $encoding = ''): bool`  

- `set_string_to_file(string $file, string $str, int $line, bool $add = true, int $timeout = -1): bool`  

- `read_file(string $file, int $timeout = -1, string $encoding = 'windows-1251'): bool|string`  

- `get_line_from_file(string $file, bool $rand, int $line, int $timeout = -1): bool|string`  

- `delete_line_from_file(string $file, int $line, int $timeout = -1): bool`  

- `get_lines_from_file(string $file, int $beg_line, int $lines_count, int $timeout = -1): bool|string`  

---

### `XHEWord` — Perform operations with folders used Microsoft Word application

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `create(string $path, string $text = ''): bool`  

- `open(string $path, bool $read_only = true, int $timeout = 3000): bool`  

- `connect_by_hwnd(string $hwnd, string $path_alias, int $timeout = 3000): bool`  

- `save(string $path, int $timeout = 3000): bool`  

- `close(string $path): bool`  

- `kill(): bool`  

- `remove_info(string $inpath, string $outpath, string $info = 'PersonalInformation', int $timeout = 3000): bool`  

- `convert(string $inpath, string $outpath, int $timeout = 3000): bool`  

- `compare(string $inpath1, string $inpath2, int $timeout = 3000): bool`  

- `get_pages_count(string $path): int`  

- `export_pages(string $inpath, string $outpath, int $from_page = 1, int $count = 1, int $timeout = 3000): bool`  

- `export_all_pages(string $inpath, string $to_folder, string $ext = 'pdf', string $filters = '', bool $is_match_all = false, int $timeout = 3000): bool`  

- `read_page(string $path, int $page, int $timeout = 3000): string`  

- `add_text(string $path, string $text, bool $to_new_paragraph = false): bool`  

- `add_page_break(string $path): bool`  

- `get_text(string $path): string`  

- `replace_text(string $path, string $text, string $new_text): bool`  

- `get_paragraphs_count(string $path): int`  

- `get_paragraph_text_by_number(string $path, string $number): string`  

- `set_paragraph_text_by_number(string $path, string $number, string $text): bool`  

- `get_paragraph_number_by_text(string $path, string $text, bool $exactly = false, int $skip = 0): int`  

- `delete_paragraph_by_number(string $path, string $number): bool`  

- `delete_paragraph_by_text(string $path, string $text, bool $exactly = false, int $skip = 0): bool`  

- `get_tables_count(string $path): int`  

- `add_table(string $path, array $table): bool`  

- `add_image(string $path, string $image_path): bool`  

- `get_shapes_count(string $path): int`  

- `get_page_count(string $path): int`  

---

### `XHEWordFile` — Perform operations with Excel files used ClosedXML.Excel library

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `create(string $path, string $text = ''): bool`  

- `open(string $path, bool $is_read_only = true): bool`  

- `save(string $path): bool`  

- `close(string $path): bool`  

- `get_page_count(string $path): int`  

- `get_table_count(string $path): int`  

- `read(string $path, int $timeout = 3000): string`  

- `get_table_by_number(string $path, int $number, bool $as_array = false): string|array|null`  

- `extract_images(string $path, string $to_folder): bool`  

- `get_shapes_count(string $path): int`  

- `get_shape_properties(string $path, int $number): string`  

- `convert(string $inpath, string $outpath, int $timeout = 600): bool`  

- `export_pages(string $inpath, string $outpath, int $from_page, int $count = 1): bool`  

- `export_all_pages(string $inpath, string $to_folder, string $ext = 'pdf'): bool`  

- `read_table_by_number(string $path, int $number, bool $as_array = false): array|string|null`  

- `compare(string $inpath1, string $inpath2): bool`  

---

### `XHEFineReaderOCR` — To control the FineReader application for recognize image

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_language(string $language = 'Russian English'): bool`  

- `set_program_folder(string $path): bool`  

- `recognize(string $path): string`  

- `convert(string $inpath, string $outpath, int $timeout = 3000): bool`  

---

### `XHETesseractOCR` — To control the Tesseract OCR application

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `recognize(string $path, string $language = 'rus+eng', int $tesseract_version = 5, int $timeout = 600): string`  

- `get_segmented_regions(string $path, string $language = 'rus+eng', int $pageLevel = 3): ?array`  

- `get_region_by_text(string $path, string $text, string $language = 'rus+eng'): ?array`  

- `set_allowed_chars(string $allowed_chars = ''): bool`  

- `set_denieded_chars(string $denieded_chars = ''): bool`  

- `set_params(string $params_str = ''): bool`  

- `get_params(int $version = 5): string`  

---

### `XHEYandexVision` — To control the Yandex Vision

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_language(string $language = 'ru+en'): bool`  

- `set_folder_id(string $folder_id): bool`  

- `set_auth_token(string $token): bool`  

- `set_api_key(string $api_key): bool`  

- `recognize(string $path, string $type_image = 'image'): string`  

- `get_segmented_regions(string $path): ?string`  

- `get_region_by_text(string $path, string $text): ?string`  

---

### `MSExchangeMailHelper` — Helper class for working with email using the MS Exchange API

**Методы**:
---

### `Anticaptcha` — Class для работы с API anti-captcha.com.

**Методы**:
- `setHost(string $host): void`  

- `setScheme(string $scheme): void`  

- `setKey(string $key): void`  

- `getVerboseMode(): bool`  

- `setVerboseMode(bool $mode): void`  

- `getTaskInfo(): bool|mixed`  

- `getTaskResult(): string`  

- `getTaskId(): string`  

- `setTaskId(string $taskId): void`  

- `setErrorMessage(string $message): void`  

- `getErrorMessage(): string`  

- `get_last_capcha_id(): string`  

- `get_last_capcha_filename(): string`  

- `get_last_capcha_result(): string`  

- `report_bug_capcha(string $id): false|string`  

- `createTask(): bool`  

- `waitForResult(int $maxSeconds = 60, int $currentSecond = 0): bool`  

- `getBalance(): string|bool`  

- `get_balance(): string|bool`  

- `reportIncorrectImageCaptcha(string $id): false|string`  

- `jsonPostRequest(string $methodName, array $postData): false|mixed`  

- `debout(string $message, string $color = 'white'): void`  

---

### `ImageToText` — ImageToText

**Методы**:
- `setPhraseFlag(bool $value): void`  

- `setCaseFlag(bool $value): void`  

- `setNumericFlag(int $value): void`  

- `setMathFlag(bool $value): void`  

- `setMinLengthFlag(int $value): void`  

- `setMaxLengthFlag(int $value): void`  

- `getPostData(): array`  

- `setTaskInfo(mixed $taskInfo): void`  

- `getTaskSolution(): string`  

- `setFile(string $fileName): bool`  

- `set_default_params(): bool`  

- `recognize_image(string $path): false|string`  

---

### `NoCaptcha` — NoCaptcha

**Методы**:
- `setWebsiteURL(string $value): void`  

- `setWebsiteKey(string $value): void`  

- `setWebsiteSToken(string $value): void`  

- `setProxyType(string $value): void`  

- `setProxyAddress(string $value): void`  

- `setProxyPort(int $value): void`  

- `setProxyLogin(string $value): void`  

- `setProxyPassword(string $value): void`  

- `setUserAgent(string $value): void`  

- `setCookies(mixed $value): void`  

- `getPostData(): array`  

- `setTaskInfo(mixed $taskInfo): void`  

- `getTaskSolution(): string`  

---

### `NoCaptchaProxyless` — NoCaptchaProxyless

**Методы**:
- `setWebsiteURL(string $value): void`  

- `setWebsiteKey(string $value): void`  

- `setWebsiteSToken(string $value): void`  

- `getPostData(): array`  

- `setTaskInfo(mixed $taskInfo): void`  

- `getTaskSolution(): string`  

---

### `XHE2capcha` — XHE2capcha

**Методы**:
- `__construct(string $server, bool $is_ssl = true): void`  

- `recognize_text(string $text): bool|string`  

- `recognize_like_images(string $filename): bool|string`  

- `recognize_invoice(string $filename): bool|string`  

- `recognize_recaptcha_2_with_text(string $filename, string $textinstructions): bool|string`  

- `recognize_recaptcha_2_with_image(string $filename, string $imageinstructions): bool|string`  

- `recognize_click_captcha(string $filename, string $textinstructions = ''): bool|string`  

- `recognize_rotate_captcha(string $filename, string $file_1, string $file_2 = '', string $file_3 = '', int $angle = 40): bool|string`  

- `recognize_recaptcha_v2(string $pageurl, string $googlekey, int $invisible = 0, string $proxy = '', string $proxytype = ''): bool|string`  

- `recognize_geetest(string $pageurl, string $gt, string $challenge, string $api_server = '', string $proxy = '', string $proxytype = ''): bool|string`  

---

### `XHE5Simnet` — XHE5Simnet

**Методы**:
- `__construct(string $api = '', string $servis = 'http://sms-activate.api.5sim.net', string $ref = ''): void`  

---

### `XHEAnticapcha` — XHEAnticapcha

**Методы**:
- `__construct(string $server, bool $is_ssl = true): void`  

---

### `XHEAnticaptcha2` — XHEAnticaptcha2

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_balance(): float`  

- `set_api_key(string $key): bool`  

- `set_verbose(bool $is_verbose = true): bool`  

- `image_to_text(string $path, int $timeout = 3000): string`  

- `get_recaptchaV2(string $site_url, string $site_key): string`  

- `get_recaptchaV3(string $site_url, string $site_key): string`  

- `get_hcaptcha(string $site_url, string $site_key, string $user_agent): string`  

---

### `XHEBrowser` — To manage the current browser instance

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_count(int $count): bool`  

- `get_count(): int`  

- `set_active_browser(int $num, bool $activate = true): bool`  

- `get_active_browser(): int`  

- `add_tab(): bool`  

- `close(): bool`  

- `close_all_tabs(string $close_type = ''): bool`  

- `set_active_page(int $page): bool`  

- `navigate(string $url, bool $use_cache = true, bool $use_wait = true): bool`  

- `get_last_navigation_error(): string`  

- `refresh(bool $ignore_cache = true): bool`  

- `stop(): bool`  

- `go_back(): bool`  

- `go_forward(): bool`  

- `set_home_page(string $url): bool`  

- `navigate_to_home_page(): bool`  

- `wait_for(int $Try_Navigate_Second = 15, int $Try_Navigate_Count = 1): bool`  

- `wait_js(int $Try_Second = 30): bool`  

- `wait(int $num = -1): bool`  

- `is_busy(int $num = -1): bool`  

- `get_ready_state(): string`  

- `set_wait_params(int $Try_Navigate_Second = -1, int $Try_Navigate_Count = -1): bool`  

- `enable_images(bool $enable = true, bool $refresh = true): bool`  

- `enable_java_script(bool $enable = true, bool $refresh = true): bool`  

- `enable_sounds(bool $enable = true, bool $refresh = true): bool`  

- `enable_video(bool $enable = true, bool $refresh = true): bool`  

- `enable_activex(bool $enable = true, bool $refresh = true): bool`  

- `enable_java(bool $enable = true, bool $refresh = true): bool`  

- `enable_frames(bool $enable = true, bool $refresh = true): bool`  

- `enable_fonts(bool $enable = true, bool $refresh = true): bool`  

- `enable_remote_fonts(bool $enable = true, bool $refresh = true): bool`  

- `enable_popup(bool $enable = true, bool $refresh = true): bool`  

- `disable_script_error(bool $enable = true, bool $refresh = true): bool`  

- `disable_security_problem_dialogs(bool $disable = true): bool`  

- `enable_quiet_regime(bool $enable = true, bool $refresh = true): bool`  

- `enable_cache(bool $enable = true, bool $refresh = true): bool`  

- `enable_dom_storage(bool $enable = true, bool $refresh = true): bool`  

- `enable_callback(bool $enable = true, bool $refresh = true): bool`  

- `enable_view_json(bool $enable = true, bool $refresh = true): bool`  

- `enable_web_rtc(bool $enable = true, bool $refresh = true): bool`  

- `enable_web_socket(bool $enable = true, bool $refresh = true): bool`  

- `enable_common_cache_and_cookies(bool $enable = true, bool $refresh = true): bool`  

- `enable_directx(bool $enable = true): bool`  

- `enable_gpu_rendering(bool $enable = true): bool`  

- `enable_browser_notification(bool $enable = true, bool $show = false, bool $refresh = true): bool`  

- `is_enable_images(): bool`  

- `is_enable_java_script(): bool`  

- `is_enable_sounds(): bool`  

- `is_enable_video(): bool`  

- `is_enable_activex(): bool`  

- `is_enable_java(): bool`  

- `is_enable_popup(): bool`  

- `is_enable_frames(): bool`  

- `is_disable_script_error(): bool`  

- `is_enable_quiet_regime(): bool`  

- `is_enable_cache(): bool`  

- `is_enable_dom_storage(): bool`  

- `is_enable_callback(): bool`  

- `is_enable_view_json(): bool`  

- `is_enable_web_rtc(): bool`  

- `is_enable_web_socket(): bool`  

- `is_enable_common_cache_and_cookies(): bool`  

- `set_popup_type(int $popup_type): bool`  

- `set_google_api_key(string $api_key): bool`  

- `set_google_default_client_id(string $client_id): bool`  

- `set_google_default_client_secret(string $client_secret): bool`  

- `enable_isolate_tabs(bool $enable = true): bool`  

- `set_do_not_track(bool $doNotTrack = true): bool`  

- `set_blocked_chipers(string $blocked_chipers, bool $refresh = false): bool`  

- `call_java_script(string $func, string $parametrs): bool`  

- `run_java_script(string $script_text, string $add_file = '', int $timeout = 60): string`  

- `set_init_java_script(string $script_text, string $add_file = ''): void`  

- `set_document_complete_java_script(string $script_text, string $add_file = ''): void`  

- `run_jquery(string $script_text, string $ver = '3'): string`  

- `run_dojo(string $script_text): string`  

- `enable_proxy(string $connection, string $proxy, bool $recreate = true): bool`  

- `disable_proxy(string $connection = '', bool $recreate = true): bool`  

- `get_current_proxy(string $connection = '', bool $with_auth = false): string`  

- `get_version(bool $numerica = true): string`  

- `get_user_agent(): string`  

- `get_cookies_folder(): string`  

- `get_cache_folder(): string`  

- `set_cookies_folder(string $folder, bool $refresh = true): bool`  

- `set_cache_folder(string $folder, bool $refresh = true): bool`  

- `flash_cookies_save(string $folder, string $site = ''): bool`  

- `flash_cookies_restore(string $folder, string $site = ''): bool`  

- `flash_cookies_delete(string $site = ''): bool`  

- `set_user_agent(string $agent_string, bool $refresh = true): bool`  

- `set_model(string $model): bool`  

- `get_model(): string`  

- `get_page_width(): int`  

- `get_page_height(): int`  

- `set_width(int $width): bool`  

- `get_window_width(): int`  

- `set_height(int $height): bool`  

- `get_window_height(): int`  

- `get_selected_text(bool $as_html): string`  

- `set_vertical_scroll_pos(int $y): bool`  

- `get_vertical_scroll_pos(): int`  

- `set_horizontal_scroll_pos(int $x): bool`  

- `get_horizontal_scroll_pos(): int`  

- `clear_cookies(string $match_name, bool $clear_session = false, bool $clear_flash = true): bool`  

- `clear_local_storage(): bool`  

- `clear_indexed_db(): bool`  

- `set_cookie(string $cookie): bool`  

- `set_cookie_for_url(string $url, string $name, string $cookie, string $expires = '', string $domain = '', string $path = '', bool $httpOnly = false, bool $secure = false, bool $session = false, string $sameSite = '', string $priority = ''): bool`  

- `get_cookie(bool $as_json = false): string`  

- `get_cookie_for_url(string $url, string $name, bool $as_json = false): string`  

- `import_cookies(string $url, string $cookies): bool`  

- `get_popup_source(string $url, bool $exactly): string`  

- `close_popup(string $url, bool $exactly): bool`  

- `enable_browser_message_boxes(bool $enable = true, string $default_answer = 'Ok'): bool`  

- `get_last_messagebox_caption(): string`  

- `get_last_messagebox_text(): string`  

- `get_last_messagebox_type(): string`  

- `clear_last_messagebox_info(): bool`  

- `set_default_authorization(string $login, string $password): bool`  

- `reset_default_authorization(): bool`  

- `set_default_certificate(string $text): bool`  

- `enable_download_file_dialog(bool $enable): bool`  

- `is_enable_download_file_dialog(): bool`  

- `set_default_download(string $folder): bool`  

- `reset_default_download(): bool`  

- `get_last_download_id(): int`  

- `is_download_complete(int $id): bool|int`  

- `get_download_info(int $id, string $infoPart = 'all'): string`  

- `cancel_download(int $id): bool`  

- `wait_download_and_get_file_path(int $wait_time_in_seconds = 3000): string`  

- `set_accept(string $accept_string): bool`  

- `set_accept_language(string $accept_string): bool`  

- `set_language(string $language = ''): bool`  

- `set_accept_encoding(string $accept_string): bool`  

- `set_referer(string $referer = ''): bool`  

- `get_referer(): string`  

- `set_platform(string $platform = '', string $cpuClass = ''): bool`  

- `get_cpu_class(): string`  

- `set_geo(string $latitude = '', string $longitude = '', string $accuracy = '', string $altitude = '', string $altitudeAccuracy = '', string $heading = '', string $speed = ''): bool`  

- `set_permissions(string $state = ''): bool`  

- `set_hardware_info(int $hardwareConcurrency = -1, int $deviceMemory = -1, int $devicePixelRatio = -1): bool`  

- `set_screen_resolution(int $width = -1, int $height = -1, int $pixelDepth = -1): bool`  

- `set_app_info(string $appName = '', string $appCodeName = '', string $appMinorVersion = '', string $product = '', string $productSub = '', string $vendor = '', string $vendorSub = ''): bool`  

- `set_plugins_info(string $plugins_info = '', string $mime_types = ''): bool`  

- `set_time_zone(int $time_zone = -100): bool`  

- `set_internationalization(string $locale = '', string $timeZone = '', string $calendar = '', string $numberingSystem = '', string $year = '', string $month = '', string $day = ''): bool`  

- `set_touch_info(string $max_points = '', string $ontouchevent = ''): bool`  

- `set_canvas_toDataURL(string $toDataURL = '', string $jsChangeNoise = ''): bool`  

- `set_random_webgl_fingerprint(bool $enable = true, string $noiseImage = '', string $noiseParams = '', string $unmaskedVendor = '', string $unmaskedRenderer = '', string $glVersion = '', string $shadingLanguageVersion = '', string $vendor = '', string $renderer = ''): bool`  

- `set_webgl_params(XHEWebGLParams $webgl_params): bool`  

- `set_random_audio_fingerprint(string $noiseAudio = '', string $noiseFrequence = ''): bool`  

- `set_random_bounds_fingerprint(int $noise = -1): bool`  

- `set_battery_api(string $level = '', bool $charging = true, string $charging_time = '', string $discharging_time = '', bool $refresh = false): bool`  

- `paste(string $text = ''): bool`  

- `save_page_as(string $file): bool`  

- `get_zoom(): string`  

- `set_zoom(int $zoom): bool`  

- `run_command(string $command): bool`  

- `send_get_query(string $url, string $data = '', bool $use_current_proxy = true): string|bool`  

- `send_post_query(string $url, string $data = '', string $type = 'application/x-www-form-urlencoded', bool $set_as_page = false, string $add_header = '', bool $use_current_proxy = true): string|bool`  

- `check_internet_connection(): bool`  

- `check_connection(string $url, int $timeout, bool $use_cache = false, int $num = -1): bool`  

- `clear_cache(): bool`  

- `clear_history(): bool`  

- `clear_address_bar_history(): bool`  

- `set_redraw(bool $enable): bool`  

- `set_fps(int $fps): bool`  

- `recreate(): bool`  

- `save_profile(string $path, string $name = '', string $description = ''): bool`  

- `load_profile(string $path): bool`  

- `set_default_profile_path(string $path): bool`  

- `get_cli(): string`  

- `set_cli(string $cli): bool`  

- `start_video_record(string $path, int $fps = 10, int $quality = 70, int $x = -1, int $y = -1, int $width = -1, int $height = -1, bool $as_gray = false, float $zoom = 0.3): bool`  

- `stop_video_record(): bool`  

- `clear_cash(): bool`  

- `disable_download_file_dialog(bool $enable): bool`  

- `is_disable_download_file_dialog(): bool`  

- `change_cookies_folder(string $folder): bool`  

- `change_cache_folder(string $folder): bool`  

- `set_accept_charset(string $accept_string): bool`  

- `set_internazionalization(string $locale = '', string $timeZone = '', string $calendar = '', string $numberingSystem = '', string $year = '', string $month = '', string $day = ''): bool`  

- `add_plugins(array $paths_to_plugins, bool $refresh = true): bool`  

- `get_webdriver_session(): string`  

---

### `XHEBypasscaptcha` — XHEBypasscaptcha

**Методы**:
- `set_system_key(mixed $key): void`  

- `get_last_capcha_filename(): string`  

- `get_last_capcha_result(): mixed`  

- `__construct(): void`  

- `recognize(string $file): mixed|null`  

- `report(int $result): void`  

- `get_last_capcha_id(): mixed`  

- `get_balance(): mixed`  

---

### `XHECheapsms` — XHECheapsms

**Методы**:
- `__construct(string $api = '', string $servis = 'https://cheapsms.pro', string $ref = ''): void`  

---

### `XHEConnection` — For connect to: RAS, VPN, PROXY

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `dial_ras(string $name, string $login, string $password): bool`  

- `hang_up_ras(): bool`  

- `create_vpn(string $name, string $server, string $user, string $password, string $psk, int $type): bool`  

- `get_name_by_number_ras(int $number): string`  

- `get_all_connection_ras(): string`  

- `restart_lan_by_name(string $name): bool`  

- `restart_lan_by_number(int $number): bool`  

- `set_local_ip(int $number, string $ip, string $subnetMask = '', string $gateway = '', string $defaultDNS = '', string $subDNS = ''): bool`  

- `get_local_ip(): string`  

- `get_real_ip(): string`  

- `get_mac_address_by_number(int $number): string`  

- `set_mac_address_by_number(int $number, string $mac): bool`  

- `check_ping_site(string $site): bool`  

- `is_connect_to_internet(): bool`  

- `get_connection_parameters(): string`  

- `enable_proxy(string $connection, string $proxy): bool`  

- `disable_proxy(string $connection): bool`  

- `get_current_proxy(string $connection): string`  

---

### `XHEFTP` — Perform operations with the FTP server

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(string $server, string $user = '', string $password = '', string $iport = '', bool $flag_passive = true, int $timeout = -1, string $encoding = ''): bool`  

- `disconnect(string $server): bool`  

- `disconnect_all(): bool`  

- `list_files(string $server, string $folder = ''): ?array`  

- `list_folders(string $server, string $folder = ''): ?array`  

- `is_directory_exists(string $server, string $dir_name): bool`  

- `create_directory(string $server, string $dir_name): bool`  

- `remove_directory(string $server, string $dir_name): bool`  

- `clear_directory(string $server, string $dir_name): bool`  

- `get_directory(string $server, string $remote_folder, string $local_folder, bool $flag_file_exist = true): bool`  

- `put_directory(string $server, string $local_folder, string $remote_folder): bool`  

- `is_file_exists(string $server, string $remote_file): bool`  

- `get_file(string $server, string $remote_file, string $local_file, bool $flag_file_exist = true): bool`  

- `put_file(string $server, string $local_file, string $remote_file, bool $flag_file_exist = true): bool`  

- `remove_file(string $server, string $file_name): bool`  

- `rename(string $server, string $exist_file_name, string $new_file_name): bool`  

- `command(string $server, string $command, string $working_folder): mixed`  

- `command_texts(string $server, string $command, string $working_folder): ?array`  

- `create_directoy(string $server, string $dir_name): bool`  

- `disconect(string $server): bool`  

- `disconect_all(): bool`  

---

### `XHEHarvestor` — Для сбора страниц сайтов

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `init(string $in_file, string $proxy_file = '', bool $proceed_js = true): bool`  

- `make_screenshots(bool $enable = true): bool`  

- `set_browser_size(int $width, int $height): bool`  

- `start(bool $is_wait = true): bool`  

- `stop(): bool`  

- `is_finished(): bool`  

- `get_html(int $position): string`  

- `get_screenshot_path(int $position): string`  

- `get_completed_count(): int`  

---

### `XHEMail` — To send and receive emails using SMTP, IMAP, POP3 protocols

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_proxy(string $proxy): bool`  

- `send_mail_via_outlook(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): bool`  

- `smtp_connect(string $server, int $port, string $login, string $password, int $ssl_option = 1, string $cert_type = 's, c, h, e', int $timeout = 3000, string $log_path = ''): bool`  

- `smtp_disconnect(): bool`  

- `check_smtp_auth(): bool`  

- `send_mail_via_smtp(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): bool`  

- `pop3_connect(string $server, int $port, string $login, string $password, int $ssl_option = 1, string $cert_type = 's, c, h, e', int $timeout = 3000, string $log_path = ''): bool`  

- `pop3_disconnect(): bool`  

- `get_message_count_via_pop3(int $timeout = 300): int`  

- `get_message_by_number_via_pop3(int $number, int $timeout = 300): XHEMailMessage`  

- `get_message_by_id_via_pop3(string $id, int $timeout = 300): XHEMailMessage`  

- `get_message_by_subject_via_pop3(string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `get_message_by_from_via_pop3(string $from, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `get_message_by_attachment_name_via_pop3(string $name, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `get_message_by_text_via_pop3(string $text, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `delete_message_by_number_via_pop3(int $number, int $timeout = 300): bool`  

- `delete_message_by_from_via_pop3(string $from, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `delete_message_by_subject_via_pop3(string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `delete_message_by_text_via_pop3(string $text, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `delete_all_messages_via_pop3(int $timeout = 300): bool`  

- `imap_connect(string $server, int $port, string $login, string $password, int $ssl_option = 1, string $cert_type = 's, c, h, e', int $timeout = 3000, string $log_path = ''): bool`  

- `imap_disconnect(): bool`  

- `get_message_count_via_imap(string $folder = '', int $timeout = 300): int`  

- `get_message_by_number_via_imap(string $folder, int $number, int $timeout = 300): XHEMailMessage`  

- `get_message_by_id_via_imap(string $folder, string $id, int $timeout = 300): XHEMailMessage`  

- `get_message_by_subject_via_imap(string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `get_message_by_from_via_imap(string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `get_message_by_text_via_imap(string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `get_message_by_attachment_name_via_imap(string $folder, string $name, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage`  

- `delete_message_by_number_via_imap(string $folder, int $number, int $timeout = 300): bool`  

- `delete_message_by_id_via_imap(string $folder, string $id, int $timeout = 300): bool`  

- `delete_all_messages_via_imap(string $folder, int $timeout = 300): bool`  

- `move_message_by_number_via_imap(string $from_folder, string $to_folder, int $number, int $timeout = 300): bool`  

- `move_message_by_id_via_imap(string $from_folder, string $to_folder, string $id, int $timeout = 300): bool`  

- `move_message_by_subject_via_imap(string $from_folder, string $to_folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `move_message_by_from_via_imap(string $from_folder, string $to_folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `move_message_by_text_via_imap(string $from_folder, string $to_folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `save_message_attachments_by_number_via_imap(string $path, string $folder, int $number, int $timeout = 300): bool`  

- `save_message_attachments_by_id_via_imap(string $path, string $folder, string $id, int $timeout = 300): bool`  

- `save_message_attachments_by_from_via_imap(string $path, string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `save_message_attachments_by_subject_via_imap(string $path, string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `save_message_attachments_by_text_via_imap(string $path, string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300): bool`  

- `set_message_readed_by_id_via_imap(string $folder, string $id, bool $is_readed = true, int $timeout = 300): bool`  

- `add_message_flag_by_id_via_imap(string $folder, string $id, string $flag, int $timeout = 300): bool`  

- `add_message_via_imap(string $folder, string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): mixed`  

---

### `XHEMsExchange` — To work with email using the MS Exchange API

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(string $url, string $email = '', string $password = ''): bool`  

- `disconnect(): bool`  

- `send_mail(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', string $replyTo = '', array $attachments = null, int $timeout = 300): bool`  

- `forward(string $folder, string $id, string $to, int $timeout = 300): bool`  

- `reply(string $folder, string $id, string $subject, string $message, int $type, string $cc = '', string $bcc = '', array $attachments = null, bool $replyAll = false, int $timeout = 300): bool`  

- `get_folder_id_by_name(string $folder = '', int $timeout = 300): string`  

- `get_folders(string $folder = '', bool $firstLevelOnly = true, int $timeout = 300): ?array`  

- `get_message_count(string $folder = '', bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): int`  

- `get_message_by_number(string $folder, int $number, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_number_as_xhe_obj(string $folder, int $number, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_subject(string $folder, string $subject, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_subject_as_xhe_obj(string $folder, string $subject, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_from(string $folder, string $from, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_from_as_xhe_obj(string $folder, string $from, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_text(string $folder, string $text, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_category(string $folder, string $category, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_attachment_name(string $folder, string $name, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object`  

- `get_message_by_id(string $folder, string $id, int $timeout = 300): ?object`  

- `delete_message_by_id(string $folder, string $id, int $timeout = 300): bool`  

- `delete_all_messages(string $folder, int $timeout = 300): bool`  

- `move_message_by_id(string $from_folder, string $to_folder, string $id, int $timeout = 300): string`  

- `save_message_attachments_by_id(string $folderPath, string $folder, string $id, int $timeout = 300): bool`  

- `set_message_readed_by_id(string $folder, string $id, bool $is_readed = true, int $timeout = 300): bool`  

- `get_message_categories_by_id(string $folder, string $id, int $timeout = 300): ?array`  

- `add_message_category_by_id(string $folder, string $id, string $category, int $timeout = 300): bool`  

- `remove_message_category_by_id(string $folder, string $id, string $category, int $timeout = 300): bool`  

- `add_message_flag_by_id(string $folder, string $id, string $flag, int $timeout): bool`  

---

### `XHEOnlineSimRu` — XHEOnlineSimRu - класс для работы с API сервиса onlinesim.ru

**Методы**:
- `__construct(): void`  

- `login(string $user, string $password, string $email): mixed`  

- `getServiceList(): mixed`  

- `getNum(string $service, string $form = '', string $forward_number = '', string $forward_minutes = '', string $clean_call = '', string $simoperator = '', string $extension = '', string $region = ''): mixed`  

- `setForwardStatusEnable(string $tzid): mixed`  

- `getState(string $tzid, string $message_to_code = '', string $form = '', string $orderby = ''): mixed`  

- `getOperations(): mixed`  

- `setOperationRevise(string $tzid): mixed`  

- `setOperationOk(string $tzid): mixed`  

- `getBalance(): mixed`  

- `getService(): mixed`  

- `getServiceNumber(string $service): mixed`  

- `getNumRepeat(string $service, string $number): mixed`  

- `forwardingList(string $id = '', string $page = '', string $sort = ''): mixed`  

- `forwardingSave(string $id, string $minutes = '', string $auto = '', string $forward_number = '', string $max_minutes = ''): mixed`  

- `forwardingRemove(string $id): mixed`  

- `getForwardPaymentsList(string $id): mixed`  

---

### `XHEOutlook` — Для работы с электронной почтой E-mail с помощью приложения Outlook

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `send_mail(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): bool`  

- `send_image(string $from, string $to, string $subject, string $image_path, string $signature = '', string $cc = '', string $bcc = '', string $replyTo = '', int $timeout = 300): bool`  

- `open(bool $show = false): bool`  

- `close(): bool`  

- `kill(): bool`  

- `update(bool $show = false): bool`  

- `set_default_folder(string $folder = ''): bool`  

- `get_folders(string $folder = ''): ?array`  

- `get_accounts(): ?array`  

- `logon(string $profile, string $password = ''): bool`  

- `logoff(): bool`  

- `get_message_count(string $folder = '', int $timeout = 300, string $readed = 'all'): int`  

- `get_message_count_by_from(string $folder, string $from, bool $exactly = false, int $timeout = 300, string $readed = 'all'): int`  

- `get_message_count_by_subject(string $folder, string $subject, bool $exactly = false, int $timeout = 300, string $readed = 'all'): int`  

- `get_message_count_by_text(string $folder, string $text, bool $exactly = false, int $timeout = 300, string $readed = 'all'): int`  

- `get_message_by_number(string $folder, int $number, int $timeout = 300, string $readed = 'all'): XHEMailMessage`  

- `get_message_by_subject(string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage`  

- `get_message_by_from(string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage`  

- `get_message_by_text(string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage`  

- `get_message_by_category(string $folder, string $category, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage`  

- `get_message_by_attachment_name(string $folder, string $name, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage`  

- `get_message_by_id(string $folder, string $id, int $timeout = 300): XHEMailMessage`  

- `delete_message_by_number(string $folder, int $number, int $timeout = 300): bool`  

- `delete_all_messages(string $folder, int $timeout = 300): bool`  

- `move_message_by_number(string $from_folder, string $to_folder, int $number, int $timeout = 300, string $readed = 'all'): bool`  

- `move_message_by_subject(string $from_folder, string $to_folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `move_message_by_from(string $from_folder, string $to_folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `move_message_by_text(string $from_folder, string $to_folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `save_message_attachments_by_number(string $path, string $folder, int $number, int $timeout = 300, string $readed = 'all'): bool`  

- `save_message_attachments_by_from(string $path, string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `save_message_attachments_by_subject(string $path, string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `save_message_attachments_by_text(string $path, string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `set_message_readed_by_number(string $folder, int $number, bool $is_readed = true, int $timeout = 300, string $readed = 'all'): bool`  

- `set_message_readed_by_from(string $folder, string $from, bool $exactly = false, bool $is_readed = true, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `set_message_readed_by_subject(string $folder, string $subject, bool $exactly = false, bool $is_readed = true, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `set_message_readed_by_text(string $folder, string $text, bool $exactly = false, bool $is_readed = true, int $number = 0, int $timeout = 300, string $readed = 'all'): bool`  

- `get_message_categories_by_id(string $folder, string $id, int $timeout = 300): string`  

- `add_message_categories_by_id(string $folder, string $id, string $category, int $timeout = 300): bool`  

- `remove_message_categories_by_id(string $folder, string $id, string $category, int $timeout = 300): bool`  

---

### `XHEProxySwitcher` — Для организации хранения, обновления и получения значений из списка прокси

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `init(string $folder): bool`  

- `clear(): bool`  

- `add_proxies(string $proxies): bool`  

- `add_proxies_from_file(string $path): bool`  

- `add_proxies_from_url(string $url): bool`  

- `set_random_rotate_mode(bool $mode): bool`  

- `update(): bool`  

- `set_update_path(string $path): bool`  

- `set_update_url(string $url): bool`  

- `set_update_period(int $minutes): bool`  

- `set_update_proxy_count(int $count): bool`  

- `get_next_proxy(bool $delete = false): string`  

- `get_all_proxies(): string`  

- `get_proxy_count(): int`  

---

### `XHEProxyCheker` — Для тестирования Proxy

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `run(bool $is_wait = false): bool`  

- `stop(): bool`  

- `is_running(): bool`  

- `set_speed_testing(int $speed): bool`  

- `set_quality_testing(int $quality): bool`  

- `add_proxy(string $str_proxy): bool`  

- `add_proxy_from_file(string $path): bool`  

- `add_proxy_from_url(string $url): bool`  

- `delete_proxy(string $param_proxy = 'all'): bool`  

- `save_proxy(string $path, string $param_proxy = 'all'): bool`  

- `dedupe_proxy(): bool`  

- `get_count_proxy(string $param_proxy = 'all'): int`  

- `get_proxy(mixed $n, string $param_proxy = 'all'): mixed`  

- `get_fastest_proxy(string $param_proxy = 'all'): string`  

---

### `XHERaw` — Организация сбора в коллекции запросов HTTP, перенаправленных запросов HTTP и ответов на запросы и получения данных из этих коллекций

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `enable_all_streams(bool $enable = true): bool`  

- `enable_http_stream(bool $enable = true): bool`  

- `enable_https_stream(bool $enable = true): bool`  

- `save_server_log_to_window(): bool`  

- `save_browser_log_to_window(): bool`  

- `save_server_log_to_file(string $path): bool`  

- `save_browser_log_to_file(string $path): bool`  

- `get_last_request_url(int $num = -1): bool|string`  

- `get_last_request_frame_url(int $num = -1): bool|string`  

- `get_last_request_header(int $num = -1): bool|string`  

- `get_last_request_post_datas(int $num = -1, bool $decode = true): false|string[]`  

- `get_last_response_url(int $num = -1): bool|string`  

- `get_last_response_buffer(int $num = 1): bool|string`  

- `get_last_response_header(int $num = 1): bool|string`  

- `get_last_redirect_url(int $num = -1): bool|string`  

- `get_last_redirect_header(int $num = -1): bool|string`  

- `get_last_readed(int $num = -1): bool|string`  

- `set_arrays_count(int $num): bool`  

- `clear_last_requests_array(): bool`  

- `clear_last_responses_array(): bool`  

- `set_hook_on_begin_transaction(string $php_script_path): bool`  

- `set_hook_on_response(string $php_script_path): bool`  

- `set_hook_on_readed(string $php_script_path): bool`  

- `add_disabled_request_url(string $url, bool $exactly = false): bool`  

- `clear_disabled_request_urls_array(): bool`  

- `add_disabled_response_url(string $url, bool $exactly = false): bool`  

- `clear_disabled_response_urls_array(): bool`  

- `add_replace_rule(string $url, bool $exactly_url, string $find, string $replace): bool`  

- `clear_replace_rules(string $url, bool $exactly_url = false): bool`  

- `set_additional_request_header(string $header = ''): bool`  

- `set_next_url_for_open_in_new_tab(string $url = '', bool $exactly = false): bool`  

---

### `XHERest` — Для работы с REST API

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `request(string $method, string $url, string $resource, ?array $query_parameters = null, ?array $file_parameters = null): bool|string`  

- `set_authorization(string $login, string $password): bool`  

- `set_timeout(int $timeout): bool`  

---

### `XHERucapcha` — Для работы с API Rucaptcha

**Методы**:
- `__construct(string $server, bool $is_ssl = true): void`  

- `recognize_text(string $text): bool|string`  

- `recognize_like_images(string $filename): bool|string`  

- `recognize_invoice(string $filename): bool|string`  

- `recognize_recaptcha_2_with_text(string $filename, string $textinstructions): bool|string`  

- `recognize_recaptcha_2_with_image(string $filename, string $imageinstructions): bool|string`  

- `recognize_click_captcha(string $filename, string $textinstructions = ''): bool|string`  

- `recognize_rotate_captcha(string $filename, string $file_1, string $file_2 = '', string $file_3 = '', int $angle = 40): bool|string`  

- `recognize_recaptcha_v2(string $pageurl, string $googlekey, int $invisible = 0, string $proxy = '', string $proxytype = ''): bool|string`  

- `recognize_geetest(string $pageurl, string $gt, string $challenge, string $api_server = '', string $proxy = '', string $proxytype = ''): bool|string`  

---

### `XHES3` — Для работы с API S3

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(string $server, string $key = '', string $security_key = ''): bool`  

- `disconnect(string $server): bool`  

- `disconnect_all(): bool`  

- `list_files(string $server, string $bucket, string $folder = '', int $timeout = 3000): ?stdClass`  

- `list_folders(string $server, string $bucket, string $folder = '', int $timeout = 3000): ?stdClass`  

- `is_directory_exists(string $server, string $bucket, string $dir_name): bool`  

- `create_directory(string $server, string $bucket, string $dir_name): bool`  

- `remove_directory(string $server, string $bucket, string $dir_name, int $timeout = 3000): bool`  

- `clear_directory(string $server, string $bucket, string $dir_name, int $timeout = 3000): bool`  

- `is_file_exists(string $server, string $bucket, string $remote_file): bool`  

- `get_file(string $server, string $bucket, string $remote_file, string $local_file, bool $flag_fail_exist = true, int $timeout = 3000): bool`  

- `get_size(string $server, string $bucket, string $remote_file): int`  

- `get_meta(string $server, string $bucket, string $remote_file): ?array`  

- `put_file(string $server, string $bucket, string $local_file, string $remote_file, bool $flag_fail_exist = true, int $timeout = 3000): bool`  

- `get_folder(string $server, string $bucket, string $remote_folder, string $local_folder, int $timeout = 3000): bool`  

- `put_folder(string $server, string $bucket, string $local_folder, string $remote_folder, int $timeout = 3000): bool`  

- `remove_file(string $server, string $bucket, string $file_name): bool`  

---

### `XHESelenium` — Для работы с ядром Selenium в режиме 'Selenium'

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `foreground(): bool`  

- `maximize(): bool`  

- `minimize(): bool`  

- `fullscreen(): bool`  

- `set_pos(int $x, int $y): bool`  

- `set_size(int $width, int $height): bool`  

- `set_model_binary_path(string $model, string $path): bool`  

- `get_pages_count(): int`  

- `get_active_page(): int`  

- `set_active_page(int $page): bool`  

- `close_page(int $page): bool`  

- `close_all_pages(): bool`  

- `add_page(string $url = 'about:blank', string $type = 'tab'): bool`  

- `add_plugins(mixed $paths_to_plugins, bool $refresh = true): bool`  

- `get_webdriver_session(): string`  

---

### `XHESEO` — Для SEO исследования страницы сайта

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_alexa_rank(string $site): string`  

- `get_sitemap(string $site, string $file, int $timeout = 99999): string`  

- `get_all_sitemap_links(string $site, string $file, int $timeout = 99999, string $separator = '<br>'): string`  

- `get_all_outside_links(string $site, string $file, int $timeout = 99999, string $separator = '<br>'): string`  

---

### `XHESFTP` — Perform operations with server SFTP

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(string $server, string $user = '', string $password = '', int $iport = 22, int $timeout = -1): bool`  

- `disconnect(string $server): bool`  

- `disconnect_all(): bool`  

- `create_directory(string $server, string $dir_name): bool`  

- `remove_directory(string $server, string $dir_name): bool`  

- `get_file(string $server, string $remote_file, string $local_file, bool $flag_fail_exist = true): bool`  

- `put_file(string $server, string $local_file, string $remote_file, bool $flag_fail_exist = true): bool`  

- `remove_file(string $server, string $file_name): bool`  

---

### `XHESmsActivate` — For API SMS Activate

**Методы**:
- `__construct(string $api = '', string $servis = 'https://api.sms-activate.ae', string $ref = ''): void`  

---

### `XHESoap` — Perform operations for SOAP v.11 or v.12

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `set_version(int $version = 11): bool`  

- `set_action(string $action = ''): bool`  

- `set_headers(?array $headers): bool`  

- `call_simple_method(string $url, string $namespace, string $method): string`  

- `call_by_bodies(string $url, ?array $bodies): string`  

- `call_from_xml(string $url, string $xml, string $action = ''): string`  

---

### `XHESubmitter` — Для генерации случайных данных для заполнения форм

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `generate_random_name(string $lang = 'EN', string $sex_for_RU = 'man'): string`  

- `generate_random_second_name(string $lang = 'EN', string $sex_for_RU = 'man'): string`  

- `generate_random_nick_name(int $len): string`  

- `generate_random_street(string $lang): string`  

- `generate_random_city(string $lang): string`  

- `generate_random_region(string $lang): string`  

- `generate_random_country(string $lang): string`  

- `generate_random_number(int $min, int $max, bool $as_int = false): int|float`  

- `generate_random_text(int $len, int $type): string`  

---

### `XHETelegram` — Perform operations with Telegram API

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(int $api_id, string $api_hash): bool`  

- `disconnect(): bool`  

- `request_authorization(string $phone_number): string`  

- `authorization(string $phone_number, string $auth_hash, string $auth_code, string $auth_password = ''): string`  

- `get_chats(string $kind = 'all'): ?array`  

- `get_dialogs(int $folder_id = -1): ?array`  

- `get_members(int $chat_id): ?array`  

- `get_chat_messages(int $chat_id, int $from_offset = 0, string $offset_date = ''): mixed|null`  

- `get_last_messages(int $chat_id, int $count = 1): mixed|null`  

- `get_messages_count(int $chat_id): int`  

- `find_chat_messages(int $chat_id, string $text, string $begin_date = '', string $end_date = '', int $offset_id = 0): mixed|null`  

- `get_chat_id_by_name(string $name): int`  

- `join_chanel(int $chat_id): bool`  

- `send_message_to_chat(int $chat_id, string $message, string $schedule_date = ''): bool`  

- `send_media_to_chat(int $chat_id, string $message, string $path, string $schedule_date = ''): bool`  

- `send_album_to_chat(int $chat_id, string $message, array $paths_and_urls, string $schedule_date = ''): bool`  

- `send_message_to_contact(string $phone_number, string $message, string $schedule_date = ''): bool`  

- `repost_message(int $from_chat_id, int $message_id, int $to_chat_id, bool $is_forward = true): bool`  

---

### `XHEWebDav` — Perform operations with FTP server by WebDAV protocol

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `connect(string $server, string $user = '', string $password = ''): bool`  

- `disconnect(string $server): bool`  

- `disconnect_all(): bool`  

- `list_files(string $server, string $folder = ''): ?array`  

- `list_folders(string $server, string $folder = '', int $timeout = 3000): ?array`  

- `is_directory_exists(string $server, string $dir_name): bool`  

- `create_directory(string $server, string $dir_name): bool`  

- `remove_directory(string $server, string $dir_name, int $timeout = 3000): bool`  

- `clear_directory(string $server, string $dir_name, int $timeout = 3000): bool`  

- `get_folder(string $server, string $remote_folder, string $local_folder, int $timeout = 3000): bool`  

- `put_folder(string $server, string $local_folder, string $remote_folder, int $timeout = 3000): bool`  

- `is_file_exists(string $server, string $remote_file): bool`  

- `get_file(string $server, string $remote_file, string $local_file, bool $flag_fail_exist = true, int $timeout = 3000): bool`  

- `put_file(string $server, string $local_file, string $remote_file, bool $flag_fail_exist = true, int $timeout = 3000): bool`  

- `remove_file(string $server, string $file_name): bool`  

- `rename(string $server, string $exist_file_name, string $new_file_name): bool`  

---

### `XHEWebPage` — To manage the current browser pages

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_active_element(): XHEInterface`  

- `get_element_from_point(int $x, int $y): XHEInterface`  

- `get_title(): string`  

- `get_url(): string`  

- `get_encoding(): string`  

- `set_encoding(string $encoding): bool`  

- `get_source(): string`  

- `get_source_length(): int`  

- `save_source_to_file(string $filepath): bool`  

- `get_body(): string`  

- `set_body(string $body): bool`  

- `get_document_body(bool $as_html): string`  

- `get_body_before_prefix(string $prefix, bool $as_html = true): string`  

- `get_body_after_prefix(string $prefix, bool $as_html = true): string`  

- `get_body_inter_prefix(string $prefix1, string $prefix2, bool $as_html = true): string`  

- `get_body_inter_prefix_all(string $prefix1, string $prefix2, bool $as_html = true, int $shift1 = 0, int $shift2 = 0, string $separator = '<br>'): string`  

- `print_screen(string $filepath, int $xl = -1, int $yt = -1, int $xr = -1, int $yb = -1, bool $as_gray = false): bool`  

- `print_to_pdf(string $filepath): bool`  

- `print_body(string $filepath, int $xl = -1, int $yt = -1, int $xr = -1, int $yb = -1, bool $as_gray = false): bool`  

- `get_x_in_webpage_picture(string $picture_filepath, float $similar_koeff = 0.95, int $similar_algoritm = 5): int`  

- `get_y_in_webpage_picture(string $picture_filepath, float $similar_koeff = 0.95, int $similar_algoritm = 5): int`  

- `get_pos_in_webpage_picture(string $picture_filepath, float $similar_koeff = 0.95, int $similar_algoritm = 5): XHEPosition`  

- `get_url_size(string $url): int`  

- `load_web_page(string $url, int $size = 0, string $add_headers = ''): string`  

- `get_web_page_code(string $url): string`  

- `html_to_text(string $html): string`  

- `save_url_to_file(string $url, string $filepath, int $timeout = 9999): bool`  

- `get_domain(string $url = '', int $level = -1, bool $exclude_www = false): string`  

- `convert_to_idn(string $domain): false|string`  

- `convert_from_idn(string $domain): false|string`  

- `get_element_value_by_name(string $name): string`  

- `get_element_innerHtml_by_name(string $name): string`  

- `get_element_innerText_by_name(string $name): string`  

- `set_element_value_by_name(string $name, string $text): bool`  

- `click_on_element_by_name(string $name): bool`  

- `click_on_element_by_number(int $number): bool`  

- `click_on_element_by_inner_text(mixed $inner_text): bool`  

- `get_location_url(): string`  

---

### `XHEApplicationCompatible` — XHEApplicationCompatible

**Методы**:
- `set_winodw_position(int $x_pos, int $y_pos, int $width, int $height): bool`  

---

### `XHEWindowCompatible` — XHEWindowCompatible

**Методы**:
- `press_button_by_text_in_window_by_number(int $number, string $text, bool $exactly, true $visibled, true $mained): bool`  

- `set_window_text_by_child_number_in_window_by_number(int $number, int $child_number, string $text, bool $visibled, bool $mained): bool`  

- `send_message_by_number(int $number, string $message, string $wparam, string $lparam, bool $visibled, bool $mained): string`  

---

### `XHEWindowInterfacesCompatible` — XHEWindowInterfacesCompatible

**Методы**:
- `press_key_by_code(string $code): bool`  

---

### `XHEApplication` — Класс для управления приложением

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `dlg_question(string $message): string`  

- `get_dlg_input_string(string $dlg_name, string $dlg_text, string $default_answer = ''): string`  

- `get_dlg_select_file(string $path, string $action): string`  

- `get_dlg_select_folder(string $path, string $caption, string $action): string`  

- `dlg_select_image(string $folder, string $text, string $caption, bool $multi_select = false): string`  

- `dlg_verify_ocr(string $image_path, string $text_for_verify, string $text, string $caption): string`  

- `show_free_dlg(string $xml, bool $is_ret_xml = true, string $separator = '
'): string`  

- `dlg_captcha_from_image_number(int $number, string $frame = '-1'): string|bool`  

- `dlg_captcha_from_url(string $url): string|bool`  

- `dlg_captcha_from_url_exactly(string $url, bool $exactly = true, string $frame = '-1'): string|bool`  

- `set_window_position(int $x, int $y, int $width, int $height): bool`  

- `set_title(string $title): bool`  

- `set_blink(bool $blink): bool`  

- `show_left_pane(bool $show): bool`  

- `show_bottom_pane(bool $show): bool`  

- `enable_full_screen(bool $enable): bool`  

- `minimize_to_tray(): bool`  

- `minimize_to_tray_by_start(bool $minimize = true): bool`  

- `maximize(bool $hiding_mode = false): bool`  

- `show_from_tray(): bool`  

- `show_tray_icon(bool $show): bool`  

- `set_tray_icon(string $path): bool`  

- `set_tray_tooltip(string $tooltip): bool`  

- `set_foreground_window(): bool`  

- `set_always_on_top(bool $ontop): bool`  

- `get_cursor_type(int $x = -1, int $y = -1, bool $as_text = false): string`  

- `pause(int $timeout = 0): bool`  

- `exitapp(): bool`  

- `stop_script(): bool`  

- `restart(string $scriptpath = '', string $params = '', string $port = '', string $cache_folder = '', string $cookies_folder = '', int $pause_before_start_s = 0): bool`  

- `clear(): bool`  

- `quit(string $message = ''): bool`  

- `enable_quit(bool $enable_exit): bool`  

- `get_port(): string`  

- `get_install_id(): string`  

- `get_version(bool $extended = false): string`  

- `get_program_path(): string`  

- `get_program_folder(): string`  

- `get_plugin_status(string $name): string`  

- `get_settings_folder(): string`  

- `get_file_from_disk(string $path): bool|string`  

- `set_params_object_search(bool $regsense = false): bool`  

- `set_params_outofmemory_action(int $restart_type = 0): bool`  

- `set_dont_ask_me_again_mode(bool $mode = true): bool`  

- `set_script_as_unicode(bool $is_unicode = true): bool`  

- `block_input(bool $is_block = true): bool`  

- `start_rest_service(string $path, int $port, string $host = ''): bool`  

- `run_script(string $path, string $params = ''): string`  

- `run_as_bat(string $content, string $path, bool $show = false, int $timeout = 3000): bool`  

- `run_as_php(string $content, string $path, bool $show = false, string $params = '', int $timeout = 3000): string`  

- `run_as_python(string $content, string $path, bool $show = false, string $params = '', int $timeout = 3000): string`  

- `run_as_js(string $content, string $path, bool $show = false, string $params = '', int $timeout = 3000): string`  

- `run_as_console(string $path, bool $show = false, string $params = '', string $encoding = '', int $timeout = 3000): string`  

- `shell_execute(string $operat, string $file, string $param = '', string $dir = '', bool $show = true): bool|string`  

- `run_powershell_script(string $path, array $script_params = null, int $timeout = 3000): bool|string`  

- `kill_process(string $exe_name): bool`  

- `is_process_exists_by_name(string $name, bool $exactly = false): bool`  

- `is_process_exists_by_path(string $path, bool $exactly = false): bool`  

- `show_progress_bar(bool $show): bool`  

- `set_progress_range(int $min, int $max, int $step = 1): bool`  

- `set_progress_pos(int $pos): bool`  

- `step_progress(): bool`  

- `set_progress_text(string $text): bool`  

- `is_script_paused(): bool`  

- `impersonate_user(string $user, string $password, string $domain = ''): bool`  

- `undo_impersonate_user(): bool`  

- `set_winodw_position(int $x_pos, int $y_pos, int $width, int $height): bool`  

---

### `XHEDebug` — Для управления панелью отладки приложения

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `open_tab(string $page): bool`  

- `set_tab_content(string $page, string $text, bool $is_add = false): bool`  

- `save_tab_content_to_file(string $page, string $filepath, bool $is_add = false): bool`  

- `get_tab_content(string $page): string`  

- `clear_tab_content(string $page): bool`  

- `close_tab(string $page): bool`  

- `set_encoding(string $page, string $charset): bool`  

- `view_tab_as_text(string $page, bool $as_text = true): bool`  

- `close_tabs(): bool`  

- `message_box(string $text): bool`  

- `notification_box(string $rtf_text, int $show_time = 9999): bool`  

- `get_min_mem_size(): int`  

- `get_max_mem_size(): int`  

- `get_cur_mem_size(): int`  

- `get_free_physical_mem_size(): int`  

- `optimize_memory(bool $onlyGarbageCollector = false): bool`  

- `get_gui_resources(int $type): int`  

- `get_process_id(): int`  

- `get_cpu_usage(): int`  

- `set_hook(string $action, string $php_script): bool`  

- `show_extended_debug_pane(bool $is_show = true): bool`  

- `set_extended_debug_pane_pos(int $x, int $y, int $width, int $height): bool`  

- `set_extended_debug_pane_opacity(float $opacity = 0.4): bool`  

- `set_extended_debug_pane_colors(string $backColor, string $foreColor): bool`  

- `get_editor_text(bool $is_only_selected = false): string`  

- `get_cur_tab_path(): string`  

- `get_cur_script_path(): string`  

- `set_cur_script_path(string $path): bool`  

- `get_cur_script_folder(): string`  

- `is_script_run(): bool`  

- `run_current_script(string $params): bool`  

---

### `XHEScheduler` — Managing the script execution schedule in the application

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `add(string $path, int $type = 1, string $date = '', string $time = '', int $count = -1, bool $active = true, string $comments = '', string $add_params = ''): bool`  

- `delete(int $num_task): bool`  

- `edit(int $num_task, string $path, int $type = 1, string $date = '', string $time = '', int $count = -1, bool $active = true, string $comments = '', string $add_params = ''): bool`  

- `activate(int $num_task, bool $activate = true): bool`  

- `get(int $num_task, ?string $path_, ?string $type, ?string $date, ?string $time, ?string $count, ?string $active, ?string $comments, ?string $add_params): bool`  

- `get_count(): int`  

- `delete_all(): bool`  

- `activate_all(bool $activate = true): bool`  

- `kill_current_script(bool $kill = true): bool`  

---

### `XHEUI` — Для управления окнами с помощью библиотеки IUIAutomation4, только для OS Windows

**Методы**:
- `__construct(int $inner_number, string $server, string $password = ''): void`  

- `__destruct(): void`  

- `get_clone(): XHEUI`  

- `is_equal(XHEUI $ui): bool`  

- `get_window_interface(bool $find_in_parents = false): XHEWindowInterface`  

- `get_wi(bool $find_in_parents = false): XHEWindowInterface`  

- `screenshot(string $path, int $x = -1, int $y = -1, int $width = -1, int $heigth = -1, bool $as_gray = false): bool`  

- `get_info(): ?object`  

- `get_clickable_point(): ?object`  

- `get_supported_patterns(): ?array`  

- `get_supported_properties(): ?array`  

- `get_property(string $property): string`  

- `is_exist(): bool`  

- `get_rect(): ?object`  

- `invoke(): bool`  

- `focus(): bool`  

- `toggle(): bool`  

- `get_toggle_state(): int`  

- `expand(bool $is_expanded = true): bool`  

- `get_expanded_state(): int`  

- `select(bool $add_to_selected = false, bool $remove_from_selected = false): bool`  

- `is_selected(): bool`  

- `get_selection_container(): XHEUI`  

- `set_value(string $value): bool`  

- `get_value(): string`  

- `is_read_only(): bool`  

- `input(string $text, bool $with_clear = true): bool`  

- `get_text(): string`  

- `send_key_down(string $key, bool $is_key = false, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `send_key_up(string $key, bool $is_key = false, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `get_grid_rows(): int`  

- `get_grid_cols(): int`  

- `get_grid_item(int $row, int $col): XHEUI`  

- `get_grid_item_info(): ?object`  

- `get_grid(): XHEUI`  

- `is_multiselected(): bool`  

- `get_selected(): XHEUIS`  

- `scroll_vertical(float $scroll_percent): bool`  

- `scroll_horizontal(float $scroll_percent): bool`  

- `get_scroll_info(): ?object`  

- `scroll_into_view(): bool`  

- `dock(string $pos = 'left'): bool`  

- `get_dock_pos(): string`  

- `get_transform_info(): ?object`  

- `move(int $x, int $y): bool`  

- `resize(int $width, int $height): bool`  

- `rotate(float $degree): bool`  

- `get_window_info(): ?object`  

- `close(): bool`  

- `set_window_visual_state(string $state = 'normal'): bool`  

- `wait_for_input_idle(int $milliseconds): bool`  

- `get_interaction_state(): string`  

- `get_table_info(): ?object`  

- `get_column_headers(): XHEUIS`  

- `get_row_headers(): XHEUIS`  

- `realize(): bool`  

- `get_view_name(int $view_id): bool`  

- `set_current_view(int $view_id): bool`  

- `get_current_view(): int`  

- `get_supported_views(): ?array`  

- `get_from_point(int $x, int $y): ?XHEUI`  

- `get_by_property(string $property_name, mixed $property_value, string $tree_scope = 'subtree', bool $ignore_case = false, bool $exactly = true): XHEUI`  

- `get_by_properties(array $properties, string $tree_scope = 'subtree', bool $ignore_case = false): XHEUI`  

- `get_all_by_property(string $property_name, mixed $property_value, string $tree_scope = 'subtree', bool $ignore_case = false, bool $exactly = true): XHEUIS`  

- `get_all_by_properties(array $properties, string $tree_scope = 'subtree', bool $ignore_case = false): XHEUIS`  

- `get_top_parent(): XHEUI`  

- `get_parent(int $level = 0): XHEUI`  

- `get_next(int $number = 0): XHEUI`  

- `get_prev(int $number = 0): XHEUI`  

- `get_child(int $level = 0): XHEUI`  

- `get_all_parent(): XHEUIS`  

- `get_all_child(): XHEUIS`  

- `get_all_next(): XHEUIS`  

- `get_all_prev(): XHEUIS`  

- `mouse_move(int $dx = -1, int $dy = -1): bool`  

- `mouse_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_double_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_left_down(int $dx = -1, int $dy = -1): bool`  

- `mouse_left_up(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_down(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_up(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_move(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_double_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_left_down(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_left_up(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_down(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_up(int $dx = -1, int $dy = -1): bool`  

- `wait_for_ui_open_by_property(string $property_name, string $property_value, string $tree_scope = 'subtree', bool $ignore_case = false, int $wait_time_in_seconds = 120): bool`  

- `wait_for_ui_close_by_property(string $property_name, string $property_value, string $tree_scope = 'subtree', bool $ignore_case = false, int $wait_time_in_seconds = 120): bool`  

- `wait_for_ui_open_by_properties(array $properties, string $tree_scope = 'subtree', bool $ignore_case = false, int $wait_time_in_seconds = 120): bool`  

- `wait_for_ui_close_by_properties(array $properties, string $tree_scope = 'subtree', bool $ignore_case = false, int $wait_time_in_seconds = 120): bool`  

---

### `XHEUIS` — Класс-коллекция для управления окнами с помощью библиотеки IUIAutomation4, только для OS Windows

**Методы**:
- `__construct(string $inner_numbers, string $server, string $password = ''): void`  

---

### `XHEWindow` — Managing application windows in the operating system

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `get_count(bool $visibled = true, bool $mained = true): int`  

- `get_all_texts(bool $visibled = true, bool $mained = true): string`  

- `get_text_by_number(int $number, bool $visibled = true, bool $mained = true): string`  

- `get_number_by_text(string $text, bool $exactly = false, bool $visibled = true, bool $mained = true): int`  

- `get_child_count_by_number(int $number, bool $visibled = true, bool $mained = true): int`  

- `get_child_texts_by_number(int $number, bool $visibled = true, bool $mained = true): string`  

- `execute_open_file(string $text, string $path, string $btn_text, bool $exactly = true, bool $thread = false): bool`  

- `execute_download_file(string $path = ''): bool`  

- `execute_prompt(string $caption, string $text = '', string $btn_text = 'OK', bool $exactly = true): bool`  

- `execute_authorization(string $login = '', string $password = '', string $caption = 'Безопасность Windows'): bool`  

- `get_by_number(int $number, bool $mained = true, bool $visibled = true): XHEWindowInterface`  

- `get_by_text(string $text, bool $exactly = false, bool $mained = true, bool $visibled = true): XHEWindowInterface`  

- `get_by_class(string $class_name, bool $exactly = false, bool $mained = true, bool $visibled = true): XHEWindowInterface`  

- `get_by_point(int $x, int $y): XHEWindowInterface`  

- `get_by_hwnd(int $hwnd): XHEWindowInterface`  

- `get_foreground_window(): XHEWindowInterface`  

- `get_focused_window(): XHEWindowInterface`  

- `get_all(bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `get_all_by_number(string $numbers, bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `get_all_by_text(string $text, bool $exactly = false, bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `get_all_by_class(string $class_name, bool $exactly = false, bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `get_all_by_point(int $x, int $y, bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `get_all_by_thread_id(int $thread_id, bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `get_all_by_process_id(int $process_id, bool $mained = true, bool $visibled = true): XHEWindowInterfaces`  

- `wait_for_window_open_by_text(string $text, bool $exactly = true, bool $main = false, bool $visibled = false, int $wait_count = 300, int $wait_step = 1, bool $is_verbose = true): bool`  

- `wait_for_window_open_by_class(string $class_name, bool $exactly = true, bool $main = false, bool $visibled = false, int $wait_count = 300, int $wait_step = 1, bool $is_verbose = true): bool`  

- `wait_for_window_close_by_text(string $text, bool $exactly = true, bool $main = false, bool $visibled = false, int $wait_count = 300, int $wait_step = 1, bool $is_verbose = true): bool`  

- `wait_for_window_close_by_class(string $class_name, bool $exactly = true, bool $main = false, bool $visibled = false, int $wait_count = 300, int $wait_step = 1, bool $is_verbose = true): bool`  

- `press_button_by_text_in_window_by_number(int $number, string $text, bool $exactly, true $visibled, true $mained): bool`  

- `set_window_text_by_child_number_in_window_by_number(int $number, int $child_number, string $text, bool $visibled, bool $mained): bool`  

- `send_message_by_number(int $number, string $message, string $wparam, string $lparam, bool $visibled, bool $mained): string`  

---

### `XHEWindowInterface` — Интерфейс для управление с окнами приложений | Interface for manage with application windows

**Методы**:
- `__construct(int $inner_number, string $server, string $password = ''): void`  

- `__destruct(): void`  

- `get_clone(): XHEWindowInterface`  

- `get_ui_element(): XHEUI`  

- `get_ui(): XHEUI`  

- `set_text(string $text): bool`  

- `show(bool $on = true): bool`  

- `enable(bool $on): bool`  

- `focus(): bool`  

- `foreground(): bool`  

- `minimize(): bool`  

- `maximize(): bool`  

- `restore(): bool`  

- `close(): bool`  

- `move(int $x = -1, int $y = -1): bool`  

- `resize(int $width = -1, int $height = -1): bool`  

- `message(int $type, int $wparam, int $lparam): int`  

- `cut(): bool`  

- `copy(): bool`  

- `paste(string $text = ''): bool`  

- `clear(): bool`  

- `undo(): bool`  

- `screenshot(string $filepath, int $x = -1, int $y = -1, int $width = -1, int $heigth = -1, bool $as_gray = false, bool $with_non_client = false): bool`  

- `click_menu_item(string $path): bool`  

- `get_child_count(bool $include_subchildren = false): int`  

- `get_child_by_number(int $number, bool $include_subchildren = false): XHEWindowInterface`  

- `get_child_by_text(string $text, bool $exactly = false, bool $include_subchildren = false): XHEWindowInterface`  

- `get_child_by_class(string $class_name, bool $exactly = false, bool $include_subchildren = false): XHEWindowInterface`  

- `get_all_child_by_text(string $text, bool $exactly = false, bool $include_subchildren = false): XHEWindowInterfaces`  

- `get_all_child_by_class(string $class_name, bool $exactly = false, bool $include_subchildren = false): XHEWindowInterfaces`  

- `get_next(int $number = 0): XHEWindowInterface`  

- `get_prev(int $number = 0): XHEWindowInterface`  

- `get_parent(int $level = 0): XHEWindowInterface`  

- `get_owner(int $level = 0): XHEWindowInterface`  

- `get_all_child(bool $include_subchildren = false): XHEWindowInterfaces`  

- `get_all_next(): XHEWindowInterfaces`  

- `get_all_prev(): XHEWindowInterfaces`  

- `get_all_parent(): XHEWindowInterfaces`  

- `get_top_parent(): XHEWindowInterface`  

- `get_top_owner(): XHEWindowInterface`  

- `wait_for_input_idle(int $wait_time_in_seconds = 120): bool`  

- `wait_for_open_child_by_number(int $number, bool $include_subchildren = false, int $wait_time_in_seconds = 120): bool`  

- `wait_for_open_child_by_text(string $text, bool $exactly = false, bool $include_subchildren = false, int $wait_time_in_seconds = 120): bool`  

- `wait_for_open_child_by_class(string $class_name, bool $exactly = false, bool $include_subchildren = false, int $wait_time_in_seconds = 120): bool`  

- `get_text(): string`  

- `get_number(bool $visibled = true, bool $mained = true): int`  

- `get_style(bool $extended = false): string`  

- `get_class_name(): string`  

- `get_hwnd(): string`  

- `get_process_id(): string`  

- `get_thread_id(): string`  

- `get_x(bool $client = false): int`  

- `get_y(bool $client = false): int`  

- `get_width(bool $client = false): int`  

- `get_height(bool $client = false): int`  

- `is_exist(): bool`  

- `is_visible(): bool`  

- `is_enable(): bool`  

- `is_focus(): bool`  

- `is_foreground(): bool`  

- `is_child(): bool`  

- `is_minimize(): bool`  

- `is_maximize(): bool`  

- `send_mouse_move(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_double_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_left_down(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_left_up(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_click(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_down(int $dx = -1, int $dy = -1): bool`  

- `send_mouse_right_up(int $dx = -1, int $dy = -1): bool`  

- `mouse_move(int $dx = -1, int $dy = -1): bool`  

- `mouse_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_double_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_left_down(int $dx = -1, int $dy = -1): bool`  

- `mouse_left_up(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_click(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_down(int $dx = -1, int $dy = -1): bool`  

- `mouse_right_up(int $dx = -1, int $dy = -1): bool`  

- `send_key_down(string $key, bool $is_key = false, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `send_key_up(string $key, bool $is_key = false, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `input(string $string, string $timeout = '0:2'): bool`  

- `key(string $code, bool $is_key = false, bool $ctrl = false, bool $alt = false, bool $shift = false): bool`  

- `key_down(string $key): bool`  

- `key_up(string $key): bool`  

- `set_current_language(string $language): bool`  

- `press_key_by_code(string $code): bool`  

---

### `XHEWindowInterfaces` — Класс-коллекция для управления окнами приложений

**Методы**:
- `__construct(string $inner_numbers, string $server, string $password = ''): void`  

- `get_by_text(string $text, bool $exactly = false): \XHEWindowInterface|false`  

- `get_by_class_name(string $class_name, bool $exactly = false): \XHEWindowInterface|false`  

- `get_by_point(int $x, int $y): \XHEWindowInterface|false`  

---

### `XHEWindowsShell` — Для получения информации и управления OS Windows

**Методы**:
- `__construct(string $server, string $password = ''): void`  

- `shutdown(): bool`  

- `restart(): bool`  

- `logoff(): bool`  

- `keep_alive(): bool`  

- `get_screen_width(int $monitor_number = -1, bool $with_scale = true): int`  

- `get_screen_height(int $monitor_number = -1, bool $with_scale = true): int`  

- `get_screen_zoom(int $monitor_number = -1): int`  

- `set_screen_resolution(int $width, int $height): bool`  

- `screenshot(string $path, int $x = -1, int $y = -1, int $width = -1, int $height = -1, bool $as_gray = false, int $screen = 0): bool`  

- `get_windows_title(): string`  

- `get_windows_version(): string`  

- `get_windows_build(): string`  

- `get_windows_platform_id(): string`  

- `get_windows_sp_info(): string`  

- `get_computer_name(): string`  

- `get_user_name(): string`  

- `get_cpu_name(): string`  

- `get_system_date(): string`  

- `set_system_date(int $year, int $month, int $day): bool`  

- `get_system_time(): string`  

- `set_system_time(int $hour, int $minute, int $second): bool`  

- `set_system_time_synchro_period(int $seconds): bool`  

- `get_time_zone(string $type = 'utc_seconds_offset'): string`  

- `get_disk_free_space(string $disk): int`  

- `get_special_folder(string $folder): string`  

- `start_video_record(string $path, int $fps = 10, int $quality = 70, int $x = -1, int $y = -1, int $width = -1, int $height = -1, bool $as_gray = false, float $zoom = 0.3): bool`  

- `stop_video_record(): bool`  

---

### `XHEMailMessage` — Для представления объекта-сообщения E-mail

**Методы**:
- `__construct(string $content): void`  

---

### `XHEMsExchangeMailMessage` — Объект для представления письма с письмами полученными от ФО MsExchange

**Методы**:
- `__construct(string $content): void`  

---

