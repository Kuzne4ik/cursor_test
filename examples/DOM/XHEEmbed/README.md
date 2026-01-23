# XHEEmbed Examples

В этом разделе представлены примеры использования класса XHEEmbed для работы с DOM элементами embed на веб-страницах.

## Описание функций

### click_in_by_number
Выполняет эмуляцию клика в элементе DOM левой клавишей мыши, который найти по номеру.

**Файл примера:** [`click_in_by_number.php`](click_in_by_number.php)

```php
// Кликнуть на первый embed элемент в позиции (10, 10)
$result = DOM::$embed->click_in_by_number(0, 10, 10);

// Кликнуть на второй embed элемент в позиции по умолчанию
$result = DOM::$embed->click_in_by_number(1);

// Кликнуть на embed элемент в iframe
$result = DOM::$embed->click_in_by_number(0, 10, 10, "0:1");
```

### click_in_by_name
Выполняет эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту name.

**Файл примера:** [`click_in_by_name.php`](click_in_by_name.php)

```php
// Кликнуть на embed элемент с name 'example_embed' в позиции (15, 15)
$result = DOM::$embed->click_in_by_name("example_embed", 15, 15);

// Кликнуть на embed элемент с name 'video_player' в позиции по умолчанию
$result = DOM::$embed->click_in_by_name("video_player");

// Кликнуть на embed элемент в iframe
$result = DOM::$embed->click_in_by_name("example_embed", 10, 10, "0:1");
```

### click_in_by_src
Выполняет эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту src.

**Файл примера:** [`click_in_by_src.php`](click_in_by_src.php)

```php
// Кликнуть на embed элемент с точным совпадением src 'example.swf' в позиции (20, 20)
$result = DOM::$embed->click_in_by_src("example.swf", true, 20, 20);

// Кликнуть на embed элемент с частичным совпадением src 'example' в позиции (25, 25)
$result = DOM::$embed->click_in_by_src("example", false, 25, 25);

// Кликнуть на embed элемент с точным совпадением src в позиции по умолчанию
$result = DOM::$embed->click_in_by_src("player.swf", true);

// Кликнуть на embed элемент в iframe
$result = DOM::$embed->click_in_by_src("example.swf", true, 10, 10, "0:1");
```

### click_in_by_attribute
Выполняет эмуляцию клика в элементе DOM левой клавишей мыши, который найти по атрибуту.

**Файл примера:** [`click_in_by_attribute.php`](click_in_by_attribute.php)

```php
// Кликнуть на embed элемент с точным совпадением id 'example_embed' в позиции (30, 30)
$result = DOM::$embed->click_in_by_attribute("id", "example_embed", true, 30, 30);

// Кликнуть на embed элемент с частичным совпадением class 'embed' в позиции (35, 35)
$result = DOM::$embed->click_in_by_attribute("class", "embed", false, 35, 35);

// Кликнуть на embed элемент с точным совпадением type в позиции по умолчанию
$result = DOM::$embed->click_in_by_attribute("type", "application/x-shockwave-flash", true);

// Кликнуть на embed элемент в iframe
$result = DOM::$embed->click_in_by_attribute("id", "example_embed", true, 10, 10, "0:1");
```

## Общие параметры

Большинство функций поддерживают следующие параметры:

- `x` - координата X относительно левого верхнего угла элемента DOM (по умолчанию -1)
- `y` - координата Y относительно левого верхнего угла элемента DOM (по умолчанию -1)
- `frame` - номер фрэйма или строка с номерами фреймов, разделенных двоеточием (по умолчанию "-1")
- `exactly` - требуется точное соответствие значения атрибута (true/false, по умолчанию true)

## Примечания

- Все примеры используют стандартную инициализацию XHE API
- В конце каждого примера вызывается `WINDOW::$app->quit()` для завершения работы
- При работе с элементами используйте метод `is_exist()` для проверки существования элемента
- Для доступа к элементам по номеру используется индексация с 0
- При клике в позиции (-1, -1) клик выполняется в центр элемента