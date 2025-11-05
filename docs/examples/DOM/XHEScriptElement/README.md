# XHEScriptElement Examples

В этом разделе представлены примеры использования класса XHEScriptElement для работы с элементами-скриптами (script) на веб-страницах.

## Описание функций

### set_defer_by_number
Задать атрибут defer у скрипта по номеру.

**Файл примера:** [`set_defer_by_number.php`](set_defer_by_number.php)

```php
// Установить defer в true для первого скрипта
$script_number = 0;
$defer_value = true;
$result = DOM::$script->set_defer_by_number($script_number, $defer_value);
```

### set_defer_by_src
Задать атрибут defer у скрипта с заданным атрибутом src.

**Файл примера:** [`set_defer_by_src.php`](set_defer_by_src.php)

```php
// Установить defer в true для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$defer_value = true;
$result = DOM::$script->set_defer_by_src($script_src, $defer_value);
```

### set_htmlFor_by_number
Задать атрибут htmlFor у скрипта по номеру.

**Файл примера:** [`set_htmlFor_by_number.php`](set_htmlFor_by_number.php)

```php
// Установить htmlFor для первого скрипта
$script_number = 0;
$htmlFor_value = "elementId";
$result = DOM::$script->set_htmlFor_by_number($script_number, $htmlFor_value);
```

### set_htmlFor_by_src
Задать атрибут htmlFor у скрипта с заданным атрибутом src.

**Файл примера:** [`set_htmlFor_by_src.php`](set_htmlFor_by_src.php)

```php
// Установить htmlFor для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$htmlFor_value = "elementId";
$result = DOM::$script->set_htmlFor_by_src($script_src, $htmlFor_value);
```

### set_event_by_number
Задать event у скрипта по номеру.

**Файл примера:** [`set_event_by_number.php`](set_event_by_number.php)

```php
// Установить event для первого скрипта
$script_number = 0;
$event_value = "onclick";
$result = DOM::$script->set_event_by_number($script_number, $event_value);
```

### set_event_by_src
Задать event у скрипта с заданным атрибутом src.

**Файл примера:** [`set_event_by_src.php`](set_event_by_src.php)

```php
// Установить event для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$event_value = "onclick";
$result = DOM::$script->set_event_by_src($script_src, $event_value);
```

### set_src_by_number
Задать атрибут src у скрипта по номеру.

**Файл примера:** [`set_src_by_number.php`](set_src_by_number.php)

```php
// Установить src для первого скрипта
$script_number = 0;
$src_value = "https://example.com/js/new-script.js";
$result = DOM::$script->set_src_by_number($script_number, $src_value);
```

### set_text_by_number
Задать текст у скрипта по номеру.

**Файл примера:** [`set_text_by_number.php`](set_text_by_number.php)

```php
// Установить текст для первого скрипта
$script_number = 0;
$text_value = "function helloWorld() {\n    console.log('Hello, World!');\n}";
$result = DOM::$script->set_text_by_number($script_number, $text_value);
```

### set_text_by_src
Задать текст у скрипта с заданным атрибутом src.

**Файл примера:** [`set_text_by_src.php`](set_text_by_src.php)

```php
// Установить текст для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$text_value = "function helloWorld() {\n    console.log('Hello, World!');\n}";
$result = DOM::$script->set_text_by_src($script_src, $text_value);
```

### set_type_by_number
Задать атрибут type у скрипта по номеру.

**Файл примера:** [`set_type_by_number.php`](set_type_by_number.php)

```php
// Установить type для первого скрипта
$script_number = 0;
$type_value = "text/javascript";
$result = DOM::$script->set_type_by_number($script_number, $type_value);
```

### set_type_by_src
Задать атрибут type у скрипта с заданным атрибутом src.

**Файл примера:** [`set_type_by_src.php`](set_type_by_src.php)

```php
// Установить type для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$type_value = "text/javascript";
$result = DOM::$script->set_type_by_src($script_src, $type_value);
```

### get_defer_by_number
Получить значение атрибута defer у скрипта по номеру.

**Файл примера:** [`get_defer_by_number.php`](get_defer_by_number.php)

