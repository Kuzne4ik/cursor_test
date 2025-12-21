---
description: XHE API Combined rules
---

# XHE API Combined Rules

## Overview
This document combines all essential rules for working with XHE classes, DOM elements, and MCP server usage in a comprehensive guide.

## 1. Initialization and Quit Rules

### Initialization Code Rule
When generating a new PHP script, always include the following initialization block at the very beginning of the code to ensure access to the XHE API classes and methods.

**Required Initialization Code:**
```php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);
```

**Usage Guidelines:**
- Place this code at the very beginning of each PHP script
- This initialization is mandatory for all XHE API operations

### Quit Rule
When generating a new PHP script, always include following block at very end of the code to quit server process the XHE API framework.

**Required Quit Code:**
```php
// Quit the application
WINDOW::$app->quit();
```

**Usage Guidelines:**
- Include this code to stop all processes at server side

## 2. Server-Side PHP Architecture

### Server-Side PHP Rule
PHP is a server-side language, but in this case PHP used to write client side code to send known commands to the server and get response.

**Main Principles:**
1. **PHP as Client Code**: PHP is used to write client-side code that sends commands to the server
2. **DOM Manipulation**: The server can directly manipulate the DOM of a webpage in the browser
3. **Command Structure**: Send only existing commands to the server and get response implemented in classes with prefix `XHE` in name
4. **Headless Browser**: The server uses a headless browser to load, parse, and interact with web pages internally
5. **Logic Resolution**: All logic, including dynamic page handling (e.g., waiting for content to load, handling frames), is resolved on the server before sending a response

**Implementation Details:**
- The PHP code acts as a client that sends commands to the XHE server
- The server processes these commands and returns the results
- All DOM operations are performed server-side
- Dynamic content handling is managed by the server before response is sent

## 3. XHE Classes Usage

### Use XHE Classes Directly as Static Properties Rule
For XHE classes each class name that has prefix `XHE` in its name, you should not create an object, just use it directly as static properties in corresponding classes: `DOM`, `SYSTEM`, `WEB`, `VISION`.

**Main Principles:**
- XHE classes are accessed as static properties
- No object instantiation required
- Use the predefined static property structure

**Examples:**
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

### Use XHE Classes Rule
Use XHE classes rules.

**Main Principles:**
- XHE classes are accessed as static properties. No object instantiation required
- `frame` argument usage in methods to get DOM element 
- Forbidden use in code global variable names from `/Templates/init.php`

**Frame argument Usage:**
Use `frame` argument for XHE classes DOM elements only:
1. If a frame is not used, then the frame argument value is -1 by default
2. If a frame is used, then the frame argument value is the ordinal frame number on the page (0-based)
3. If a frame is used to get element in subframe, then the frame argument value is a colon-separated string of ordinal numbers of the frame and subframe number (as child number in parent frame)

**Variable Naming:**
For variable that store frame number argument use name `frameNumber`

**Restrictions:**
Forbidden use in code global variable names from file `/Templates/init.php` for variable name.

**Examples:**
#### Example 1: Using XHEAnchor
```php
// Get anchor by attribute
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'id1');
if ($targetAnchor->is_exist()) {
    echo("Anchor found\n");
}
```

#### Example 2: Working with frames
```php
// Get input element from frame
$frameNumber = 0;
$inputName = 'username';
$targetInputInFrame = DOM::$input->get_by_name($inputName, true, $frameNumber);
if ($targetInputInFrame->inner_number > -1) {
    echo("Input found in frame = '$frameNumber' by name = '$inputName'\n");
}
```

#### Example 3: Working with subframes
```php
// Get button element from subframe
$frameNumber = "0:1";
$targetButtonInSubframe = DOM::$button->get_by_attribute('class', 'submit', true, $frameNumber);
if ($targetButtonInSubframe->is_exist()) {
    echo("Input found in found in subframe\n");
}
```

## 4. DOM Elements Corresponding Classes

### DOM Elements Corresponding Class Rule
Check for each DOM class method signature and use the appropriate corresponding class for each DOM element type.

