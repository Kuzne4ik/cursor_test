---
description: Init code rule
---

## Initialization Code Rule

### Overview
When generating a new PHP script, always include the following initialization block at the very beginning of the code to ensure access to the XHE API classes and methods.

### Required Initialization Code
```php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
```

### Usage Guidelines
- Place this code at the very beginning of each PHP script
- This initialization is mandatory for all XHE API operations