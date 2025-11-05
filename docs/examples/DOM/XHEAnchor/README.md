# XHEAnchor Examples

В этом разделе представлены примеры использования класса XHEAnchor для работы с элементами-ссылками (anchor) на веб-страницах.

## Описание функций

### get_all_hrefs
Получить все значения атрибута href (ссылки) у DOM элементов anchor.

**Файл примера:** [`get_all_hrefs.php`](get_all_hrefs.php)

```php
// Получить все ссылки с разделителем ;
$all_hrefs = DOM::$anchor->get_all_hrefs(";");

// Получить все ссылки с разделителем |
$all_hrefs_pipe = DOM::$anchor->get_all_hrefs("|");
```

### get_all_hrefs_by_inner_text
Получить все значения атрибута href у DOM элемента anchor по внутреннему тексту элемента anchor.

**Файл примера:** [`get_all_hrefs_by_inner_text.php`](get_all_hrefs_by_inner_text.php)

```php
// Получить все ссылки для элементов с текстом "More information"
$search_text = "More information";
$hrefs_by_text = DOM::$anchor->get_all_hrefs_by_inner_text($search_text, ";");
```

### get_all_hrefs_by_inner_text_2
Получить все значения атрибута href у DOM элемента anchor по внутреннему тексту элемента anchor с параметром точного соответствия.

**Файл примера:** [`get_all_hrefs_by_inner_text_2.php`](get_all_hrefs_by_inner_text_2.php)

```php
// Точное соответствие текста
$search_text_exact = "Contact Us";
$hrefs_by_exact_text = DOM::$anchor->get_all_hrefs_by_inner_text_2($search_text_exact, true, ";");

// Частичное соответствие текста
$search_text_partial = "Contact";
$hrefs_by_partial_text = DOM::$anchor->get_all_hrefs_by_inner_text_2($search_text_partial, false, ";");
```

### get_all_hrefs_by_attribute
Получить все href с определенным значением атрибута.

**Файл примера:** [`get_all_hrefs_by_attribute.php`](get_all_hrefs_by_attribute.php)

```php
// Получить все ссылки для элементов с классом "external-link"
$attr_name = "class";
$attr_value = "external-link";
$hrefs_by_attr = DOM::$anchor->get_all_hrefs_by_attribute($attr_name, $attr_value, true, ";");

// Получить все ссылки для элементов с атрибутом rel, содержащим "nofollow"
$attr_name = "rel";
$attr_value = "nofollow";
$hrefs_by_partial_attr = DOM::$anchor->get_all_hrefs_by_attribute($attr_name, $attr_value, false, ";");
```

### get_all_inner_texts_by_href
Получить все внутренние тексты у DOM элементов anchor по значению атрибута href.

**Файл примера:** [`get_all_inner_texts_by_href.php`](get_all_inner_texts_by_href.php)

```php
// Точное соответствие href
$href_value = "https://example.com/contact";
$inner_texts_by_href = DOM::$anchor->get_all_inner_texts_by_href($href_value, ";", true);

// Частичное соответствие href
$href_partial = "example.com/about";
$inner_texts_by_partial_href = DOM::$anchor->get_all_inner_texts_by_href($href_partial, ";", false);
```

### get_all_external_inner_texts_and_hrefs
Получить все внешние ссылки и тексты anchor для WEB страницы.

**Файл примера:** [`get_all_external_inner_texts_and_hrefs.php`](get_all_external_inner_texts_and_hrefs.php)

```php
// Получить все внешние ссылки на текущей странице
$external_links = DOM::$anchor->get_all_external_inner_texts_and_hrefs("https://external-site.com", false, ";");

// Перейти по внешней ссылке и затем получить все внешние ссылки
// $navigate_result = DOM::$anchor->get_all_external_inner_texts_and_hrefs("https://external-site.com", true, ";");
```

### get_all_internal_inner_texts_and_hrefs
Получить все внутренние ссылки и тексты anchor для WEB страницы.

**Файл примера:** [`get_all_internal_inner_texts_and_hrefs.php`](get_all_internal_inner_texts_and_hrefs.php)

```php
// Получить все внутренние ссылки на текущей странице
$internal_links = DOM::$anchor->get_all_internal_inner_texts_and_hrefs("https://example.com/about", false, ";");

// Перейти по внутренней ссылке и затем получить все внутренние ссылки
// $navigate_result = DOM::$anchor->get_all_internal_inner_texts_and_hrefs("https://example.com/about", true, ";");
```

## Общие параметры

Большинство функций поддерживают следующие параметры:

- `separator` - символ-разделитель результата (по умолчанию "<br>")
- `frame` - номер фрейма или строка с номерами фреймов, разделенных двоеточием (по умолчанию "-1")
- `exactly` - требуется точное соответствие текста/значения (по умолчанию true)

## Примечания

- Все примеры используют стандартную инициализацию XHE API
- В конце каждого примера вызывается `WINDOW::$app->quit()` для завершения работы
- Примеры с параметром `navigate` показывают, как можно перейти по ссылке перед выполнением операции