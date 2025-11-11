# XHEFrame Examples

В этом разделе представлены примеры использования класса XHEFrame для работы с DOM элементами frame на веб-страницах.

## Описание функций

### get_body_by_number
Получить тело фрейма, который найти по номеру.

**Файл примера:** [`get_body_by_number.php`](get_body_by_number.php)

```php
// Получить тело первого фрейма как HTML
$body_html = DOM::$frame->get_body_by_number(0, true);

// Получить тело первого фрейма как обычный текст
$body_text = DOM::$frame->get_body_by_number(0, false);

// Получить тело фрейма во вложенном фрейме
$body_html = DOM::$frame->get_body_by_number(0, true, "0:1");
```

### set_body_by_number
Установить тело фрейма, который найти по номеру.

**Файл примера:** [`set_body_by_number.php`](set_body_by_number.php)

```php
// Установить новое содержимое для первого фрейма
$new_content = "<html><body><h1>New Content</h1></body></html>";
$result = DOM::$frame->set_body_by_number(0, $new_content);

// Установить содержимое для фрейма во вложенном фрейме
$result = DOM::$frame->set_body_by_number(0, $new_content, "0:1");
```

## Общие параметры

Большинство функций поддерживают следующие параметры:

- `number` - номер фрейма (индексация начинается с 0)
- `as_html` - true - получить как HTML, иначе как внутренний текст
- `html_body` - HTML текст для установки в тело фрейма
- `frame` - номер родительского фрэйма или строка с номерами фреймов, разделенных двоеточием, если фрэйм вложенный (по умолчанию "-1")

## Использование аргумента frame

### frame_argument_usage_examples
Примеры использования аргумента `frame` для классов XHE DOM элементов.

**Файл примера:** [`frame_argument_usage_examples.php`](frame_argument_usage_examples.php)

```php
// Поиск без указания frame (frame = -1 по умолчанию)
$element = DOM::$anchor->get_by_attribute('id', 'main_anchor');

// Поиск элемента во первом фрейме на странице
$element_in_first_frame = DOM::$anchor->get_by_attribute('id', 'frame_anchor', 0);

// Поиск элемента во втором фрейме на странице
$element_in_second_frame = DOM::$anchor->get_by_attribute('id', 'frame2_anchor', 1);

// Поиск элемента во вложенном фрейме (первый фрейм на странице, второй внутри него)
$element_in_nested_frame = DOM::$anchor->get_by_attribute('id', 'nested_anchor', "0:1");

// Поиск элемента в глубоко вложенном фрейме
$element_in_deeply_nested_frame = DOM::$anchor->get_by_attribute('id', 'deeply_nested_anchor', "1:0:2");

// Использование аргумента frame с другими типами элементов
$button_in_frame = DOM::$button->get_by_name('submit', 0);

// Использование аргумента frame с методами get_all_by_
$all_inputs_in_frame = DOM::$input->get_all_by_attribute('type', 'text', 0);
```

## Примечания

- Все примеры используют стандартную инициализацию XHE API
- В конце каждого примера вызывается `WINDOW::$app->quit()` для завершения работы
- При работе с фреймами используйте метод `is_exist()` для проверки существования фрейма
- Для доступа к фреймам по номеру используется индексация с 0
- При установке нового содержимого фрейма, старое содержимое полностью заменяется
- Аргумент `frame` позволяет точно указывать, в каком именно фрейме или вложенной структуре фреймов нужно производить поиск DOM элементов