# XHEElement Examples

В этом разделе представлены примеры использования класса XHEElement для работы с DOM элементами на веб-страницах.

## Описание функций

### convert_number
Преобразует номер DOM элемента в номер объекта определенного типа.

**Файл примера:** [`convert_number.php`](convert_number.php)

```php
// Преобразовать номер DOM элемента в номер объекта anchor
$anchorNumber = DOM::$element->convert_number(0, "anchor");

// Преобразовать номер DOM элемента в номер объекта input
$inputNumber = DOM::$element->convert_number(1, "input");
```

### get_all_by_query_selector
Получить все DOM элементы с помощью CSS селектора (аналог document.querySelectorAll).

**Файл примера:** [`get_all_by_query_selector.php`](get_all_by_query_selector.php)

```php
// Получить все элементы по тегу div
$elements = DOM::$element->get_all_by_query_selector("div");

// Получить все ссылки с атрибутом href
$links = DOM::$element->get_all_by_query_selector("a[href]");

// Получить все input элементы типа text
$textInputs = DOM::$element->get_all_by_query_selector("input[type='text']");

// Получить все элементы с сложным селектором
$complexElements = DOM::$element->get_all_by_query_selector("div.container > p");
```

### get_all_by_tag
Получить все DOM элементы с определенным тегом как коллекцию XHEInterfaces.

**Файл примера:** [`get_all_by_tag.php`](get_all_by_tag.php)

```php
// Получить все DIV элементы на странице
$divElements = DOM::$element->get_all_by_tag("DIV");

// Получить все A элементы на странице
$aElements = DOM::$element->get_all_by_tag("A");
```

### get_by_js
Получить DOM элемент с помощью JavaScript кода.

**Файл примера:** [`get_by_js.php`](get_by_js.php)

```php
// Получить элемент по ID с помощью JavaScript
$element = DOM::$element->get_by_js("document.getElementById('id')");

// Получить элемент по тегу с помощью JavaScript
$element = DOM::$element->get_by_js("document.getElementsByTagName('div')[0]");

// Получить элемент по имени класса с помощью JavaScript
$element = DOM::$element->get_by_js("document.getElementsByClassName('some_class')[0]");

// Получить элемент с помощью query selector
$element = DOM::$element->get_by_js("document.querySelector('a[href=\"https://example.com\"]')");

// Получить элемент с помощью сложного JavaScript кода
$element = DOM::$element->get_by_js(
    "var elements = document.querySelectorAll('div.container > p'); " .
    "for (var i = 0; i < elements.length; i++) { " .
    "  if (elements[i].textContent.includes('specific text')) { " .
    "    return elements[i]; " .
    "  } " .
    "} " .
    "return null;"
);
```

### get_by_query_selector
Получить DOM элемент с помощью CSS селектора (аналог document.querySelector).

**Файл примера:** [`get_by_query_selector.php`](get_by_query_selector.php)

```php
// Получить элемент по ID с помощью селектора
$element = DOM::$element->get_by_query_selector("#some_id");

// Получить элемент по имени класса с помощью селектора
$element = DOM::$element->get_by_query_selector(".some_class");

// Получить элемент по атрибуту с помощью селектора
$element = DOM::$element->get_by_query_selector("a[href='https://example.com']");

// Получить элемент с помощью сложного селектора
$element = DOM::$element->get_by_query_selector("div.container > p:first-child");
```

### get_tag_by_number
Получить тег DOM элемента по его номеру.

**Файл примера:** [`get_tag_by_number.php`](get_tag_by_number.php)

```php
// Получить тег DOM элемента по номеру 1
$elementTag = DOM::$element->get_tag_by_number(1);
```

### get_x_by_tag_by_number
Получить X координату DOM элемента с определенным тегом по его номеру.

**Файл примера:** [`get_x_by_tag_by_number.php`](get_x_by_tag_by_number.php)

```php
// Получить X координату первого DIV элемента
$elementX = DOM::$element->get_x_by_tag_by_number("DIV", 0);

// Получить X координату второго A элемента
$elementX = DOM::$element->get_x_by_tag_by_number("A", 1);
```

### get_y_by_tag_by_number
Получить Y координату DOM элемента с определенным тегом по его номеру.

**Файл примера:** [`get_y_by_tag_by_number.php`](get_y_by_tag_by_number.php)

```php
// Получить Y координату первого DIV элемента
$elementY = DOM::$element->get_y_by_tag_by_number("DIV", 0);

// Получить Y координату второго A элемента
$elementY = DOM::$element->get_y_by_tag_by_number("A", 1);
```

## Общие параметры

Большинство функций поддерживают следующие параметры:

- `frame` - номер фрейма или строка с номерами фреймов, разделенных двоеточием (по умолчанию "-1")

## Примечания

- Все примеры используют стандартную инициализацию XHE API
- В конце каждого примера вызывается `WINDOW::$app->quit()` для завершения работы
- При работе с коллекциями элементов (XHEInterfaces) используйте метод `get_count()` для получения количества элементов
- Для доступа к отдельным элементам коллекции используйте метод `get($index)`