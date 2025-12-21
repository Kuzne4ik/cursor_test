---
description: For XHE classes do not need to create an object, just use it directly as static properties in code
---

## Use XHE Classes Directly as Static Properties Rule

### Overview
For XHE classes each class name that has prefix `XHE` in its name, you should not create an object, just use it directly as static properties in corresponding classes: `DOM`, `SYSTEM`, `WEB`, `VISION`.

### Main Principles
- XHE classes are accessed as static properties
- No object instantiation required
- Use the predefined static property structure

### Examples
#### Example 1: Accessing XHEAnchor
```php
// Access XHEAnchor as static property of DOM class
$anchorElement = DOM::$anchor->get_by_href("https://example.com");
```

#### Example 2: Accessing XHEBrowser
```php
// Access XHEBrowser as static property of WEB class
WEB::$browser->navigate("https://example.com");
```

#### Example 3: Accessing XHEFolder
```php
// Access XHEFolder as static property of SYSTEM class
SYSTEM::$folder->create_folder("new_folder");
```