**Main Principles:**
Do not use DOM::$element to search for any object. Instead, use the corresponding object for each DOM element type.

**DOM Element Classes:**
- For anchor use DOM::$anchor
- For button use DOM::$button
- For form use DOM::$form
- For input use DOM::$input
- For input 'type' = radio, use DOM::$radiobox
- For input type='button', use DOM::$button
- For input type="checkbox", use DOM::$checkbox
- For image use DOM::$image, and so on

**Examples:**
#### Example 1: Working with anchor element
```php
// Get anchor by href attribute
$anchor = DOM::$anchor->get_by_href("https://example.com");
```

#### Example 2: Working with input element
```php
// Get input by name
$input = DOM::$input->get_by_name("username");
```

#### Example 3: Working with checkbox element
```php
// Get checkbox by name
$checkbox = DOM::$checkbox->get_by_name("remember_me");
```

## 5. XHE Interface Types

### Use XHEInterface Rule
Each class name that has prefix `XHE` has methods with prefix `get_by_` return an object of type `XHEInterface` even if element not has be found.

**Main Principles:**
- Methods with prefix `get_by_` always return `XHEInterface` objects
- `XHEInterface` represents a single DOM element
- Any DOM XHE class implements `XHEBaseDOMVisual` and all its methods

**Examples of get_by_ Methods:**

#### Example 1: XHEAnchor get_by_attribute
```php
// Get anchor by attribute and return XHEInterface
$targetAnchorInterface = DOM::$anchor->get_by_attribute('id', 'id1');
echo("Get target Anchor href attribute: '" . $targetAnchorInterface->get_attribute('href') . "'\n");
```

#### Example 2: XHEInput get_by_name
```php
// Get input by name and return XHEInterface
$targetInputInterface = DOM::$input->get_by_name('username', true);
echo("Get target Input value attribute: '" . $targetInputInterface->get_attribute('value') . "'\n");
```

**XHEInterface Methods:**
- `get_attribute($attributeName)` - Get attribute value
- `set_attribute($attributeName, $value)` - Set attribute value
- `click():bool` - Click on element
- `focus():bool` - Set focus to element
- `is_exist():bool` - Check if element exists on WEB page
- For other methods, see the documentation.

**XHEInterface check element is exists on WEB page:**
- Check is element exists on page for object of type `XHEInterface` call function `is_exist():bool`.
- Alternative check is element exists on page for object of type `XHEInterface` check field `inner_number` value, if `inner_number` value greater than -1 then element is existed.

### Use XHEInterfaces Rule
Each class name that has prefix `XHE` has methods with prefix `get_all_by_` or full method name `get_all` that return an object of type `XHEInterfaces`. The `elements` field of `XHEInterfaces` is an array of objects of the same type as the class.

**Main Principles:**
- Methods with prefix `get_all_by_` return `XHEInterfaces` objects
- Each element in the `elements` array is of type `XHEInterface`
- The `XHEInterfaces` type implements ArrayAccess, IteratorAggregate, Countable
- Use the `count()` method to get the number of elements

**Examples of get_all_by_ Methods:**

#### Example 1: XHEAnchor get_all_by_attribute
```php
// Get all anchors by attribute
$anchorInterfaces = DOM::$anchor->get_all_by_attribute('id', 'id1');
```

#### Example 2: XHEInput get_all_by_name
```php
// Get all inputs by name
$inputInterfaces = DOM::$input->get_all_by_name('username', true);
```

**Using XHEInterfaces as Collection:**

#### Example: Iterating through XHEInterfaces
```php
$inputInterfaces = DOM::$input->get_all_by_name('username', true);
echo("Found " . $inputInterfaces->count() . " input elements\n");
foreach($inputInterfaces as $index => $inputInterface){
    echo("Input #$index has value = '" . $inputInterface->get_value(). "'\n");
}
```

**Important Notes:**
- For object of type `XHEInterfaces`, use the `count()` method to get the number of elements
- The `XHEInterfaces` object can be used in foreach loops directly
- Each element in the collection is an `XHEInterface` object with all its methods