# Category `DOM`

## Class: XHEBaseObject

Base class XHEBaseObject to implementing request to API

### Methods

**__construct(string $server, string $password = ''): void**

Initialization

**call(string $command, int $timeout = -1): mixed**

Call a command on the server

**call_boolean(string $command, array $params, int $timeout = -1): bool**

Call a command on the server as boolean

**call_int(string $command, array $params, int $timeout = -1): int**

Call a command on the server as int

**call_get(string $command, array $params, int $timeout = -1): mixed**

Call a command on the server

**get_command_string(string $command, array $params): string**

Get command string

## Class: XHEBaseList

Базовый класс для классов реализующий запросы к ядру согласно правилам системы

### Methods

**__construct(string $inner_numbers, string $server, string $password = ''): void**

Constructor

**__call(string $name, array $arguments): array**



**offsetExists(mixed $offset): bool**



**offsetGet(mixed $offset): mixed**



**offsetSet(mixed $offset, mixed $value): void**



**offsetUnset(mixed $offset): void**



**getIterator(): Traversable**



**count(): int**



**get_count(): int**



**get(int $index): false|mixed**

Get element by index

## Class: XHEPosition

Для представления объекта координат

### Methods

**__construct(string $x, string $y): void**



## Class: XHERange

Для представления объекта Range для работы с Excel файлами

### Methods

**__construct(string $left, int $top, string $right, int $bottom): void**

Конструктор

**__toString(): string**



## Class: XHEFont

Для хранения данных Шрифта

### Methods

**__toString(): string**



## Class: XHEWebGLParams

WebGL Context Info

## Class: XHEBaseDOM

Base class for handling DOM elements in current loaded HTML page

## Class: XHEBaseDOMVisual

Base class for handling DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**wait_element_exist_by_number(int $number, string $frame = '-1'): bool**

Ожидание появления элемента DOM по номеру | Check and wait element exist by number

**wait_element_exist_by_name(string $name, string $frame = '-1'): bool**

Ожидание появления элемента DOM по атрибуту name | Check and wait element exist by name

**wait_element_exist_by_id(string $id, bool $exactly = true, string $frame = '-1'): bool**

Ожидание появления элемента DOM по атрибуту id | Check and wait element exist by id

**wait_element_exist_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): bool**

Ожидание появления элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**wait_element_exist_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): bool**

Ожидание появления элемента DOM по внутреннему HTML | Check and wait element exist by inner html

**wait_element_exist_by_outer_text(string $outer_text, bool $exactly = true, string $frame = '-1'): bool**

Ожидание появления элемента DOM по внешнему тексту | Check and wait element exist by outer text

**wait_element_exist_by_outer_html(string $outer_html, bool $exactly = true, string $frame = '-1'): bool**

Ожидание появления элемента DOM по внешнему HTML | Check and wait element exist by outer html

**wait_element_exist_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool**

Ожидание появления элемента DOM по значению атрибута | Check and wait element exist by attribute

**wait_element_exist_by_xpath(string $xpath): bool**

Ожидание появления элемента DOM по XPath | Check and wait element exist by xpath

**wait_element_exist_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, string $form_name, string $frame = '-1'): bool**

Ожидание появления элемента DOM по атрибуту в форме, форму найти по атрибуту name | Check and wait element exist by attribute in form by name

**wait_element_exist_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, int $form_number, string $frame = '-1'): bool**

Ожидание появления элемента DOM по атрибуту в форме, форму найти по номеру | Check and wait element exist by attribute in form by number