```php
// Получить значение defer для первого скрипта
$script_number = 0;
$defer_value = DOM::$script->get_defer_by_number($script_number);
```

### get_defer_by_src
Получить значение атрибута defer у скрипта с заданным атрибутом src.

**Файл примера:** [`get_defer_by_src.php`](get_defer_by_src.php)

```php
// Получить значение defer для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$defer_value = DOM::$script->get_defer_by_src($script_src);
```

### get_htmlFor_by_number
Получить значение атрибута htmlFor у скрипта по номеру.

**Файл примера:** [`get_htmlFor_by_number.php`](get_htmlFor_by_number.php)

```php
// Получить значение htmlFor для первого скрипта
$script_number = 0;
$htmlFor_value = DOM::$script->get_htmlFor_by_number($script_number);
```

### get_htmlFor_by_src
Получить значение атрибута htmlFor у скрипта с заданным атрибутом src.

**Файл примера:** [`get_htmlFor_by_src.php`](get_htmlFor_by_src.php)

```php
// Получить значение htmlFor для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$htmlFor_value = DOM::$script->get_htmlFor_by_src($script_src);
```

### get_event_by_number
Получить event у скрипта по номеру.

**Файл примера:** [`get_event_by_number.php`](get_event_by_number.php)

```php
// Получить значение event для первого скрипта
$script_number = 0;
$event_value = DOM::$script->get_event_by_number($script_number);
```

### get_event_by_src
Получить event у скрипта с заданным атрибутом src.

**Файл примера:** [`get_event_by_src.php`](get_event_by_src.php)

```php
// Получить значение event для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$event_value = DOM::$script->get_event_by_src($script_src);
```

### get_readyState_by_number
Получить значение свойства readyState у скрипта по номеру.

**Файл примера:** [`get_readyState_by_number.php`](get_readyState_by_number.php)

```php
// Получить значение readyState для первого скрипта
$script_number = 0;
$readyState_value = DOM::$script->get_readyState_by_number($script_number);
```

### get_readyState_by_src
Получить значение свойства readyState у скрипта с заданным src.

**Файл примера:** [`get_readyState_by_src.php`](get_readyState_by_src.php)

```php
// Получить значение readyState для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$readyState_value = DOM::$script->get_readyState_by_src($script_src);
```

### get_text_by_number
Получить текст скрипта по номеру.

**Файл примера:** [`get_text_by_number.php`](get_text_by_number.php)

```php
// Получить текст первого скрипта
$script_number = 0;
$text_value = DOM::$script->get_text_by_number($script_number);
```

### get_text_by_src
Получить текст скрипта с заданным атрибутом src.

**Файл примера:** [`get_text_by_src.php`](get_text_by_src.php)

```php
// Получить текст скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$text_value = DOM::$script->get_text_by_src($script_src);
```

### get_type_by_number
Получить значение атрибута type скрипта по номеру.

**Файл примера:** [`get_type_by_number.php`](get_type_by_number.php)

```php
// Получить значение type для первого скрипта
$script_number = 0;
$type_value = DOM::$script->get_type_by_number($script_number);
```

### get_type_by_src
Получить значение атрибута type скрипта с заданным атрибутом src.

**Файл примера:** [`get_type_by_src.php`](get_type_by_src.php)

```php
// Получить значение type для скрипта с указанным src
$script_src = "https://example.com/js/main.js";
$type_value = DOM::$script->get_type_by_src($script_src);
```

### is_all_completed
Проверить что все скрипты находятся в незапущенном состоянии.

**Файл примера:** [`is_all_completed.php`](is_all_completed.php)

```php
// Проверить, что все скрипты завершены
$all_completed = DOM::$script->is_all_completed();
```

## Общие параметры

Большинство функций поддерживают следующие параметры:

- `number` - номер элемента скрипта на странице (начиная с 0)
- `src` - значение атрибута src для поиска скрипта
- `frame` - номер фрейма или строка с номерами фреймов, разделенных двоеточием (по умолчанию "-1")

## Примечания

- Все примеры используют стандартную инициализацию XHE API
- В конце каждого примера вызывается `WINDOW::$app->quit()` для завершения работы
- Функции, помеченные как `deprecated` в исходном файле, не включены в этот список примеров