**click_by_number(int $number, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_by_name(string $name, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_by_id(string $id, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту id | Click on DOM element by id

**click_by_value(string $value, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту value | Click on DOM element by attribute 'value'

**click_by_alt(string $alt, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту alt | Click on DOM element by alt

**click_by_src(string $src, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту src | Click on DOM element by src

**click_by_href(string $url, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту href | Click on DOM element by href

**click_by_inner_text(string $text, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по внутреннему тексту | Click on DOM element by inner text

**click_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по внутреннему HTML | Click on DOM element by inner HTML

**click_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_by_number_by_form_number(int $number, int $form_number, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру в форме с заданным номером | Click on DOM element by number in form by form number

**click_by_name_by_form_number(string $name, int $form_number, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name в форме с заданным номером | Click on DOM element by name in form by form number

**click_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, int $form_number, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута в форме с заданным номером | Click on DOM element by attribute in form by form number

**click_by_number_by_form_name(int $number, string $form_name, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру в форме с заданным именем| Click on DOM element by number in form by form name

**click_by_name_by_form_name(string $name, string $form_name, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name в форме с заданным именем| Click on DOM element by name in form by form name

**click_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, string $form_name, string $frame = '-1', bool $wait_browser = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута в форме с заданным именем| Click on DOM element by attribute in form by form name

**click_random(string $frame = '-1', bool $wait_browser = true): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_number(int $number, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_name(string $name, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_id(string $id, mixed $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие элементу DOM, который найти по атрибуту id | Send event to DOM element by id

**send_event_by_href(string $url, mixed $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие элементу DOM, который найти по атрибуту href | Send event to DOM element by href

**send_event_by_inner_text(string $text, bool $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**send_event_by_inner_html(string $html, bool $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие элементу DOM, который найти по внутреннему HTML| Send event to DOM element by inner HTML

**send_event_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame = '-1', bool $wait_browser = true): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**set_focus_by_number(int $number, string $frame = '-1'): bool**

Задать фокус элементу DOM, который найти по номеру | Set focus to element by name

**set_focus_by_name(string $name, string $frame = '-1'): bool**

Задать фокус элементу DOM, который найти по атрибуту name | Set focus to element by name

**set_focus_by_href(string $href, bool $exactly = true, string $frame = '-1'): bool**

Задать фокус элементу DOM, который найти по атрибуту href | Set focus to element by href

**set_focus_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): bool**

Задать фокус элементу DOM, который найти по внутреннему тексту | Set focus to element by inner text

**set_focus_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): bool**

Задать фокус элементу DOM, который найти по внутреннему HTML | Set focus to element by inner HTML

**set_focus_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**set_value_by_number(int $number, string $value, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по номеру | Set value by number

**set_value_by_name(string $name, string $value, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name | Set value by name

**set_value_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $value, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту | Set value by attribute

**set_value_by_number_by_form_number(int $number, string $value, int $form_number, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по номеру и номеру формы | Set value by number in form by form number (no wait exist mode)

**set_value_by_name_by_form_number(string $name, string $value, int $form_number, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name и номеру формы | Set value by name in form by form number

**set_value_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, string $value, int $form_number, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту и номеру формы | Set value by attribute in form by form number

**set_value_by_number_by_form_name(int $number, string $value, string $form_name, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по номеру и атрибуту name формы | Set value by number in form by form name (no wait exist mode)

**set_value_by_name_by_form_name(string $name, string $value, string $form_name, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name и значению атрибута name формы | Set value by name in form by form name

**set_value_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, string $value, string $form_name, string $frame = '-1'): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту и атрибуту name формы | Set value by attribute in form by form name

**set_inner_text_by_number(int $number, string $text, string $frame = '-1'): bool**

Установить внутренний текст DOM элемента, который найти по значению атрибута name | Set inner text by number

**set_inner_text_by_name(string $name, string $text, string $frame = '-1'): bool**

Установить внутренний текст DOM элемента, который найти по значению атрибута name | Set inner text by name

**set_inner_text_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $text, string $frame = '-1'): bool**

Установить внутренний текст DOM элемента, который найти по значению атрибута | Set inner text by any attribute

**set_inner_html_by_number(int $number, string $html, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по номеру | Set inner HTML by number

**set_inner_html_by_name(string $name, string $html, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута name | Set inner HTML by name

**set_inner_html_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $html, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута | Set inner html by any attribute

**add_attribute_by_number(int $number, string $name_attr, string $value_attr, string $frame = '-1'): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**add_attribute_by_name(string $name, string $name_attr, string $value_attr, string $frame = '-1'): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту name| Add/Set attribute by name

**add_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Добавить/Установить атрибут DOM элемента, который найти по внутреннему тексту | Add/Set attribute by inner text

**add_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Добавить/Установить атрибут DOM элемента, который найти по внутреннему HTML | Add/Set attribute by inner HTML

**add_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**set_attribute_by_number(int $number, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Задать значение атрибута элемента DOM, который найти по номеру | Set attribute by number

**set_attribute_by_name(string $name, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Задать значение атрибута элемента DOM, который найти по атрибуту name | Set attribute by name

**set_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Задать значение атрибута элемента DOM, который найти по внутреннему тексту | Set any attribute by inner text

**set_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Задать значение атрибута элемента DOM, который найти по внутреннему HTML | Set any attribute by inner HTML

**set_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr, string $frame = '-1'): bool**

Задать значение атрибута элемента DOM, который найти по атрибуту | Set attribute by attribute

**remove_attribute_by_number(int $number, string $name_atr, string $frame = '-1'): bool**

Удалить атрибут DOM элемента, который найти по номеру | Remove attribute by number

**remove_attribute_by_name(string $name, string $name_atr, string $frame = '-1'): bool**

Удалить атрибут DOM у элемента, который найти по name | Remove attribute by name

**remove_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $frame = '-1'): bool**

Удалить атрибут DOM элемента, который найти по внутреннему тексту | Remove attribute by inner text

**remove_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $frame = '-1'): bool**

Удалить атрибут DOM элемента, который найти по внутреннему HTML | Remove attribute by inner HTML

**remove_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame = '-1'): bool**

Удалить атрибут DOM элемента, который найти по атрибуту | Remove attribute by attribute

**screenshot_by_number(string $file_path, int $number, string $frame = '-1', bool $as_gray = false): bool**

Сделать скриншот элемента с заданным номером

**screenshot_by_name(string $file_path, string $name, string $frame = '-1', bool $as_gray = false): bool**

Сделать скриншот DOM элемента, который найти по атрибуту name |Save screenshot to file by name

**screenshot_by_src(string $file_path, string $src, bool $exactly = true, string $frame = '-1', bool $as_gray = false): bool**

Сделать скриншот DOM элемента, который найти по атрибуту src | Save screenshot to file by number by src

**screenshot_by_attribute(string $file_path, string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1', bool $as_gray = false): bool**

Сделать скриншот DOM элемента, который найти по атрибуту | Save screenshot to file by attribute

**is_exist_by_number(int $number, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**is_exist_by_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**is_exist_by_id(string $id, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту id | Is exist by id (no wait exist mode)

**is_exist_by_href(string $href, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту href | Is element exist by href (no wait exist mode)

**is_exist_by_alt(string $alt, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту alt | Is element exist by alt (no wait exist mode)

**is_exist_by_src(string $src, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту src | Is element exist by src (no wait exist mode)

**is_exist_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**is_exist_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по внутреннему HTML | Is element exist by inner HTML (no wait exist mode)

**is_exist_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_by_xpath(string $xpath): bool**

Проверить существование DOM элемента по XPath | Is exist by XPath

**is_exist_by_attribute_by_form_number(string $atr_name, string $atr_value, bool $exactly, int $form_number, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту и номеру формы | Is element exist by attribute in form by number (no wait exist mode)

**is_exist_by_attribute_by_form_name(string $atr_name, string $atr_value, bool $exactly, string $form_name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту и атрибуту name формы | Is element exist by attribute in form by name (no wait exist mode)

**get_number_by_name(string $name, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по атрибуту name | Get attribute name by name

**get_number_by_id(string $id, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по атрибуту id | Get attribute name by id

**get_number_by_src(string $src, bool $exactly = true, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по атрибуту src | Get attribute name by src

**get_number_by_href(string $href, bool $exactly = true, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по атрибуту href | Get attribute name by href

**get_number_by_inner_text(string $innertext, bool $exactly = true, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по внутреннему тексту | Get number by inner text

**get_number_by_inner_html(string $innerhtml, bool $exactly = true, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по внутреннему HTML | Get number by inner HTML

**get_number_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1'): int**

Получить номер DOM элемента, который найти по атрибуту | Get number by attribute

**get_name_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута name DOM элемента по номеру | Get attribute name by number

**get_attribute_by_number(int $number, string $name_atr, string $frame = '-1'): string|bool**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_attribute_by_name(string $name, string $name_atr, string $frame = '-1'): string|bool**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_attribute_by_src(string $src, bool $exactly, string $name_atr, string $frame = '-1'): string|bool**

Получить значение атрибута DOM элемента по значению атрибута src | Get attribute by src

**get_attribute_by_inner_text(string $inner_text, bool $exactly, string $name_atr, string $frame = '-1'): string|bool**

Получить значение атрибута DOM элемента по внутреннему тексту | Get attribute by inner text

**get_attribute_by_inner_html(string $inner_html, bool $exactly, string $name_atr, string $frame = '-1'): string**

Получить значение атрибута DOM элемента по внутреннему HTML | Get attribute by inner HTML

**get_attribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame = '-1'): string|bool**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_value_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута value элемента DOM, который найти по номеру | Get value by number

**get_value_by_name(string $name, string $frame = '-1'): string|bool**

Получить значение атрибута value элемента DOM, который найти по атрибуту name | Get value by name

**get_value_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, string $frame = '-1'): string|bool**

Получить значение атрибута value элемента DOM, который найти по значению атрибута | Get value by attribute

**get_src_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута src элемента DOM, который найти по номеру | Get src by number

**get_src_by_name(string $name, string $frame = '-1'): string|bool**

Получить значение атрибута src элемента DOM, который найти по значению атрибута name | Get src by name

**get_alt_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута alt элемента DOM, который найти по номеру | Get alt by number

**get_alt_by_name(string $name, string $frame = '-1'): string|bool**

Получить значение атрибута alt элемента DOM, который найти по значению атрибута name | Get alt by name

**get_href_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута href элемента DOM, который найти по номеру | Get href by number

**get_href_by_name(string $name, string $frame = '-1'): string|bool**

Получить значение атрибута href элемента DOM, который найти по значению атрибута name | Get href by name

**get_href_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): string|bool**

Получить значение атрибута href элемента DOM, который найти по внутреннему тексту | Get href by inner text

**get_inner_text_by_number(int $number, string $frame = '-1'): string|bool**

Получить внутренний текст DOM элемента, который найти по номеру | Get inner text by number

**get_inner_text_by_name(string $name, string $frame = '-1'): string|bool**

Получить внутренний текст DOM элемента, который найти по атрибуту name | Get inner text by name

**get_inner_text_by_id(string $id, string $frame = '-1'): string|bool**

Получить внутренний текст DOM элемента, который найти по атрибуту id | Get inner text by id

**get_inner_text_by_href(string $href, bool $exactly = true, string $frame = '-1'): string|bool**

Получить внутренний текст DOM элемента, который найти по атрибуту href | Get inner text by href

**get_inner_text_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): string|bool**

Получить внутренний текст DOM элемента, который найти по значению атрибута | Get inner text by attribute

**get_inner_html_by_number(int $number, string $frame = '-1'): string|bool**

Получить внутренний HTML DOM элемента, который найти по номеру | Get inner HTML by number

**get_inner_html_by_name(string $name, string $frame = '-1'): string|bool**

Получить внутренний HTML DOM элемента, который найти по атрибуту name | Get inner HTML by name

**get_inner_html_by_id(string $id, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента, который найти по атрибуту id | Get inner HTML by id

**get_inner_html_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): string|bool**

Получить внутренний HTML DOM элемента, который найти по значению атрибута | Get inner html by attribute

**is_disabled_by_number(int $number, string $frame = '-1'): bool**

Проверить отключен или нет DOM элемент, который найти по номеру | Is disabled by number

**is_disabled_by_name(string $name, string $frame = '-1'): bool**

Проверить отключен или нет DOM элемент, который найти по значению атрибута name | Is disabled by name

**get_all_attributes_by_number(int $number, string $frame = '-1'): string**

Получить все названия атрибутов DOM элемента, который найти по номеру | Get all attributes names by number

**get_all_attributes_by_name(string $name, string $frame = '-1'): string**

Получить все названия атрибутов DOM элемента, который найти по атрибуту name | Get all attributes names by name

**get_all_attributes_by_src(string $src, bool $exactly = true, string $frame = '-1'): string**

Получить все названия атрибутов DOM элемента, который найти по значению атрибута src | Get all attributes names by src

**get_all_attributes_values_by_number(int $number, string $frame = '-1'): string**

Получить все значения атрибутов DOM элемента, который найти по номеру | Get all attributes values by number

**get_all_attributes_values_by_name(string $name, string $frame = '-1'): string**

Получить все названия атрибутов DOM элемента, который найти по значению атрибута name | Get all attributes values by name

**get_all_attributes_values_by_src(string $src, bool $exactly = true, string $frame = '-1'): string**

Получить все значения атрибутов DOM элемента, который найти по значению атрибута src | Get all attributes values by src

**get_all_events_by_number(int $number, string $frame = '-1'): string**

Получить все события-атрибуты DOM элемента, который найти по номеру | Get all events by number

**get_all_events_by_name(string $name, string $frame = '-1'): string**

Получить все события-атрибуты DOM элемента, который найти по значению атрибута name | Get all attribute events by name

**get_all_events_by_src(string $src, bool $exactly = true, string $frame = '-1'): string**

Получить все события-атрибуты DOM элемента, который найти по значению атрибута src | Get all events by src

**get_numbers_child_by_number(int $number, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string**

Получить номера потомков DOM элемента, который найти по номеру | Get the numbers of descendants of a DOM element found by number

**get_numbers_child_by_name(string $name, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string**

Получить номера потомков DOM элемента, который найти по значению атрибута name | Get the numbers of descendants of a DOM element found by the value of the name attribute

**get_numbers_child_by_id(string $id, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string**

Получить номера потомков DOM элемента, который найти по значению атрибута id | Get the numbers of descendants of a DOM element found by the value of the id attribute

**get_numbers_child_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $element_type = '', string $frame = '-1', bool $include_subchildren = false): string**

Получить номера потомков DOM элемента, который найти по значению атрибута | Get the numbers of descendants of a DOM element found by the value of the attribute value

**get_x_by_number(int $number, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по номеру | Get X of element by number

**get_x_by_name(string $name, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по атрибуту name | Get X of element by attribute name

**get_x_by_href(string $href, bool $exactly = true, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по атрибуту href | Get X of element by attribute href

**get_x_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по внутреннему текст | Get X of element by inner text

**get_x_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по внутреннему HTML | Get X of element by inner HTML

**get_x_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_number(int $number, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

**get_y_by_name(string $name, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по атрибуту name | Get Y of element by attribute name

**get_y_by_href(string $href, bool $exactly = true, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по атрибуту href | Get Y of element by attribute href

**get_y_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по внутреннему текст | Get Y of element by inner text

**get_y_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по внутреннему HTML | Get Y of element by inner HTML

**get_y_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

**get_width_by_number(int $number, string $frame = '-1'): int**

Получить ширину DOM элемента, который найти по номеру | Get width by number

**get_width_by_name(string $name, string $frame = '-1'): int**

Получить ширину DOM элемента, который найти по атрибуту name | Get width by name

**get_width_by_src(string $src, bool $exactly = true, string $frame = '-1'): int**

Получить ширину DOM элемента, который найти по атрибуту src | Get width by src

**get_width_by_href(string $href, bool $exactly = true, string $frame = '-1'): int**

Получить ширину DOM элемента, который найти по атрибуту href | Get width by href

**get_width_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int**

Получить ширину DOM элемента, который найти по атрибуту | Get width by attribute

**get_height_by_number(int $number, string $frame = '-1'): int**

Получить высоту DOM элемента, который найти по номеру | Get height by number

**get_height_by_name(string $name, string $frame = '-1'): int**

Получить высоту DOM элемента, который найти по атрибуту name | Get height by name

**get_height_by_src(string $src, bool $exactly = true, string $frame = '-1'): int**

Получить высоту DOM элемента, который найти по атрибуту src | Get height by src

**get_height_by_href(string $href, bool $exactly = true, string $frame = '-1'): int**

Получить высоту DOM элемента, который найти по атрибуту href | Get height by href

**get_height_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): int**

Получить высоту DOM элемента, который найти по атрибуту | Get height by attribute

**send_keyboard_input_by_number(int $number, string $string, string $timeout = '0:2', string $frame = '-1'): bool**

Выполнить эмуляцию события клавиатуры ввода текста в DOM элемент, который найти по номеру | Send keyboard input by number using JS events.

**send_keyboard_input_by_name(string $name, string $string, string $timeout = '0:2', string $frame = '-1'): bool**

Выполнить эмуляцию события клавиатуры ввода текста в DOM элемент, который найти по значению атрибута name | Send keyboard input by name using JS events.

**send_keyboard_input_by_inner_text(string $inner_text, bool $exactly, string $string, string $timeout = '0:2', string $frame = '-1'): bool**

Выполнить эмуляцию события клавиатуры ввода текста в DOM элемент, который найти по внутреннему тексту | Send keyboard input by inner text using JS events

**send_keyboard_input_by_inner_html(string $inner_html, bool $exactly, string $string, string $timeout = '0:2', string $frame = '-1'): bool**

Выполнить эмуляцию события клавиатуры ввода текста в DOM элемент, который найти по внутреннему HTML | Send keyboard input by inner HTML using JS events

**send_keyboard_input_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $string, string $timeout = '0:2', string $frame = '-1'): bool**

Выполнить эмуляцию события клавиатуры ввода текста в DOM элемент, который найти по внутреннему HTML | Send keyboard input by attribute using JS events

**get_count(string $frame = '-1'): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**get_count_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int**

Получить количество DOM элементов на странице, искать по значению атрибута | Get counts by attribute

**get_all_numbers_by_inner_text(string $text, bool $exactly = false, string $frame = '-1'): array**

Получить внутренние тексты всех DOM элементов, которых найти по внутреннему тексту | Get all numbers by inner text (no wait exist mode)

**get_all_numbers_by_inner_html(string $html, bool $exactly = false, string $frame = '-1'): array**

Получить номера всех DOM элементов, которых найти по внутреннему HTML | Get all numbers by inner HTML (no wait exist mode)

**get_all_numbers_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array**

Получить номера всех DOM элементов, которых найти по значению атрибута | Get all numbers by attribute (no wait exist mode)

**get_all_inner_texts(string $separator = '<br>', string $text_filter = '', string $frame = '-1'): string**

Получить все значения внутреннего текста у DOM элементов | Get all inner texts (no wait exist mode)

**get_all_inner_texts_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array**

Получить внутренние тексты всех DOM элементов, которых найти по значению атрибута | Get all inner text by attribute (no wait exist mode)

**get_all_inner_htmls_by_inner_text(string $text, bool $exactly = false, string $frame = '-1'): array**

Получить внутренние HTML всех DOM элементов, которых найти по внутреннему тексту | Get all inner HTMLs by inner text (no wait exist mode)

**get_all_inner_htmls_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array**

Получить внутренние HTML всех DOM элементов, которых найти по значению атрибута | Get all inner HTMLs by attribute (no wait exist mode)

**get_all_attributes_by_inner_text(string $attr_name_need, string $text, bool $exactly = false, string $frame = '-1'): array**

Получить значение атрибута всех DOM элементов, которых найти по внутреннему тексту | Get all attribute values by inner text (no wait exist mode)

**get_all_attributes_by_attribute(string $attr_name_need, string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): array**

Получить значение атрибута всех DOM элементов, которых найти по атрибуту | Get all attribute values by attribute (no wait exist mode)

**get_by_number(int $number, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по номеру | Get interface by number

**get_by_name(string $name, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту name | Get interface by name

**get_by_inner_text(string $inner_text, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по внутреннему тексту | Get interface by inner text

**get_by_inner_html(string $inner_html, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по внутреннему HTML | Get interface by inner HTML

**get_by_outer_text(string $outer_text, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по внешнему тексту | Get interface by outer text

**get_by_outer_html(string $outer_html, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по внешнему HTML | Get interface by outer html

**get_by_id(string $id, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту id | Get interface by id

**get_by_src(string $src, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту src | Get interface by src

**get_by_class(string $class, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту class | Get interface by class

**get_by_href(string $href, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту href | Get interface by href

**get_by_alt(string $alt, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту alt | Get interface by alt

**get_by_value(string $value, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту value | Get interface by value

**get_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): XHEInterface**

Получить интерфейс DOM элемента, который найти по атрибуту | Get interface by attribute

**get_by_properties(string $properties, string $frame = '-1'): XHEInterface**

Получить элемент с заданными свойствами | Get interface by properties

**get_by_xpath(string $xpath): XHEInterface**

Получить интерфейс DOM элемента, который найти по XPath | Get interface by XPath

**get_all(string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов | Get all interfaces

**get_all_by_number(string $numbers, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по номерам | Get all interfaces by numbers

**get_all_by_inner_text(string $inner_text, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по внутреннему тексту | Get all interfaces by inner text

**get_all_by_inner_html(string $inner_html, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по внутреннему HTML | Get all interfaces by inner HTML

**get_all_by_outer_text(string $outer_text, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по внешнему тексту | Get all interfaces by outer text

**get_all_by_outer_html(string $outer_html, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по внешнему HTML | Get all interfaces by outer HTML

**get_all_by_name(string $name, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту name | Get all interfaces by name

**get_all_by_id(string $id, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту id | Get all interfaces by id

**get_all_by_class(string $class, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту class | Get all interfaces by class

**get_all_by_src(string $src, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту src | Get all interfaces by src

**get_all_by_href(string $href, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту href | Get all interfaces by href

**get_all_by_alt(string $alt, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту alt | Get all interfaces by alt

**get_all_by_value(string $value, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту value | Get all interfaces by value

**get_all_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по атрибуту | Get all interfaces by attribute

**get_all_by_xpath(string $xpath): XHEInterfaces**

Получить все интерфейсы DOM элементов, найти по XPath | Get all interfaces by XPath

**get_all_by_properties(string $properties, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы DOM элементов, заданным свойствам | Get all interfaces by XPath

**run_js_by_number(int $number, string $js, string $frame = '-1'): string**

Выполнить JS для DOM элемента, который найти по номеру

**run_js_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $js, string $frame = '-1'): string**

Выполнить JS для DOM элемента, который найти по атрибуту

## Class: XHEBaseCaptcha_1

Базовый класс для классов которые работают с API сервисами по распознаванию каптч

### Methods

**getBaseUrl(): string**

Получить базовый URL для API | Get API base URL

**get_last_capcha_id(): string**

ID текущей капчи | Get last captcha ID капчи

**get_last_capcha_filename(): string**

Получить последний путь к файлу капчи | Get last captcha file

**get_last_capcha_result(): string**

Последний результат распознания | Get last captcha result

**__construct(string $server, int $soft_id = 0, bool $is_ssl = true): void**

Constructor

**call(string $command): string**

Выполнить команду | Call a command on the server

**set_default_params(): bool**

Задать параметры распознания по умолчанию (сбросить значения для полей) | Reset params to default

**recognize_image(string $filename): false|string**

Распознать картинку | Recognize image

**report_bug_capcha(string $key, string $id): string**

Послать отчет об ошибке при распознавании | Send report about bug captcha

**recognize(string $filename, string $apikey, string $path = '', bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, int $is_phrase = 0, int $is_regsense = 0, int $is_numeric = 0, int $min_len = 0, int $max_len = 0, int $language = 0, int $is_question = 0, int $is_calc = 0, string $instructions = '', string $textcaptcha = '', int $id_constructor = 0, int $is_invoice = 0, int $is_recaptcha = 0, string $textinstructions = '', string $imginstructions = '', int $coordinatescaptcha = 0, string $method = '', int $angle = 0, string $file_1 = '', string $file_2 = '', string $file_3 = '', int $is_audio_recaptcha = 0, int $is_solveaudio = 0): false|string**

Распознать капчу | Recognize

**get_result(string $apikey, string $path, string $task_id, bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, int $is_invoice = 0): false|string**

Получить результат выполнения задания по ID

**recognize_userrecaptcha(string $apikey, string $path, string $pageurl, string $googlekey, int $invisible = 0, string $proxy = '', string $proxytype = '', string $method = 'userrecaptcha'): bool|string**

Распознать капчу Recaptcha

**recognize_geetest_captcha(string $apikey, string $path, string $pageurl, string $gt, string $challenge, string $api_server = '', string $proxy = '', string $proxytype = '', string $method = 'geetest'): false|string**

Распознать GeeTest капчу | Recognize GeeTest captcha

## Class: XHEBaseSMS

API SMS service

### Methods

**__construct(string $api = '', string $servis = 'https://api.sms-activate.ae', string $ref = ''): void**

Constructor

**change_service(string $api, string $servis, string $ref): void**

Установить новые настройки SMS API сервиса | Change new settings for SMS API

**get_numbers_status(int $country = 0, string $operator = 'any'): false|string**

Запросить количество доступных номеров | Get numbers

**get_balance(): false|string**

Получить баланс | Get balance

**get_phone_number(string $service = 'ot', string $operator = 'any', int $country = 0): bool**

Получить новый номер телефона для сервиса | Get a new phone number for the service

**get_code(int $wt = 10, int $timeout = 10): bool**

Получить от API SMS сообщение с кодом (например для активации сервиса) | Receive SMS message with code from API

**set_status(int $status = 6): bool**

Изменить статуса активации для текущего номера | Change activation status for current number

## Class: XHEAnchor

For handling DOM anchor elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_all_hrefs(string $separator = '<br>', string $frame = '-1'): string**

Получить все значения атрибута href (ссылки) у DOM элементов anchor | Retrieves all href attributes from anchor elements in the DOM.

**get_all_hrefs_by_inner_text(string $inner_text, string $separator = '<br>', string $frame = '-1'): string**

Получить все значения атрибута href у DOM элемента anchor по внутреннему тексту элемента anchor | Get all attribute href values by inner text

**get_all_hrefs_by_inner_text_2(string $inner_text, bool $exactly = true, string $separator = '<br>', string $frame = '-1'): string**

Получить все значения атрибута href у DOM элемента anchor по внутреннему тексту элемента anchor | Get all attribute href values by inner text

**get_all_hrefs_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $separator = '<br>', string $frame = '-1'): string**

Получить все href с определенным значением атрибута | Retrieves all href attributes from anchor elements with a specific attribute name and value

**get_all_inner_texts_by_href(string $href, string $separator = '<br>', bool $exactly = true, string $frame = '-1'): string**

Получить все внутренние тексты | Retrieves all inner texts from anchor elements with a specific href

**get_all_external_inner_texts_and_hrefs(string $href, bool $navigate = false, string $separator = '<br>', string $frame = '-1'): string**

Получить все внешние ссылки и тексты anchor | Retrieves all inner texts and hrefs from anchor elements with a specific external href

**get_all_internal_inner_texts_and_hrefs(string $href, bool $navigate = false, string $separator = '<br>', string $frame = '-1'): string**

Получить все внутренние ссылки и тексты anchor для WEB страницы | Retrieves all inner texts and hrefs from anchor elements with a specific internal href

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Клик на DOM элемент по атрибуту | Click on element by any attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Выполнить событие на DOM элементе | Send event to element by any attribute

**is_exist_with_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Проверить существование DOM элемента по атрибуту | Is exist by attribute

**is_exist_with_attribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Проверить существование DOM элемента по атрибуту | Is anchor exist by attribute

**is_exist_with_name(string $name): bool**

Проверить существование DOM элемента по атрибуту name | Is anchor exist by name

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найдем по значению другого атрибута | Get the attribute value founded by attribute in frame

**is_exist_with_inner_text(string $text, bool $exactly = true): bool**

Проверить существование элемента DOM по внутреннему тексту | Is anchor exist by inner text

**is_exist_with_href(string $href, bool $exactly = true): bool**

Проверить существование элемента DOM по значению атрибута href | Is anchor exist by href

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найдем по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найдем по значению другого атрибута | Get attribute by attribute in frame by number

**remove_atribute_by_name(string $name, string $name_atr): bool**

Удалить атрибут DOM элемента, который найдем по значению атрибута name | Remove attribute by name

**remove_atribute_by_number(int $number, string $name_atr): bool**

Удалить атрибут DOM элемента, который найдем по номеру | Remove attribute by number

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найдем по номеру | Add (or set) attribute by number

**add_atribute_by_attribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найдем по атрибуту | Add (or set) attribute by attribute

**add_atribute_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найдем по атрибуту | Add (or set) attribute by attribute

**get_number_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): int**

Получить номер DOM элемента, который найдем по атрибуту | Get number by attribute

**set_focus_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): bool**

Установить фокус на DOM элемент, который найдем по атрибуту | Set focus by attribute

**is_exist_with_atribute_in_frame_by_number(string $atr_name, string $atr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найдем по атрибуту | Is exist by attribute

**remove_atribute_by_name_in_frame(string $name, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM у элемента, который найдем по name | Remove attribute by name

**remove_atribute_by_number_in_frame(int $number, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM элемента, который найдем по номеру | Remove attribute by number

**remove_atribute_by_attribute_in_frame_by_number(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM элемента, который найдем по атрибуту | Remove attribute by attribute

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найдем по атрибуту | Get x of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найдем по атрибуту | Get Y of element by attribute

**is_exist_by_atribute_in_frame(string $atr_name, string $atr_value, string $frame, bool $exactly = true): bool**

Проверить существование DOM элемента, который найдем по атрибуту | Is exist by attribute

**get_all_urls(string $separator = '<br>'): string**

Получить все значения атрибута href у DOM элементов anchor | Get all attribute href values

**get_all_urls_by_inner_text(string $inner_text, string $separator = '<br>'): string**

Получить все значения атрибута href у DOM элементов anchor найденных по внутреннему тексту | Get all attribute href values by inner text

**get_all_urls_in_frame(string $frame, string $separator = '<br>'): string**

Получить все значения атрибута href у DOM элементов anchor во фрэйме | Get all hrefs on page in frame

**get_all_urls_by_inner_text_in_frame(string $inner_text, string $frame, string $separator = '<br>'): string**

Получить все значения атрибута href (ссылки) у DOM элемента anchor по внутреннему тексту элемента anchor (без проверки существует ли элемент)| Get all attribute href values by inner text

**get_all_external_texts_and_url(string $url, bool $navigate = false, string $separator = '<br>'): string**

Получить все внешние ссылки и тексты anchor для WEB страницы (без проверки существует ли элемент)

**get_all_external_texts_and_url_in_frame(string $url, string $frame, string $separator = '<br>'): string**

Получить все внешние ссылки и тексты anchor для WEB страницы (без проверки существует ли элемент)

**click_within_iframe_by_name(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click by name in frame

**click_within_iframe_by_number(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_within_iframe_by_inner_text(string $text, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по внутреннему тексту | Click on DOM element by inner text

**click_within_iframe_by_href(string $url, mixed $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту href | Click on DOM element by href

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**remove_attribute_by_attribute_in_frame_by_number(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM элемента, который найти по атрибуту | Remove attribute by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_by_name_in_frame(string $name, string $frame): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**click_by_name_in_frame(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click by name in frame

**add_attribute_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_by_number_in_frame(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_by_href_in_frame(string $url, mixed $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту href | Click on DOM element by href

**click_by_inner_text_in_frame(string $text, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по внутреннему тексту | Click on DOM element by inner text

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**send_event_by_href_in_frame(string $url, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту href | Send event to DOM element by href

**send_event_by_atribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**send_event_by_attribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**set_focus_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**remove_attribute_by_name_in_frame(string $name, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM у элемента, который найти по name | Remove attribute by name

**remove_attribute_by_number_in_frame(int $number, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM элемента, который найти по номеру | Remove attribute by number

**remove_attribute_by_attribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $name_atr, string $frame_number): bool**

Удалить атрибут DOM элемента, который найти по атрибуту | Remove attribute by attribute

**is_exist_by_inner_text_in_frame(string $text, string $frame, bool $exactly = true): bool**

Проверить существование элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**is_exist_by_href_in_frame(string $href, string $frame, bool $exactly = true): bool**

Проверить существование DOM элемента, который найти по атрибуту href | Is element exist by href (no wait exist mode)

**is_exist_by_attribute_in_frame(string $atr_name, string $atr_value, string $frame, bool $exactly = true): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найдем по значению другого атрибута | Get the attribute value founded by attribute in frame

**get_all_inner_texts_in_frame(string $frame, string $separator = '<br>'): string**

Получить все значения внутреннего текста у DOM элементов anchor во фрэйме | Get all inner texts in frame

**get_all_hrefs_in_frame(string $frame, string $separator = '<br>'): string**

Получить все значения атрибута href у DOM элементов anchor во фрэйме | Get all hrefs on page in frame

**get_all_hrefs_by_inner_text_in_frame(string $inner_text, string $frame, string $separator = '<br>'): string**

Получить все значения атрибута href (ссылки) у DOM элемента anchor по внутреннему тексту элемента anchor (без проверки существует ли элемент)| Get all attribute href values by inner text

**get_all_external_inner_texts_and_hrefs_in_frame(string $url, string $frame, bool $navigate = false, string $separator = '<br>'): string**

Получить все внешние ссылки и тексты anchor для WEB страницы (без проверки существует ли элемент)

## Class: XHEB

For handling DOM elements tag <b> in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEBlockquote

For handling Blockquote DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEBody

For handling body DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**disable_onunload_message(string $frame = '-1'): bool**

Запретить сообщение, подтверждающее желание покинуть текущую страницу (без учета проверки: существует ли элемент) | Disable onunload message

**set_text_within_iframe_by_name(string $name, string $text, string $framenum): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута name | Set inner HTML by name

**set_text_within_iframe_by_number(int $number, string $text, string $framenum): bool**

Установить внутренний HTML DOM элемента, который найти по номеру | Set inner HTML by number

**get_text_within_iframe_by_name(string $name, string $framenum): string**

Получить внутренний HTML DOM элемента, который найти по атрибуту name | Get inner id by name

**get_text_within_iframe_by_number(int $number, string $framenum): string**

Получить внутренний HTML DOM элемента, который найти по номеру | Get inner HTML by number

**set_text_by_name(string $name, string $text, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута name | Set inner HTML by name

**set_text_by_number(int $number, string $text, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по номеру | Set inner HTML by number

**get_text_by_name(string $name, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента, который найти по атрибуту name | Get inner id by name

**get_text_by_number(int $number, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента | Get text by number

## Class: XHEButton

For handling button DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**



**click_within_iframe_by_name(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_within_iframe_by_number(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_inner_text(string $text, bool $exactly = true): bool**

Проверить существование элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_inner_text_in_frame_by_number(string $text, bool $exactly, string $frame_num): bool**

Проверить существование элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHECanvas

For handling canvas DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**draw_image_by_number(int $number, string $path, string $frame = '-1'): bool**

Нарисовать картинку с заданным номером

## Class: XHECheckButton

For handling checkbutton DOM elements  in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_all(string $frame = '-1'): bool**

Эмулировать клик по все элементам DOM левой клавишей мыши | Click on all elements (no wait exist mode)

**check_by_number(int $number, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс по номеру | Check checkbox by number

**check_by_name(string $name, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс по по значению атрибута name | Check checkbox by name

**check_by_value(string $value, bool $exactly, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс по значению атрибута value | Check checkbox by value

**check_by_attribute(string $attr_name, string $attr_value, bool $exactly, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс по значению атрибута | Check checkbox by attribute

**check_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, bool $check, int $form_number, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс по значению атрибута в форме с заданным номером (без учета проверки: существует ли элемент) | Check checkbox by attribute and form by form number

**check_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, bool $check, string $form_name, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс по значению атрибута в форме с заданным именем (без учета проверки: существует ли элемент) | Check checkbox by attribute and form by name

**check_all(bool $check = true, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс все элементы (без учета проверки: существует ли элемент) | Check all checkboxes

**is_check_by_name(string $name, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе чекбокс по номеру | Check box is checked by name

**is_check_by_number(int $number, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе чекбокс по номеру | Check box is checked by number

**is_check_by_value(string $value, bool $exactly = true, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе чекбокс по value | Check box is checked by value

**is_check_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе чекбокс по значению атрибута | Check box is checked by attribute

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**set_checked_by_name(string $name, bool $check): bool**

Отметить DOM элемент чекбокс по по значению атрибута name | Check checkbox by name

**set_checked_by_number(int $number, bool $check): bool**

Отметить DOM элемент чекбокс по номеру | Check checkbox by number

**set_checked_by_value(string $value, bool $check): bool**

Отметить DOM элемент чекбокс по значению атрибута value | Check checkbox by value

**set_all_checked(bool $check): bool**

Отметить DOM элемент чекбокс все элементы (без учета проверки: существует ли элемент) | Check all checkboxes

**is_checked_by_name(string $name): bool**

Проверить есть отметка на DOM элементе чекбокс по номеру | Check box is checked by name

**is_checked_by_number(int $number): bool**

Проверить есть отметка на DOM элементе чекбокс по номеру | Check box is checked by number

**is_checked_by_value(string $value): bool**

Проверить есть отметка на DOM элементе чекбокс по value | Check box is checked by value

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHECode

For handling code DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEDiv

For handling div DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEElement

For handling DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_tag_by_number(int $number, string $frame = '-1'): string**

Получить тэг DOM элемента по номеру | Get tag by number

**get_x_by_tag_by_number(string $tag, int $number, string $frame = '-1'): int**

Получить координату X DOM элемента с заданным тэг-ом по номеру

**get_y_by_tag_by_number(string $tag, int $number, string $frame = '-1'): int**

Получить координату Y DOM элемента с заданным тэг-ом по номеру

**get_all_by_tag(string $tag, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы элементов DOM с заданным тэг-ом

**convert_number(int $number, string $object_name, string $frame = '-1'): int**

Преобразовать номер элемента DOM в номер заданного объекта

**get_by_query_selector(string $selector, string $frame = '-1'): XHEInterface**

Получить интерфейс объекта через запрос (document.querySelector)

**get_all_by_query_selector(string $selector, string $frame = '-1'): XHEInterfaces**

Получить интерфейсы объектов через запросы (document.querySelectorAll)

**get_by_js(string $js, string $add_file = '', string $frame = '-1'): XHEInterface**

Получить интерфейс объекта используя js

**get_all_by_js(string $js, string $add_file = '', string $frame = '-1'): XHEInterfaces**

Получить интерфейсы объектов используя JS

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_element_value_by_name(string $name, string $frame = '-1'): string**

Получить значение атрибута value элемента DOM, который найти по атрибуту name | Get value by name

**get_element_innerText_by_name(string $name, string $frame = '-1'): string**

Получить внутренний текст DOM элемента, который найти по атрибуту name | Get inner text by name

**get_element_innerHtml_by_name(string $name, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента, который найти по атрибуту name | Get inner id by name

**get_element_innerText_by_number(int $number, string $frame = '-1'): string**

Получить внутренний текст DOM элемента, который найти по номеру | Get inner text by number

**get_element_innerHtml_by_number(int $number, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента, который найти по номеру | Get inner HTML by number

**get_element_innerText_by_id(string $id, string $frame = '-1'): string**

Получить внутренний текст DOM элемента, который найти по атрибуту id | Get inner text by id

**get_element_innerHtml_by_id(string $id, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента, который найти по атрибуту id | Get inner HTML by id

**get_element_attribute_by_name(string $name, string $attribute, string $frame = '-1'): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_element_attribute_by_number(int $number, string $attribute, string $frame = '-1'): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**is_exist_with_name(string $name): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**set_element_attribute_by_name(string $name, string $attribute, string $value): bool**

Задать значение атрибута элемента DOM, который найти по атрибуту name | Set attribute by name

**set_element_value_by_name(string $name, string $text): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name | Set value by name

**click_on_element_by_name(string $name): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_on_element_by_number(int $number): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_on_element_by_inner_text(string $inner_text, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по внутреннему тексту | Click on DOM element by inner text

**get_left_offset_on_page_by_att(string $name_attr, string $value_attr, bool $exactly = true, string $frame = '-1'): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_top_offset_on_page_by_att(string $name_attr, string $value_attr, bool $exactly = true, string $frame = '-1'): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

**get_left_offset_on_page_by_name(string $name): int**

Получить координату X DOM элемента, который найти по атрибуту name | Get X of element by attribute name

**get_top_offset_on_page_by_name(string $name): int**

Получить координату Y DOM элемента, который найти по атрибуту name | Get Y of element by attribute name

**get_left_offset_on_page_by_href(string $href, bool $exactly = false): int**

Получить координату X DOM элемента, который найти по атрибуту href | Get X of element by attribute href

**get_top_offset_on_page_by_href(string $href, bool $exactly = false): int**

Получить координату Y DOM элемента, который найти по атрибуту href | Get Y of element by attribute href

**get_left_offset_on_page_by_tag_by_number(string $tag, int $number): int**

Получить координату X DOM элемента с заданным тэг-ом по номеру

**get_top_offset_on_page_by_tag_by_number(string $tag, int $number): int**

Получить координату Y DOM элемента с заданным тэг-ом по номеру

**click_on_element_by_name_withiniframe(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_on_element_by_inner_text_withiniframe(string $inner_text, string $frame, bool $exactly): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по внутреннему тексту | Click on DOM element by inner text

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**send_event_by_href_in_frame(string $url, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту href | Send event to DOM element by href

**send_event_by_atribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**send_event_by_attribute_in_frame(string $atr_name, string $atr_value, bool $exactly, string $event, string $frame): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**set_text_html_by_attribute(string $attr_name, string $attr_value, string $html, bool $exactly = true, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута | Set inner html by any attribute

**set_inner_html_by_atribute(string $attr_name, string $attr_value, string $html, bool $exactly = true, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута | Set inner html by any attribute

**set_inner_text_by_atribute(string $attr_name, string $attr_value, string $text, bool $exactly = true, string $frame = '-1'): bool**

Установить внутренний HTML DOM элемента, который найти по значению атрибута | Set inner html by any attribute

## Class: XHEEmbed

For handling embed DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_in_by_number(int $number, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по номеру | Click on element by number

**click_in_by_name(string $name, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту name | Click on element by name

**click_in_by_src(string $src, bool $exactly = true, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту src | Click on element by src

**click_in_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту | Click on element by attribute

## Class: XHEFlash

For flash anchor DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_version_by_number(int $number, string $frame = '-1'): void**



**get_ready_state_by_number(int $number, string $frame = '-1'): void**



**is_playing_by_number(int $number, string $frame = '-1'): bool**



**play_by_number(int $number, string $frame = '-1'): bool**



**forward_by_number(int $number, string $frame = '-1'): bool**



**back_by_number(int $number, string $frame = '-1'): bool**



**stop_by_number(int $number, string $frame = '-1'): bool**



**go_to_frame_by_number(mixed $frame_number, int $number, string $frame = '-1'): bool**



**get_current_frame_by_number(int $number, string $frame = '-1'): void**



**get_frame_count_by_number(int $number, string $frame = '-1'): void**



**get_background_color_by_number(int $number, string $frame = '-1'): void**



**set_background_color_by_number(mixed $color, int $number, string $frame = '-1'): bool**



**get_movie_by_number(int $number, string $frame = '-1'): void**



**set_movie_by_number(mixed $path, int $number, string $frame = '-1'): bool**



**get_current_label_by_number(mixed $time, int $number, string $frame = '-1'): void**



**call_label_by_number(mixed $label, mixed $time, int $number, string $frame = '-1'): bool**



**call_frame_by_number(mixed $frame_number, mixed $time, int $number, string $frame = '-1'): bool**



**get_variable_by_number(mixed $name, int $number, string $frame = '-1'): void**



**set_variable_by_number(mixed $name, mixed $value, int $number, string $frame = '-1'): bool**



## Class: XHEFooter

For handling footer DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEForm

For handling form DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**submit_by_number(int $number, string $frame = '-1'): bool**

ВВыполнить отправку данных DOM элемента форма, который найти по номеру | Find form by number and call submit

**submit_by_name(string $name, string $frame = '-1'): bool**

Выполнить отправку данных DOM элемента форма, который найти по значению атрибута name | Find form by name and call submit

**submit_by_id(string $id, string $frame = '-1'): bool**

Выполнить отправку данных DOM элемента форма, который найти по значению атрибута id | Find form by id and call submit

**submit_by_action(string $action, bool $exactly = true, string $frame = '-1'): bool**

Выполнить отправку данных DOM элемента форма, который найти по значению атрибута action | Find form by action and call submit

**submit_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool**

Выполнить отправку данных DOM элемента форма, который найти по значению атрибута action | Find form by action and call submit

**reset_by_number(int $number, string $frame = '-1'): bool**

ВВыполнить сброс данных DOM элемента форма, который найти по номеру | Find form by number and reset

**reset_by_name(string $name, string $frame = '-1'): bool**

Выполнить сброс данных DOM элемента форма, который найти по значению атрибута name | Find form by name and reset

**get_action_by_number(int $number, string $frame = '-1'): string**

Получить значение атрибута action DOM элемента форма, который найти по номеру | Find form by number and get action

**get_action_by_name(string $name, string $frame = '-1'): string**

Получить значение атрибута action DOM элемента форма, который найти по значению атрибута name | Find form by name and get action

**get_action_by_id(string $id, string $frame = '-1'): string**

Получить значение атрибута action DOM элемента форма, который найти по значению атрибута id | Find form by id and get action

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_content_by_name(string $name, bool $as_html, string $frame = '-1'): string**

Получить внутренний внутренний текст или HTML DOM элемента, который найти по атрибуту name | Get content by name

**get_content_by_id(string $id, bool $as_html, string $frame = '-1'): string**

Получить внутренний внутренний текст или HTML DOM элемента, который найти по атрибуту id | Get content by id

**get_content_by_number(int $number, bool $as_html, string $frame = '-1'): string**

Получить внутренний текст или HTML DOM элемента, который найти по номеру | Get content by number

**get_all_elements_by_name(string $name, string $element_type = '', string $frame = '-1'): string**

Получить номера потомков DOM элемента, который найти по значению атрибута name | Get the numbers of descendants of a DOM element found by the value of the name attribute

**get_all_elements_by_id(string $id, string $element_type = '', string $frame = '-1'): string**

Получить номера потомков DOM элемента, который найти по значению атрибута id | Get the numbers of descendants of a DOM element found by the value of the id attribute

**get_all_elements_by_number(int $number, string $element_type = '', string $frame = '-1'): string**

Получить номера потомков DOM элемента, который найти по номеру | Get the numbers of descendants of a DOM element found by number

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

## Class: XHEFrame

For handling frame DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_body_by_number(int $number, bool $as_html, string $frame = '-1'): string**

Получить тело фрейма, который найти по номеру

**set_body_by_number(int $number, string $html_body, string $frame = '-1'): bool**

Установить тело фрейма, который найти по номеру

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_all_elements_by_number(int $number, string $frame = '-1'): string**

Получить номера потомков DOM элемента, который найти по номеру | Get the numbers of descendants of a DOM element found by number

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHEH

For handling h (header) DOM elements in current loaded HTML page

### Methods

**__construct(string $server, int $number, string $password = ''): void**

Конструктор

## Class: XHEHead

For handling head DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEHeader

For handling header DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEHiddenInput

For handling hiddeninput DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEHtml

For handling HTML DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEI

For handling i DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEImage

For handling image DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**show_by_number(int $number, string $frame = '-1'): bool**

Показать спрятанную картинку, DOM элемент найти по номеру | Show image by number

**show_by_name(string $name, string $frame = '-1'): bool**

Показать спрятанную картинку, DOM элемент найти по значению атрибута name | Show image by name

**show_by_src(string $src, bool $exactly = true, string $frame = '-1'): bool**

Показать спрятанную картинку, DOM элемент найти по значению атрибута src | Show image by src

**show_by_alt(string $alt, bool $exactly = true, string $frame = '-1'): bool**

Показать спрятанную картинку, DOM элемент найти по значению атрибута alt | Show image by alt

**show_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool**

Показать спрятанную картинку, DOM элемент найти по значению атрибута alt | Show image by alt

**is_complete_by_number(int $number, string $frame = '-1'): bool**

Проверить что картинка загружена, DOM элемент найти по номеру | Is complete by number

**is_complete_by_name(string $name, string $frame = '-1'): bool**

Проверить что картинка загружена, DOM элемент найти по номеру | Is complete by name

**get_file_create_date_by_number(int $number, string $frame = '-1'): string**

Получить дату создания картинки, DOM элемент найти по номеру | Get image created date by number

**get_file_create_date_by_name(string $name, string $frame = '-1'): string**

Получить дату создания картинки, DOM элемент найти по значению атрибута name | Get image created date by name

**get_file_modification_date_by_number(int $number, string $frame = '-1'): string**

Получить дату изменения картинки, DOM элемент найти по номеру | Get image modified date by number

**get_file_modification_date_by_name(string $name, string $frame = '-1'): string**

Получить дату изменения картинки, DOM элемент найти по значению атрибута name | Get image modified date by name

**get_file_size_by_number(int $number, string $frame = '-1'): int**

Получить размер картинки, DOM элемент найти по номеру | Get image file size by number

**get_file_size_by_name(string $name, string $frame = '-1'): int**

Получить размер картинки, DOM элемент найти по значению атрибута name | Get image file size by name

**recognize_captcha(string $file_path, int $type): string**

Распознать капчу из картинки встроенными функциями | Recognize captcha

**recognize_by_anticaptcha(string $src, string $file_path, string $key, string $path = 'https://anti-captcha.com', bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, bool $is_phrase = false, bool $is_regsense = false, bool $is_numeric = false, int $min_len = 0, int $max_len = 0, string $frame = '-1', int $is_russian = 0): string**

Распознать капчу из картинки через сервис antigate.com | Recognize captcha by antigate.com

**recognize_by_rucaptcha(string $src, string $file_path, string $key, string $path = 'http://rucaptcha.com', bool $is_verbose = true, int $rtimeout = 5, int $mtimeout = 120, bool $is_phrase = false, bool $is_regsense = false, bool $is_numeric = false, int $min_len = 0, int $max_len = 0, string $frame = '-1', int $is_russian = 0): string**

Распознать капчу из картинки через сервис распознать капчу из картинки через сервис rucaptcha.com | Recognize captcha by rucaptcha.com

**recognize_by_bypasscaptcha(string $systemkey, string $file_path, string $src = '', string $frame = '-1'): string**

Распознать капчу из картинки через сервис bypasscaptcha.com | Recognize captcha by bypasscaptcha.com

**get_image(string $src_path, string $image_path, int $x, int $y, int $width, int $height): bool**

Получить новую картинку - как часть существующей | Get new image as part of current

**get_x_of_image(string $src_path, string $image_path, float $koeff = 0.95): int**

Получить координату X вхождения заданной картинки | Get coordinate X of the image

**get_y_of_image(string $src_path, string $image_path, float $koeff = 0.95): int**

Получить координату Y вхождения заданной картинки | Get coordinate Y of the image

**get_pos_of_image(string $src_path, string $image_path, float $koeff = 0.95): XHEPosition**

Получить позицию (XHEPosition) вхождения заданной картинки | Get position of the image

**get_all_pos_of_image(string $src_path, string $image_path, float $koeff = 0.95): array**

Получить все позиции вхождения заданной картинки | Get all positions of the image

**add_image(string $src_path, string $image_path, string $side = 'right'): bool**

Добавить картинку к заданной | Add image to another one

**create_median_image_by_folder_of_images(string $image_path, string $folder): bool**

Создать медианное изображение для папки с изображениями (для теста водяных знаков) | Create median image by images from the folder

**save_as_gray(string $inpath, string $outpath): bool**

Сохранить картинку как черно-белую GrayScale | Save image like GrayScale

**save_as_blackhat(string $inpath, string $outpath): bool**

Сохранить картинку как Blackhat | Save image like Blackhat

**resize(string $inpath, string $outpath, float $scale, int $scaleType = 1): bool**

Изменить размер (масштабировать) картинку | Resize the image

**invert(string $inpath, string $outpath): bool**

Инвертировать картинку | Invert the image

**remove_noise(string $inpath, string $outpath, int $kernel_size = 3): bool**

Удалить шумы на картинке | Remove noise from the image

**get_mrz_image(string $inpath, string $outpath): bool**

Получить MRZ область картинки как картинку | Get MRZ region from the image as image

**fix_skew_text(string $inpath, string $outpath): bool**

Исправить наклонный текст на картинке | Fix skew text on the image

**parse_mrz(string $mrz, string $mrz_type = 'PNRUS'): false|\stdClass**

Распарсить строку текста MRZ | Parse MRZ image

**preprocess_for_ocr(string $inpath, string $outpath, int $image_size = 1800, int $binary_treshhold = 180, bool $need_deskew = true): bool**

Преобразовать картинку перед передачей OCR | Preprocess image for next process OCR

**convert(string $inpath, string $outpath): bool**

Конвертация картинки в другой тип | Convert the image to another type

**unborder(string $inpath, string $outpath, int $struct_x = 220, int $struct_y = 20, int $smooth_xy = 3): bool**

Убрать границы у картинки | Remove borders form the image

**get_rotated_angle(string $inpath, int $min = -8, int $max = 8, int $step = 1): int**

Получить угол наклона картинки | Get the tilt angle of the image

**rotate(string $inpath, string $outpath, int $angle, float $center_x = -1, float $center_y = -1): bool**

Повернуть картинку на заданный угол | Rotate the image by an angle

**rewidth(string $inpath, string $outpath, int $width): bool**

Изменить ширину картинки (с сохранением пропорций) | Change image width

**get_qr_code(string $inpath, string $outpath): bool**

Получить область на картинке с QR кодом, как картинку и сохранить в отдельный файл | Get the area on the image with the QR code as an image and save it to a separate file

**recognize_qr_code(string $path): string**

Распознать картинку с QR кодом | Recognize QR code

**create_qr_code(string $path, string $text, int $width = 300, int $height = 300): bool**

Создать (генерировать) картинку с QR кодом | Crete new QR code

**remove_lines(string $inpath, string $outpath, bool $is_remove_h = true, bool $is_remove_v = true, int $struct_h = 50, int $struct_v = 50, int $thickness = 5): bool**

Удалить вертикальные и горизонтальные линии с картинки | Remove lines from the image

**get_lines(string $path, bool $is_h = true, bool $is_v = true, int $struct_h = 50, int $struct_v = 50, bool $is_draw = false): mixed|null**

Получить вертикальные и горизонтальные линии с картинки | Get lines from the image

**filter_by_color(string $inpath, string $outpath, string $min_color, string $max_color): bool**

Отфильтровать пиксели заданного диапазона цветов исходной картинки и результат сохранить в файл | Filer pixels by color range and save it

**get_dpi(string $path, bool $is_horizontal = true, bool $in_pixels = false): string**

Получить плотность пикселей картинки по диагонали/горизонтали/вертикали | Get the pixel density of an image diagonal/horizontal/vertical

**is_complete(int $number): bool**

Проверить что картинка загружена, DOM элемент найти по номеру | Is complete by number

**get_href_by_name(string $name, string $frame = '-1'): string**

Получить значение атрибута src элемента DOM, который найти по значению атрибута name | Get src by name

**get_href_by_number(int $number, string $frame = '-1'): string**

Получить значение атрибута src элемента DOM, который найти по номеру | Get src by number

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): bool**

click on random element in frame

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**save_to_file_by_number(int $number, string $file_path): bool**

Сделать скриншот элемента с заданным номером

**save_to_file_by_name(string $name, string $file_path): bool**

Сделать скриншот DOM элемента, который найти по атрибуту name |Save screenshot to file by name

**save_to_file_by_url(string $url, string $file_path, bool $exactly = true): bool**

Сделать скриншот DOM элемента, который найти по атрибуту src | Save screenshot to file by number by src

**save_to_file_by_number_withinIframe_number(int $number, string $file_path, string $framenum): bool**

Сделать скриншот элемента с заданным номером

**save_to_file_by_name_withinIframe_number(string $name, string $file_path, string $framenum): bool**

Сделать скриншот DOM элемента, который найти по атрибуту name |Save screenshot to file by name

**save_to_file_by_url_withinIframe_number(string $url, string $file_path, string $framenum, bool $exactly = true): bool**

Сделать скриншот DOM элемента, который найти по атрибуту src | Save screenshot to file by number by src

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

**recognize_captcha_by_url(mixed $url, mixed $exactly, mixed $login, mixed $password): void**



## Class: XHEInput

For handling input DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_alt_text_by_name(string $name): string**

Получить значение атрибута alt элемента DOM, который найти по значению атрибута name | Get alt by name

**get_alt_text_by_number(int $number): string**

Получить значение атрибута alt элемента DOM, который найти по номеру | Get alt by number

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**is_exist_within_iframe_with_name(string $name, string $frame): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**set_value_within_iframe_by_name(string $name, string $value, string $frame): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name | Set value by name

**set_value_within_iframe_by_number(int $number, string $value, string $frame): bool**

Задать значение атрибуту value элементу DOM, который найти по номеру | Set value by number

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHEInputButton

For handling input type button DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_name(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_within_iframe_by_number(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_within_iframe_num_by_name(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_within_iframe_num_by_number(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_inner_text(string $text, bool $exactly = true): bool**

Проверить существование элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**is_exist_with_inner_text_in_frame_by_number(string $text, bool $exactly, string $frame_num): bool**

Проверить существование элемента DOM по внутреннему поиску | Check and wait element exist by inner text

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_all_inner_texts_in_frame_by_number(string $frame_num, string $separator = '<br>'): string**

Получить все значения внутреннего текста у DOM элементов | Get all inner texts (no wait exist mode)

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHEInputFile

For handling input type file DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(int $number): int**

get count of elements

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**set_value_by_name_by_frame_num(string $name, string $value, string $framenum): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name | Set value by name

**set_value_by_number_by_frame_num(int $number, string $value, string $framenum): bool**

Задать значение атрибуту value элементу DOM, который найти по номеру | Set value by number

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHEInputImage

For handling input type image DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_name(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_within_iframe_by_number(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**save_to_file_by_number(int $number, string $file_path): bool**

Сделать скриншот элемента с заданным номером

**save_to_file_by_name(string $name, string $file_path): bool**

Сделать скриншот DOM элемента, который найти по атрибуту name |Save screenshot to file by name

**save_to_file_by_attribute(string $atr_name, string $atr_value, string $file_path, bool $exactly = true): bool**

Сделать скриншот DOM элемента, который найти по атрибуту | Save screenshot to file by attribute

**save_to_file_by_atribute(string $atr_name, string $atr_value, string $file_path, bool $exactly = true): bool**

Сделать скриншот DOM элемента, который найти по атрибуту | Save screenshot to file by attribute

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHEInterface

For handling DOM elements as interface in current loaded HTML page

### Methods

**__construct(int $inner_number, string $server, string $password = ''): void**

Конструктор

**__destruct(): void**

Деструктор (для очистки памяти)

**__toString(): string**

Вывести как строку

**get_clone(): XHEInterface**

Клонировать интерфейс к DOM | Clone interface

**meta_click(bool $wait_browser = true): bool**

Выполнить мета клик (фокус, перемещение мыши и клик левой клавишей мышью по случайной координате) | Meta click

**click(bool $wait_browser = true): bool**

Эмулировать клик левой клавишей мыши | Click

**event(string $event, bool $wait_browser = true): bool**

Послать JS событие | Send event

**focus(): bool**

Задать фокус | Set focus

**scroll_to_view(string $start, bool $smooth = false): bool**

Скроллировать страницу, используя Java Script так, чтобы элемент стал виден | Scroll to view element

**scroll(string $scroll_action): bool**

Скроллировать | Do scroll

**check(bool $needCheck = true): bool**

Отметить элемент (Чекнуть) | Check option

**select_index(int $index): bool**

Отметить в элементе лист-бокс опцию по ее индексу | Check option by index

**select_text(string $text, bool $exactly = true): bool**

Отметить в элементе лист-бокс опцию по ее тексту | Check option by text

**select_value(string $value, bool $exactly = true): bool**

Отметить в элементе лист-бокс опцию по значению атрибута value | Check option by value

**select_random(): bool**

Отметить в элементе лист-бокс случайную опцию | Check any option

**multi_select_indexes(string $indexes): bool**

Отметить в элементе лист-бокс несколько опций по их индексам | Check options by indexes

**multi_select_values(string $values): bool**

Отметить в элементе лист-бокс несколько опций по значениям атрибута value | Check options by values

**multi_select_texts(string $texts): bool**

Отметить в элементе лист-бокс несколько опций по тексту | Check options by texts

**get_length(): int**

Получить количество опций в элементе лист-бокс | Get option count

**get_selected_index(): int**

Получить индекс выбранной опции в элементе лист-бокс | Get checked option index

**get_selected_text(): string**

Получить текст выбранной опции в элементе лист-бокс | Get checked option text

**seek_to_end(): bool**

Переместить курсор ввода в конец строки | Move the insertion cursor to the end of the line

**seek_to_pos(int $pos): bool**

Переместить курсор ввода к заданной позиции | Move the input cursor to a given position

**set_value(string $value): bool**

Задать значение атрибута value элемента DOM | Set value

**set_inner_text(string $inner_text): bool**

Задать внутренний текст элемента DOM | Set inner text

**set_inner_html(string $inner_html): bool**

Задать внутренний HTML элемента DOM | Set inner HTML

**add_attribute(string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента | Add/Set an attribute

**set_attribute(string $name_atr, string $value_atr): bool**

Задать атрибут DOM элемента | Set an attribute

**remove_attribute(string $name_atr): bool**

Удалить атрибут DOM элемента | Remove an attribute

**screenshot(string $file_path, bool $as_gray = false): bool**

Сделать скриншот DOM элемента, который найти по атрибуту name | Save screenshot to file by name

**save(string $file_path): bool**

Сохранить содержимое элемента в файл (для картинки и флэша сохраняются исходные данные с сайта) | Save content to file

**run_js(string $js): mixed**

Выполнить скрипт JS на DOM элементе | Run JS

**get_tag(): string**

Получить тэг DOM элемента | Get tag

**get_type(): string**

Получить тип DOM элемента | Get type

**get_name(): string**

Получить значение атрибута name DOM элемента | Get name

**get_id(): string**

Получить значение атрибута id DOM элемента | Get id

**get_number(string $object_name = ''): int**

Получить номер элемента | Get number

**get_inner_text(): string**

Получить внутренний текст DOM элемента | Get inner text

**get_inner_html(): string**

Получить внутренний HTML DOM элемента | Get inner HTML

**get_outer_text(): string**

Получить внешний текст DOM элемента | Get outer text

**get_outer_html(): string**

Получить внешний HTML DOM элемента | Get outer HTML

**get_computed_style(string $style_name = '', string $pseudo = ''): string**

Получить вычисляемый стиль | Get computed style

**get_value(): string**

Получить значение атрибута value DOM элемента | Get value

**get_href(): string**

Получить значение атрибута href DOM элемента | Get href

**get_src(): string**

Получить значение атрибута src DOM элемента | Get src

**get_alt(): string**

Получить значение атрибута alt DOM элемента | Get alt

**get_attribute(string $name_atr): string**

Получить значение атрибута DOM элемента | Get attribute value

**get_frame_number(): string**

Получить номер фрейма DOM элемента | Get frame number

**get_form_number(): int**

Получить номер формы DOM элемента | Get form number

**get_all_attributes(): string**

Получить имена всех атрибутов DOM элемента | Get all names for all attributes

**get_all_attributes_values(): string**

Получить значения всех атрибутов DOM элемента | Get values for all attributes

**get_all_events(): string**

Получить все события-атрибуты DOM элемента | Get all attribute events

**is_disabled(): bool**

Проверить отключен или нет DOM элемент | Is disabled

**is_checked(): bool**

Проверить установленна отметка или нет | Is checked

**is_exist(): bool**

Проверить существование DOM элемента | Is exist

**is_visibled(): bool**

Проверить видим DOM элемент | Is exist

**is_view_now(): bool**

Проверить что DOM элемент попадает в видимую область страницы | Is view

**ensure_visible(bool $smooth = false, string $side = 'start'): bool**

Выполнить прокрутку страницы, чтобы DOM элемент попадал в видимую область страницы (прокрутить до видимости) | Ensure visible

**get_numbers_child(string $element_type = '', bool $include_subchildren = false): string**

Получить номера дочерних элементов заданного типа | Get child numbers

**get_x(bool $in_view = false): int**

Получить координату X DOM элемента, который найти по атрибуту name | Get X of element

**get_y(bool $in_view = false): int**

Получить координату Y DOM элемента, который найти по атрибуту name | Get Y of element

**get_width(): int**

Получить ширину DOM элемента | Get width

**get_height(): int**

Получить высоту DOM элемента | Get height

**get_xpath(): string**

Получить XPath DOM элемента | Get XPath

**get_parents_count(): int**

Получить количество родителей DOM элемента | Get parents count

**get_all_parents(): XHEInterfaces**

Получить интерфейсы всех родителей DOM элемента | Get all parents

**get_parent(int $level = 1): XHEInterface**

Получить интерфейс родителя DOM элемента | Get parent

**get_parent_by_attribute(string $atr_name, string $atr_value, bool $exactly = true): XHEInterface**

Получить интерфейс родителя DOM элемента по атрибуту | Get parent by attribute

**get_next(): XHEInterface**

Получить интерфейс следующего DOM элемента | Get next interface

**get_prev(): XHEInterface**

Получить интерфейс предыдущего DOM элемента | Get prev interface

**add_child(string $tag, string $inner_html): bool**

Добавить DOM элемент как потомка | Add child element

**insert_before(string $tag, string $inner_html): bool**

Добавить DOM элемент после этого на этом же уровне | Insert element before

**remove(): bool**

Удалить этот DOM элемент | Remove this element

**get_child_count(bool $include_subchildren = false): int**

Получить количество дочерних DOM элементов | Get get child count

**get_child_by_number(int $number, bool $include_subchildren = false): XHEInterface**

Получить интерфейс потомка DOM элемента по номеру | Get child interface by number

**get_shadow_root(): XHEInterface**

Получить теневой root (интерфейс) DOM элемента | Get shadow root

**get_child_by_inner_text(string $inner_text, bool $exactly = false, bool $include_subchildren = false): XHEInterface**

Получить интерфейс потомка DOM элемента по внутреннему тексту | Get child interface by inner text

**get_child_by_inner_html(string $inner_html, bool $exactly = false, bool $include_subchildren = false): XHEInterface**

Получить интерфейс потомка DOM элемента по внутреннему HTML | Get child interface by inner html

**get_child_by_outer_text(string $outer_text, bool $exactly = false, bool $include_subchildren = false): XHEInterface**

Получить интерфейс потомка DOM элемента по внешнему тексту | Get child interface by outer text

**get_child_by_outer_html(string $outer_html, bool $exactly = false, bool $include_subchildren = false): XHEInterface**

Получить интерфейс потомка DOM элемента по внешнему HTML | Get child interface by outer html

**get_child_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, bool $include_subchildren = false): XHEInterface**

Получить интерфейс потомка DOM элемента по значению атрибута | Get child interface by attribute

**get_child_by_xpath(string $xpath): XHEInterface**

Получить интерфейс потомка DOM элемента по XPath | Get child by xpath

**get_all_child_by_xpath(string $xpath): XHEInterfaces**

Получить интерфейсы потомков DOM элемента по XPath | Get all childs by xpath

**get_all_child_by_inner_text(string $inner_text, bool $exactly = false, bool $include_subchildren = false): XHEInterfaces**

Получить интерфейсы потомков DOM элемента по внутреннему тексту | Get all child interfaces by inner text

**get_all_child_by_inner_html(string $inner_html, bool $exactly = false, bool $include_subchildren = false): XHEInterfaces**

Получить интерфейсы потомков DOM элемента по внутреннему HTML | Get all child interfaces by inner html

**get_all_child_by_attribute(string $atr_name, string $atr_value, bool $exactly = true, bool $include_subchildren = false): XHEInterfaces**

Получить интерфейсы потомков DOM элемента по значению атрибута | Get all child interfaces by attribute

**mouse_move_to(int $dx = -1, int $dy = -1, string $type_ = 'curve', int $time_ = 1000): bool**

Полная эмуляция перемещения мыши к элементу по заданной траектории | Full mouse move to element by given trajectory

**mouse_move(int $dx = -1, int $dy = -1, int $time = 0, int $tremble = 0): bool**

Полная эмуляция перемещения мыши к элементу | Full mouse move to element

**mouse_click(int $dx = -1, int $dy = -1): bool**

Полная эмуляция щелчка левой клавишей мыши по элементу | Full mouse click on element

**mouse_double_click(int $dx = -1, int $dy = -1): bool**

Полная эмуляция двойного щелчка левой клавишей мыши по элементу со смещением | Full double mouse click on element with offset

**mouse_left_down(int $dx = -1, int $dy = -1): bool**

Полная эмуляция нажатия левой кнопки мыши down на элементе со смещением down | Full mouse left down on element with offset

**mouse_left_up(int $dx = -1, int $dy = -1): bool**

Полная эмуляция отжатия левой кнопки мыши up на элементе со смещением up | Full mouse left up on element with offset

**mouse_right_click(int $dx = -1, int $dy = -1): bool**

Полная эмуляция нажатия правой кнопки мыши на элементе со смещением | Full mouse right click on element with offset

**mouse_right_down(int $dx = -1, int $dy = -1): bool**

Полная эмуляция нажатия правой кнопки мыши down на элементе со смещением down | Full mouse right down on element with offset

**mouse_right_up(int $dx = -1, int $dy = -1): bool**

Полная эмуляция отжатия правой кнопки мыши up на элементе со смещением up | Full mouse right up on element with offset

**send_mouse_move_to(int $dx = -1, int $dy = -1, string $type_ = 'curve', int $time_ = 1000): bool**

Переместить мышь к элементу с помощью событий JS | Move mouse to element with JS events

**send_touch(int $id, int $touch_type, int $dx = -1, int $dy = -1, int $radiusX = 0, int $radiusY = 0, float $rotationAngle = 0, float $pressure = 0, int $modiefiers = 0, int $pointerType = 0): bool**

Нажать пальцами по элементу | Press fingers on element

**send_mouse_move(int $dx = -1, int $dy = -1, int $time = 0, int $tremble = 0, string $buttons = ''): bool**

Передвинуть мышь к элементу со смещением с помощью событий JS | Move mouse to element with offset with JS events

**send_mouse_click(int $dx = -1, int $dy = -1, bool $addCtrl = false): bool**

Щелчок левой кнопки мыши по элементу с помощью событий JS | Mouse left click on element with JS events

**send_mouse_double_click(int $dx = -1, int $dy = -1): bool**

Двойной щелчок левой клавишей мыши по элементу с помощью событий JS | Mouse double left click on element with JS events

**send_mouse_left_down(int $dx = -1, int $dy = -1): bool**

Нажать down правую кнопку мыши на элементе со смещением с помощью событий JS | Press down right mouse button on element with offset with JS events

**send_mouse_left_up(int $dx = -1, int $dy = -1): bool**

Отпустить up правую кнопку мыши на элементе со смещением с помощью событий JS | Release up right mouse button on element with offset with JS events

**send_mouse_right_click(int $dx = -1, int $dy = -1): bool**

Нажать правой кнопки мыши на элемент со смещением с помощью событий JS | Press right mouse button on element with offset with JS events

**send_mouse_right_down(int $dx = -1, int $dy = -1): bool**

Нажать правой кнопки мыши down на элементе со смещением с помощью событий JS | Press down right mouse button on element with offset with JS events

**send_mouse_right_up(int $dx = -1, int $dy = -1): bool**

Нажать правой кнопки мыши up на элементе со смещением с помощью событий JS | Press up right mouse button on element with offset with JS events

**send_input(string $string, string $timeout = '0:2', bool $inFlash = false, bool $auto_change = true): bool**

Ввод строки в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Input string to DOM element browser with JS events

**send_key(string $key, bool $is_key = false): bool**

Ввод символа с клавиши клавиатуры, для ввода одного символа в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Input character from keyboard to DOM element browser with JS events

**send_key_down(string $key, bool $is_key = false): bool**

Нажать down клавиши с клавиатуры, для ввода одного символа в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Press down keyboard key to DOM element browser with JS events

**send_key_up(string $key, bool $is_key = false): bool**

Отжать up клавиши с клавиатуры, для ввода одного символа в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Release up keyboard key to DOM element browser with JS events

**input(string $_string, string $timeout = '0:2', bool $inFlash = false, bool $auto_change = true): bool**

Полная эмуляция ввода строки в DOM элемент браузера | Full input string to DOM element browser

**key(string $code): bool**

Полная эмуляция ввода одной клавиши клавиатуры, для ввода символа в DOM элемент браузера по Alt-коду | Press key by ALt code

**key_down(string $key): bool**

Полная эмуляция down нажатия одной клавиши клавиатуры, для ввода символа в DOM элемент браузера по Alt-коду | Press down keyboard key to DOM element browser by Alt code

**key_up(string $key): bool**

Полная эмуляция up отжатия одной клавиши клавиатуры, для ввода символа в DOM элемент браузера по Alt-коду | Release up keyboard key to DOM element browser by Alt code

**press_key_by_code(string $code): bool**

Полная эмуляция ввода одной клавиши клавиатуры, для ввода символа в DOM элемент браузера по Alt-коду | Press key by ALt code

## Class: XHEInterfaces

A collection class for working with Interface DOM elements

### Methods

**__construct(string $inner_numbers, string $server, string $password = ''): void**



**get_by_xxx(string $xxx, string $condition, bool $exactly): false|mixed**

Получить интерфейс объекта по заданному условию

**get_by_name(string $name, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту name | Get interface by name

**get_by_id(string $id, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту id | Get interface by id

**get_by_inner_text(string $inner_text, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по внутреннему тексту | Get interface by inner text

**get_by_inner_html(string $inner_html, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по внутреннему HTML | Get interface by inner HTML

**get_by_outer_text(string $outer_text, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по внешнему тексту | Get interface by outer text

**get_by_outer_html(string $outer_html, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по внешнему HTML | Get interface by outer HTML

**get_by_src(string $src, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту src | Get interface by src

**get_by_href(string $href, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту href | Get interface by href

**get_by_alt(string $alt, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту alt | Get interface by alt

**get_by_value(string $value, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту value | Get interface by value

**get_by_attribute(string $attr_name, string $attr_value, bool $exactly = true): false|\XHEInterface**

Получить интерфейс по атрибуту | Get interface by attribute

**get_all_by_xxx(string $xxx, string $condition, bool $exactly): XHEInterfaces**

Получить все интерфейсы по заданному условию

**get_all_by_name(string $name, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту name | Get interfaces by name

**get_all_by_id(string $id, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту id | Get interfaces by id

**get_all_by_inner_text(string $inner_text, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по внутреннему тексту | Get interfaces by inner text

**get_all_by_inner_html(string $inner_html, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить интерфейсы по внутреннему HTML | Get interfaces by inner HTM:

**get_all_by_src(string $src, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту src | Get interfaces by src

**get_all_by_href(string $href, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту href | Get interfaces by href

**get_all_by_alt(string $alt, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту alt | Get interfaces by alt

**get_all_by_value(string $value, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту value | Get interfaces by value

**get_all_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): XHEInterfaces**

Получить все интерфейсы по атрибуту | Get interfaces by attribute

## Class: XHELabel

For handling label DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHELi

For handling li DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEMeta

For handling meta DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEObject

Base class for handling object DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_in_by_number(int $number, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по номеру | Click on element by number

**click_in_by_name(string $name, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту name | Click on element by name

**click_in_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, int $x = -1, int $y = -1, string $frame = '-1'): bool**

Выполнить эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту | Click on element by attribute

## Class: XHEOption

For handling option DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEP

For handling p DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEPre

For handling pre DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHERadioButton

For handling input type radio DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click_by_name_and_value(string $name, string $value = '', string $frame = '-1', bool $wait_browser = true): bool**

Кликнуть по радиобокс, найти по атрибуту name и по атрибуту value (без учета проверки: существует ли элемент) | Click by radiobox ba name

**check_by_number(int $number, bool $check, string $frame = '-1'): bool**

Установить отметку по радиобокс, найти по номеру (без учета проверки: существует ли элемент) | Check by number

**check_by_name(string $name, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент радиобокс по значению атрибута name | Check radiobox by name

**check_by_value(string $value, bool $exactly, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент радиобокс по значению атрибута value | Check radiobox by value

**check_by_attribute(string $attr_name, string $attr_value, bool $exactly, bool $check, string $frame = '-1'): bool**

Отметить DOM элемент радиобокс по значению атрибута | Check radiobox by attribute

**check_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly, bool $check, int $form_number, string $frame = '-1'): bool**

Отметить DOM элемент радиобокс по значению атрибута в форме с заданным номером (без учета проверки: существует ли элемент) | Check radiobox by attribute and form by form

**check_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly, bool $check, string $form_name, string $frame = '-1'): bool**

Отметить DOM элемент радиобокс по значению атрибута в форме с заданным именем (без учета проверки: существует ли элемент) | Check radiobox by attribute and form by name

**check_all(bool $check = true, string $frame = '-1'): bool**

Отметить DOM элемент чекбокс все элементы (без учета проверки: существует ли элемент) | Check all radioboxes

**is_check_by_number(int $number, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе радиобокс по номеру | Radio box is checked by number

**is_check_by_name(string $name, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе радиобокс по номеру | Radio box is checked by name

**is_check_by_value(string $value, bool $exactly = true, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе радиобокс по value | Radio box is checked by value

**is_check_by_attribute(string $attr_name, string $attr_value, bool $exactly = true, string $frame = '-1'): bool**

Проверить есть отметка на DOM элементе радиобокс по значению атрибута | Radio box is checked by attribute

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_name(string $name, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по атрибуту name | Click on DOM element by name

**click_within_iframe_by_number(int $number, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по номеру | Click on DOM element by number

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**set_checked_by_name(string $name, bool $check): bool**

Отметить DOM элемент радиобокс по имени | Check radiobox by name

**set_checked_by_number(int $number, bool $check): bool**

Установить отметку по радиобокс, найти по номеру (без учета проверки: существует ли элемент) | Check by number

**set_checked_by_value(string $value, bool $check): bool**

Отметить DOM элемент радиобокс по value | Check radiobox by value

**is_checked_by_name(string $name): bool**

Проверить есть отметка на DOM элементе радиобокс по номеру | Radio box is checked by name

**is_checked_by_number(int $number): bool**

Проверить есть отметка на DOM элементе радиобокс по номеру | Radio box is checked by number

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHES

For handling s DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEScriptElement

For handling script DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_defer_by_number(int $number, bool $defer, string $frame = '-1'): bool**

Задать атрибут defer у скрипта по номеру | Set the defer attribute in the script by number

**set_defer_by_src(string $src, bool $defer, string $frame = '-1'): bool**

Задать атрибут defer у скрипта с заданным атрибутом src | Set the defer attribute on a script with a given src attribute

**set_htmlFor_by_number(int $number, string $htmlFor, string $frame = '-1'): bool**

Задать атрибут htmlFor у скрипта по номеру | Set the htmlFor attribute for the script by number

**set_htmlFor_by_src(string $src, string $htmlFor, string $frame = '-1'): bool**

Задать атрибут htmlFor у скрипта с заданным атрибутом src | Set the htmlFor attribute to a script with a given src attribute

**set_event_by_number(int $number, string $event, string $frame = '-1'): bool**

Задать event у скрипта по номеру | Set event for script with given number

**set_event_by_src(string $src, string $event, string $frame = '-1'): bool**

Задать event у скрипта с заданным атрибутом src | Set event to script with given src attribute

**set_src_by_number(int $number, string $src, string $frame = '-1'): bool**

Задать атрибут src у скрипта по номеру | Set the src attribute of the script by number

**set_text_by_number(int $number, string $text, string $frame = '-1'): bool**

Задать текст у скрипта по номеру | Set the text for the script by number

**set_text_by_src(string $src, string $text, string $frame = '-1'): bool**

Задать текст у скрипта с заданным атрибутом src | Set the text of the script with the given src attribute

**set_type_by_number(string $number, string $type, string $frame = '-1'): bool**

Задать атрибут type у скрипта по номеру | Set the type attribute for the script by number

**set_type_by_src(string $src, string $type, string $frame = '-1'): bool**

Задать атрибут type у скрипта с заданным атрибутом src | Set the type attribute of a script with a given src attribute

**get_defer_by_number(int $number, string $frame = '-1'): bool**

Получить значение атрибута defer у скрипта по номеру | Get the value of the defer attribute of the script by number

**get_defer_by_src(string $src, string $frame = '-1'): bool**

Получить значение атрибута defer у скрипта с заданным атрибутом src | Get the value of the defer attribute of a script with a given src attribute

**get_htmlFor_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута htmlFor у скрипта по номеру | Get the value of the htmlFor attribute of a script by number

**get_htmlFor_by_src(string $src, string $frame = '-1'): string|bool**

Получить значение атрибута htmlFor у скрипта с заданным атрибутом src | Get the value of the htmlFor attribute of a script with a given src attribute

**get_event_by_number(int $number, string $frame = '-1'): string|bool**

Получить event у скрипта по номеру | Get event from script by number

**get_event_by_src(string $src, string $frame = '-1'): string|bool**

Получить event у скрипта с заданным атрибутом src | Get event from script with given src attribute

**get_readyState_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение свойства readyState у скрипта по номеру | Get the value of the readyState property of a script by number

**get_readyState_by_src(string $src, string $frame = '-1'): string|bool**

Получить значение свойства readyState у скрипта с заданным src | Get the value of the readyState property of the script with the given src

**get_text_by_number(int $number, string $frame = '-1'): string|bool**

Получить текст скрипта по номеру | Get script text by number

**get_text_by_src(string $src, string $frame = '-1'): string|bool**

Получить текст скрипта с заданным атрибутом src | Get the text of the script with the given src attribute

**get_type_by_number(int $number, string $frame = '-1'): string|bool**

Получить значение атрибута type скрипта по номеру | Get the value of the script type attribute by number

**get_type_by_src(string $src, string $frame = '-1'): string|bool**

Получить значение атрибута type скрипта с заданным атрибутом src | Get the value of the type attribute of a script with a given src attribute

**is_all_completed(): bool**

Проверить что все скрипты находятся в незапущенном состоянии (без учета проверки: существует ли элемент) | Check that all scripts are in a non-running state

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

## Class: XHESection

For handling section DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHESelectElement

For handling listbox DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**select_index_by_number(int $number, int $index, string $frame = '-1'): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by index

**select_index_by_name(string $name, int $index, string $frame = '-1'): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by index

**select_index_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr, int $index, string $frame = '-1'): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута | Find listbox by attribute and select option by index

**select_text_by_number(int $number, string $text, bool $exactly = true, string $frame = '-1'): bool**

Выбрать опцию по тексту в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by text

**select_text_by_name(string $name, string $text, bool $exactly = true, string $frame = '-1'): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by text

**select_text_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr, string $text, bool $exactly = true, string $frame = '-1'): bool**

Выбрать опцию по тексту в DOM элементе листбокс, который найти по значению атрибута | Find listbox by name and select option by text

**select_value_by_number(int $number, string $value, bool $exactly = true, string $frame = '-1'): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**select_value_by_name(string $name, string $value, bool $exactly = true, string $frame = '-1'): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by value

**select_value_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr, string $value, bool $exactly = true, string $frame = '-1'): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по значению атрибута| Find listbox by name and select option by attribute value

**select_index_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly_attr, int $index, int $form_number, string $frame = '-1'): bool**

Выбрать опцию по индексу в DOM элементе листбокс в форме, DOM элемент найти по значению атрибута, форму найти по номеру | Find listbox by attribute in form found by number and select option by index

**select_index_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly_attr, int $index, string $form_name, string $frame = '-1'): bool**

Выбрать опцию по индексу в DOM элементе листбокс в форме, DOM элемент найти по значению атрибута, форму найти по значению атрибута name | Find listbox by name in form found by name and select option by index

**select_text_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly_attr, string $text, bool $exactly, int $form_number, string $frame = '-1'): bool**

Выбрать опцию по тексту в DOM элементе листбокс в форме, DOM элемент найти по значению атрибута, форму найти по номеру | Find listbox by name in form found by number and select option by text

**select_text_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly_attr, string $text, bool $exactly, string $form_name, string $frame = '-1'): bool**

Выбрать опцию по тексту в DOM элементе листбокс в форме, DOM элемент найти по значению атрибута, форму найти по значение атрибута name | Find listbox by attribute in form found by name and select option by text

**select_value_by_attribute_by_form_number(string $attr_name, string $attr_value, bool $exactly_attr, string $value, bool $exactly, int $form_number, string $frame = '-1'): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс в форме, DOM элемент найти по значению атрибута, форму найти по номеру | Find listbox by attribute in form found by number and select option by value

**select_value_by_attribute_by_form_name(string $attr_name, string $attr_value, bool $exactly_attr, string $value, bool $exactly, string $form_name, string $frame = '-1'): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс в форме, DOM элемент найти по значению атрибута, форму найти по значению атрибута name | Find listbox by attribute in form found by name and select option by value

**select_random_by_number(int $number, string $frame = '-1'): bool**

Выбрать случайную опцию в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select random option

**select_random_by_name(string $name, string $frame = '-1'): bool**

Выбрать случайную опцию в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by attribute name and select random option

**select_random_by_attribute(string $attr_name, string $attr_value, bool $exactly_attr = true, string $frame = '-1'): bool**

Выбрать случайную опцию в DOM элементе листбокс, DOM элемент найти по значению атрибута | Find listbox by attribute and select random option

**multi_select_indexes_by_number(int $number, string $indexes, string $frame = '-1'): bool**

Выбрать опции по индексам в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select options by indexes

**multi_select_indexes_by_name(string $name, string $indexes, string $frame = '-1'): bool**

Выбрать опции по индексам в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by indexes

**multi_select_values_by_number(int $number, string $values, string $frame = '-1'): bool**

Выбрать опции по значениям атрибута value в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select options by values

**multi_select_values_by_name(string $name, string $values, string $frame = '-1'): bool**

Выбрать опции по значениям атрибута value в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by values

**multi_select_texts_by_number(int $number, string $texts, string $frame = '-1'): bool**

Выбрать опции по значениям текста в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select options by texts

**multi_select_texts_by_name(string $name, string $texts, string $frame = '-1'): bool**

Выбрать опции по значениям текста в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by texts

**get_selected_index_by_number(int $number, string $frame = '-1'): bool**

Получить индекс выбранной опции в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get selected option index

**get_selected_index_by_name(string $name, string $frame = '-1'): int**

Получить индекс выбранной опции в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get selected option index

**get_selected_index_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int**

Получить индекс выбранной опции в DOM элементе листбокс, DOM элемент найти по значению атрибута | Find listbox by attribute and get selected option index

**get_selected_text_by_number(int $number, string $frame = '-1'): false|string**

Получить текст выбранной опции в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get selected option text

**get_selected_text_by_name(string $name, string $frame = '-1'): false|string**

Получить текст выбранной опции в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get selected option text

**get_selected_text_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): false|string**

Получить текст выбранной опции в DOM элементе листбокс, DOM элемент найти по значению атрибута | Find listbox by attribute and get selected option text

**get_size_by_number(int $number, string $frame = '-1'): int**

Получить значение атрибута size в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get size

**get_size_by_name(string $name, string $frame = '-1'): int**

Получить количество опций в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get size

**get_size_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int**

Получить значение атрибута size в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get size

**get_length_by_number(int $number, string $frame = '-1'): int**

Получить количество опций в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get the number of options

**get_length_by_name(string $name, string $frame = '-1'): int**

Получить количество опций в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get the number of options

**get_length_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): int**

Получить количество опций в DOM элементе листбокс, DOM элемент найти по значению атрибута | Find listbox by name and get the number of options

**get_type_by_number(int $number, string $frame = '-1'): string**

Получить тип выбора опций в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get select type of options

**get_type_by_name(string $name, string $frame = '-1'): string**

Получить тип выбора опций в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get select type of options

**get_type_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): string**

Получить тип выбора опций в DOM элементе листбокс, DOM элемент найти по значению атрибута | Find listbox by attribute and get select type of options

**get_all_texts_by_number(int $number, string $frame = '-1'): string**

Получить тексты всех опций в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get all texts of options

**get_all_texts_by_name(string $name, string $frame = '-1'): string**

Получить тексты всех опций в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get all texts of options

**get_all_texts_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): string**

Получить тексты всех опций в DOM элементе листбокс, DOM элемент найти по атрибуту | Find listbox by attribute and get all texts of options

**get_all_values_by_number(int $number, string $frame = '-1'): string**

Получить значения атрибута value всех опций в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get all values of options

**get_all_values_by_name(string $name, string $frame = '-1'): string**

Получить значения атрибута value всех опций в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get all values of options

**get_all_values_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame = '-1'): string**

Получить значения атрибута value всех опций в DOM элементе листбокс, DOM элемент найти по атрибуту | Find listbox by attribute and get all values of options

**add_option_by_number(int $number, string $text, string $value, string $frame = '-1'): bool**

Добавить новую опцию в DOM элемент листбокс, DOM элемент найти по номеру | Find listbox by number and add option

**add_option_by_name(string $name, string $text, string $value, string $frame = '-1'): bool**

Добавить новую опцию в DOM элемент листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and add option

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, mixed $event): void**



**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, mixed $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**select_random_value_by_num(int $num): bool**

Выбрать случайную опцию в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select random option

**select_value_by_num(string $value, int $num): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**select_option_value_by_num(int $num, string $innername): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, mixed $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**add_atribute_by_number(int $number, string $name_atr, string $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

**select_part_value_by_name(string $name, string $value, bool $exactly): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by text

**select_random_value_by_name(string $name): bool**

Выбрать случайную опцию в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by attribute name and select random option

**select_random_value_by_number(int $num): bool**

Выбрать случайную опцию в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select random option

**select_num_value_by_name(string $name, mixed $num): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by index

**select_num_value_by_number(int $number, int $num): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by index

**select_num_by_inner_name(int $num, string $innername): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**select_name_by_inner_name(string $name, string $innername): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by text

**select_option_text_by_name(string $name, string $value): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by text

**select_option_text_by_num(string $value, int $num): bool**

Выбрать опцию по тексту в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by text

**select_option_value_by_number(int $num, string $innername): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**select_option_value_by_name(string $name, string $innername): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by value

**get_cur_option_text_by_name(string $name): false|string**

Получить текст выбранной опции в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and get selected option text

**get_cur_option_text_by_number(int $number): false|string**

Получить текст выбранной опции в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and get selected option text

**select_value_within_iframe_by_name(string $name, string $value, string $frame): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by value

**select_value_within_iframe_by_num(string $value, int $num, string $frame): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**select_part_value_within_iframe_by_name(string $name, string $value, bool $exactly, string $frame): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by value

**select_num_value_within_iframe_by_name(string $name, int $num, string $frame): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by index

**select_num_value_within_iframe_by_number(int $number, int $num, string $frame): bool**

Выбрать опцию по индексу в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by index

**select_num_within_iframe_by_inner_name(int $num, string $innername, string $frame): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по номеру | Find listbox by number and select option by value

**select_name_within_iframe_by_inner_name(string $name, string $innername, string $frame): bool**

Выбрать опцию по значению атрибута value в DOM элементе листбокс, который найти по значению атрибута name | Find listbox by name and select option by value

**multi_select_name_by_number(string $name, string $values): bool**

Выбрать опции по индексам в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by indexes

**multi_select_name_by_num(string $name, string $values): bool**

Выбрать опции по индексам в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by indexes

**multi_select_name_by_text(string $name, string $values): bool**

Выбрать опции по значениям текста в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by texts

**multi_select_num_by_text(int $num, string $values): bool**

Выбрать опции по значениям текста в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select options by texts

**multi_select_name_by_inner_name(string $name, string $values): bool**

Выбрать опции по значениям атрибута value в DOM элементе листбокс, DOM элемент найти по значению атрибута name | Find listbox by name and select options by values

**multi_select_num_by_inner_name(int $num, string $values): bool**

Выбрать опции по значениям атрибута value в DOM элементе листбокс, DOM элемент найти по номеру | Find listbox by number and select options by values

## Class: XHESpan

For handling span DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEStrong

For handling strong DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEStyle

For handling style DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHETable

For handling table DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**export_to_csv(string $file_path, int $number, string $rows = '', string $cols = '', bool $as_html = true, string $separator = ';', string $frame = '-1'): bool**

Экспорт DOM элемента таблица в текстовый файл в формате CSV, таблицу найти по номеру | Export table to CSV file

**export_to_xml(string $file_path, int $number, string $rows = '', string $cols = '', bool $as_html = true, string $frame = '-1'): bool**

Экспорт DOM элемента таблица в текстовый файл в формате XML, таблицу найти по номеру | Export table to XML file

**get_cells_by_number(int $number, string $frame = '-1'): int**

Получить количество ячеек таблицы, таблицу найти по номеру | Find table by number and get the number of cells

**get_rows_by_number(int $number, string $frame = '-1'): int**

Получить количество строк таблицы, таблицу найти по номеру | Find table by number and get the number of rows

**get_cols_by_number(int $number, string $frame = '-1', int $row = 0): int**

Получить количество столбцов таблицы, таблицу найти по номеру | Find table by number and get the number of columns

**get_cell_by_number(int $number, int $row, int $col, bool $as_html = false, string $frame = '-1'): string**

Получить текст ячейки в таблице, таблицу найти по номеру | Find table by number and get cell text

**get_cell_by_pos_by_number(int $number, int $pos, bool $as_html = false, string $frame = '-1'): string**

Получить текст ячейки по позиции в таблице, таблицу найти по номеру | Find table by number and get cell by position

**get_row_by_number(int $number, int $row, bool $as_html = false, string $frame = '-1'): string**

Получить текст заданной строки в таблице, таблицу найти по номеру | Find table by number and get row

**get_col_by_number(int $number, int $col, bool $as_html = false, string $frame = '-1'): string**

Получить текст заданной строки в таблице, таблицу найти по номеру | Find table by number and get column

**get_rows_cols_by_number(int $number, string $rows, string $cols, bool $as_html = false, string $separator = '<br>', string $frame = '-1'): string**

Получить текст заданной части таблицы, таблицу найти по номеру

**get_cell_x_by_number(int $number, int $row, int $col, string $frame = '-1'): int**

Получить координату X ячейки по строке и столбцу у таблицы, таблицу найти по номеру | Find table by number and get cell X coordinate

**get_cell_x_by_inner_text(string $inner_text, bool $exactly, int $row, int $col, string $frame = '-1'): int**

Получить координату X ячейки по строке и столбцу у таблицы, таблицу найти по внутренний тексту | Find table by inner text and get cell X coordinate

**get_cell_x_by_attribute(string $attr_name, string $attr_value, bool $exactly, int $row, int $col, string $frame = '-1'): int**

Получить координату X ячейки по строке и столбцу у таблицы, таблицу найти по атрибуту | Find table by атрибуту and get cell X coordinate

**get_cell_y_by_number(int $number, int $row, int $col, string $frame = '-1'): int**

Получить координату Y ячейки по строке и столбцу у таблицы, таблицу найти по номеру | Find table by number and get cell Y coordinate

**get_cell_y_by_inner_text(string $inner_text, bool $exactly, int $row, int $col, string $frame = '-1'): int**

Получить координату Y ячейки по строке и столбцу у таблицы, таблицу найти по внутренний тексту | Find table by inner text and get cell Y coordinate

**get_cell_y_by_attribute(string $attr_name, string $attr_value, bool $exactly, int $row, int $col, string $frame = '-1'): int**

Получить координату Y ячейки по строке и столбцу у таблицы, таблицу найти по атрибуту | Find table by атрибуту and get cell Y coordinate

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_inner_html(int $number, string $frame = '-1'): string**

Получить внутренний HTML DOM элемента, который найти по номеру | Get inner HTML by number

**get_cell_count_by_number(int $number, string $frame = '-1'): int**

Получить количество ячеек таблицы, таблицу найти по номеру | Find table by number and get the number of cells

## Class: XHETD

For handling td DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHETextArea

For handling textarea DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**seek_to_end_by_number(int $number, string $frame = '-1'): bool**

Переместить курсор в конец поля элемента DOM многострочного поля ввода, который найти по номеру | Find teaxtarea by number and set cursor to end of input field

**seek_to_end_by_name(string $name, string $frame = '-1'): bool**

Переместить курсор в конец поля элемента DOM многострочного поля ввода, который найти по значению атрибута name | Find teaxtarea by name and set cursor to end of input field

**seek_to_end_by_attribute(string $attr_name, string $attr_value, bool $exactly = false, string $frame = '-1'): bool**

Переместить курсор в конец поля элемента DOM многострочного поля ввода, который найти по значению атрибута | Find teaxtarea by attribute and set cursor to end of input field

**seek_to_pos_by_number(int $number, int $pos, string $frame = '-1'): bool**

Переместить курсор в заданную позицию поля элемента DOM многострочного поля ввода, который найти по номеру | Find teaxtarea by number and set cursor to position of input field

**seek_to_pos_by_name(string $name, int $pos, string $frame = '-1'): bool**

Переместить курсор в заданную позицию поля элемента DOM многострочного поля ввода, который найти по значению атрибута name | Find teaxtarea by name and set cursor to position of input field

**seek_to_pos_by_attribute(string $attr_name, string $attr_value, bool $exactly, int $pos, string $frame = '-1'): bool**

Переместить курсор в заданную позицию поля элемента DOM многострочного поля ввода, который найти по значению атрибута | Find teaxtarea by attribute and set cursor to position of input field

**set_readonly_by_number(int $number, bool $readonly, string $frame = '-1'): bool**

Установить значение атрибута readOnly для элемента DOM многострочного поля ввода, который найти по номеру | Find teaxtarea by number and set readOnly

**set_readonly_by_name(string $name, bool $readonly, string $frame = '-1'): bool**

Установить значение атрибута readOnly для элемента DOM многострочного поля ввода, который найти по значению атрибута name | Find teaxtarea by name and set readOnly

**get_readonly_by_number(int $number, string $frame = '-1'): bool**

Получить значение атрибута readOnly для элемента DOM многострочного поля ввода, который найти по номеру | Find teaxtarea by number and get readOnly

**get_readonly_by_name(string $name, string $frame = '-1'): bool**

Получить значение атрибута readOnly для элемента DOM многострочного поля ввода, который найти по значению атрибута name | Find teaxtarea by name and get readOnly

**get_rows_by_number(int $number, string $frame = '-1'): int**

Получить количество строк для элемента DOM многострочного поля ввода, который найти по номеру | Find teaxtarea by number and get rows count

**get_rows_by_name(string $name, string $frame = '-1'): int**

Получить количество строк для элемента DOM многострочного поля ввода, который найти значению атрибута name | Find teaxtarea by name and get rows count

**get_cols_by_number(int $number, string $frame = '-1'): int**

Получить количество столбцов для элемента DOM многострочного поля ввода, который найти по номеру | Find teaxtarea by number and get columns count

**get_cols_by_name(string $name, string $frame = '-1'): int**

Получить количество столбцов для элемента DOM многострочного поля ввода, который найти значению атрибута name | Find teaxtarea by name and get columns count

**click_by_atribute(string $atr_name, string $atr_value, bool $exactly = true): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**send_event_by_atribute(string $atr_name, string $atr_value, bool $exactly, string $event): bool**

Послать событие по элементу DOM левой клавишей мыши, который найти по значению атрибута | Send event to DOM element by attribute

**get_atribute_by_name(string $name, string $name_attr): string**

Получить значение атрибута DOM элемента по значению атрибута name | Get attribute by name

**get_atribute_by_number(int $number, string $name_attr): string**

Получить значение атрибута DOM элемента по номеру | Get attribute by number

**get_atribute_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $name_attr): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_atribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**get_count_within_iframe_by_number(string $number): int**

Получить количество DOM элементов на странице | Get count of elements on page (no wait exist mode)

**is_exist_with_name(string $name, string $frame = '-1'): bool**

Проверить существование DOM элемента, который найти по атрибуту name | Is exist by name (no wait exist mode)

**click_within_iframe_by_attribute(string $attr_name, string $attr_value, bool $exactly, string $frame): bool**

Эмулировать клик по элементу DOM левой клавишей мыши, который найти по значению атрибута | Click on DOM element by attribute

**click_random_in_frame(string $frame): int**

Эмулировать клик по случайному элементу DOM | click on random element (no wait exist mode)

**send_event_by_name_in_frame(string $name, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по атрибуту name | Send event to DOM element by name

**send_event_by_number_in_frame(int $number, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по номеру | Send event to DOM element by number

**send_event_by_inner_text_in_frame(string $text, bool $exactly, string $event, string $frame): bool**

Послать событие элементу DOM, который найти по внутреннему тексту| Send event to DOM element by inner text

**set_focus_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_num): bool**

Установить фокус на DOM элемент, который найти по атрибуту | Set focus by attribute

**add_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $value_attr, string $frame_number): bool**

Добавить/Установить атрибут DOM элемента, который найти по атрибуту | Add/Set attribute by attribute

**set_value_within_iframe_by_name(string $name, string $value, string $frame): bool**

Задать значение атрибуту value элементу DOM, который найти по атрибуту name | Set value by name

**set_value_within_iframe_by_number(int $number, string $value, string $frame): bool**

Задать значение атрибуту value элементу DOM, который найти по номеру | Set value by number

**is_exist_with_attribute(string $attr_name, string $attr_value, bool $exactly): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**is_exist_with_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $frame_number): bool**

Проверить существование DOM элемента, который найти по атрибуту | Is exist by attribute

**get_value_within_iframe_by_name(string $name, string $frame): string**

Получить значение атрибута value элемента DOM, который найти по атрибуту name | Get value by name

**get_value_within_iframe_by_number(int $number, string $frame): string**

Получить значение атрибута value элемента DOM, который найти по номеру | Get value by number

**get_attribute_by_attribute_in_frame_by_number(string $attr_name, string $attr_value, bool $exactly, string $name_attr, string $frame_number): string**

Получить значение атрибута DOM элемента, который найти по значению другого атрибута | Get the attribute value founded by attribute

**add_atribute_by_number(int $number, string $name_atr, mixed $value_atr): bool**

Добавить/Установить атрибут DOM элемента, который найти по номеру | Add/Set attribute by number

**get_x_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату X DOM элемента, который найти по атрибуту | Get X of element by attribute

**get_y_by_atribute(string $attr_name, string $attr_value, bool $exactly = true): int**

Получить координату Y DOM элемента, который найти по атрибуту | Get Y of element by attribute

## Class: XHETH

For handling th DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHETR

For handling TR DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEU

For handling U DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEUl

For handling UL DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

## Class: XHEVideo

For handling video DOM elements in current loaded HTML page

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

# Category `SYSTEM`

## Class: EncodedVariable

Encoded Variable

### Methods

**__construct(string $unique_name): void**



**__toString(): string**



## Class: EncodedString

Encoded String

### Methods

**__construct(string $str, string $key): void**



**__toString(): string**



## Class: XHEExcelFileCompatible

Класс базовый для XHEExcelFile. Для устаревших функций

### Methods

**convert(string $inpath, string $outpath, int $timeout = 600): bool**

Конвертировать файл в другой формат (xlsx,xls,csv,txt,html,pdf,xps)

**set_col_number_format(string $path, int $sheet, string $col, string $format, bool $is_predefined = true, bool $except_header = false): bool**

Задать числовой формат столбца

**set_cell_number_format(string $path, int $sheet, int $row, string $col, string $format, bool $is_predefined = true): bool**

Задать формат ячейки с датой или числом

**set_range_number_format(string $path, int $sheet, string $range, string $format, bool $is_predefined = true): bool**

Задать числовой формат диапазона

**set_range_type(string $path, int $sheet, string $range, string $type_): bool**

Задать тип диапазона

**set_col_type(string $path, int $sheet, string $col, string $type_, bool $except_header = false): bool**

Задать тип заданного столбца

**set_cell_type(string $path, int $sheet, int $row, string $col, string $type_): bool**

Задать тип заданной ячейки

## Class: XHEFile_osCompatible



### Methods

**get_file_name(mixed $path): void**



**get_file_title(mixed $path): void**



**get_file_ext(mixed $path): void**



**get_file_folder(mixed $path): void**



**get_file_disk(mixed $path): void**



## Class: XHEFolderCompatible



### Methods

**create_folder(mixed $path): void**



**get_folder_name(mixed $path): void**



**get_folder_disk(mixed $path): void**



## Class: XHEWordCompatible



### Methods

**get_page_count(mixed $path): void**



## Class: XHEWordFileCompatible



### Methods

**convert(string $inpath, string $outpath, int $timeout = 600): void**



**get_page_count(string $path): void**



**export_pages(string $inpath, string $outpath, int $from_page, int $count = 1): void**



**export_all_pages(string $inpath, string $to_folder, string $ext = 'pdf'): void**



**read_table_by_number(string $path, int $number, bool $as_array = false): void**



**compare(string $inpath1, string $inpath2): void**



## Class: XHEBd

Perform operations with Data base. Supported Data bases: "mysql", "mssql", "postgresql", "oracle", "sqlite"

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**connect(string $alias, string $connection_str, string $bd_type = 'mysql'): bool**

Создать соединение с Базой данных | Connect to DB

**disconnect(string $alias): bool**

Закрыть соединение с Базой данных | Close connection to DB

**query(string $alias, string $query, int $timeout = 60): string**

Выполнить SQL запрос к Базе данных с ответом в JSON формате | Execute SQL query with JSON answer

**query_arrays(string $alias, string $query, int $timeout = 60): ?array**

Выполнить SQL запрос к Базе данных с ответом в формате массива массивов | Execute SQL query with array answer

**query_dicts(string $alias, string $query, int $timeout = 60): ?array**

Выполнить SQL запрос к базе данных, для получения массива словарей | Execute SQL query with dictionary answer

## Class: XHEClipboard

Perform operations with operating system clipboard

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_text(): string**

Получить текущий текст из буфера обмена | Get text from clipboard

**clear(): bool**

Очистить буфер обмена | Clear clipboard

**put_text(string $text): bool**

Отправить текст в буфер обмена | Set text to clipboard buffer

**put_html(string $html, string $url = ''): bool**

Задать html в буфер обмена | Set html to clipboard buffer

## Class: XHECryptography

Performs encryption and decryption operations

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**crypt_text(string $text, string $key): string**

Выполнить симметричное шифрование строки | Encrypt text

**uncrypt_text(string $text, string $key): string**

Дешифровать текст | Decrypt text

**hash_text(string $text): string**

Получить хэш-код для текста (SHA256) | Get HASH for text

**crypt_file(string $inpath, string $outpath, string $key): bool**

Зашифровать текст файла | Encrypt file text

**uncrypt_file(string $inpath, string $outpath, string $key): bool**

Дешифровать текст файла | Decrypt file text

**hash_file(string $path, string $algoritm = 'sha256'): string**

Получить хэш-код файла | Get file hashcode

**get_totp(string $key, int $step = 30, string $algoritm = 'sha1'): string**

Сгенерировать код (пароль) TOTP | Get TOTP

**get_hotp(string $key, int $counter, string $algoritm = 'sha1'): string**

Сгенерировать код (пароль) HOTP | Get HOTP

## Class: XHEExcel

Perform operations with Excel files used Microsoft Excel application

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**create(string $path, string $sheet_name, mixed $header_datas = '', int $timeout = 6000): bool**

Создать и открыть файл Excel для работы | Create and open Excel file

**open(string $path, bool $read_only = false, bool $visibled = false, int $timeout = 3000, string $password = ''): bool**

Открыть файл Excel для работы | Open Excel file

**connect_by_hwnd(string $hwnd, string $path_alias, int $timeout = 3000): bool**

Подключится к уже открытому окну Excel, чтобы работать с его Листами (вместо $excel->open()) | Connect to Excel file

**save(string $path, int $timeout = 3000, string $password = ''): bool**

Сохранить Excel файл | Save Excel file

**close(string $path): bool**

Закрыть Excel файл | Close Excel file

**open_app(string $path): bool**

Открыть в приложении Excel файл | Open Excel file in app

**get_sheets_count(string $path): int**

Получить количество листов в файле Excel | Get pages count

**get_sheets_names(string $path): ?array**

Получить имена всех Листов файла Excel | Get all sheet names

**get_sheet_name(string $path, int $sheet): string**

Получить имя листа | Get sheet name

**set_sheet_name(string $path, int $sheet, string $name): bool**

Изменить название Листа файла Excel | Set sheet name

**set_sheet_zoom(string $path, int $sheet, int $zoom): bool**

Задать масштаб листа | Set sheet zoom

**get_sheet(string $path, int $sheet, int $timeout = 3000, mixed $only_visible = false, bool $use_value2 = true): ?array**

Получить содержимое заданного Листа Excel файла как двумерный массив | Get sheet as array

**set_sheet(string $path, int $sheet, array $sheet_array, int $timeout = 3000, int $row = 1, string $col = 'A'): bool**

Задать содержимое листа Excel файла данными из двумерного массива | Set sheet

**add_sheet(string $path, string $name): bool**

Добавить (создать) новый лист в файле Excel | Add sheet

**remove_sheet_by_number(string $path, int $number): bool**

Удалить Лист по номеру | Remove sheet by number

**remove_sheet_by_name(string $path, string $name): bool**

Удалить Лист по имени | Remove sheet by name

**get_sheet_number_by_name(string $path, string $name, bool $exactly = true): int**

Получить номер Листа по его названию | Get sheet number by name

**sort_sheet(string $path, int $sheet, string $col, bool $is_ascending = true, bool $is_header_exists = false, int $timeout = 3000): bool**

Сортировать Лист файла Excel по столбцу | Sort sheet by column

**dedupe_sheet(string $path, int $sheet, string $use_cols = '*', int $timeout = 3000): bool**

Убрать дубликаты строк в листе по всем или нескольким столбцам | Remove duplicate rows

**get_rows_count(string $path, int $sheet): int**

Получить количество строк в Листе файла Excel | Get rows count

**add_row(string $path, int $sheet, array $row_array): bool**

Добавить новую строку в Листе файла Excel из массива | Add row

**get_row(string $path, int $sheet, int $row, bool $use_value2 = true, bool $only_visible = false): ?array**

Получить строку как массив | Get row

**set_row(string $path, int $sheet, int $row, array $row_array): bool**

Заполнить строку в Листе файла Excel из массива | Set row

**add_rows(string $path, int $sheet, array $rows_array, int $timeout = 3000): bool**

Добавит несколько строк в Лист файла Excel из массива | Add rows

**remove_row(string $path, int $sheet, int $row): bool**

Удалить строку в Лист в файле Excel | Remove row

**remove_rows_by_number(string $path, int $sheet, int $row, int $count): bool**

Удалить строки по номеру в Лист в файле Excel | Remove row range by start index and count

**remove_rows_by_text(string $path, int $sheet, string $text, string $col = ''): bool**

Удалить строки по тексту в Листе в файле Excel | Remove rows by keyword phrase

**remove_rows_by_ranges(string $path, int $sheet, string $ranges): bool**

Удалить строки по диапазонам в Листе в файле Excel | Remove row range

**set_row_format(string $path, int $sheet, int $row, string $format): bool**

Задать числовой формат ячеек строки | Set row format

**autosize_row(string $path, int $sheet, int $row = -1, int $timeout = 3000): bool**

Задать авто-размеры для строки | Set cell sizes automatically for row

**set_row_height(string $path, int $sheet, int $row, float $height, int $timeout = 3000): bool**

Задать высоту для строки в Листе файла Excel | Set row height

**show_row(string $path, int $sheet, int $row, bool $show = true): bool**

Показать или спрятать строку | Show or hide row

**is_row_hidden(string $path, int $sheet, int $row): bool**

Скрыта ли строка? | Does row is hide?

**get_cols_count(string $path, int $sheet, int $row = -1): int**

Получить количество столбцов в Листе файла Excel | Get columns count

**set_col_format(string $path, int $sheet, string $col, string $format): bool**

Задать числовой формат ячеек столбца | Get column cells format

**autosize_col(string $path, int $sheet, string $col = '', int $timeout = 3000): bool**

Задать авто-размеры для столбца | Set cell sizes automatically for column

**set_col_width(string $path, int $sheet, string $col, float $width, int $timeout = 3000): bool**

Задать ширину столбца | Set column width

**get_cell(string $path, int $sheet, int $row, string $col, bool $use_value2 = true): string**

Прочитать текст заданной ячейки | Get cell text

**set_cell(string $path, int $sheet, int $row, string $col, string $text): bool**

Задать текст заданной ячейки | Set cell text

**clear_cell(string $path, int $sheet, int $row, string $col): bool**

Очистить заданную ячейку | Clear cell

**set_cell_format(string $path, int $sheet, int $row, string $col, string $format): bool**

Задать формат ячейки с датой или числом | Set cell format

**merge_cells(string $path, int $sheet, string $begin_address, string $end_address, bool $across = false): bool**

Объединить ячейки | Unite cells

**unmerge_cells(string $path, int $sheet, string $begin_address, string $end_address): bool**

Разъединить ячейки | Separate (united) cells

**get_cell_font(string $path, int $sheet, int $row, string $col): ?stdClass**

Получить шрифт заданной ячейки | Get cell font

**set_cell_font(string $path, int $sheet, int $row, string $col, XHEFont $font): bool**

Задать шрифт заданной ячейки XHE_Font | Set cell font

**set_cell_font_bold(string $path, int $sheet, int $row, string $col, bool $is_bold = true): bool**

Задать Bold (жирный) шрифта заданной ячейки | Set cell font style as Bold

**set_cell_font_italic(string $path, int $sheet, int $row, string $col, bool $is_italic = true): bool**

Задать Italic (курсив) шрифта заданной ячейки | Set cell font style as Italic

**set_cell_font_underline(string $path, int $sheet, int $row, string $col, bool $is_underline = true): bool**

Задать Underline (подчеркнутый) шрифта заданной ячейки | Set cell font style as Underline

**set_cell_font_striketrough(string $path, int $sheet, int $row, string $col, bool $is_striketrough = true): bool**

Задать Strikethrough (зачеркнутый) шрифта заданной ячейки | Set cell font style as Strikethrough

**set_cell_font_shadow(string $path, int $sheet, int $row, string $col, bool $is_shadow = true): bool**

Задать Shadow (тень) шрифта заданной ячейки | Set cell font style as Shadow

**set_cell_font_size(string $path, int $sheet, int $row, string $col, float $size): bool**

Задать размер шрифта заданной ячейки | Set cell font size

**set_cell_font_name(string $path, int $sheet, int $row, string $col, string $name): bool**

Задать имя шрифта заданной ячейки | Set font name

**kill(): bool**

Закрыть все открытые экземпляры приложения Excel | Kill all Excel app process

**convert(string $inpath, string $outpath, int $timeout = 3000, string $delimeter = ''): bool**

Конвертировать файл в другой формат. Формат конвертации определяется по расширению файлов. | Convert file

**export_sheets(string $path, string $to_folder, int $timeout = 3000): bool**

Разбить и экспортировать Листы Книги как отдельные xlsx файлы | Save all pages as separate Excel files

**split_sheet_by_rows(string $path, string $to_folder, int $sheet_number, int $rows_per_file, int $timeout = 3000): bool**

Разбить и экспортировать строки Листа Книги как отдельные xlsx файлы | Save all rows of sheet as separate Excel files

**export_to_access(string $path, string $dbpath, string $sheet_name, string $table_name, int $timeout = 3000): bool**

Экспортировать Лист в базу данных Access | Export sheet to Access DB

**run_macro_by_name(string $path, int $active_sheet, string $macro_name, string $file_name = '', array $macro_args = null): bool**

Выполнить макрос с заданным именем в файле | Run macros by name

**add_macro(string $path, string $macro_name, string $macro_code): bool**

Добавить макрос | Add macros

**add_macro_from_file(string $path, string $macro_name, string $macro_file): bool**

Добавить макрос из файла | Add macros from file

**add_link(string $path, int $sheet, int $row, string $col, string $text, string $address, string $tip = ''): bool**

Добавить ссылку в ячейку | Add link to cell

**follow_link_by_number(string $path, int $active_sheet, int $number, int $timeout = 3000): bool**

Перейти по ссылке с заданным номером | Find by number and navigate link by number

**follow_link_by_text(string $path, int $active_sheet, string $text, bool $exactly = false, int $skip = 0, int $timeout = 3000): bool**

Перейти по ссылке с заданным текстом | Find by text and navigate link by number

**get_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, bool $is_match_case = true, string $col = '', int $timeout = 3000): XHEPosition**

Получить позицию первой найденной по тексту ячейки с заданным текстом | Get cell position by text

**get_all_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, bool $is_match_case = true, string $col = '', int $timeout = 3000): array**

Получить позицию всех ячеек с заданным текстом | Get all cll positions by text

**get_range(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): ?array**

Получить содержимое заданного диапазона Листа как массив строк | Get range

**get_and_clear_range(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): ?array**

Получить значения заданного диапазона Листа как массив строк и очистить ячейки диапазона | Get and clear range

**set_range_name(string $path, int $sheet, string $begin_cell, string $end_cell, string $name, int $timeout = 3000): bool**

Задать имя диапазона | Set range name

**copy_range_to_clipboard(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): bool**

Копировать ячейки диапазона в буфер обмена | Copy range values and set clipboard

**cut_range_to_clipboard(string $path, int $sheet, string $begin_cell, string $end_cell, int $timeout = 3000): bool**

Вырезать ячейки диапазона в буфер обмена | Cut range and set clipboard

**paste_range_from_clipboard(string $path, int $sheet, int $row, string $col, int $timeout = 3000): bool**

Вставить в ячейки диапазон из буфера обмена | Past range from clipboard

**dedupe_range(string $path, int $sheet, string $begin_cell, string $end_cell, string $use_cols = '*', int $timeout = 3000): bool**

Убрать дубликаты строк в диапазоне по всем или нескольким столбцам | Remove row duplicates in range

**cut_range_and_paste_to_range(string $path, int $src_sheet, int $target_sheet, string $src_begin_cell, string $src_end_cell, string $target_begin_cell, string $target_end_cell, int $timeout = 3000): bool**

Вырезать значения ячеек из диапазона и вставить значения в другой диапазон | Cut range and past to another one

**copy_range_and_paste_to_range(string $path, int $src_sheet, int $target_sheet, string $src_begin_cell, string $src_end_cell, string $target_begin_cell, string $target_end_cell, int $timeout = 3000): bool**

Копировать значения ячеек из диапазона и вставить значения в другой диапазон | Copy range and past to another one

**add_autofilter(string $path, int $sheet, string $range, int $col, string $condition1 = '', string $operator1 = '', string $condition2 = '', int $timeout = 3000): bool**

Добавить автофильтр | Add auto filer

**clear_autofilters(string $path, int $sheet, int $timeout = 3000): bool**

Очистить автофильтры Листа | Clear all sheet auto filters

**set_connection_source_data_file_by_number(string $path, int $number, string $source_data_file_path): bool**

Задать новый файл исходных данных для соединения (OLEDBConnection) | Set OLEDBConnection file as external source

**refresh_sheet(string $path, int $sheet): bool**

Обновить таблицу из внешних источников | Refresh data from external sources

## Class: XHEExcelDataReader

Perform operations with Excel files used ExcelDataReader library

### Methods

**__construct(string $server, string $password = ''): void**

server initialization

**set_password(string $excelpassword): bool**

Установить текущее значение пароля для чтения Excel файла, для доступа к документу Excel защищенным паролем | Set password

**get_sheet_name(string $path, int $sheet): string**

Получить имя листа | Get sheet name

**get_sheets_count(string $path): int**

Получить количество листов в файле Excel | Get sheets count

**get_sheet(string $path, int $sheet, int $timeout = 3000): ?array**

Получить содержимое заданного листа как массив | Get sheet

**get_rows_count(string $path, int $sheet): int**

Получить количество строк в Листе файла Excel | Get sheet rows count

**get_row(string $path, int $sheet, int $row): ?array**

Получить строку как массив | Get row

**get_cols_count(string $path, int $sheet): int**

Получить количество столбцов в Листе файла Excel | Get columns count

**get_cell(string $path, int $sheet, int $row, int $col): string**

Прочитать текст заданной ячейки | Get cell

## Class: XHEExcelFile

Perform operations with Excel files used library ClosedXML

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**create(string $path, string $sheet_name, mixed $header_datas = '', int $timeout = 6000): bool**

Создать и открыть файл Excel для работы | Create and open file

**open(string $path, int $timeout = 3000, bool $is_wait_busy = false, int $wait_busy_seconds = 180): bool**

Открыть файл Excel для работы | Open

**is_opened(string $path): bool**

Проверить на открытость Excel файл | Is file opened

**save(string $path, int $timeout = 3000): bool**

Сохранить Excel файл | Save

**close(string $path): bool**

Закрыть Excel файл | Close

**extract_images(string $path, string $to_folder): bool**

Вытащить картинки из docx файла в папку | Extract and save all images from file

**get_sheets_count(string $path): int**

Получить количество листов в файле Excel | Get pages count

**set_sheet_zoom(string $path, int $sheet, int $zoom): bool**

Задать масштаб указанного Листа в файле Excel | Set zoom for sheet

**get_sheets_names(string $path): ?array**

Получить имена всех Листов файла Excel | Get all page names

**get_name_for_new_sheet(string $path, string $name): string**

Получить название для нового листа. Подбирается уникальное имя с учетом существующих названий Листов. | Get lass added sheet name

**add_sheet(string $path, string $name): bool**

Добавить (создать) новый лист в файле Excel | Add sheet

**remove_sheet_by_number(string $path, int $number): bool**

Удалить Лист по номеру в файле Excel | Remove sheet by number

**remove_sheet_by_name(string $path, string $name): bool**

Удалить Лист по названию | Remove sheet by name

**remove_sheets_by_name(string $path, array $names): bool**

Удалить Листы по названию | Remove sheets by number

**get_sheet_number_by_name(string $path, string $name, bool $exactly = true): int**

Получить номер Листа по его названию | Get sheet number by name

**get_active_sheet_number(string $path): int**

Получить номер активного Листа в Excel файле | Get active sheet number

**set_active_sheet_by_number(string $path, int $sheet): bool**

Задать активный Лист в Excel файле | Set active sheet by number

**read_sheet(string $path, int $sheet, int $timeout = 3000): string**

Получить содержимое заданного Листа Excel файла как строку | Get sheet as JSON

**get_sheet(string $path, int $sheet, int $timeout = 3000): ?array**

Получить содержимое заданного Листа Excel файла как двумерный массив | Get sheet as array

**get_sheet_by_page(string $path, int $sheet, int $skip = 0, int $limit = 10, int $timeout = 3000): ?array**

Получить содержимое заданного Листа Excel файла как двумерный массив постранично | Get sheet as arrays (pagination)

**set_sheet(string $path, int $sheet, array $sheet_array, int $timeout = 3000, int $row = 1, string $col = 'A'): bool**

Задать содержимое листа Excel файла данными из двумерного массива | Set sheet

**get_sheet_name(string $path, int $sheet): string**

Получить имя листа | Get sheet name

**set_sheet_name(string $path, int $sheet, string $name): bool**

Изменить название Листа файла Excel | Set sheet name by number

**clear_sheet(string $path, int $sheet): bool**

Очистить все ячейки на заданном Листе файла Excel | Clear sheet

**copy_sheet(string $path, int $sheet_number, string $newSheetName = ''): bool**

Копировать содержимое Листа и создать новый Лист с этим содержимым | Copy the sheet content and create the one as a new sheet

**set_sheet_color(string $path, int $sheet, string $color): bool**

Задать цвет ячеек Листа к файлу Excel | Set sheet all cells color

**sort_sheet(string $path, int $sheet, string $cols, bool $is_ascending = true, bool $is_header_exists = false, int $timeout = 3000): bool**

Сортировать Лист файла Excl по одному или нескольким столбцам | Sort sheet

**dedupe_sheet(string $path, int $sheet, string $use_cols = '*', bool $is_header_exists = false, int $timeout = 3000, int $header_length = 1): bool**

Убрать строки-дубликаты для Листа файла Excel | Remove duplicate rows

**split_sheet_by_rows(string $path, string $to_folder, int $sheet_number, int $rows_per_file, int $timeout = 3000): bool**

Разбить Лист файла Excel по строкам и сохранить в новые файлы Excel | Save all rows of sheet as separate Excel files

**get_rows_count(string $path, int $sheet, bool $only_used = false): int**

Получить количество строк в Листе файла Excel | Get rows count

**get_row(string $path, int $sheet, int $row): ?array**

Получить строку в Листе файла Excel как массив | Get row

**set_row(string $path, int $sheet, int $row, array $row_array): bool**

Заполнить строку в Листе файла Excel из массива | Set row

**add_row(string $path, int $sheet, array $row_array): bool**

Добавить новую строку в Листе файла Excel из массива | Add row

**insert_row(string $path, int $sheet, int $row, int $count = 1): bool**

Вставить строку в Лист файла Excel | Insert row

**remove_row(string $path, int $sheet, int $row): bool**

Удалить строку в Лист в файле Excel | Remove row

**add_rows(string $path, int $sheet, array $rows_array, int $timeout = 3000): bool**

Добавить несколько строк в Лист файле Excel | Add rows

**remove_rows_by_number(string $path, int $sheet, int $row, int $count): bool**

Удалить строки по номеру в Лист в файле Excel | Remove rows

**remove_rows_by_text(string $path, int $sheet, string $text, mixed $col = ''): bool**

Удалить строки по тексту в Листе в файле Excel | Remove rows by keyword phrase

**remove_rows_by_ranges(string $path, int $sheet, string $ranges): bool**

Удалить строки по диапазонам в Листе в файле Excel | Remove row range

**clear_row(string $path, int $sheet, int $row): bool**

Очистить строку от значений в Листе в файле Excel | Clear row

**copy_row(string $in_path, string $in_sheet, string $in_row, string $out_path, string $out_sheet, string $out_row): bool**

Копировать строку из одного файла Excel в другой | Copy row from current file to another

**get_col(string $path, int $sheet, string $col): ?array**

Получить столбец Листа файла Excel как массив | Get column

**set_col(string $path, int $sheet, string $col, array $col_array): bool**

Заполнить столбец Листа файла Excel из массива | Set column

**add_col(string $path, int $sheet, array $col_array): bool**

Добавить столбец в Лист файла Excel | Add column

**insert_col(string $path, int $sheet, string $col, int $count = 1): bool**

Вставить столбец в Лист файла Excel | Insert column

**remove_col(string $path, int $sheet, string $col, bool $shift_to_left = true): bool**

Убрать столбец в Листе файла Excel | Remove column

**clear_col(string $path, int $sheet, string $col): bool**

Очистить столбец от значений в Листе файла Excel | clear column

**set_row_color(string $path, int $sheet, int $row, string $color): bool**

Задать цвет заданной ячейки в Листе файла Excel для (всей) строки | Set row foreground color

**set_row_background_color(string $path, int $sheet, int $row, string $color): bool**

Задать цвет фона ячейкам для в Листе файла Excel (всей) строки | Set row background color

**set_row_border(string $path, int $sheet, int $row, string $color, int $border_type = 13, string $aligment = 'all'): bool**

Задать тип и цвет границы заданной ячейки для всей строки в Листе файла Excel | Set row border

**autosize_row(string $path, int $sheet, int $row = -1, int $timeout = 3000): bool**

Установить автоматически (подогнать) размеры для строки в Листе файла Excel | Set cell sizes automatically for row

**set_row_height(string $path, int $sheet, int $row, float $height, int $timeout = 3000): bool**

Задать высоту для строки в Листе файла Excel | Set row height

**get_cols_count(string $path, int $sheet, int $row = -1, bool $only_used = false): int**

Получить количество столбцов в Листе файла Excel | Get columns count

**autosize_col(string $path, int $sheet, string $col = '', int $timeout = 3000): bool**

Задать автоматически размеры (подогнать) для столбца в Листе файла Excel | Set cell sizes automatically for column

**set_col_width(string $path, int $sheet, string $col, float $width, int $timeout = 3000): bool**

Задать ширину столбца в Листе файла Excel | Set column width

**set_col_color(string $path, int $sheet, string $col, string $color): bool**

Задать цвет ячеек для всего столбца в Листе файла Excel | Set column cells foreground

**set_col_background_color(string $path, int $sheet, string $col, string $color): bool**

Задать цвет фона ячеек для всего столбца в Листе файла Excel | Set column cells background

**set_col_border(string $path, int $sheet, string $col, string $color, int $border_type = 13, string $aligment = 'all'): bool**

Задать тип и цвет границы заданной ячейки для всего столбца в Листе файла Excel | Set column cells border

**set_col_format(string $path, int $sheet, string $col, string $format, bool $is_predefined = false, bool $except_header = false): bool**

Задать формат столбца (устаревшая ф-ия исп. set_col_number_format()) | Set column cells format

**add_cell(string $path, int $sheet, int $row, string $text): bool**

Добавить ячейку к строке или таблице | Add cell

**get_cell(string $path, int $sheet, int $row, string $col): string**

Прочитать текст заданной ячейки | Get cell

**set_cell(string $path, int $sheet, int $row, string $col, string $text, string $type = ''): bool**

Задать текст заданной ячейки | Set cell

**clear_cell(string $path, int $sheet, int $row, mixed $col): bool**

Очистить заданную ячейку | Clear cell

**get_cell_type(string $path, int $sheet, int $row, string $col): string**

Получить тип заданной ячейки | Get cell type

**set_cell_format(string $path, int $sheet, int $row, string $col, string $format, bool $is_predefined = true): bool**

Задать формат ячейки | Set cell format

**set_cell_color(string $path, int $sheet, int $row, string $col, string $color): bool**

Задать цвет текста заданной ячейки | Set cell foreground color

**set_cell_background_color(string $path, int $sheet, int $row, string $col, string $color): bool**

Задать цвет фона заданной ячейки | Set cell background color

**set_cell_border(string $path, int $sheet, int $row, string $col, string $color, int $border_type = 13, string $aligment = 'all'): bool**

Задать тип и цвет границы заданной ячейки | Set cell border

**get_cell_color(string $path, int $sheet, int $row, string $col): string**

Получить цвет текста заданной ячейки | Get cell foreground

**get_cell_background_color(string $path, int $sheet, int $row, string $col): string**

Получить цвет фона заданной ячейки | Get cell background

**get_cell_font(string $path, int $sheet, int $row, string $col): ?stdClass**

Получить шрифт заданной ячейки | Get cell font

**set_cell_font(string $path, int $sheet, int $row, string $col, XHEFont $font): bool**

Задать шрифт заданной ячейки | Set cell font

**get_merged_cell_range(string $path, int $sheet, int $row, string $col): false|\XHERange**

Получить диапазон объединенной ячейки | Get merged cell range

**get_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, string $col = '', int $timeout = 3000): XHEPosition**

Получить позицию первой ячейки с заданным текстом | Find cell by text and get it position

**get_all_pos_by_text(string $path, int $sheet, string $text, bool $exactly = true, string $col = '', int $timeout = 3000): array**

Получить позицию всех ячеек с заданным текстом | | Find all cells by text and get positions

**add_link(string $path, int $sheet, int $row, string $col, string $text, string $address, string $tip = ''): bool**

Добавить ссылку в ячейку | Add link to cell

**set_range_name(string $path, int $sheet, string $range, string $name): bool**

Задать имя диапазона | Set range name

**clear_range(string $path, int $sheet, string $range, string $options = 'All'): bool**

Очистить ячейки диапазона | Clear range

**copy_range(string $path, int $sheet, string $range, int $to_sheet, int $row, string $col): bool**

Копировать ячейки диапазона | Copy range

**move_range(string $path, int $sheet, string $range, int $to_sheet, int $row, string $col): bool**

Переместить ячейки диапазона | Move range

**set_range_format(string $path, int $sheet, string $range, string $format, bool $is_predefined = true): bool**

Задать формат диапазона | Set range format

**set_range_border(string $path, int $sheet, string $range, string $color, int $border_type = 13, string $aligment = 'all'): bool**

Задать тип и цвет границы ячеек указанного диапазона | Set range border

**dedupe_range(string $path, int $sheet, string $range, string $use_cols = '*', int $timeout = 3000): bool**

Убрать дубликаты в диапазоне по всем или нескольким столбцам | Remove row duplicates in range

**add_autofilter(string $path, int $sheet, string $range, int $col, string $condition1 = '', string $value1 = '', string $operator1 = '', string $condition2 = '', string $value2 = '', int $timeout = 3000): bool**

Добавить автофильтр | Add auto filer

**clear_autofilters(string $path, int $sheet, int $timeout = 3000): bool**

Очистить автофильтры | Clear all sheet auto filters

**get_range(string $path, int $sheet, string $range, int $timeout = 3000): ?array**

Получить содержимое заданного диапазона Листа как массив строк | Get range

**get_and_clear_range(string $path, int $sheet, string $range, int $timeout = 3000): ?array**

Получить значения заданного диапазона Листа как массив строк и очистить ячейки диапазона | Get and clear range

**convert(string $inpath, string $outpath, int $timeout = 600): bool**

Конвертировать файл в другой формат (xlsx,xls,csv,txt,html,pdf,xps)

**set_col_number_format(string $path, int $sheet, string $col, string $format, bool $is_predefined = true, bool $except_header = false): bool**

Задать числовой формат столбца

**set_cell_number_format(string $path, int $sheet, int $row, string $col, string $format, bool $is_predefined = true): bool**

Задать формат ячейки с датой или числом

**set_range_number_format(string $path, int $sheet, string $range, string $format, bool $is_predefined = true): bool**

Задать числовой формат диапазона

**set_range_type(string $path, int $sheet, string $range, string $type_): bool**

Задать тип диапазона

**set_col_type(string $path, int $sheet, string $col, string $type_, bool $except_header = false): bool**

Задать тип заданного столбца

**set_cell_type(string $path, int $sheet, int $row, string $col, string $type_): bool**

Задать тип заданной ячейки

## Class: XHEFile_os

Perform operations with files

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**copy(string $path, string $new_path, bool $fail_if_exist = false): bool**

Копировать файл | Copy file

**move(string $path, string $new_path, bool $fail_if_exist = false): bool**

Переместить файл | Move file

**rename(string $path, string $new_path): bool**

Переименовать файл | Rename file

**delete(string $path): bool**

Удалить файл | Delete file

**wait_copy(string $path, int $wait_count = 2000, int $wait_step = 5, bool $is_verbose = true): bool**

Ожидать завершения операции копирования/перемещения файла | Wait copy file

**unzip(string $path, string $to_folder, string $encoding = 'cp866'): bool**

Распаковать файл-архив с помощью библиотеки ZIP | Unpack ZIP file

**un7z(string $path, string $to_folder, string $path_to_7z = 'C:\\Program Files\\7-Zip'): bool**

Распаковать файл-архив с помощью приложения 7-Zip | Unpack file by 7-Zip

**wait_for_exist(string $path, int $wait_count = 60, int $wait_step = 1, bool $is_verbose = true): bool**

Ожидать появления файла | Wait fail for exist

**is_exist(string $path): bool**

Проверка существования файла | Is file exist?

**get_name(string $path): string**

Получить имя файла (с расширением) | Get full file name

**get_title(string $path): string**

Получить имя файла (без расширения) | Get file name

**get_ext(string $path): string**

Получить расширение файла | Get file extension

**get_folder(string $path, int $level = 0): string**

Получить папку файла | Get file folder

**get_disk(string $path): string|false**

Получить метку логического диска, на котором находится файл | Get file logical disk label

**get_size(string $path): int**

Получить размер файла в байтах | Get file size

**get_random_file_content(string $folder, string $ext, bool $include_subfolders, int $timeout = -1): string|false**

Получить содержимое случайного файла в заданной папке | Get random file content

**get_creation_date(string $path, bool $time = false): string|false**

Получить дату создания файла | Get file creation date

**get_modification_date(string $path, bool $time = false): string|false**

Получить дату последнего изменения файла | Get file modification date

**get_lastacess_date(string $path, bool $time = false): string|false**

Получить дату последнего доступа к файлу | Get file last access date

**is_normal(string $path): bool**

Проверить что файл нормальный (атрибут NORMAL) | Get attribute NORMAL value

**is_readonly(string $path): bool**

Проверить что файл только для чтения (атрибут READONLY) | Get attribute NORMAL value

**is_hidden(string $path): bool**

Проверить что файл скрыт (атрибут HIDDEN) | Get attribute HIDDEN value

**is_system(string $path): bool**

Проверить что файл системный (атрибут SYSTEM) | Get attribute SYSTEM value

**is_archive(string $path): bool**

Проверить что файл архивный (атрибут ARCHIVE) | Get attribute ARCHIVE value

**set_normal(string $path, bool $on = true): bool**

Установить у файла значение атрибута NORMAL | Set attribute NORMAL value

**set_readonly(string $path, bool $on = true): bool**

Установить у файла значение атрибута READONLY | Set attribute READONLY value

**set_hidden(string $path, bool $on = true): bool**

Установить у файла значение атрибута HIDDEN | Set attribute HIDDEN value

**set_system(string $path, bool $on = true): bool**

Установить у файла значение атрибута SYSTEM | Set attribute SYSTEM value

**set_archive(string $path, bool $on = true): bool**

Установить у файла значение атрибута ARCHIVE | Set attribute ARCHIVE value

**get_file_name(string $path): string**

Get file name

**get_file_title(string $path): string**

Get file title (without extension)

**get_file_ext(string $path): string**

Get file extension

**get_file_folder(string $path): string**

Get file folder

**get_file_disk(string $path): string|bool**

Get file disk

## Class: XHEFolder

Perform operations with folders

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**create(string $path): bool**

Создать папку | Create folder

**copy(string $path, string $new_folder_place, bool $flag_fail_exist = true, int $timeout = 3000): bool**

Копировать папку | Copy folder

**move(string $path, string $new_folder_place, int $timeout = 3000): bool**

Перенос папки | Move folder

**rename(string $path, string $new_folder_name, int $timeout = 3000): bool**

Переименовать папку | Rename folder

**delete(string $path): bool**

Удалить папку | Delete folder

**clear(string $path, int $timeout = 3000): bool**

Очистить содержимое папки | Clear folder

**rar(string $path, string $path_to_rar = '', string $options = 'u -m5 -mdE -s -r -ed -ep1', int $timeout = 3000): bool**

Выполнить упаковку папки с помощью приложения RAR | Compress folder by RAR

**zip(string $path, string $to_file, int $timeout = 3000): bool**

Выполнить упаковку папки с помощью библиотеки ZIP | Compress folder by ZIP

**is_exist(string $path): bool**

Проверить существование папки | Check folder is exists

**get_name(string $path): string**

Получить имя папки | Get folder name

**get_disk(string $path): string|false**

Получить метку логического диска, на котором находится папка | Get folder logical disk label

**get_size(string $path): int**

Получить размер папки в байтах | Gey folder size

**get_items_count(string $path, bool $include_subfolders = false, bool $only_folders = false, int $timeout = 3000): int**

Получить количество элементов в папке | Get folder items count

**get_all_items(string $path, bool $include_subfolders = false, bool $only_folders = false, int $timeout = 3000): string|false**

Получить все элементы из папки | Get all items in folder

**get_all_files(string $path, bool $include_subfolders = false, string $mask = '*.*', int $timeout = 3000): ?array**

Получить все файлы из папки | Get all files in folder

**get_all_folders(string $path, bool $include_subfolders = false, string $mask = '*.*', int $timeout = 3000): ?string**

Получить все папки из папки | Grt all folder path from the folder

**get_random_file(string $path, string $extension = 'txt', bool $include_subfolders = false, int $timeout = 3000): bool|string**

Получить случайный путь к файлу в папке | Get random file path from th folder

**get_creation_date(string $path, bool $time = false): string|false**

Получить дату создания папки | Get folder creation date

**get_modification_date(string $path, bool $time = false): string|false**

Получить дату последнего изменения папки | Get folder changed date

**get_lastacess_date(string $path, bool $time = false): string|false**

Получить дату последнего доступа к папке | Get folder last access date

**is_normal(string $path): bool**

Проверить что папка нормальная (атрибут NORMAL) | Get folder attribute NORMAL

**is_readonly(string $path): bool**

Проверить что папка только для чтения (атрибут READONLY) | Get folder attribute READONLY

**is_hidden(string $path): bool**

Проверить что папка скрыт (атрибут HIDDEN) | Get folder attribute HIDDEN

**is_system(string $path): bool**

Проверить что папка системный (атрибут SYSTEM) | Get folder attribute SYSTEM

**is_archive(string $path): bool**

Проверить что папка архивный (атрибут ARCHIVE) | Get folder attribute ARCHIVE

**set_normal(string $path, bool $on = true): bool**

Установить у папки значение атрибута NORMAL | Set folder attribute NORMAL

**set_readonly(string $path, bool $on = true): bool**

Установить у папки значение атрибута READONLY | Set folder attribute READONLY

**set_hidden(string $path, bool $on = true): bool**

Установить у папки значение атрибута HIDDEN | Set folder attribute HIDDEN

**set_system(string $path, bool $on = true): bool**

Установить у папки значение атрибута SYSTEM | Set folder attribute SYSTEM

**set_archive(string $path, bool $on = true): bool**

Установить у папки значение атрибута ARCHIVE | Set folder attribute ARCHIVE

**create_folder(string $path): bool**



**get_folder_name(string $path): string**



**get_folder_disk(string $path): string|false**



## Class: XHEKeyboard

Performs text input operations from the keyboard

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**input(string $string, string $timeout = '20:40', bool $inFlash = false, bool $auto_change = true): bool**

Ввода символов строки. Полная эмуляция | Full emulation of line input characters

**key(string $code, bool $is_key = true, bool $ctrl = false, bool $alt = false, bool $shift = false): bool**

Ввода одного символа с клавиатуры, для ввода символа в DOM элемент браузера по Alt-коду. Полная эмуляция | Press key by code

**key_down(string $key, bool $is_key = true): bool**

Нажатие down клавиши с клавиатуры, для ввода одного символа. Полная эмуляция | Press key down

**key_up(string $key, bool $is_key = true): bool**

Отжатие клавиши up с клавиатуры, для ввода одного символа. Полная эмуляция | Press key up

**press_key_by_code(string $code, bool $ctrl = false, bool $alt = false, bool $shift = false): bool**

Нажатие клавиши по коду (альтернативный вариант для Citrix). Полная эмуляция |  Press key by code alternative by Citrix

**send_input(string $string, string $timeout = '0:2', bool $inFlash = false, bool $auto_change = true): bool**

Ввод строки в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Send input JS

**send_key(string $key, bool $is_key = false, mixed $ctrl = false, mixed $alt = false, mixed $shift = false): bool**

Ввод символа с клавиши клавиатуры, для ввода одного символа в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Send key JS

**send_key_down(string $key, bool $is_key = false): bool**

Нажатие клавиши down с клавиатуры, для ввода одного символа в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Send key down JS

**send_key_up(string $key, bool $is_key = false): bool**

Нажатие клавиши up отжатия клавиши с клавиатуры, для ввода одного символа в DOM элемент браузера с помощью событий JS, даже если DOM элемент скрыт | Send key up JS

**set_ctrl_prefix(bool $on): bool**

Держать нажатой или отжатой кнопку CTRL. Полная эмуляция | Press key CTRL

**set_alt_prefix(bool $on): bool**

Держать нажатой или отжатой кнопку ALT. Полная эмуляция | Press key ALT

**set_shift_prefix(bool $on): bool**

Держать нажатой или отжатой кнопку SHIFT. Полная эмуляция | Press key SHIFT

**press_caps_lock(): bool**

Нажать кнопку 'CAPS LOCK'. Полная эмуляция | Press key 'CAPS LOCK'

**press_num_lock(): bool**

string $path 'NUM LOCK'. Полная эмуляция | Press key 'NUM LOCK'

**press_scroll_lock(): bool**

string $path 'SCROLL LOCK'. Полная эмуляция | Press key 'SCROLL LOCK'

**is_caps_lock_pressed(): bool**

Проверяет нажатие кнопки 'CAPS LOCK' | Is key 'CAPS LOCK' pressed?

**is_num_lock_pressed(): bool**

Проверяет нажатие кнопки 'NUM LOCK' | Is key 'NUM LOCK' pressed?

**is_scroll_lock_pressed(): bool**

Проверяет нажатие кнопки 'SCROLL LOCK' | Is key 'SCROLL LOCK' pressed?

**get_current_language(): string**

Получить текущий язык ввода ОС | Get current keyboard language

**set_current_language(string $language): bool**

Задать текущий язык ввода ОС | Set current keyboard language

## Class: XHELibreOffice

Perform operations with Excel files used library ClosedXML LibreOffice application

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_install_folder(string $folder): bool**

Задать путь к папке куда установлено приложение LibreOffice. По умолчанию это "C:\Program Files\LibreOffice\program\"

**convert(string $inpath, string $outpath, string $infilter = '', int $timeout = 3000): bool**

Конвертировать файл в другой формат с помощью исполняемого файла swriter.exe от LibreOffice

## Class: XHELibreOfficeCalc

Для работы с файлами OpenDocumentFormat на базе библиотеки

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_sheet_name(string $path, int $sheet): string**

Получить название Листа по индексу | Get sheet name by number

**get_sheets_count(string $path): int**

Получить число Листов | Get sheets count

**get_sheets_names(string $path): ?array**

Получить имена Листов | Get sheet names

**get_sheet(string $path, int $sheet, int $timeout = 3000): ?array**

Получить содержимое заданного листа как массив | Get sheet

**get_sheet_number_by_name(string $path, string $table_name, bool $exactly = true): int**

Получить номер Листа по имени | Get sheet number by name

**get_cell(string $path, int $sheet, int $row, int $col): string**

Прочитать текст заданной ячейки | Get cell

**get_cell_by_position(string $path, int $sheet, string $cell_position): string**

Получить значение ячейки по позиции ячейки | Get cell by position

**set_cell_color(string $path, int $sheet, int $row, int $col, string $foreground_color, string $background_color): bool**

Задать цвет шрифта и фона ячейки в таблице | Set cell foreground and background

**set_cell_color_by_position(string $path, int $sheet, string $cell_position, string $foreground_color, string $background_color): bool**

Задать цвет шрифта/фона ячейки по позиции | Set cell foreground and background by position

**set_cell(string $path, int $sheet, int $row, int $col, string $cell_content): bool**

Изменить значение ячейки | Set cell

**set_cell_by_position(string $path, int $sheet, string $cell_position, string $cell_content): bool**

Изменить значение ячейки по позиции | Set cell by position

**cell_add_annotation(string $path, int $sheet, int $row, int $col, string $annotation_author, string $annotation_comment, string $json_annotation_settings = ''): bool**

Добавить комментарий к ячейке по позиции | Add comment to cell

**cell_add_annotation_by_position(string $path, int $sheet, string $cell_position, string $annotation_author, string $annotation_comment, string $json_annotation_settings = ''): bool**

Добавить комментарий к ячейке по позиции | Add comment to cell by position

**add_define_range_name(string $path, string $range_name, string $range): bool**

Добавить диапазон | Add range

**add_row(string $path, int $sheet, array $row_array): bool**

Добавить строку | Add row

**get_row(string $path, int $sheet, int $row): ?array**

Получить строку как массив | Get row

**get_rows_count(string $path, int $sheet): int**

Получить число строк в листе | Get rows count

**set_row_height(string $path, int $sheet, int $row, string $height, int $timeout = 3000): bool**

Изменить высоту строки | Set row height

**get_cols_count(string $path, int $sheet): int**

Получить число столбцов в файле | Get columns count

**set_col_width(string $path, int $sheet, int $col, string $width, int $timeout = 3000): bool**

Изменить ширину столбца | Set column width

## Class: XHEMouse

Perform operations with Computer mouse

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**click(int $x = -1, int $y = -1, bool $scroll = true): bool**

Щелчок левой кнопки мыши в заданной точке браузера. Полная эмуляция | Click

**click_to_screen(int $x = -1, int $y = -1): bool**

Щелчок левой кнопки мыши в заданной точке экрана рабочего стола ОС. Полная эмуляция | Click on screen

**double_click(int $x = -1, int $y = -1, bool $scroll = true): bool**

Двойной щелчок левой кнопки мыши в заданной точке браузера. Полная эмуляция | Double click full emulation

**left_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool**

Нажать down левую кнопку мыши в заданной точке браузера. Полная эмуляция | Left button down full emulation

**left_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool**

Отпустить up левую кнопку мыши в заданной точке браузера. Полная эмуляция | Left button uo full emulation

**right_button_click(int $x = -1, int $y = -1, bool $scroll = true): bool**

Щелчок правой кнопкой мыши в заданной точке браузера. Полная эмуляция | Right button click full emulation

**right_button_click_to_screen(int $x = -1, int $y = -1): bool**

Щелчок правой кнопки мыши в заданной точке экрана рабочего стола ОС. Полная эмуляция | Right button click on screen full emulation

**right_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool**

Нажать down правую кнопку мыши в заданной точке браузера. Полная эмуляция | Right button down full emulation

**right_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool**

Отпустить up правую кнопку мыши в заданной точке браузера. Полная эмуляция | Right button up full emulation

**move(int $x, int $y, bool $scroll = true, int $time = 0, int $tremble = 2, string $buttons = ''): bool**

Передвинуть мышь в заданные координаты браузера. Полная эмуляция | Move full emulation

**move_on_screen(int $x, int $y, int $time = 0, int $tremble = 2, string $buttons = ''): bool**

Передвинуть мышь в заданные координаты рабочего стола ОС. Полная эмуляция | Move on screen full emulation

**wheel(int $time, int $x = -1, int $y = -1): bool**

Управление колесиком мыши. Полная эмуляция | Wheel full emulation

**move_to(int $x, int $y, string $type_, int $time_): bool**

Передвинуть мышь в заданные координаты браузера по заданной траектории. Полная эмуляция | Move to full emulation

**send_click(int $x = -1, int $y = -1, bool $scroll = true, bool $addCtrl = false): bool**

Щелчок левой кнопки мыши в заданной точке с помощью событий JS | CLick JS

**send_double_click(int $x = -1, int $y = -1, bool $scroll = true): bool**

Двойной щелчок левой клавишей мыши по элементу с помощью событий JS | Double click JS

**send_left_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool**

Отправить нажатие down левой клавишей мыши по элементу с помощью событий JS | Left button down JS

**send_left_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool**

Отправить отжатие up левой клавишей мыши по элементу с помощью событий JS | Left button up JS

**send_right_button_click(int $x = -1, int $y = -1, bool $scroll = true): bool**

Щелчок правой клавишей мыши по элементу с помощью событий JS | Right button click JS

**send_right_button_down(int $x = -1, int $y = -1, bool $scroll = true): bool**

Отправить нажатие down правой клавишей мыши по элементу с помощью событий JS | Right button down JS

**send_right_button_up(int $x = -1, int $y = -1, bool $scroll = true): bool**

Отправить отжатие up правой клавишей мыши по элементу с помощью событий JS | Right button up JS

**send_move(int $x = -1, int $y = -1, bool $scroll = true, int $time = 0, int $tremble = 5, string $buttons = ''): bool**

Передвинуть мышь к элементу со смещением с помощью событий JS | Move JS

**send_wheel(int $n, int $x = 1200, int $y = 600, int $key = 0): bool**

Отправить прокрутку колеса мыши с помощью событий JS | Wheel JS

**send_move_to(int $x, int $y, string $type_, int $time_): bool**

Полная эмуляция перемещения мыши к элементу по заданной траектории | Move to JS

**send_touch(int $id, int $touch_type, int $x = -1, int $y = -1, int $radiusX = 0, int $radiusY = 0, float $rotationAngle = 0, float $pressure = 0, int $modiefiers = 0, int $pointerType = 0): bool**

Нажать пальцами по элементу | Touch JS

**send_touch_to(int $x0, int $y0, int $x, int $y, string $type_, int $time_): bool**

Переместить палец в заданную точку браузера по заранее указанной траектории использую отправку событий | Touch to JS

**get_position(bool $in_browser = false, bool $virtual = false): string**

Получить координаты Х и Y текущего положения курсора мыши относительно левого верхнего угла | Get cursor position

**get_x(bool $in_browser = false, bool $virtual = false): int**

Получить координату Х текущего положения курсора мыши относительно левого верхнего угла | Get cursor position X

**get_y(bool $in_browser = false, bool $virtual = false): int**

Получить координату Y текущего положения курсора мыши относительно левого верхнего угла | Get cursor position Y

**send_click_to_flash_player(int $x, int $y, int $flash_num, bool $bUseFlashXY = false, bool $scroll = true): bool**

Отправить событие клика левой кнопки мыши во flash проигрыватель | Click left to Flash JS

**send_right_click_to_flash_player(int $x, int $y, int $flash_num, bool $bUseFlashXY = false, bool $scroll = true): bool**

Отправить событие клика правой кнопки мыши во flash проигрыватель | Click right to Flash JS

**send_mouse_move_to_flash_player(int $x, int $y, int $flash_num, bool $bUseFlashXY = false, bool $scroll = true): bool**

Отправить событие движения курсора мыши во flash проигрыватель | Move to Flash JS

**get_mouse_pos_to_flash_player(int $flash_num, string $x = '', string $y = ''): string**

Получить Х и Y координаты во flash проигрывателе по координатам в браузере или по текущему положению курсора в браузере | Get cursor position to Flash

## Class: XHEMsgFile

Perform operations with a file containing a letter in Outlook format (.msg)

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**read(string $path): ?XHEMailMessage**

Прочитать содержимое файла-письмо. Файл формата приложения Outlook (.msg) | Read message file

**save_attachments(string $path, string $to_folder): bool**

Сохранить файлы-вложения из файла-письма. Файл формата приложения Outlook (.msg) | Read message file and save attachments

## Class: XHEPdfFile

Perform operations with PDF files

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**is_pdf_file(string $path): bool**

Проверить что это pdf файл (по заголовку) | This file is format PDF?

**get_info(string $path, string $name): string**

Получить значение свойства документа PDF по имени | Get PDF document property by name

**get_page_count(string $path, int $timeout = 6000): int**

Получить число страниц в документе PDF | Get pages count in PDF document

**get_images_count(string $path): int**

Получить количество картинок в документе PDF | Get images count in PDF document

**get_links_count(string $path): int**

Получить количество ссылок в документе PDF | Get links count in PDF document

**get_link_by_number(string $path, int $number): string**

Получить ссылку с заданным номером в PDF документе | Get link by number in PDF document

**get_all_links(string $path): ?array**

Получить все ссылки в документе PDF

**read(string $path, string $method = ''): string**

Получить содержимое PDF документа как текст | Get PDF document as text

**read_page(string $path, int $page, string $method = ''): string**

Получить содержимое страницы по номеру PDF документа как текст | Get PDF document page by number as text

**get_page_number_by_text(string $path, string $text, int $exactly = 1, int $skip = 0, string $method = ''): string**

Получить номер страницы по тексту PDF документа | Get PDF document page number by text

**write(string $path, string $content): bool**

Записать текст в PDF документ | Write content to PDF document

**combine(string $outpath, array $inpaths, bool $is_compressed = false, int $timeout = 6000, string $method = ''): bool**

Комбинировать несколько PDF документов в один файл | Combine PDF files in one

**extract_images(string $path, string $to_folder, int $timeout = 6000): bool**

Сохранить все картинки из PDF документа в отдельные файлы | Save all images from PDF file

**compress_images(string $inpath, string $outpath, int $quality = 20, int $timeout = 6000): bool**

Сохранить и сжать все картинки из PDF документа в отдельные файлы картинки | Save and compress all images from PDF file

**print_pages(string $path, string $to_folder, float $scale = 1, int $timeout = 6000): bool**

Сохранить все страницы PDF документа как отдельные файлы-картинки | Save all pages as images

**split(string $path, mixed $to_folder, int $pages_per_file = 1, int $timeout = 6000): bool**

Сохранить все страницы PDF документа ак отдельные файлы PDF | Save all pages as separate PDF file

**insert_image(string $path, int $page, string $image_path, int $x, int $y, int $timeout = 6000): bool**

Вставить картинку в PDF документ | Insert image to PDF file

## Class: XHESound

For converting and playing audio files

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**beep(): bool**

Подать звуковой сигнал | Play beep

**play_sound(string $path): bool**

Проиграть звуковой файл | Play audio file

**convert_file(string $src_path, string $new_path, string $Hz = '', int $timeout = 60): bool**

Конвертировать файл в другой звуковой формат с помощью консольного приложения ffmpeg.exe | Convert audio file

**recognize_file_with_digits(string $path, int $timeout = 60): string|bool**

Распознать звуковой файл, состоящих из звуков английских цифр (0-9) с помощью консольного приложения pocketsphinx_continuous.exe | Recognize word digits in audio file

**recognize_file(string $path, string $dict, string $jsgf, string $hmm, string $add_params = '', int $timeout = 60): string|bool**

Распознать аудио файл как слова речи, с помощью консольного приложения pocketsphinx_continuous.exe | Recognize words in audio file

## Class: XHETextFile

Perform operations with text files

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_file_folder(string $path, int $timeout = -1): string**

Получить абсолютный путь папки указанного файла | Get file directory path

**get_lines_count(string $path, int $timeout = -1): int**

Получить число строк в файле | Get lines count

**get_encoding(string $path): string**

Получить имя кодировки файла | Get encoding name

**create_folder(string $path, int $timeout = -1): bool**

Создать папку | Create folder

**generate_folders_by_strings_file(string $file, string $folder, int $timeout = -1): bool**

Создать папки с именами из строк файла | Crete folders with name from file lines

**get_all_files_in_folder(string $path, string $masks = '', bool $include_subfolders = false, mixed $only_folders = false, int $timeout = -1): string|false**

Получить все имена файлов или папок в указанной папке | Get file or folder names in the folder

**collect_from_folders_to_file(string $infolderpath, string $outfilepath, int $timeout = -1, string $extension = 'txt'): bool**

Соединить тексты всех файлов из указанной папки в один файл | Unite content some files in folder to one file

**split_to_part(string $infilepath, string $outfilepath, int $numparts, int $timeout = -1): bool**

Разделить содержимое файла на отдельные файлы | Split file content to several files

**collect_from_folders_to_folder(string $infolderpath, string $outfolderpath, int $timeout = -1): bool**

Найти файлы из под-папок указанной папки и перенести в одну папку | Find all files in sub folders and replace to one folder

**sort(string $infilepath, string $outfilepath, int $timeout = 1000, string $encoding = 'utf-8'): bool**

Отсортировать файл построчно | Sort file lines

**dedupe(string $infilepath, string $outfilepath, int $timeout = -1, string $encoding = ''): bool**

Удалить дубликаты строк находящихся на соседних позициях из файла | Remove duplicate lines located at adjacent positions from the file

**randomize_to(string $infilepath, string $outfilepath, int $timeout = -1): bool**

Изменить порядок строк в файле случайным образом | Change the order of lines in a file randomly

**revert_strings_file(string $infile, string $outfile, int $timeout = -1): bool**

Изменить порядок строк на обратный в текстовом файле | Reverse the order of lines in a text file

**replace_string(string $infile, string $outfile, string $old_str, string $new_str, int $timeout = -1): bool**

Заменить строку другой строкой в текстовом файле | Replace a line text with another text in a text file

**exclude_strings_file_from_file(string $infile, string $excluding_file, string $outfile, int $timeout = -1): bool**

Убрать строки по списку строк из текстового файла | Remove lines by list of lines from text file

**file_links(string $infilepath, string $outfilepath, int $num_lines, string $type_make = 'L', int $timeout = -1): bool**

Форматировать случайные строки в текстовом файле

**write_file(string $file, string $content, int $timeout = -1, bool $create_folders = false, string $encoding = ''): bool**

Записать/перезаписать его содержимое | Set/Rewrite file content

**add_string_to_file(string $file, string $str, int $timeout = -1, string $encoding = ''): bool**

Добавить в файл строку | Add string to file

**set_string_to_file(string $file, string $str, int $line, bool $add = true, int $timeout = -1): bool**

Заменить/вставить строку в файле по индексу | Set/Rewrite line in file

**read_file(string $file, int $timeout = -1, string $encoding = 'windows-1251'): bool|string**

Прочитать файл | Read the file

**get_line_from_file(string $file, bool $rand, int $line, int $timeout = -1): bool|string**

Получить строку из файла | Get line from file

**delete_line_from_file(string $file, int $line, int $timeout = -1): bool**

Удалить строку из файла | Delete line in file

**get_lines_from_file(string $file, int $beg_line, int $lines_count, int $timeout = -1): bool|string**

Получить диапазон строк из файла | Get lines from file

## Class: XHEWord

Perform operations with folders used Microsoft Word application

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**create(string $path, string $text = ''): bool**

Создать документ WORD | Create WORD document

**open(string $path, bool $read_only = true, int $timeout = 3000): bool**

Открыть документ WORD | Open WORD document

**connect_by_hwnd(string $hwnd, string $path_alias, int $timeout = 3000): bool**

Подключится к уже открытому документу в приложении WORD по HWND | Connect to some WORD document (opened in app)

**save(string $path, int $timeout = 3000): bool**

Сохранить открытый документ WORD (ранее открытый) | Save opened WORD document

**close(string $path): bool**

Закрыть документ WORD (ранее открытый) | Close opened WORD document

**kill(): bool**

Закрыть все процессы приложения WORD | Kill all WORD app tasks

**remove_info(string $inpath, string $outpath, string $info = 'PersonalInformation', int $timeout = 3000): bool**

Удалить значение свойства документа из WORD файла и записать обновленный файл по указанному пути | Remove property value for WORD document and save the one to new location

**convert(string $inpath, string $outpath, int $timeout = 3000): bool**

Конвертировать в другой формат | Convert WORD document to another file format

**compare(string $inpath1, string $inpath2, int $timeout = 3000): bool**

Сравнить 2 WORD документа | Compare two WORD documents

**get_pages_count(string $path): int**

Получить число страниц в WORD документе | Get pages count in WORD document

**export_pages(string $inpath, string $outpath, int $from_page = 1, int $count = 1, int $timeout = 3000): bool**

Экспортировать диапазон страниц WORD документа в файл в формате PDF или XPS | Export WORD document page range to PDF or XPS file

**export_all_pages(string $inpath, string $to_folder, string $ext = 'pdf', string $filters = '', bool $is_match_all = false, int $timeout = 3000): bool**

Экспортировать каждую страницу WORD документа в отдельный файл в формате PDF или XPS | Export WORD document pages to separate PDF or XPS files

**read_page(string $path, int $page, int $timeout = 3000): string**

Получить текст страницы по ее номеру | Get page content by number

**add_text(string $path, string $text, bool $to_new_paragraph = false): bool**

Добавим текст в WORD документ | Add text to WORD document

**add_page_break(string $path): bool**

Добавим разрыв страницы в WORD документ | Add page break to WORD document

**get_text(string $path): string**

Получить текст всего WORD документа | Get text of WORD document

**replace_text(string $path, string $text, string $new_text): bool**

Заменить текст в WORD документе | Replace text in WORD document

**get_paragraphs_count(string $path): int**

Получить количество параграфов WORD документа | Get paragraphs count in WORD document

**get_paragraph_text_by_number(string $path, string $number): string**

Получить текст параграфа по номеру в WORD документе | Get paragraph text by number in WORD document

**set_paragraph_text_by_number(string $path, string $number, string $text): bool**

Задать текст параграфа по номеру в WORD документе | Set paragraph text by number in WORD document

**get_paragraph_number_by_text(string $path, string $text, bool $exactly = false, int $skip = 0): int**

Получить номер параграфа по тексту в WORD документе | Get paragraph text by phrase in WORD document

**delete_paragraph_by_number(string $path, string $number): bool**

Удалить параграф по номеру в WORD документе | Remove paragraph by number in WORD document

**delete_paragraph_by_text(string $path, string $text, bool $exactly = false, int $skip = 0): bool**

Удалить параграф по тексту в WORD документе | Remove paragraph by phrase in WORD document

**get_tables_count(string $path): int**

Получить количество таблиц в WORD документе | Get tables count in WORD document

**add_table(string $path, array $table): bool**

Добавим таблицу в WORD документ | Add table to WORD document

**add_image(string $path, string $image_path): bool**

Добавим картинку в WORD документ | Add image to WORD document

**get_shapes_count(string $path): int**

Получить количество фигур в WORD документе | Get shapes count in WORD document

**get_page_count(string $path): int**

Получить число страниц в файле

## Class: XHEWordFile

Perform operations with Excel files used ClosedXML.Excel library

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**create(string $path, string $text = ''): bool**

Создать документ WORD (docx)| Create WORD document

**open(string $path, bool $is_read_only = true): bool**

Открыть документ WORD | Open WORD document

**save(string $path): bool**

Сохранить открытый документ WORD (ранее открытый) | Save opened WORD document

**close(string $path): bool**

Закрыть документ WORD (ранее открытый) | Close opened WORD document

**get_page_count(string $path): int**

Получить число страниц в WORD документе | Get pages count in WORD document

**get_table_count(string $path): int**

Получить количество таблиц в WORD документе | Get tables count in WORD document

**read(string $path, int $timeout = 3000): string**

Получить текст всего WORD документа | Get text of WORD document

**get_table_by_number(string $path, int $number, bool $as_array = false): string|array|null**

Прочитать таблицу по номеру из Word документа (только для docx)

**extract_images(string $path, string $to_folder): bool**

Сохранить все картинки из Word документа в папку | Save all images to folder

**get_shapes_count(string $path): int**

Получить количество фигур в WORD документе | Get shapes count in WORD document

**get_shape_properties(string $path, int $number): string**

Получить свойства фигуры по номеру в формате XML | Find shape and get all properties as XML

**convert(string $inpath, string $outpath, int $timeout = 600): bool**

Конвертировать файл в другой формат xlsx,xls,csv,txt,html,pdf,xps (требует чтобы был установлен Excel не ниже 15 версии на компьютере)

**export_pages(string $inpath, string $outpath, int $from_page, int $count = 1): bool**

Экспортировать страницы

**export_all_pages(string $inpath, string $to_folder, string $ext = 'pdf'): bool**

Экспортировать все страницы

**read_table_by_number(string $path, int $number, bool $as_array = false): array|string|null**



**compare(string $inpath1, string $inpath2): bool**

Сравнить 2 документа

# Category `VISION`

## Class: XHEFineReaderOCR

To control the FineReader application for recognize image

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_language(string $language = 'Russian English'): bool**

Задать язык для распознания текста | Set language for text recognition

**set_program_folder(string $path): bool**

Задать путь к папке, где находится исполняемый файл FineCmd.exe

**recognize(string $path): string**

Распознать изображение как текст | Recognize text

**convert(string $inpath, string $outpath, int $timeout = 3000): bool**

Конвертировать файл | Convert a file

## Class: XHETesseractOCR

To control the Tesseract OCR application

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**recognize(string $path, string $language = 'rus+eng', int $tesseract_version = 5, int $timeout = 600): string**

Распознать текст в изображении или PDF файле | Recognize text from image or PDF file

**get_segmented_regions(string $path, string $language = 'rus+eng', int $pageLevel = 3): ?array**

Распознать и получить регионы | Recognize and get regions

**get_region_by_text(string $path, string $text, string $language = 'rus+eng'): ?array**

Распознать и получить регионы до фразы | Recognize and get regions before phrase

**set_allowed_chars(string $allowed_chars = ''): bool**

Задать разрешенные символы | Set char whitelist

**set_denieded_chars(string $denieded_chars = ''): bool**

Задать запрещенные символы | Set char blacklist

**set_params(string $params_str = ''): bool**

Задать параметры | Set params

**get_params(int $version = 5): string**

Получить текущие параметры | Get params

## Class: XHEYandexVision

To control the Yandex Vision

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_language(string $language = 'ru+en'): bool**

Задать язык для распознания текста | Set language for text recognition

**set_folder_id(string $folder_id): bool**

Задать значение поля folderID | Set folderID

**set_auth_token(string $token): bool**

Задать token | Set token

**set_api_key(string $api_key): bool**

Задать apikey | Set apikey

**recognize(string $path, string $type_image = 'image'): string**

Распознать текст в изображении | Recognize text from image

**get_segmented_regions(string $path): ?string**

Распознать и получить регионы | Recognize and get regions

**get_region_by_text(string $path, string $text): ?string**

Распознать и получить регионы до фразы | Recognize and get regions before phrase

# Category `WEB`

## Class: XHEFTPCompatible



### Methods

**create_directoy(string $server, string $dir_name): bool**

Создать папку на FTP сервере | Create a folder on the FTP server

**disconect(string $server): bool**

Отсоединится от FTP сервера | Disconnect from FTP server

**disconect_all(): bool**

Отсоединится от всех подключенных FTP серверов | Disconnect from all FTP servers

## Class: MSExchangeMailHelper

Helper class for working with email using the MS Exchange API

## Class: Anticaptcha

Class для работы с API anti-captcha.com.

### Methods

**setHost(string $host): void**

Задать Доменное имя API без протокола

**setScheme(string $scheme): void**

Установить схему HTTP протокола (запись в URL)

**setKey(string $key): void**

Установить Ключ API | Set client access key, must be 32 bytes long

**getVerboseMode(): bool**

Получить показывать ли процесс распознания в консоли(лог)

**setVerboseMode(bool $mode): void**

Установить показ процесс распознания в консоли (лог)

**getTaskInfo(): bool|mixed**

Получить результат запроса на распознавание

**getTaskResult(): string**

Функция реализована в наследниках

**getTaskId(): string**

Получить ID текущей капчи | Get last captcha ID капчи

**setTaskId(string $taskId): void**

Задать ID текущей капчи | Set last captcha ID капчи

**setErrorMessage(string $message): void**

Задать сообщения об ошибке

**getErrorMessage(): string**

Получить последнее сообщение об ошибке

**get_last_capcha_id(): string**

ID текущей капчи | Get last captcha ID капчи

**get_last_capcha_filename(): string**

Получить последний путь к файлу капчи | Get last captcha file

**get_last_capcha_result(): string**

Получить последний результат распознания капчи | Get last captcha result

**report_bug_capcha(string $id): false|string**

Послать отчет об ошибке при распознавании | Send report about bug captcha

**createTask(): bool**

Создать новую задачу на и получить ID задачи | Submit new task and receive tracking ID

**waitForResult(int $maxSeconds = 60, int $currentSecond = 0): bool**

Выполнить POST запрос к API рекурсивно | Execute POST request recursive

**getBalance(): string|bool**

Получить баланс средств аккаунта API | Get balance value

**get_balance(): string|bool**

Получить баланс средств аккаунта API | Get balance value

**reportIncorrectImageCaptcha(string $id): false|string**

Послать отчет об ошибке при распознавании | Send report about bug captcha

**jsonPostRequest(string $methodName, array $postData): false|mixed**

Выполнить POST запрос к API | Execute POST request

**debout(string $message, string $color = 'white'): void**

Вывод сообщений в консоль

## Class: ImageToText



### Methods

**setPhraseFlag(bool $value): void**

Установить значение капча это фраза?

**setCaseFlag(bool $value): void**

Установить значение для поля 'Регистр букв имеет значение для капчи'

**setNumericFlag(int $value): void**

Установить значение для поля 'Из каких символов капча значение для капчи'

**setMathFlag(bool $value): void**

Установить значение для поля 'На капче математическое действие'

**setMinLengthFlag(int $value): void**

Установить значение для поля 'Минимальное количество знаков в ответе'

**setMaxLengthFlag(int $value): void**

Установить значение для поля 'Максимальное количество знаков в ответе'

**getPostData(): array**

Сформировать тело для POST запроса | Make POST body

**setTaskInfo(mixed $taskInfo): void**

Задать значение объект с результатами запроса на распознавание

**getTaskSolution(): string**

Получить результат решения Капчи

**setFile(string $fileName): bool**

Установить значение body из содержимого файла | Set body variable from file content

**set_default_params(): bool**

Задать параметры распознания по умолчанию (сбросить значения для полей) | Reset params to default

**recognize_image(string $path): false|string**

Распознать картинку | Recognize image

## Class: NoCaptcha



### Methods

**setWebsiteURL(string $value): void**

Установить адрес целевой страницы

**setWebsiteKey(string $value): void**

Установить Ключ Recaptcha

**setWebsiteSToken(string $value): void**

Установить токен сайта

**setProxyType(string $value): void**

Установить схема протокола прокси (запись в URL)

**setProxyAddress(string $value): void**

Установить адрес для сервиса Прокси

**setProxyPort(int $value): void**

Установить порт для сервиса Прокси

**setProxyLogin(string $value): void**

Установить имя Пользователя для сервиса Прокси

**setProxyPassword(string $value): void**

Установить пароль Пользователя для сервиса Прокси

**setUserAgent(string $value): void**

Установить строку User-Agent

**setCookies(mixed $value): void**

Установить строку куки

**getPostData(): array**

Сформировать тело для POST запроса | Make POST body

**setTaskInfo(mixed $taskInfo): void**

Задать значение объект с результатами запроса на распознавание

**getTaskSolution(): string**

Получить результат решения Капчи

## Class: NoCaptchaProxyless



### Methods

**setWebsiteURL(string $value): void**

Установить адрес целевой страницы

**setWebsiteKey(string $value): void**

Установить ключ сайта

**setWebsiteSToken(string $value): void**

Установить токен сайта

**getPostData(): array**

Сформировать тело для POST запроса | Make POST body

**setTaskInfo(mixed $taskInfo): void**

Задать значение объект с результатами запроса на распознавание

**getTaskSolution(): string**

Получить результат решения Капчи

## Class: XHE2capcha



### Methods

**__construct(string $server, bool $is_ssl = true): void**

Constructor

**recognize_text(string $text): bool|string**

Распознать капчу из текста

**recognize_like_images(string $filename): bool|string**

Распознать картинки похожее на заданные

**recognize_invoice(string $filename): bool|string**

Распознать кассовый чек

**recognize_recaptcha_2_with_text(string $filename, string $textinstructions): bool|string**

Распознать ReCaptcha v2 (ASIRA) c текстовыми инструкциями

**recognize_recaptcha_2_with_image(string $filename, string $imageinstructions): bool|string**

Распознать ReCaptcha v2 (ASIRA)

**recognize_click_captcha(string $filename, string $textinstructions = ''): bool|string**

Распознать ClickCaptcha (в том числе ReCaptcha v2)

**recognize_rotate_captcha(string $filename, string $file_1, string $file_2 = '', string $file_3 = '', int $angle = 40): bool|string**

Распознать RotateCaptcha (в том числе FunCaptcha)

**recognize_recaptcha_v2(string $pageurl, string $googlekey, int $invisible = 0, string $proxy = '', string $proxytype = ''): bool|string**

Распознать капчу Recaptcha v2

**recognize_geetest(string $pageurl, string $gt, string $challenge, string $api_server = '', string $proxy = '', string $proxytype = ''): bool|string**

Распознать GeeTest капчу

## Class: XHE5Simnet



### Methods

**__construct(string $api = '', string $servis = 'http://sms-activate.api.5sim.net', string $ref = ''): void**

Constructor

## Class: XHEAnticapcha



### Methods

**__construct(string $server, bool $is_ssl = true): void**

Constructor

## Class: XHEAnticaptcha2



### Methods

**__construct(string $server, string $password = ''): void**



**get_balance(): float**

Получить баланс

**set_api_key(string $key): bool**

Задать ключ API к сервису по распознаванию

**set_verbose(bool $is_verbose = true): bool**

Задать Показывать ли процесс распознания в консоли(лог)

**image_to_text(string $path, int $timeout = 3000): string**

Получить текст из картинки

**get_recaptchaV2(string $site_url, string $site_key): string**

Распознать Recaptcha 2

**get_recaptchaV3(string $site_url, string $site_key): string**

Распознать Recaptcha 3

**get_hcaptcha(string $site_url, string $site_key, string $user_agent): string**

Распознать hСaptcha

## Class: XHEBrowser

To manage the current browser instance

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_count(int $count): bool**

Задать количество закладок | Set tabs count

**get_count(): int**

Получить количество закладок | Get tabs count

**set_active_browser(int $num, bool $activate = true): bool**

Задать активную закладку | Set active tab

**get_active_browser(): int**

Получить индекс активной закладки | Set the active tab index

**add_tab(): bool**

Добавить новую закладку | Add tab

**close(): bool**

Закрыть текущую закладку | Close current tab

**close_all_tabs(string $close_type = ''): bool**

Закрыть все закладки | Close all tabs

**set_active_page(int $page): bool**

Задать активную страницу (только для Selenium модели Браузера) | Set active page (Selenium only)

**navigate(string $url, bool $use_cache = true, bool $use_wait = true): bool**

Выполнить переход (навигацию) на заданный адрес URL ресурса | Navigate URL

**get_last_navigation_error(): string**

Получить текст ошибки возникшей при выполнении последнего (навигации) перехода на заданный адрес URL ресурса | Get last navigation error text

**refresh(bool $ignore_cache = true): bool**

Обновить текущую страницу открытую в Браузере (активная вкладка) | Refresh current page

**stop(): bool**

Остановить текущую операцию переход (навигацию) на заданный адрес URL ресурса | Stop navigate

**go_back(): bool**

Вернуться на предыдущую страницу (по истории навигации) | Go back page

**go_forward(): bool**

Перейти на следующую страницу (по истории навигации) | Go forward page

**set_home_page(string $url): bool**

Задать адрес URL ресурса в качестве "Домашней" страницы | Set home page

**navigate_to_home_page(): bool**

Выполнить переход (навигацию) на "Домашнюю страницу" | Navigate to home page

**wait_for(int $Try_Navigate_Second = 15, int $Try_Navigate_Count = 1): bool**

Ожидание загрузки страницы в Браузере (серия попыток) | Wait for page loading (with try counter)

**wait_js(int $Try_Second = 30): bool**

Ожидание выполнения скриптов JS в Браузере | Wait JS

**wait(int $num = -1): bool**

Ожидание загрузки страницы в Браузере | Wait page loading

**is_busy(int $num = -1): bool**

Проверить занятость Браузера | Check Browser is busy

**get_ready_state(): string**

Получить статус Браузера | Get Browser status

**set_wait_params(int $Try_Navigate_Second = -1, int $Try_Navigate_Count = -1): bool**

Задать параметры ожидания загрузки страницы в Браузере (без параметров - сброс по умолчанию на 30,1) | Set default Browser wait params

**enable_images(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить отрисовку картинок в Браузере. Настройки Браузера | Enable show images

**enable_java_script(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить JS скрипты в Браузере. Настройки Браузера | Enable JS

**enable_sounds(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить воспроизведение аудио в Браузере. Настройки Браузера | Enable sounds

**enable_video(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить видео в Браузере. Настройки Браузера | Enable video

**enable_activex(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить ActiveX в Браузере. Настройки Браузера | Enable ActiveX

**enable_java(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить Java в Браузере. Настройки Браузера | Enable Java

**enable_frames(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить фрэймы в Браузере. Настройки Браузера | Enable frames

**enable_fonts(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить системные шрифты в Браузере. Настройки Браузера | Enable system fonts

**enable_remote_fonts(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить удаленные шрифты в Браузере. Настройки Браузера | Enable remote fonts

**enable_popup(bool $enable = true, bool $refresh = true): bool**

Разрешить/Запретить всплывающие окна (Pop-up) в Браузере. Настройки Браузера | Enable Pop-up's

**disable_script_error(bool $enable = true, bool $refresh = true): bool**

Разрешить/Запретить сообщения об ошибках JS в Браузере. Настройки Браузера | Enable JS errors

**disable_security_problem_dialogs(bool $disable = true): bool**

Разрешить/Запретить диалоги-сообщения о проблемах безопасности в Браузере. Настройки Браузера | Disable security problem dialogs

**enable_quiet_regime(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить "тихий режим" (без интерактивности с пользователем) в Браузере. Настройки Браузера | Enable quiet mode

**enable_cache(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить Веб-кэш (WEB cache) в Браузере. Настройки Браузера | Enable WEB cache

**enable_dom_storage(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить Local DOM Storage в Браузере. Настройки Браузера | Enable Local DOM Storage

**enable_callback(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить callback в Браузере. Настройки Браузера | Enable callback

**enable_view_json(bool $enable = true, bool $refresh = true): bool**

Разрешить/Запретить просмотр JSON в Браузере. Настройки Браузера | Enable view JSON

**enable_web_rtc(bool $enable = true, bool $refresh = true): bool**

Разрешить/Запретить WebRTC в Браузере. Настройки Браузера | Enable WebRTC

**enable_web_socket(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить Web Socket в Браузере. Настройки Браузера | Enable Web Socket

**enable_common_cache_and_cookies(bool $enable = true, bool $refresh = true): bool**

Включить/Отключить режим общего Веб-кэш (WEB cache) и куки (cookie) для всех копий Браузера. Настройки Браузера | Enable common WEB cache

**enable_directx(bool $enable = true): bool**

Разрешить/Запретить отрисовка картинок DirectX в Браузере. Настройки Браузера | Enable DirectX image rendering

**enable_gpu_rendering(bool $enable = true): bool**

Включить/Отключить WebGL(отрисовка GPU) в Браузере. Настройки Браузера | Enable WebGL image rendering

**enable_browser_notification(bool $enable = true, bool $show = false, bool $refresh = true): bool**

Включить/Отключить уведомления от Браузера в Браузере. Настройки Браузера | Enable show browser notification

**is_enable_images(): bool**

Проверить включена отрисовка картинок в Браузере. Настройки Браузера | Is enable show images

**is_enable_java_script(): bool**

Проверить включены JS скрипты в Браузере. Настройки Браузера | Is enable JS

**is_enable_sounds(): bool**

Проверить включено воспроизведение аудио в Браузере. Настройки Браузера | Is enable sounds

**is_enable_video(): bool**

Проверить включено видео в Браузере. Настройки Браузера | Is enable video

**is_enable_activex(): bool**

Проверить включен ActiveX в Браузере. Настройки Браузера | Is enable ActiveX

**is_enable_java(): bool**

Проверить включен Java в Браузере. Настройки Браузера | Is enable JAVA

**is_enable_popup(): bool**

Проверить включена всплывающие окна (Pop-up) в Браузере. Настройки Браузера | Is enable Pop-up's

**is_enable_frames(): bool**

Проверить включена фрэймы в Браузере. Настройки Браузера | Is enable frames

**is_disable_script_error(): bool**

Проверить отключены сообщения об ошибках JS в Браузере. Настройки Браузера | Is disable script error

**is_enable_quiet_regime(): bool**

Проверить включен "тихий режим" (без интерактивности с пользователем) в Браузере. Настройки Браузера | Is enable quiet regime

**is_enable_cache(): bool**

Проверить Включен Веб-кэш (WEB cache) в Браузере. Настройки Браузера | Is enable cache

**is_enable_dom_storage(): bool**

Проверить включен Local DOM Storage в Браузере. Настройки Браузера | Is enable DOM storage

**is_enable_callback(): bool**

Проверить включен callback в Браузере. Настройки Браузера | Is enable callback

**is_enable_view_json(): bool**

Проверить включен просмотр JSON в Браузере. Настройки Браузера | Is enable view JSON

**is_enable_web_rtc(): bool**

Проверить включена WebRTC в Браузере. Настройки Браузера | Is enable WebRTC

**is_enable_web_socket(): bool**

Проверить включена WEB Socket в Браузере. Настройки Браузера | | Is enable WEB Socket

**is_enable_common_cache_and_cookies(): bool**

Проверить включен режим общего Веб-кэш (WEB cache) и куки (cookie) для всех копий Браузера. Настройки Браузера | Is enable WEB cache and cookie

**set_popup_type(int $popup_type): bool**

Задать как открывать всплывающие окно Pop-up в Браузере. Настройки Браузера | Set how view Pop-up

**set_google_api_key(string $api_key): bool**

Задать ключ для Google API. Настройки Браузера | Set Google default API key

**set_google_default_client_id(string $client_id): bool**

Задать ключ для Google API client ID. Настройки Браузера | Set Google API default client ID

**set_google_default_client_secret(string $client_secret): bool**

Задать ключ для Google API client secret. Настройки Браузера | Set Google API default client secret

**enable_isolate_tabs(bool $enable = true): bool**

Включить/Отключить режим "Изолированные Браузеры в закладках". Настройки Браузера | Enable Isolate tabs

**set_do_not_track(bool $doNotTrack = true): bool**

Включить/Отключить опцию запрет сайтам на отслеживание действий Пользователя Do Not Track | Set Do Not Track

**set_blocked_chipers(string $blocked_chipers, bool $refresh = false): bool**

Задать блокируемые шифры | Set blocked ciphers

**call_java_script(string $func, string $parametrs): bool**

Выполнить функцию JS, которая уже существует на странице | Call existed JS function

**run_java_script(string $script_text, string $add_file = '', int $timeout = 60): string**

Выполнить произвольный сценарий JS | Add custom JS code and run

**set_init_java_script(string $script_text, string $add_file = ''): void**

Добавить произвольный сценарий JS и выполнить при инициализации JS на странице | Set custom JS code and then executed after init JS

**set_document_complete_java_script(string $script_text, string $add_file = ''): void**

Добавить произвольный JS и выполнить после полной загрузки страницы (Document.readyState == 'complete') | Add custom JS and then executed after page is fully loaded

**run_jquery(string $script_text, string $ver = '3'): string**

Выполнить произвольный скрипт JQuery | Add custom JQuery code and run

**run_dojo(string $script_text): string**

Выполнить произвольный скрипт Dojo | Add custom Dojo code and run

**enable_proxy(string $connection, string $proxy, bool $recreate = true): bool**

Установить прокси | Set Proxy

**disable_proxy(string $connection = '', bool $recreate = true): bool**

Отключить прокси | Disable Proxy

**get_current_proxy(string $connection = '', bool $with_auth = false): string**

Получить текущий прокси | Get current Proxy

**get_version(bool $numerica = true): string**

Получить версию текущего Браузера | Get Browser version

**get_user_agent(): string**

Получить User agent | Get Browser User agent

**get_cookies_folder(): string**

Получить папку, где находятся файлы-куки Браузера | Get cookie folder path

**get_cache_folder(): string**

Получить папку, где находится Веб-кэш (WEB cache) Браузера | Get WEB cache folder path

**set_cookies_folder(string $folder, bool $refresh = true): bool**

Задать папку, где находятся файлы-куки Браузера | Set cookie folder path

**set_cache_folder(string $folder, bool $refresh = true): bool**

Задать папку, где находятся Веб-кэш (WEB cache) Браузера | Set WEB cache folder path

**flash_cookies_save(string $folder, string $site = ''): bool**

Сохранить флэш куки | Export Flash cache to file

**flash_cookies_restore(string $folder, string $site = ''): bool**

Восстановить сохраненные флэш куки | Import Flash cache from file

**flash_cookies_delete(string $site = ''): bool**

Удалить флэш куки | Delete Flash cookie

**set_user_agent(string $agent_string, bool $refresh = true): bool**

Задать строку User agent для Браузера | Set Browser User agent

**set_model(string $model): bool**

Задать модель Браузера | Set Browser Model

**get_model(): string**

Получить модель Браузера | Get Browser Model

**get_page_width(): int**

Получить ширину текущей страницы Браузера | Get Browser page width

**get_page_height(): int**

Получить высоту текущей страницы Браузера | Get Browser page height

**set_width(int $width): bool**

Задать ширину текущей страницы Браузера | Set Browser page width

**get_window_width(): int**

Получить ширину окна Браузера | Get Browser window width

**set_height(int $height): bool**

Задать высоту текущей страницы Браузера | Set Browser window width

**get_window_height(): int**

Получить высоту окна Браузера | Get Browser window height

**get_selected_text(bool $as_html): string**

Получить выделенный фрагмент в окне Браузера | Get selected text in Browser window

**set_vertical_scroll_pos(int $y): bool**

Задать позицию вертикального полосы прокрутки Y текущей страницы Браузера | Set vertical scroll position Y

**get_vertical_scroll_pos(): int**

Получить позицию вертикального полосы прокрутки текущей страницы Браузера | Get vertical scroll position Y

**set_horizontal_scroll_pos(int $x): bool**

Задать позицию горизонтального полосы прокрутки текущей страницы Браузера | Set horizontal scroll position X

**get_horizontal_scroll_pos(): int**

Получить позицию горизонтального полосы прокрутки текущей страницы Браузера | Get horizontal scroll position X

**clear_cookies(string $match_name, bool $clear_session = false, bool $clear_flash = true): bool**

Очистить хранилище куков (cookies) | Clear cookies

**clear_local_storage(): bool**

Очистить Local Storage | Clear Local Storage

**clear_indexed_db(): bool**

Очистить Indexed DB | Clear Indexed DB

**set_cookie(string $cookie): bool**

Установить куки для текущей страницы (простая форма) | Set cookie for current tab page (simple)

**set_cookie_for_url(string $url, string $name, string $cookie, string $expires = '', string $domain = '', string $path = '', bool $httpOnly = false, bool $secure = false, bool $session = false, string $sameSite = '', string $priority = ''): bool**

Установить куки | Set cookie for url

**get_cookie(bool $as_json = false): string**

Получить куки для текущей страницы | Get cookie for current tab page

**get_cookie_for_url(string $url, string $name, bool $as_json = false): string**

Получить куки для заданного URL адрес | Get cookie for url

**import_cookies(string $url, string $cookies): bool**

Импорт куков из формата JSON | Import cookie from JSON

**get_popup_source(string $url, bool $exactly): string**

Получить источник всплывающего окна Pop-up | Get Pop-up source

**close_popup(string $url, bool $exactly): bool**

Закрыть всплывающие окно (Pop-up) с заданным URL | Close Pop-up by source

**enable_browser_message_boxes(bool $enable = true, string $default_answer = 'Ok'): bool**

Запретить диалоги-сообщения браузера и задать автоответ на них. Настройки Браузера | Disable any message box with default answer

**get_last_messagebox_caption(): string**

Получить заголовок последнего диалога (сообщения) Браузера | Get last message box header

**get_last_messagebox_text(): string**

Получить текст последнего диалогового диалога (сообщения) Браузера | Get last message box text

**get_last_messagebox_type(): string**

Получить тип последнего диалогового сообщения браузера | Get last message box type

**clear_last_messagebox_info(): bool**

Очистить данные о последнем диалоговом сообщении браузера | Clear last message box info

**set_default_authorization(string $login, string $password): bool**

Установить настройки HTTP авторизации по умолчанию | Set default HTTP authorization settings

**reset_default_authorization(): bool**

Сбросить настройки HTTP авторизацию по умолчанию | Reset default HTTP authorization settings

**set_default_certificate(string $text): bool**

Установить имя сертификата умолчанию | Set default sertificate name

**enable_download_file_dialog(bool $enable): bool**

Разрешить/Запретить показ диалогового окна выбора пути для скачивания файлов | Enable show the dialog box for choosing the path for downloading files

**is_enable_download_file_dialog(): bool**

Проверить разрешен или запрещен показ диалога выбора пути для скачивания файлов | Is enable show the dialog box for choosing the path for downloading files

**set_default_download(string $folder): bool**

Задать путь к папке по умолчанию, куда будут скачиваться файлы, если запрещен показ диалога выбора пути для скачивания файлов | Set default folder path where files will be downloaded if the dialog is disabled

**reset_default_download(): bool**

Сбросить путь к папке по умолчанию, куда будут скачиваться файлы и разрешить показ диалога выбора пути для скачивания файлов | Reset default folder path where files will be downloaded if the dialog is disabled

**get_last_download_id(): int**

Получить идентификатор последней загрузки файла | Get the last file download ID

**is_download_complete(int $id): bool|int**

Проверить завершена ли загрузка файла | Check if the file download is complete

**get_download_info(int $id, string $infoPart = 'all'): string**

Получить информацию о загрузке по идентификатору | Get download file information by ID

**cancel_download(int $id): bool**

Отменить операцию загрузки файла по идентификатору | Cancel file download operation by ID

**wait_download_and_get_file_path(int $wait_time_in_seconds = 3000): string**

Ожидать завершения текущей загрузки и получить путь к скаченному файлу | Wait for the current download to complete and get the path to the downloaded file

**set_accept(string $accept_string): bool**

Задать HTTP заголовок запроса Accept для Браузера | Set HTTP Accept request header for Browser

**set_accept_language(string $accept_string): bool**

Задать HTTP заголовок запроса Accept-Language для Браузера. Настройки Браузера | Set HTTP Request Header Accept-Language for Browser. Browser Settings

**set_language(string $language = ''): bool**

Задать настройки культуры текущего Пользователя в Браузере. Настройки Браузера | Set the current User's culture settings in the Browser. Browser Settings

**set_accept_encoding(string $accept_string): bool**

Задать HTTP заголовок запроса Accept-Encoding для Браузера. Настройки Браузера | Set HTTP Request Header Accept-Encoding for Browser. Browser Settings

**set_referer(string $referer = ''): bool**

Задать HTTP заголовок запроса Referer для Браузера. Настройки Браузера | Set HTTP Referer request header for Browser. Browser Settings

**get_referer(): string**

Получить HTTP заголовок запроса Referer для Браузера | Get HTTP Referer request header for Browser. Browser Settings

**set_platform(string $platform = '', string $cpuClass = ''): bool**

Задать Platform и CPUClass для Браузера | Set Platform and CPUClass for Browser

**get_cpu_class(): string**

Получить класс процессора CPUClass | Get processor CPUClass

**set_geo(string $latitude = '', string $longitude = '', string $accuracy = '', string $altitude = '', string $altitudeAccuracy = '', string $heading = '', string $speed = ''): bool**

Задать гео-данные Geolocation API | Set Geolocation API geo-data for Browser

**set_permissions(string $state = ''): bool**

Задать разрешение для navigator.permissions (в том числе для работы JS с данными геолокации) | Set permission for navigator.permissions for Browser

**set_hardware_info(int $hardwareConcurrency = -1, int $deviceMemory = -1, int $devicePixelRatio = -1): bool**

Задать информацию об оборудовании | Set equipment information for Browser

**set_screen_resolution(int $width = -1, int $height = -1, int $pixelDepth = -1): bool**

Задать данные о разрешении экрана в JS | Set screen resolution data in JS for Browser

**set_app_info(string $appName = '', string $appCodeName = '', string $appMinorVersion = '', string $product = '', string $productSub = '', string $vendor = '', string $vendorSub = ''): bool**

Задать информацию о приложении в JS | Set app info in JS for Browser

**set_plugins_info(string $plugins_info = '', string $mime_types = ''): bool**

Задать информацию о плагинах в JS. Задает navigator.plugins | Set plugin information in JS for Browser

**set_time_zone(int $time_zone = -100): bool**

Задать часовой пояс GMT | Set time zone GMT for Browser

**set_internationalization(string $locale = '', string $timeZone = '', string $calendar = '', string $numberingSystem = '', string $year = '', string $month = '', string $day = ''): bool**

Задать Internationalization API для Браузера | Set Internationalization API for Browser

**set_touch_info(string $max_points = '', string $ontouchevent = ''): bool**

Задать данные о сенсорном экране | Set touch screen data for Browser

**set_canvas_toDataURL(string $toDataURL = '', string $jsChangeNoise = ''): bool**

Задать данные для canvas (для смены finger print) | Set data for canvas (finger print) for Browser

**set_random_webgl_fingerprint(bool $enable = true, string $noiseImage = '', string $noiseParams = '', string $unmaskedVendor = '', string $unmaskedRenderer = '', string $glVersion = '', string $shadingLanguageVersion = '', string $vendor = '', string $renderer = ''): bool**

Задать случайный WebGL fingerprint | Set random WebGL fingerprint for Browser

**set_webgl_params(XHEWebGLParams $webgl_params): bool**

Задать параметры WebGL fingerprint | Set WebGL parameters for Browser

**set_random_audio_fingerprint(string $noiseAudio = '', string $noiseFrequence = ''): bool**

Задать случайный Audio fingerprint | Set random Audio fingerprint for Browser

**set_random_bounds_fingerprint(int $noise = -1): bool**

Задать случайный Bounds fingerprint | Set random Bounds fingerprint for Browser

**set_battery_api(string $level = '', bool $charging = true, string $charging_time = '', string $discharging_time = '', bool $refresh = false): bool**

Задать параметры BatteryManager API для Браузера | Set BatteryManager API parameters for Browser

**paste(string $text = ''): bool**

Выполнить вставку текста в текущей закладке Браузера с использованием буфера обмена | Paste text into the current Browser tab using the clipboard

**save_page_as(string $file): bool**

Сохранить текущую страницу в текущей закладке Браузера в файл | Save the current page in the current Browser tab to a file

**get_zoom(): string**

Получить масштаб отображения в текущей закладки Браузера | Get the display scale of the current Browser tab

**set_zoom(int $zoom): bool**

Задать масштаб отображения в текущей закладки Браузера | Set the display scale in the current Browser tab

**run_command(string $command): bool**

Выполнить команду браузера (ex: IDM_PASTE, IDM_COPY, IDM_PRINT etc.) | Execute browser command

**send_get_query(string $url, string $data = '', bool $use_current_proxy = true): string|bool**

Послать HTTP/HTTPS GET запрос на заданный URL адрес | Send HTTP/HTTPS GET request to the given URL

**send_post_query(string $url, string $data = '', string $type = 'application/x-www-form-urlencoded', bool $set_as_page = false, string $add_header = '', bool $use_current_proxy = true): string|bool**

Послать HTTP/HTTPS POST запрос на заданный URL адрес | Send HTTP/HTTPS POST request to the given URL

**check_internet_connection(): bool**

Проверить соединение с Интернетом | Check your internet connection

**check_connection(string $url, int $timeout, bool $use_cache = false, int $num = -1): bool**

Проверить соединение с заданным сетевым ресурсом. Загрузка страницы в Браузере и проверка на текст типовых ошибок | Check the connection to the specified network resource. Load the page in the Browser and check the text for typical errors.

**clear_cache(): bool**

Очистить кэш Браузера | Clear Browser Cache

**clear_history(): bool**

Очистить историю Браузера | Clear Browser History

**clear_address_bar_history(): bool**

Очистить историю списка адресов Браузера | Clear Browser Address List History

**set_redraw(bool $enable): bool**

Запретить/Разрешить перерисовку текущего Браузера (экономить ресурсы) | Disable/Allow redrawing of the current Browser

**set_fps(int $fps): bool**

Задать лимит FPS (экономить ресурсы) | Set FPS limit

**recreate(): bool**

Пересоздать Браузер для текущей закладки | Recreate Browser for current bookmark

**save_profile(string $path, string $name = '', string $description = ''): bool**

Сохранить все настройки текущего профиля Браузера в отдельный файл | Export current Browser profile settings into a file

**load_profile(string $path): bool**

Загрузить все настройки текущего профиля Браузера в отдельный файл | Import current Browser profile settings into a file

**set_default_profile_path(string $path): bool**

Задать путь к профилю Браузера по умолчанию | Set path to default browser profile

**get_cli(): string**

Получить параметры командной строки CLI Браузера | Get CLI Browser command line parameters

**set_cli(string $cli): bool**

Задать параметры командной строки CLI Браузера | Set CLI Browser command line parameters

**start_video_record(string $path, int $fps = 10, int $quality = 70, int $x = -1, int $y = -1, int $width = -1, int $height = -1, bool $as_gray = false, float $zoom = 0.3): bool**

Начать запись видео | Start video recording

**stop_video_record(): bool**

Остановить запись видео | Stop video recording

**clear_cash(): bool**

Очистить кэш Браузера

**disable_download_file_dialog(bool $enable): bool**

Разрешить/Запретить показ диалогового окна выбора пути для скачивания файлов

**is_disable_download_file_dialog(): bool**

Проверить разрешен или запрещен показ диалога выбора пути для скачивания файлов

**change_cookies_folder(string $folder): bool**

Задать папку, где находятся файлы-куки Браузера

**change_cache_folder(string $folder): bool**

Задать папку, где находятся Веб-кэш (WEB cache) Браузера

**set_accept_charset(string $accept_string): bool**

Задать HTTP заголовок Accept-Charset

**set_internazionalization(string $locale = '', string $timeZone = '', string $calendar = '', string $numberingSystem = '', string $year = '', string $month = '', string $day = ''): bool**

Задать Internationalization API для Браузера

**add_plugins(array $paths_to_plugins, bool $refresh = true): bool**

Добавить плагины для Selenium моделей (.crx файлы)

**get_webdriver_session(): string**

Получить WebDriver Selenium SessionID

## Class: XHEBypasscaptcha



### Methods

**set_system_key(mixed $key): void**



**get_last_capcha_filename(): string**

Get last captcha file

**get_last_capcha_result(): mixed**

Последний результат распознания капчи | get last captcha result

**__construct(): void**



**recognize(string $file): mixed|null**

Распознать заданную капчу

**report(int $result): void**

Отправить отчет о результате распознавания последнего задания

**get_last_capcha_id(): mixed**

Получить идентификатор последнего задания (капчи)

**get_balance(): mixed**

Получить баланс

## Class: XHECheapsms



### Methods

**__construct(string $api = '', string $servis = 'https://cheapsms.pro', string $ref = ''): void**

Constructor

## Class: XHEConnection

For connect to: RAS, VPN, PROXY

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**dial_ras(string $name, string $login, string $password): bool**

Соединится с RAS подключением | Connect RAS

**hang_up_ras(): bool**

Разорвать RAS соединение | Disconnect RAS

**create_vpn(string $name, string $server, string $user, string $password, string $psk, int $type): bool**

Создать VPN соединение | Create VPN

**get_name_by_number_ras(int $number): string**

Получить имя RAS соединения по номеру | Get RAS connection name by number

**get_all_connection_ras(): string**

Получить имена всех RAS соединений (разделитель - "<br>") | Get names for all RAS connections

**restart_lan_by_name(string $name): bool**

Перезапустить LAN соединение по имени | Restart LAN connection by name

**restart_lan_by_number(int $number): bool**

Перезапустить LAN соединение по номеру | Restart LAN connection by number

**set_local_ip(int $number, string $ip, string $subnetMask = '', string $gateway = '', string $defaultDNS = '', string $subDNS = ''): bool**

Установить текущий локальный IP адрес | Set local IP for adapter by number

**get_local_ip(): string**

Получить текущий локальный IP адрес | Get current local IP address

**get_real_ip(): string**

Получить текущий внешний IP адрес | Get current real IP address

**get_mac_address_by_number(int $number): string**

Получить MAC-адрес (физический адрес) по номеру | Get MAC address by number

**set_mac_address_by_number(int $number, string $mac): bool**

Задать MAC-адрес адрес | Set MAC address by number

**check_ping_site(string $site): bool**

Проверить доступность ресурса. Послать ICMP запрос на URL адрес и получить ответ (Пинговать) | Ping resource. Send ICMP request and get response

**is_connect_to_internet(): bool**

Проверка соединения с Интернетом | Checking your internet connection

**get_connection_parameters(): string**

Получить подключенное состояние операционной системы с Интернетом | Get operation system connected state with the Internet

**enable_proxy(string $connection, string $proxy): bool**

Задать прокси для сетевого соединения операционной системы по имени | Set proxy for connection by name for operation system

**disable_proxy(string $connection): bool**

Отключить прокси для сетевого соединения по имени | Unset proxy for connection by name for operation system

**get_current_proxy(string $connection): string**

Получить текущий прокси для сетевого соединения по имени | Get proxy for connection by name for operation system

## Class: XHEFTP

Perform operations with the FTP server

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**connect(string $server, string $user = '', string $password = '', string $iport = '', bool $flag_passive = true, int $timeout = -1, string $encoding = ''): bool**

Соединится с FTP сервером | Connect to FTP server

**disconnect(string $server): bool**

Отсоединится от FTP сервера | Disconnect from FTP server

**disconnect_all(): bool**

Отсоединится от всех подключенных FTP серверов | Disconnect from all FTP servers

**list_files(string $server, string $folder = ''): ?array**

Получить список файлов в папке на FTP сервере | Get a files list in folder on FTP server

**list_folders(string $server, string $folder = ''): ?array**

Получить список папок в папке на FTP сервере | Get a folders list in a folder on FTP server

**is_directory_exists(string $server, string $dir_name): bool**

Проверить существование папки на FTP сервере | Check is exists a folder on FTP server

**create_directory(string $server, string $dir_name): bool**

Создать папку на FTP сервере | Create a folder on the FTP server

**remove_directory(string $server, string $dir_name): bool**

Удалить папку с FTP сервера | Delete folder from FTP server

**clear_directory(string $server, string $dir_name): bool**

Очистить папку на FTP сервере | Clear folder on FTP server

**get_directory(string $server, string $remote_folder, string $local_folder, bool $flag_file_exist = true): bool**

Скачать папку с FTP сервера | Download folder from FTP server

**put_directory(string $server, string $local_folder, string $remote_folder): bool**

Закачать папку на FTP сервер | Upload a folder to FTP server

**is_file_exists(string $server, string $remote_file): bool**

Проверить существование файла на FTP сервере | Check is exists a file on FTP server

**get_file(string $server, string $remote_file, string $local_file, bool $flag_file_exist = true): bool**

Получить файл с FTP сервера | Get a file from FTP server

**put_file(string $server, string $local_file, string $remote_file, bool $flag_file_exist = true): bool**

Закачать файл на FTP сервер | Upload a dile to FTP server

**remove_file(string $server, string $file_name): bool**

Удалить файл с FTP сервера | Remove a file from FTP server

**rename(string $server, string $exist_file_name, string $new_file_name): bool**

Переименовать файл/папку на FTP сервере | Rename file/folder on FTP server

**command(string $server, string $command, string $working_folder): mixed**

Послать команду на FTP сервер | Send command to FTP server

**command_texts(string $server, string $command, string $working_folder): ?array**

Послать команду на FTP сервер. Ответ многострочный | Send command to FTP server. Multiline response

**create_directoy(string $server, string $dir_name): bool**

Создать папку на FTP сервере | Create a folder on the FTP server

**disconect(string $server): bool**

Отсоединится от FTP сервера | Disconnect from FTP server

**disconect_all(): bool**

Отсоединится от всех подключенных FTP серверов | Disconnect from all FTP servers

## Class: XHEHarvestor

Для сбора страниц сайтов

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**init(string $in_file, string $proxy_file = '', bool $proceed_js = true): bool**

Инициализировать сборщик | Initialize

**make_screenshots(bool $enable = true): bool**

Задать настройку "Создавать файлы скриншотов" | Set preference "Make screenshots"

**set_browser_size(int $width, int $height): bool**

Задать настройку "Размеры Браузера" | Set preference "Browser size"

**start(bool $is_wait = true): bool**

Запустить сбор | Start

**stop(): bool**

Остановить сбор | Stop

**is_finished(): bool**

Проверить, завершен ли сбор всех позиций | Check is all position completed?

**get_html(int $position): string**

Получить HTML-контент по позиции | Get HTML content

**get_screenshot_path(int $position): string**

Получить путь к скриншоту по позиции | Get screenshot file_path

**get_completed_count(): int**

Получить количество завершённых позиций | Get the number of completed positions

## Class: XHEMail

To send and receive emails using SMTP, IMAP, POP3 protocols

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_proxy(string $proxy): bool**

Задать прокси для почтовых операций | Set proxy

**send_mail_via_outlook(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): bool**

Отправить сообщение через Outlook | Set message via Outlook

**smtp_connect(string $server, int $port, string $login, string $password, int $ssl_option = 1, string $cert_type = 's, c, h, e', int $timeout = 3000, string $log_path = ''): bool**

Соединиться с SMTP сервером | SMTP connect

**smtp_disconnect(): bool**

Отсоединиться от SMTP сервера | SMTP disconnect

**check_smtp_auth(): bool**

Проверить авторизацию SMTP | Check SMTP connection is authorized

**send_mail_via_smtp(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): bool**

Отправить сообщение SMTP | Send message via SMTP

**pop3_connect(string $server, int $port, string $login, string $password, int $ssl_option = 1, string $cert_type = 's, c, h, e', int $timeout = 3000, string $log_path = ''): bool**

Соединиться с POP3 сервером | POP3 connect

**pop3_disconnect(): bool**

Отсоединиться от POP3 сервера | POP3 disconnect

**get_message_count_via_pop3(int $timeout = 300): int**

Получить количество писем в ящике POP3 | Get the number of letters in the POP3 mailbox

**get_message_by_number_via_pop3(int $number, int $timeout = 300): XHEMailMessage**

Получить письмо по номеру POP3 | Get message by number POP3

**get_message_by_id_via_pop3(string $id, int $timeout = 300): XHEMailMessage**

Получить письмо по ID POP3 | Get message by ID POP3

**get_message_by_subject_via_pop3(string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо с заданной темой POP3 | Get message by subject POP3

**get_message_by_from_via_pop3(string $from, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо от заданного отправителя POP3 | Get message by from POP3

**get_message_by_attachment_name_via_pop3(string $name, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо с заданным именем приложенного файла POP3 | Get message by attachment file name POP3

**get_message_by_text_via_pop3(string $text, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо с заданным текстом POP3 | Get message by number POP3

**delete_message_by_number_via_pop3(int $number, int $timeout = 300): bool**

Удалить письмо по номеру POP3 | Remove message by number POP3

**delete_message_by_from_via_pop3(string $from, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Удалить письмо с заданным адресом Отправителя POP3 | Remove message by from POP3

**delete_message_by_subject_via_pop3(string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Удалить письмо по subject POP3 | Remove message by subject POP3

**delete_message_by_text_via_pop3(string $text, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Удалить письмо с заданным текстом POP3 | Remove message by text POP3

**delete_all_messages_via_pop3(int $timeout = 300): bool**

Удалить все письма POP3 | Remove all messages POP3s

**imap_connect(string $server, int $port, string $login, string $password, int $ssl_option = 1, string $cert_type = 's, c, h, e', int $timeout = 3000, string $log_path = ''): bool**

Соединиться с IMAP сервером | IMAP connect

**imap_disconnect(): bool**

Отсоединиться от IMAP сервера | IMAP disconnect

**get_message_count_via_imap(string $folder = '', int $timeout = 300): int**

Получить количество писем в папке IMAP | Get the number of letters in a folder IMAP

**get_message_by_number_via_imap(string $folder, int $number, int $timeout = 300): XHEMailMessage**

Получить письмо по номеру IMAP | Get message by number IMAP

**get_message_by_id_via_imap(string $folder, string $id, int $timeout = 300): XHEMailMessage**

Получить письмо по ID IMAP | Get message by ID IMAP

**get_message_by_subject_via_imap(string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо по теме письма IMAP | Get message by subject IMAP

**get_message_by_from_via_imap(string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо по адресу Отправителя IMAP | Get message by from IMAP

**get_message_by_text_via_imap(string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо с заданным текстом IMAP | Get message by text IMAP

**get_message_by_attachment_name_via_imap(string $folder, string $name, bool $exactly = false, int $number = 0, int $timeout = 300): XHEMailMessage**

Получить письмо по имени вложенного файла IMAP | Get message by attachment file name IMAP

**delete_message_by_number_via_imap(string $folder, int $number, int $timeout = 300): bool**

Удалить письмо по номеру IMAP | Remove message by number IMAP

**delete_message_by_id_via_imap(string $folder, string $id, int $timeout = 300): bool**

Удалить письмо по ID IMAP | Remove message by ID IMAP

**delete_all_messages_via_imap(string $folder, int $timeout = 300): bool**

Удалить все письма из папки IMAP | Remove all messages from folder IMAP

**move_message_by_number_via_imap(string $from_folder, string $to_folder, int $number, int $timeout = 300): bool**

Переместить письмо с заданным номером IMAP в другую папку | Move message by number IMAP

**move_message_by_id_via_imap(string $from_folder, string $to_folder, string $id, int $timeout = 300): bool**

Переместить письмо с заданным ID в другую папку IMAP | Move message by ID IMAP

**move_message_by_subject_via_imap(string $from_folder, string $to_folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Переместить письмо с заданной темой в другую папку IMAP | Move message by Subject IMAP

**move_message_by_from_via_imap(string $from_folder, string $to_folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Переместить письмо от заданного отправителя в другую папку IMAP | Move message by from IMAP

**move_message_by_text_via_imap(string $from_folder, string $to_folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Переместить письмо с заданным текстом в другую папку IMAP | Move message by text IMAP

**save_message_attachments_by_number_via_imap(string $path, string $folder, int $number, int $timeout = 300): bool**

Сохранить вложения письма с заданным номером IMAP | Save attachments of a message find the one by number IMAP

**save_message_attachments_by_id_via_imap(string $path, string $folder, string $id, int $timeout = 300): bool**

Сохранить вложения письма с заданным ID IMAP | Save attachments of a message find the one by ID IMAP

**save_message_attachments_by_from_via_imap(string $path, string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Сохранить вложения письма с заданным адресом отправителя IMAP | Save attachments of a message find the one by from IMAP

**save_message_attachments_by_subject_via_imap(string $path, string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Сохранить вложения письма с заданной темой IMAP | Save attachments of a message find the one by subject IMAP

**save_message_attachments_by_text_via_imap(string $path, string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300): bool**

Сохранить вложения письма с заданным текстом IMAP | Save attachments of a message find the one by text IMAP

**set_message_readed_by_id_via_imap(string $folder, string $id, bool $is_readed = true, int $timeout = 300): bool**

Задать для сообщения статус прочитано по ID IMAP | Set status is read for message find the one by ID IMAP

**add_message_flag_by_id_via_imap(string $folder, string $id, string $flag, int $timeout = 300): bool**

Задать для сообщения категорию по ID IMAP | Set category for message find the one by ID IMAP

**add_message_via_imap(string $folder, string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): mixed**

Добавить сообщение в папку IMAP | Add message in a folder IMAP

## Class: XHEMsExchange

To work with email using the MS Exchange API

### Methods

**__construct(string $server, string $password = ''): void**



**connect(string $url, string $email = '', string $password = ''): bool**

Соединится | Connect

**disconnect(): bool**

Отсоединится | Disconnect

**send_mail(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', string $replyTo = '', array $attachments = null, int $timeout = 300): bool**

Отправить E-mail сообщение | Send an email message

**forward(string $folder, string $id, string $to, int $timeout = 300): bool**

Переслать E-mail сообщение | Forward an email message

**reply(string $folder, string $id, string $subject, string $message, int $type, string $cc = '', string $bcc = '', array $attachments = null, bool $replyAll = false, int $timeout = 300): bool**

Ответить отправителю E-mail сообщения | Reply sender an email message

**get_folder_id_by_name(string $folder = '', int $timeout = 300): string**

Получить ID папки по имени | Get folder ID by name

**get_folders(string $folder = '', bool $firstLevelOnly = true, int $timeout = 300): ?array**

Получить под-папки | Get sub folders

**get_message_count(string $folder = '', bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): int**

Получить количество писем в папке | Get the number of letters in a folder

**get_message_by_number(string $folder, int $number, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо по номеру | Receive a letter by number

**get_message_by_number_as_xhe_obj(string $folder, int $number, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо по номеру | Receive a letter by number

**get_message_by_subject(string $folder, string $subject, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо по теме | Receive a letter on the topic

**get_message_by_subject_as_xhe_obj(string $folder, string $subject, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо по теме | Receive a letter on the topic

**get_message_by_from(string $folder, string $from, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо от заданного отправителя | Receive a letter from a specified sender

**get_message_by_from_as_xhe_obj(string $folder, string $from, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо от заданного отправителя | Receive a letter from a specified sender

**get_message_by_text(string $folder, string $text, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо с заданным текстом | Receive a letter with the specified text

**get_message_by_category(string $folder, string $category, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо с заданной категорией | Receive a letter with the specified category

**get_message_by_attachment_name(string $folder, string $name, bool $exactly = false, int $number = 0, bool $isUnRead = false, string $startDate = '', string $endDate = '', int $pageSize = 100, int $timeout = 300): ?object**

Получить письмо с заданным именем вложения | Receive a letter with the specified attachment name

**get_message_by_id(string $folder, string $id, int $timeout = 300): ?object**

Получить письмо с заданным ID | Receive a letter with the specified ID

**delete_message_by_id(string $folder, string $id, int $timeout = 300): bool**

Удалить письмо с заданным ID | Delete a letter with a given ID

**delete_all_messages(string $folder, int $timeout = 300): bool**

Удалить все письма из заданной папки | Delete all emails from a specified folder

**move_message_by_id(string $from_folder, string $to_folder, string $id, int $timeout = 300): string**

Переместить письмо с заданным ID в другую папку | Move a letter with a given ID to another folder

**save_message_attachments_by_id(string $folderPath, string $folder, string $id, int $timeout = 300): bool**

Сохранить вложения письма с заданным ID | Save attachments of a letter with a given ID

**set_message_readed_by_id(string $folder, string $id, bool $is_readed = true, int $timeout = 300): bool**

Задать статус сообщение как прочитанное по ID | Set message status as read by ID

**get_message_categories_by_id(string $folder, string $id, int $timeout = 300): ?array**

Получить категории сообщения по ID | Get message categories by ID

**add_message_category_by_id(string $folder, string $id, string $category, int $timeout = 300): bool**

Добавить категорию к сообщению по ID | Add message category by ID

**remove_message_category_by_id(string $folder, string $id, string $category, int $timeout = 300): bool**

Удалить категорию у сообщения по ID | Remove message category by ID

**add_message_flag_by_id(string $folder, string $id, string $flag, int $timeout): bool**

Добавить флаг к сообщению по ID | Add message flag by ID

## Class: XHEOnlineSimRu

XHEOnlineSimRu - класс для работы с API сервиса onlinesim.ru

### Methods

**__construct(): void**

constructor

**login(string $user, string $password, string $email): mixed**

Авторизация (получение ключа разработчика)

**getServiceList(): mixed**

Получение списка доступных сервисов | Get service list

**getNum(string $service, string $form = '', string $forward_number = '', string $forward_minutes = '', string $clean_call = '', string $simoperator = '', string $extension = '', string $region = ''): mixed**

Запрос виртуального номера, создает операцию | Get virtual number

**setForwardStatusEnable(string $tzid): mixed**

Подтверждает переадресацию | Forward status enable

**getState(string $tzid, string $message_to_code = '', string $form = '', string $orderby = ''): mixed**

Получить состояние выбранной операции | Get state

**getOperations(): mixed**

Получить список и состояние всех операции | Get all operations

**setOperationRevise(string $tzid): mixed**

Создать запрос на уточнение ответа по операции | Set operation revise

**setOperationOk(string $tzid): mixed**

Отправить уведомление об успешном получении кода и завершает операцию | Set operation is OK

**getBalance(): mixed**

Получить информацию о состоянии баланса | Get account Balance

**getService(): mixed**

Получение списка сервисов для повторного заказа SMS | Get Services list

**getServiceNumber(string $service): mixed**

Получить список номеров для указанного сервиса | GEt all service numbers

**getNumRepeat(string $service, string $number): mixed**

Создать запрос на повторное использование виртуального номера | Get number for repeat

**forwardingList(string $id = '', string $page = '', string $sort = ''): mixed**

Получить список всех переадресаций | Get all forwarding list

**forwardingSave(string $id, string $minutes = '', string $auto = '', string $forward_number = '', string $max_minutes = ''): mixed**

Изменить параметры переадресации | Forwarding Save

**forwardingRemove(string $id): mixed**

Удалить (выключить) переадресацию | Forwarding remove

**getForwardPaymentsList(string $id): mixed**

Получить список всех автоматических платежей | Get forward payments list

## Class: XHEOutlook

Для работы с электронной почтой E-mail с помощью приложения Outlook

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**send_mail(string $from, string $to, string $subject, string $message, int $type, string $cc = '', string $bcc = '', ?array $attachments = null, int $timeout = 300, string $replyTo = ''): bool**

Отправить E-mail сообщение | Send an email message

**send_image(string $from, string $to, string $subject, string $image_path, string $signature = '', string $cc = '', string $bcc = '', string $replyTo = '', int $timeout = 300): bool**

Отправить E-mail сообщение с картинкой | Send an email message with a picture

**open(bool $show = false): bool**

Открыть приложение Outlook | Open Outlook

**close(): bool**

Закрыть приложение Outlook | Close Outlook

**kill(): bool**

Завершить исполнение процесса приложения Outlook | Kill Outlook process

**update(bool $show = false): bool**

Выполнить получение и отправку писем | Run receiving and sending of letters

**set_default_folder(string $folder = ''): bool**

Задать папку по умолчанию | Set default folder

**get_folders(string $folder = ''): ?array**

Получить под-папки | Get sub folders

**get_accounts(): ?array**

Получить аккаунты | Get accounts

**logon(string $profile, string $password = ''): bool**

Выполнить вход | Log in

**logoff(): bool**

Выполнить выход | Logoff

**get_message_count(string $folder = '', int $timeout = 300, string $readed = 'all'): int**

Получить количество писем в папке | Get the number of letters in a folder

**get_message_count_by_from(string $folder, string $from, bool $exactly = false, int $timeout = 300, string $readed = 'all'): int**

Получить количество писем с заданным отправителем в папке | Get the number of messages with a given sender in a folder

**get_message_count_by_subject(string $folder, string $subject, bool $exactly = false, int $timeout = 300, string $readed = 'all'): int**

Получить количество писем с заданной темой в папке | Get the number of emails with a given subject in a folder

**get_message_count_by_text(string $folder, string $text, bool $exactly = false, int $timeout = 300, string $readed = 'all'): int**

Получить количество писем с заданным текстом в папке | Get the number of letters with the given text in the folder

**get_message_by_number(string $folder, int $number, int $timeout = 300, string $readed = 'all'): XHEMailMessage**

Получить письмо по номеру | Receive a letter by number

**get_message_by_subject(string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage**

Получить письмо по теме | Receive a letter on the topic

**get_message_by_from(string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage**

Получить письмо от заданного отправителя | Receive a letter from a specified sender

**get_message_by_text(string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage**

Получить письмо с заданным текстом | Receive a letter with the specified text

**get_message_by_category(string $folder, string $category, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage**

Получить письмо с заданной категорией | Receive a letter with the specified category

**get_message_by_attachment_name(string $folder, string $name, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): XHEMailMessage**

Получить письмо с заданным именем вложения | Receive a letter with the specified attachment name

**get_message_by_id(string $folder, string $id, int $timeout = 300): XHEMailMessage**

Получить письмо с заданным ID | Receive a letter with the specified ID

**delete_message_by_number(string $folder, int $number, int $timeout = 300): bool**

Удалить письмо с заданным номером | Delete a letter with a given number

**delete_all_messages(string $folder, int $timeout = 300): bool**

Удалить все письма из заданной папки | Delete all emails from a specified folder

**move_message_by_number(string $from_folder, string $to_folder, int $number, int $timeout = 300, string $readed = 'all'): bool**

Переместить письмо с заданным номером в другую папку | Move a letter with a given number to another folder

**move_message_by_subject(string $from_folder, string $to_folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Переместить письмо с заданной темой в другую папку | Move a message with a given subject to another folder

**move_message_by_from(string $from_folder, string $to_folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Переместить письмо от заданного отправителя в другую папку | Move a message from a specified sender to another folder

**move_message_by_text(string $from_folder, string $to_folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Переместить письмо с заданным текстом в другую папку | Move a letter with the specified text to another folder

**save_message_attachments_by_number(string $path, string $folder, int $number, int $timeout = 300, string $readed = 'all'): bool**

Сохранить вложения письма с заданным номером | Save attachments of a letter with a given number

**save_message_attachments_by_from(string $path, string $folder, string $from, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Сохранить вложения письма с заданным отправителем | Save attachments of a message with a specified sender

**save_message_attachments_by_subject(string $path, string $folder, string $subject, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Сохранить вложения письма с заданной темой | Save attachments of a message with a given subject

**save_message_attachments_by_text(string $path, string $folder, string $text, bool $exactly = false, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Сохранить вложения письма с заданным текстом | Save email attachments with specified text

**set_message_readed_by_number(string $folder, int $number, bool $is_readed = true, int $timeout = 300, string $readed = 'all'): bool**

Задать статус сообщение как прочитанное по номеру | Set message status as read by number

**set_message_readed_by_from(string $folder, string $from, bool $exactly = false, bool $is_readed = true, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Задать статус сообщение как прочитанное по адресу отравителя | Set the message status as read by the sender's address

**set_message_readed_by_subject(string $folder, string $subject, bool $exactly = false, bool $is_readed = true, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Задать статус сообщение как прочитанное по теме | Set the message status as read on the topic

**set_message_readed_by_text(string $folder, string $text, bool $exactly = false, bool $is_readed = true, int $number = 0, int $timeout = 300, string $readed = 'all'): bool**

Задать статус сообщение как прочитанное с заданным текстом | Set message status as read with given text

**get_message_categories_by_id(string $folder, string $id, int $timeout = 300): string**

Получить категории сообщения по id | Get message categories by ID

**add_message_categories_by_id(string $folder, string $id, string $category, int $timeout = 300): bool**

Добавить категорию к сообщению по id | Add message category by ID

**remove_message_categories_by_id(string $folder, string $id, string $category, int $timeout = 300): bool**

Удалить категорию у сообщения по id | Remove message category by ID

## Class: XHEProxySwitcher

Для организации хранения, обновления и получения значений из списка прокси

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**init(string $folder): bool**

Инициализировать | Initialize

**clear(): bool**

Очистить список прокси | Clear proxy list

**add_proxies(string $proxies): bool**

Добавить прокси в список | Add proxy to list

**add_proxies_from_file(string $path): bool**

Добавить прокси в список из файла | Add proxy to list from file

**add_proxies_from_url(string $url): bool**

Добавить прокси в список из страницы сайта | Add proxy to list from site page

**set_random_rotate_mode(bool $mode): bool**

Включить режим случайной ротации прокси | Enable random proxy rotation mode

**update(): bool**

Обновить список прокси из источников | Update proxy list from sources

**set_update_path(string $path): bool**

Задать путь к файлу, как источник обновления | Set file path as update source

**set_update_url(string $url): bool**

Задать адрес URL страницы сайта, как источник обновления | Set the URL of the site page as the update source

**set_update_period(int $minutes): bool**

Задать максимальный интервал обновления списка прокси | Set the maximum interval for updating the proxy list

**set_update_proxy_count(int $count): bool**

Задать лимит количества прокси, как критерий обновления | Set proxy limit as update criterion

**get_next_proxy(bool $delete = false): string**

Получить следующий прокси | Get next proxy

**get_all_proxies(): string**

Получить все прокси из списка | Get all proxies from the list

**get_proxy_count(): int**

Получить количество прокси в списке | Get the number of proxies in the list

## Class: XHEProxyCheker

Для тестирования Proxy

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**run(bool $is_wait = false): bool**

Запустить тестирование списка прокси | Run proxy list test

**stop(): bool**

Остановить тестирование списка прокси | Stop proxy list test

**is_running(): bool**

Проверить тестирование списка прокси продолжает работу? | Check proxy list testing running?

**set_speed_testing(int $speed): bool**

Задать скорость тестирования | Set testing speed

**set_quality_testing(int $quality): bool**

Задать качество тестирования | Set the quality of testing

**add_proxy(string $str_proxy): bool**

Добавить прокси в список | Add proxy to list

**add_proxy_from_file(string $path): bool**

Добавить прокси в список из файла

**add_proxy_from_url(string $url): bool**

Добавить прокси из урла в список

**delete_proxy(string $param_proxy = 'all'): bool**

Удалить прокси заданного типа из списка

**save_proxy(string $path, string $param_proxy = 'all'): bool**

Сохранить прокси заданного типа из списка в файл

**dedupe_proxy(): bool**

Убрать дубликаты из списка прокси

**get_count_proxy(string $param_proxy = 'all'): int**

Получить количество прокси заданного типа

**get_proxy(mixed $n, string $param_proxy = 'all'): mixed**

Получить прокси заданного типа

**get_fastest_proxy(string $param_proxy = 'all'): string**

Получить самый быстрый прокси заданного типа по итогам тестирования

## Class: XHERaw

Организация сбора в коллекции запросов HTTP, перенаправленных запросов HTTP и ответов на запросы и получения данных из этих коллекций

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**enable_all_streams(bool $enable = true): bool**

Включить сбор данных для запросов HTTP и HTTPS | Enable data collection for HTTP and HTTPS requests

**enable_http_stream(bool $enable = true): bool**

Включить сбор данных для запросов HTTP | Enable data collection for HTTP requests

**enable_https_stream(bool $enable = true): bool**

Включить сбор данных для запросов HTTPS | Enable data collection for HTTPS requests

**save_server_log_to_window(): bool**

Выводить информацию приходящую с сервера в "Панель отладки/RAW лог" | Display information coming from the server in the "Debug Panel/RAW Log"

**save_browser_log_to_window(): bool**

Выводить информацию отправляемую Браузером в "Панель отладки/RAW лог" | Display information from the Browser in the "Debug Panel/RAW Log"

**save_server_log_to_file(string $path): bool**

Сохранять информацию приходящую с сервера в заданный файл

**save_browser_log_to_file(string $path): bool**

Сохранять информацию, отдаваемую Браузером в заданный файл

**get_last_request_url(int $num = -1): bool|string**

Получить адрес URL из коллекции запросов по номеру | Get URL from request collection by number

**get_last_request_frame_url(int $num = -1): bool|string**

Получить адрес фрэйма URL из коллекции запросов по номеру | Get frame URL from request collection by number

**get_last_request_header(int $num = -1): bool|string**

Получить запрошенный заголовок из коллекции запросов по номеру | Get header from request collection by number

**get_last_request_post_datas(int $num = -1, bool $decode = true): false|string[]**

Получить тело запроса типа POST из коллекции запросов по номеру | Get body from POST request collection by number

**get_last_response_url(int $num = -1): bool|string**

Получить адрес URL ответа на запрос из коллекции ответов по номеру | Get the response URL to a request from the response collection by number

**get_last_response_buffer(int $num = 1): bool|string**

Получить тело ответа на запрос из коллекции ответов по номеру | Get the response body to a request from the response collection by number

**get_last_response_header(int $num = 1): bool|string**

Получить заголовок ответа на запрос из коллекции ответов по номеру | Get the response header to a request from the response collection by number

**get_last_redirect_url(int $num = -1): bool|string**

Получить адрес URL перенаправления ответа на запрос из коллекции ответов по номеру | Get the redirect URL to a request from the response collection by number

**get_last_redirect_header(int $num = -1): bool|string**

Получить заголовок перенаправления ответа на запрос из коллекции ответов по номеру | Get the redirect header to a request from the response collection by number

**get_last_readed(int $num = -1): bool|string**

Получить тело ответа на запрос из коллекции ответов по номеру | Get the response body to a request from the response collection by number

**set_arrays_count(int $num): bool**

Задать размер коллекций запросов, перенаправленных запросов и ответов | Set the size of the request, forwarded request, and response collections

**clear_last_requests_array(): bool**

Очистить коллекцию последних запросов | Clear Recent Requests Collection

**clear_last_responses_array(): bool**

Очистить коллекцию последних ответов | Clear collection of recent answers

**set_hook_on_begin_transaction(string $php_script_path): bool**

Задать хук (php скрипт) на момент начала запроса информации браузером у сервера | Set a hook (php script) at the moment the browser starts requesting information from the server

**set_hook_on_response(string $php_script_path): bool**

Задать хук (php скрипт) на начало приема информации браузером от сервера | Set a hook (php script) to start receiving information from the server by the browser

**set_hook_on_readed(string $php_script_path): bool**

Задать хук (php скрипт) на загрузку контента в Браузер | Set a hook (php script) to load content into the Browser

**add_disabled_request_url(string $url, bool $exactly = false): bool**

Добавить адрес URL в коллекцию адресов по которым запрещено запрашивать информацию | Add URL to collection of URLs that are not allowed to request information

**clear_disabled_request_urls_array(): bool**

Очистить коллекцию адресов URL по которым запрещено запрашивать информацию | Clear the collection of URLs that are prohibited from request information

**add_disabled_response_url(string $url, bool $exactly = false): bool**

Добавить адрес URL в коллекцию адресов по которым запрещено получать информацию | Add URL to the collection of URLs that are prohibited from receiving information

**clear_disabled_response_urls_array(): bool**

Очистить коллекцию адресов URL по которым запрещено получать информацию | Clear the collection of URLs that are prohibited from receiving information

**add_replace_rule(string $url, bool $exactly_url, string $find, string $replace): bool**

Добавить правило в коллекцию правил, для замены строк в теле ответа для определенных адресов | Add a rule to the rules collection to replace strings in the response body for target addresses

**clear_replace_rules(string $url, bool $exactly_url = false): bool**

Удалить правило в коллекцию правил, для замены строк в теле ответа для определенных адресов | Remove a rule to a rules collection to replace strings in the response body for specific addresses

**set_additional_request_header(string $header = ''): bool**

Задать дополнительный заголовок, который будет отправляться браузером при запросах

**set_next_url_for_open_in_new_tab(string $url = '', bool $exactly = false): bool**

Задать адрес URL запроса, вызов которого будет отслежен и открыт в новой закладке Браузера | Set the request URL, to call the one will be tracked and opened in a new Browser tab

## Class: XHERest

Для работы с REST API

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**request(string $method, string $url, string $resource, ?array $query_parameters = null, ?array $file_parameters = null): bool|string**

Отправить запрос | Send request

**set_authorization(string $login, string $password): bool**

Задать параметры авторизации Http Basic Authenticator | Set Http Basic Authenticator params

**set_timeout(int $timeout): bool**

Задать таймаут для запроса | Set wait execution interval

## Class: XHERucapcha

Для работы с API Rucaptcha

### Methods

**__construct(string $server, bool $is_ssl = true): void**

Constructor

**recognize_text(string $text): bool|string**

Распознать капчу из текста

**recognize_like_images(string $filename): bool|string**

Распознать картинки похожее на заданные

**recognize_invoice(string $filename): bool|string**

Распознать кассовый чек

**recognize_recaptcha_2_with_text(string $filename, string $textinstructions): bool|string**

Распознать ReCaptcha v2 (ASIRA) c текстовыми инструкциями

**recognize_recaptcha_2_with_image(string $filename, string $imageinstructions): bool|string**

Распознать ReCaptcha v2 (ASIRA)

**recognize_click_captcha(string $filename, string $textinstructions = ''): bool|string**

Распознать ClickCaptcha (в том числе ReCaptcha v2)

**recognize_rotate_captcha(string $filename, string $file_1, string $file_2 = '', string $file_3 = '', int $angle = 40): bool|string**

Распознать RotateCaptcha (в том числе FunCaptcha)

**recognize_recaptcha_v2(string $pageurl, string $googlekey, int $invisible = 0, string $proxy = '', string $proxytype = ''): bool|string**

Распознать капчу Recaptcha v2

**recognize_geetest(string $pageurl, string $gt, string $challenge, string $api_server = '', string $proxy = '', string $proxytype = ''): bool|string**

Распознать GeeTest капчу

## Class: XHES3

Для работы с API S3

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**connect(string $server, string $key = '', string $security_key = ''): bool**

Соединится с сервером | Connect

**disconnect(string $server): bool**

Отсоединится от сервера | Disconnect

**disconnect_all(): bool**

Отсоединится от всех подключенных серверов | Disconnect all

**list_files(string $server, string $bucket, string $folder = '', int $timeout = 3000): ?stdClass**

Получить список файлов в текущей папке | Get list files

**list_folders(string $server, string $bucket, string $folder = '', int $timeout = 3000): ?stdClass**

Получить список папок в текущей папке | Get list folders

**is_directory_exists(string $server, string $bucket, string $dir_name): bool**

Проверить существование папки | Check is folder exists

**create_directory(string $server, string $bucket, string $dir_name): bool**

Создать папку на сервере | Create folder

**remove_directory(string $server, string $bucket, string $dir_name, int $timeout = 3000): bool**

Удалить папку с сервера | Remove a folder

**clear_directory(string $server, string $bucket, string $dir_name, int $timeout = 3000): bool**

Очистить папку на сервере | Clear a folder

**is_file_exists(string $server, string $bucket, string $remote_file): bool**

Проверить существование файла | Check file exists

**get_file(string $server, string $bucket, string $remote_file, string $local_file, bool $flag_fail_exist = true, int $timeout = 3000): bool**

Получить файл с сервера | Get file

**get_size(string $server, string $bucket, string $remote_file): int**

Получить размер файла | Get file size

**get_meta(string $server, string $bucket, string $remote_file): ?array**

Получить мета информацию файла | Get meta

**put_file(string $server, string $bucket, string $local_file, string $remote_file, bool $flag_fail_exist = true, int $timeout = 3000): bool**

Загрузить файл на сервер | Upload file

**get_folder(string $server, string $bucket, string $remote_folder, string $local_folder, int $timeout = 3000): bool**

Скачать папку с сервера | Download folder

**put_folder(string $server, string $bucket, string $local_folder, string $remote_folder, int $timeout = 3000): bool**

Залить папку на сервер | Upload folder

**remove_file(string $server, string $bucket, string $file_name): bool**

Удалить файл с сервера | Remove file

## Class: XHESelenium

Для работы с ядром Selenium в режиме 'Selenium'

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**foreground(): bool**

Вынести на передний план окно Браузера | Bring the Browser window foreground

**maximize(): bool**

Максимизировать окно Браузера | Maximize the Browser window

**minimize(): bool**

Минимизировать окно Браузера | Minimize the Browser window

**fullscreen(): bool**

Полный экран для окна Браузера | Set fullscreen for the Browser window

**set_pos(int $x, int $y): bool**

Задать позицию, в которой откроется окно браузера | Set the position where the browser window will open

**set_size(int $width, int $height): bool**

Задать размеры окна браузера | Set browser window dimensions

**set_model_binary_path(string $model, string $path): bool**

Указать путь к бинарному файлу для Selenium модели Браузера | Specify the path to the binary file for Selenium Browser model

**get_pages_count(): int**

Получить количество открытых страниц в текущем драйвере | Get the number of open pages in the current driver

**get_active_page(): int**

Получить номер активной страницы из открытых страниц | Get the active page number from open pages

**set_active_page(int $page): bool**

Задать номер активной страницы в открытых страницах | Set the active page number in open pages

**close_page(int $page): bool**

Закрыть страницу по номеру | Close page by number

**close_all_pages(): bool**

Закрыть все страницы | Close all pages

**add_page(string $url = 'about:blank', string $type = 'tab'): bool**

Добавить страницу |

**add_plugins(mixed $paths_to_plugins, bool $refresh = true): bool**

Добавить плагины для Selenium моделей (через .crx файлы)

**get_webdriver_session(): string**

Получить WebDriver Selenium SessionID

## Class: XHESEO

Для SEO исследования страницы сайта

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_alexa_rank(string $site): string**

Получить ранг сайта по alexa.com | Get site rank bu Alexa

**get_sitemap(string $site, string $file, int $timeout = 99999): string**

Сохранить карту заданного сайта в формат XML | Save

**get_all_sitemap_links(string $site, string $file, int $timeout = 99999, string $separator = '<br>'): string**

Сохранить все внутренние ссылки страницы сайта в файл | Save all site page internal links to a file

**get_all_outside_links(string $site, string $file, int $timeout = 99999, string $separator = '<br>'): string**

Сохранить все внешние ссылки заданного сайта в файл | Save all site page external links to a file

## Class: XHESFTP

Perform operations with server SFTP

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**connect(string $server, string $user = '', string $password = '', int $iport = 22, int $timeout = -1): bool**

Соединится с SFTP сервером | Connect to SFTP server

**disconnect(string $server): bool**

Отсоединится от SFTP сервера | Disconnect from SFTP server

**disconnect_all(): bool**

Отсоединится от всех подключенных SFTP серверов | Disconnect from all SFTP servers

**create_directory(string $server, string $dir_name): bool**

Создать папку на SFTP сервере | Create a folder on the SFTP server

**remove_directory(string $server, string $dir_name): bool**

Удалить папку с SFTP сервера | Delete folder from SFTP server

**get_file(string $server, string $remote_file, string $local_file, bool $flag_fail_exist = true): bool**

Получить файл с SFTP сервера | Get a file from SFTP server

**put_file(string $server, string $local_file, string $remote_file, bool $flag_fail_exist = true): bool**

Закачать файл на SFTP сервер | Upload a dile to SFTP server

**remove_file(string $server, string $file_name): bool**

Удалить файл с SFTP сервера | Remove a file from SFTP server

## Class: XHESmsActivate

For API SMS Activate

### Methods

**__construct(string $api = '', string $servis = 'https://api.sms-activate.ae', string $ref = ''): void**

Constructor

## Class: XHESoap

Perform operations for SOAP v.11 or v.12

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**set_version(int $version = 11): bool**

Задать версию протокола SOAP

**set_action(string $action = ''): bool**

Задать значение метода заголовка SOAPAction по умолчанию для запросов SOAP

**set_headers(?array $headers): bool**

Задать названия заголовков для запроса SOAP

**call_simple_method(string $url, string $namespace, string $method): string**

Выполнить HTTP POST запрос SOAP

**call_by_bodies(string $url, ?array $bodies): string**

Выполнить HTTP POST запрос SOAP с использованием body

**call_from_xml(string $url, string $xml, string $action = ''): string**

Выполнить HTTP POST запрос SOAP

## Class: XHESubmitter

Для генерации случайных данных для заполнения форм

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**generate_random_name(string $lang = 'EN', string $sex_for_RU = 'man'): string**

Получить случайное имя

**generate_random_second_name(string $lang = 'EN', string $sex_for_RU = 'man'): string**

Получить случайное фамилию

**generate_random_nick_name(int $len): string**

Получить случайный прозвище (ник)

**generate_random_street(string $lang): string**

Получить случайное название улицы

**generate_random_city(string $lang): string**

Получить случайное название города

**generate_random_region(string $lang): string**

Получить случайное название региона

**generate_random_country(string $lang): string**

Получить случайное название страны

**generate_random_number(int $min, int $max, bool $as_int = false): int|float**

Получить случайное число

**generate_random_text(int $len, int $type): string**

Получить случайный текст

## Class: XHETelegram

Perform operations with Telegram API

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**connect(int $api_id, string $api_hash): bool**

Соединится с сервером Telegram | Connect to Telegram server

**disconnect(): bool**

Отсоединится от сервера Telegram | Disconnect from Telegram server

**request_authorization(string $phone_number): string**

Создать или возобновить сессию для данного устройства как Пользователь. Первичный запрос | Create or resume a session for this device as User. Initial request

**authorization(string $phone_number, string $auth_hash, string $auth_code, string $auth_password = ''): string**

Авторизация | Authorization

**get_chats(string $kind = 'all'): ?array**

Получить список групп/каналов | Get groups/Channel

**get_dialogs(int $folder_id = -1): ?array**

Получить диалоги разных типов | Get dialogs of different types (chats/groups/channels/user chat)

**get_members(int $chat_id): ?array**

Получить список пользователей чата | Get a list of chat users (chats/groups/channels/users chat)

**get_chat_messages(int $chat_id, int $from_offset = 0, string $offset_date = ''): mixed|null**

Получить список сообщений чата | Get list of chat messages (chats/groups/channels/users chat)

**get_last_messages(int $chat_id, int $count = 1): mixed|null**

Получить последние сообщения чата | Get latest chat messages (chats/groups/channels/users chat)

**get_messages_count(int $chat_id): int**

Получить количество сообщений чата | Get the chat messages count (chats/groups/channels/users chat)

**find_chat_messages(int $chat_id, string $text, string $begin_date = '', string $end_date = '', int $offset_id = 0): mixed|null**

Получить сообщения из чата по фильтру | Get messages from chat by filter (chats/groups/channels/users chat)

**get_chat_id_by_name(string $name): int**

Получить ID чата по его имени | Get chat ID by name (chats/groups/channels/users chat)

**join_chanel(int $chat_id): bool**

Присоединится к каналу по ID | Join the channel by ID

**send_message_to_chat(int $chat_id, string $message, string $schedule_date = ''): bool**

Отправить сообщение в чат | Send message to the chat by ID

**send_media_to_chat(int $chat_id, string $message, string $path, string $schedule_date = ''): bool**

Отправить сообщение с медиа файлом в чат | Send a message with a media file to the chat

**send_album_to_chat(int $chat_id, string $message, array $paths_and_urls, string $schedule_date = ''): bool**

Отправить сообщение с несколькими медиа файлами в чат | Send message with multiple media files to chat

**send_message_to_contact(string $phone_number, string $message, string $schedule_date = ''): bool**

Отправить сообщение контакту по номеру телефона | Send a message to a contact by phone number

**repost_message(int $from_chat_id, int $message_id, int $to_chat_id, bool $is_forward = true): bool**

Выполнить пересылку сообщения из одного чата в другой | Forward the message

## Class: XHEWebDav

Perform operations with FTP server by WebDAV protocol

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**connect(string $server, string $user = '', string $password = ''): bool**

Соединится с FTP сервером | Connect to FTP server

**disconnect(string $server): bool**

Отсоединится от FTP сервера

**disconnect_all(): bool**

Отсоединится от всех подключенных FTP серверов | Disconnect from all FTP servers

**list_files(string $server, string $folder = ''): ?array**

Получить список файлов в папке на FTP сервере | Get a files list in folder on FTP server

**list_folders(string $server, string $folder = '', int $timeout = 3000): ?array**

Получить список папок в папке на FTP сервере | Get a folders list in a folder on FTP server

**is_directory_exists(string $server, string $dir_name): bool**

Проверить существование папки на FTP сервере | Check is exists a folder on FTP server

**create_directory(string $server, string $dir_name): bool**

Создать папку на FTP сервере | Create a folder on the FTP server

**remove_directory(string $server, string $dir_name, int $timeout = 3000): bool**

Удалить папку с FTP сервера | Delete folder from FTP server

**clear_directory(string $server, string $dir_name, int $timeout = 3000): bool**

Очистить папку на FTP сервере | Clear folder on FTP server

**get_folder(string $server, string $remote_folder, string $local_folder, int $timeout = 3000): bool**

Скачать папку с FTP сервера | Download folder from FTP server

**put_folder(string $server, string $local_folder, string $remote_folder, int $timeout = 3000): bool**

Закачать папку на FTP сервер | Upload a folder to FTP server

**is_file_exists(string $server, string $remote_file): bool**

Проверить существование файла на FTP сервере | Check is exists a file on FTP server

**get_file(string $server, string $remote_file, string $local_file, bool $flag_fail_exist = true, int $timeout = 3000): bool**

Получить файл с FTP сервера | Get a file from FTP server

**put_file(string $server, string $local_file, string $remote_file, bool $flag_fail_exist = true, int $timeout = 3000): bool**

Закачать файл на FTP сервер | Upload a dile to FTP server

**remove_file(string $server, string $file_name): bool**

Удалить файл с FTP сервера | Remove a file from FTP server

**rename(string $server, string $exist_file_name, string $new_file_name): bool**

Переименовать файл/папку на FTP сервере | Rename file/folder on FTP server

## Class: XHEWebPage

To manage the current browser pages

### Methods

**__construct(string $server, string $password = ''): void**

Конструктор

**get_active_element(): XHEInterface**

Получить интерфейс активного элемента на текущей странице Браузера | Get the active element interface on the current Browser page

**get_element_from_point(int $x, int $y): XHEInterface**

Получить интерфейс элемента по координатам на текущей странице Браузера | Get the element interface by coordinates on the current Browser page

**get_title(): string**

Получить заголовок страницы (текст из тэга title) | Get a page header

**get_url(): string**

Получить адрес URL текущей странице Браузера | Get a page URL address

**get_encoding(): string**

Получить кодировку текущей страницы Браузера | Get the encoding of the current Browser page

**set_encoding(string $encoding): bool**

Задать кодировку текущей странице Браузера | Set the encoding of the current Browser page

**get_source(): string**

Получить исходный код текущей страницы в Браузере | Get the current Browser page source code

**get_source_length(): int**

Получить длину исходный код текущей страницы в Браузере | Get the Browser page length of the source code

**save_source_to_file(string $filepath): bool**

Сохранить исходный код текущей страницы в Браузере в файл | Save the source code of the current page to a file

**get_body(): string**

Получить HTML код тэга body текущей страницы в Браузере | Get HTML code of body tag of current page in Browser

**set_body(string $body): bool**

Задать HTML код тэга body текущей страницы в Браузере | Set HTML code of body tag of current page in Browser

**get_document_body(bool $as_html): string**

Получить код тэга body документа текущей страницы Браузера, как текст или HTML код | Get the body of the current Browser page as text or HTML code

**get_body_before_prefix(string $prefix, bool $as_html = true): string**

Получить код тэга body документа текущей страницы Браузера, как текст или HTML код и вычленить блок текста до ключевой фразы | Get the body of the current Browser page as text or HTML code and extract the text block before the key phrase

**get_body_after_prefix(string $prefix, bool $as_html = true): string**

Получить код тэга body документа текущей страницы Браузера, как текст или HTML код и вычленить блок текста после ключевой фразы | Get the body of the current Browser page as text or HTML code and extract the text block after the key phrase

**get_body_inter_prefix(string $prefix1, string $prefix2, bool $as_html = true): string**

Получить код тэга body документа текущей страницы Браузера, как текст или HTML код и вычленить блок текста между двух ключевых фразы | Get the body of the current Browser page as text or HTML code and extract the text block between two key phrases

**get_body_inter_prefix_all(string $prefix1, string $prefix2, bool $as_html = true, int $shift1 = 0, int $shift2 = 0, string $separator = '<br>'): string**

Получить код тэга body документа текущей страницы Браузера, как текст или HTML код и разбить на блоки текста между двух ключевых фраз | Get the body of the current Browser page as text or HTML code and extract the text block between two key phrases and shift text

**print_screen(string $filepath, int $xl = -1, int $yt = -1, int $xr = -1, int $yb = -1, bool $as_gray = false): bool**

Сохранить скриншот заданной видимой части текущей страницы Браузера в файл | Save a screenshot of the specified visible part of the current Browser page to a file

**print_to_pdf(string $filepath): bool**

Сохранить скриншот всей текущей страницы Браузера в файл в формате PDF | Save a screenshot of the entire current Browser page to a PDF file

**print_body(string $filepath, int $xl = -1, int $yt = -1, int $xr = -1, int $yb = -1, bool $as_gray = false): bool**

Сохранить скриншот заданной части текущей страницы Браузера в файл-картинку | Save a screenshot of a specified part of the current Browser page to an image file

**get_x_in_webpage_picture(string $picture_filepath, float $similar_koeff = 0.95, int $similar_algoritm = 5): int**

Найти картинку на странице сопоставив с картинкой-образцом из файла и получить X - координату этой картинке | Find a picture on the page by matching it with a sample picture from a file and get the X coordinate of this picture

**get_y_in_webpage_picture(string $picture_filepath, float $similar_koeff = 0.95, int $similar_algoritm = 5): int**

Найти картинку на странице сопоставив с картинкой-образцом из файла и получить Y - координату этой картинке | Find a picture on the page by matching it with a sample picture from the file and get the Y coordinate of this picture

**get_pos_in_webpage_picture(string $picture_filepath, float $similar_koeff = 0.95, int $similar_algoritm = 5): XHEPosition**

Найти картинку на странице сопоставив с картинкой-образцом из файла и получить Y - координату этой картинке | Find a picture on the page by matching it with a sample picture from the file and get the Y coordinate of this picture

**get_url_size(string $url): int**

Получить размер содержимого произвольного урла (по HTTP заголовку 'Content-Length' ответа) | Get the content size of an arbitrary URL (using the HTTP 'Content-Length' response header)

**load_web_page(string $url, int $size = 0, string $add_headers = ''): string**

Получить WEB страницу по адресу URL с помощью HTTP запроса | Get WEB page by URL using HTTP request

**get_web_page_code(string $url): string**

Получить HTTP StatusCode ответа для адреса URL полученный с помощью HTTP запроса | Get the HTTP StatusCode of the response for a URL received via an HTTP request

**html_to_text(string $html): string**

Получить текст из HTML кода | Get text from HTML code

**save_url_to_file(string $url, string $filepath, int $timeout = 9999): bool**

Получить WEB страницу по адресу URL с помощью HTTP запроса и сохранить в файл | Get WEB page by URL using HTTP request and save to file

**get_domain(string $url = '', int $level = -1, bool $exclude_www = false): string**

Получить домен адреса URL | Get the domain of the URL

**convert_to_idn(string $domain): false|string**

Преобразовать домен адрес из ASCII в IDN формат (например "xn--d1acufc.xn--p1ai" -> "домен.рф") | Convert domain address from ASCII to IDN format

**convert_from_idn(string $domain): false|string**

Преобразовать домен адрес из формата IDN в ASCII формат (например "домен.рф" -> "xn--d1acufc.xn--p1ai") | Convert domain address from IDN to ASCII format

**get_element_value_by_name(string $name): string**

Get value of element by name

**get_element_innerHtml_by_name(string $name): string**

Get inner html of element by mane

**get_element_innerText_by_name(string $name): string**

Get element inner text by mane

**set_element_value_by_name(string $name, string $text): bool**

Set element value by name

**click_on_element_by_name(string $name): bool**

Click on element by name

**click_on_element_by_number(int $number): bool**

Click on element by number

**click_on_element_by_inner_text(mixed $inner_text): bool**

Click on element by inner text

**get_location_url(): string**

Получить адрес URL текущей странице Браузера | Get a page URL address

# Category `OTHER`

## Class: XHEMailMessage

Для представления объекта-сообщения E-mail

### Methods

**__construct(string $content): void**

Constructor

## Class: XHEMsExchangeMailMessage

Объект для представления письма с письмами полученными от ФО MsExchange

### Methods

**__construct(string $content): void**

Constructor

## Class: DOM

For static call of all DOM objects Example: DOM::$input->set_value_by_name("name",11);

### Methods

**init(): void**

Initialize static DOM objects from globals (acts as a static constructor)

## Class: SYSTEM

Аor static call of all SYSTEM objects. Example: SYSTEM::$mouse->move(100,100,false,2);

### Methods

**init(): void**

Initialize static SYSTEM objects from globals (acts as a static constructor)

## Class: VISION

For static call of all WEB objects. Example: WEB::$browser->get_count();

### Methods

**init(): void**

Initialize static VISION objects from globals (acts as a static constructor)

## Class: WEB

For static call of all WEB objects. example: WEB::$browser->get_count();

### Methods

**init(): void**

Initialize static WEB objects from globals (acts as a static constructor)

## Class: WINDOW

for static call of all WINDOW objects. Example: WINDOW::$app->set_title("title");

### Methods

**init(): void**

Initialize static WINDOW objects from globals (acts as a static constructor)
