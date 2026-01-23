# XHEInterface Class Documentation

## Overview
The XHEInterface class provides a universal interface for interacting with DOM elements on web pages. It serves as the base interface returned by all element-specific classes (like XHEAnchor, XHEInput, XHEDiv, etc.) and provides common methods for element manipulation, interaction, and information retrieval.

## Class Access
XHEInterface objects are returned by various methods of DOM element classes:
```php
// Get an element as XHEInterface
$element = DOM::$anchor->get_by_attribute("id", "example");
$element = DOM::$input->get_by_number(0);
$element = DOM::$div->get_by_inner_text("some text");
```

## Element Existence Check
Before working with any XHEInterface object, you should verify that the element exists:

```php
// Method 1: Using is_exist() function
if ($targetElement->is_exist()) {
    // Element exists, work with it
}

// Method 2: Checking inner_number property
if ($targetElement->inner_number != -1) {
    // Element exists, work with it
}
```

## Methods

### Attribute Manipulation

#### get_attribute($attr_name)
Gets the value of the specified attribute.

**Parameters:**
- `$attr_name` (string) - The name of the attribute to retrieve

**Returns:**
- (string) - The attribute value or empty string if not found

**Example:**
```php
// Get the id attribute of an element
$element = DOM::$anchor->get_by_attribute("id", "example", false);
if ($element->inner_number != -1) {
    $idValue = $element->get_attribute("id");
    echo "Element ID: " . $idValue . "\n";
}
```

#### set_attribute($attr_name, $attr_value)
Sets the value of the specified attribute.

**Parameters:**
- `$attr_name` (string) - The name of the attribute to set
- `$attr_value` (string) - The value to set for the attribute

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Set the class attribute of an element
$element = DOM::$div->get_by_attribute("id", "mydiv");
if ($element->inner_number != -1) {
    $success = $element->set_attribute("class", "highlight");
    if ($success) {
        echo "Attribute set successfully<br>";
    }
}
```

#### add_attribute($attr_name, $attr_value)
Adds a new attribute to the element.

**Parameters:**
- `$attr_name` (string) - The name of the attribute to add
- `$attr_value` (string) - The value of the attribute

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Add a data attribute to an element
$element = DOM::$anchor->get_by_number(0);
if ($element->inner_number != -1) {
    $success = $element->add_attribute("data-custom", "value123");
    if ($success) {
        echo "Attribute added successfully<br>";
    }
}
```

#### remove_attribute($attr_name)
Removes an attribute from the element.

**Parameters:**
- `$attr_name` (string) - The name of the attribute to remove

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Remove the disabled attribute from an element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $success = $element->remove_attribute("disabled");
    if ($success) {
        echo "Attribute removed successfully<br>";
    }
}
```

#### get_all_attributes()
Gets all attributes of the element as an associative array.

**Returns:**
- (array) - Associative array of attribute names and values

**Example:**
```php
// Get all attributes of an element
$element = DOM::$form->get_by_number(0);
if ($element->inner_number != -1) {
    $attributes = $element->get_all_attributes();
    foreach ($attributes as $name => $value) {
        echo "Attribute: $name = $value<br>";
    }
}
```

#### get_all_attributes_values()
Gets all attribute values of the element as an array.

**Returns:**
- (array) - Array of attribute values

**Example:**
```php
// Get all attribute values of an element
$element = DOM::$anchor->get_by_number(0);
if ($element->inner_number != -1) {
    $values = $element->get_all_attributes_values();
    foreach ($values as $value) {
        echo "Attribute value: $value<br>";
    }
}
```

### Computed Style

#### get_computed_style($style_name = "", $pseudo = "")
Gets the computed style of the element.

**Parameters:**
- `$style_name` (string) - The name of the style property to retrieve (default: "" for all styles)
- `$pseudo` (string) - The pseudo-element to get styles for (default: "")

**Returns:**
- (string) - The computed style value(s)

**Example:**
```php
// Get all computed styles of an element
$element = DOM::$input->get_by_number(0);
if ($element->inner_number != -1) {
    $styles = $element->get_computed_style();
    echo "Computed styles: " . $styles . "\n";
}
```

### String Conversion

#### __toString()
Converts the element to a string representation.

**Returns:**
- (string) - The string representation of the element (inner text in curly braces)

**Example:**
```php
// Convert an element to string
$element = DOM::$input->get_by_number(0);
if ($element->inner_number != -1) {
    // The __toString method is called automatically when the object is used in a string context
    echo "Element content: " . $element . "\n";
}
```

### Content Manipulation

#### get_inner_html()
Gets the inner HTML content of the element.

**Returns:**
- (string) - The inner HTML content

**Example:**
```php
// Get the inner HTML of a div element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $html = $element->get_inner_html();
    echo "Inner HTML: " . htmlspecialchars($html) . "\n";
}
```

#### set_inner_html($html)
Sets the inner HTML content of the element.

**Parameters:**
- `$html` (string) - The HTML content to set

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Set the inner HTML of a div element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $success = $element->set_inner_html("<p>New content</p>");
    if ($success) {
        echo "Inner HTML set successfully<br>";
    }
}
```

#### get_inner_text()
Gets the inner text content of the element.

**Returns:**
- (string) - The inner text content

**Example:**
```php
// Get the inner text of a div element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $text = $element->get_inner_text();
    echo "Inner text: " . $text . "\n";
}
```

#### set_inner_text($text)
Sets the inner text content of the element.

**Parameters:**
- `$text` (string) - The text content to set

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Set the inner text of a div element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $success = $element->set_inner_text("New text content");
    if ($success) {
        echo "Inner text set successfully<br>";
    }
}
```

#### get_outer_html()
Gets the outer HTML of the element (including the element itself).

**Returns:**
- (string) - The outer HTML content

**Example:**
```php
// Get the outer HTML of a div element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $html = $element->get_outer_html();
    echo "Outer HTML: " . htmlspecialchars($html) . "\n";
}
```

#### get_outer_text()
Gets the outer text of the element.

**Returns:**
- (string) - The outer text content

**Example:**
```php
// Get the outer text of a div element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $text = $element->get_outer_text();
    echo "Outer text: " . $text . "\n";
}
```

### Element Interaction

#### click($is_js = false, $frame = "")
Performs a click on the element.

**Parameters:**
- `$is_js` (bool) - Whether to use JavaScript to perform the click (default: false)
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Click on a button element
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $success = $element->click();
    if ($success) {
        echo "Element clicked successfully<br>";
    }
}
```

#### focus()
Sets focus to the element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Set focus to an input element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $success = $element->focus();
    if ($success) {
        echo "Focus set successfully<br>";
    }
}
```

#### event($event_type)
Triggers an event on the element.

**Parameters:**
- `$event_type` (string) - The type of event to trigger (e.g., "onclick", "onmouseover")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Trigger a mouseover event on an element
$element = DOM::$div->get_by_attribute("id", "menu");
if ($element->inner_number != -1) {
    $success = $element->event("onmouseover");
    if ($success) {
        echo "Event triggered successfully<br>";
    }
}
```

#### get_all_events()
Gets all events associated with the element.

**Returns:**
- (array) - Array of event names

**Example:**
```php
// Get all events of an element
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $events = $element->get_all_events();
    foreach ($events as $event) {
        echo "Event: $event<br>";
    }
}
```

### Input Methods

#### input($value, $frame = "")
Inputs text into the element (for input, textarea, etc.).

**Parameters:**
- `$value` (string) - The text value to input
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Input text into an input field
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $success = $element->input("testuser");
    if ($success) {
        echo "Text input successfully<br>";
    }
}
```

#### key($key_code, $is_js = false)
Simulates a key press on the element.

**Parameters:**
- `$key_code` (int) - The key code to press
- `$is_js` (bool) - Whether to use JavaScript to simulate the key press (default: false)

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Press the Enter key on an element
$element = DOM::$input->get_by_name("search");
if ($element->inner_number != -1) {
    $success = $element->key(13); // 13 is the key code for Enter
    if ($success) {
        echo "Key pressed successfully<br>";
    }
}
```

#### key_down($key_code)
Simulates a key down event on the element.

**Parameters:**
- `$key_code` (int) - The key code to press down

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Press down the Shift key on an element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $success = $element->key_down(16); // 16 is the key code for Shift
    if ($success) {
        echo "Key down event successful<br>";
    }
}
```

#### key_up($key_code)
Simulates a key up event on the element.

**Parameters:**
- `$key_code` (int) - The key code to release

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Release the Shift key on an element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $success = $element->key_up(16); // 16 is the key code for Shift
    if ($success) {
        echo "Key up event successful<br>";
    }
}
```

### Mouse Interaction

#### mouse_click()
Performs a mouse click on the element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Perform a mouse click on a button
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $success = $element->mouse_click();
    if ($success) {
        echo "Mouse click successful<br>";
    }
}
```

#### mouse_double_click()
Performs a double mouse click on the element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Perform a double mouse click on an element
$element = DOM::$div->get_by_attribute("id", "double-click-area");
if ($element->inner_number != -1) {
    $success = $element->mouse_double_click();
    if ($success) {
        echo "Double mouse click successful<br>";
    }
}
```

#### mouse_right_click()
Performs a right mouse click on the element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Perform a right mouse click on an element
$element = DOM::$div->get_by_attribute("id", "context-menu");
if ($element->inner_number != -1) {
    $success = $element->mouse_right_click();
    if ($success) {
        echo "Right mouse click successful<br>";
    }
}
```

#### mouse_move($x, $y)
Moves the mouse to the specified coordinates relative to the element.

**Parameters:**
- `$x` (int) - X coordinate relative to the element
- `$y` (int) - Y coordinate relative to the element

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Move mouse to position (10, 10) relative to an element
$element = DOM::$div->get_by_attribute("id", "drop-area");
if ($element->inner_number != -1) {
    $success = $element->mouse_move(10, 10);
    if ($success) {
        echo "Mouse moved successfully<br>";
    }
}
```

#### mouse_move_to()
Moves the mouse to the center of the element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Move mouse to the center of an element
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $success = $element->mouse_move_to();
    if ($success) {
        echo "Mouse moved to element center<br>";
    }
}
```

### Element Information

#### get_tag()
Gets the tag name of the element.

**Returns:**
- (string) - The tag name (e.g., "div", "a", "input")

**Example:**
```php
// Get the tag name of an element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $tag = $element->get_tag();
    echo "Element tag: " . $tag . "\n";
}
```

#### get_id()
Gets the id attribute value of the element.

**Returns:**
- (string) - The id attribute value

**Example:**
```php
// Get the id of an element
$element = DOM::$div->get_by_number(0);
if ($element->inner_number != -1) {
    $id = $element->get_id();
    echo "Element ID: " . $id . "\n";
}
```

#### get_name()
Gets the name attribute value of the element.

**Returns:**
- (string) - The name attribute value

**Example:**
```php
// Get the name of an element
$element = DOM::$input->get_by_number(0);
if ($element->inner_number != -1) {
    $name = $element->get_name();
    echo "Element name: " . $name . "\n";
}
```

#### get_value()
Gets the value attribute value of the element.

**Returns:**
- (string) - The value attribute value

**Example:**
```php
// Get the value of an input element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $value = $element->get_value();
    echo "Element value: " . $value . "\n";
}
```

#### set_value($value)
Sets the value attribute of the element.

**Parameters:**
- `$value` (string) - The value to set

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Set the value of an input element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $success = $element->set_value("newvalue");
    if ($success) {
        echo "Value set successfully<br>";
    }
}
```

#### get_type()
Gets the type attribute value of the element.

**Returns:**
- (string) - The type attribute value

**Example:**
```php
// Get the type of an input element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $type = $element->get_type();
    echo "Element type: " . $type . "\n";
}
```

#### get_src()
Gets the src attribute value of the element.

**Returns:**
- (string) - The src attribute value

**Example:**
```php
// Get the src of an image element
$element = DOM::$image->get_by_number(0);
if ($element->inner_number != -1) {
    $src = $element->get_src();
    echo "Image src: " . $src . "\n";
}
```

#### get_href()
Gets the href attribute value of the element.

**Returns:**
- (string) - The href attribute value

**Example:**
```php
// Get the href of an anchor element
$element = DOM::$anchor->get_by_number(0);
if ($element->inner_number != -1) {
    $href = $element->get_href();
    echo "Anchor href: " . $href . "\n";
}
```

#### get_alt()
Gets the alt attribute value of the element.

**Returns:**
- (string) - The alt attribute value

**Example:**
```php
// Get the alt text of an image element
$element = DOM::$image->get_by_number(0);
if ($element->inner_number != -1) {
    $alt = $element->get_alt();
    echo "Image alt: " . $alt . "\n";
}
```

#### get_width()
Gets the width of the element.

**Returns:**
- (int) - The width in pixels

**Example:**
```php
// Get the width of an element
$element = DOM::$image->get_by_number(0);
if ($element->inner_number != -1) {
    $width = $element->get_width();
    echo "Element width: " . $width . "px<br>";
}
```

#### get_height()
Gets the height of the element.

**Returns:**
- (int) - The height in pixels

**Example:**
```php
// Get the height of an element
$element = DOM::$image->get_by_number(0);
if ($element->inner_number != -1) {
    $height = $element->get_height();
    echo "Element height: " . $height . "px<br>";
}
```

#### get_x()
Gets the X coordinate of the element relative to the page.

**Returns:**
- (int) - The X coordinate in pixels

**Example:**
```php
// Get the X coordinate of an element
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $x = $element->get_x();
    echo "Element X coordinate: " . $x . "px<br>";
}
```

#### get_y()
Gets the Y coordinate of the element relative to the page.

**Returns:**
- (int) - The Y coordinate in pixels

**Example:**
```php
// Get the Y coordinate of an element
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $y = $element->get_y();
    echo "Element Y coordinate: " . $y . "px<br>";
}
```

### Element State

#### is_exist()
Checks if the element exists on the page.

**Returns:**
- (bool) - True if the element exists, false otherwise

**Example:**
```php
// Check if an element exists
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->is_exist()) {
    echo "Element exists<br>";
} else {
    echo "Element does not exist<br>";
}
```

#### is_visibled()
Checks if the element is visible.

**Returns:**
- (bool) - True if the element is visible, false otherwise

**Example:**
```php
// Check if an element is visible
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    if ($element->is_visibled()) {
        echo "Element is visible<br>";
    } else {
        echo "Element is not visible<br>";
    }
}
```

#### is_view_now()
Checks if the element is currently in the viewport.

**Returns:**
- (bool) - True if the element is in the viewport, false otherwise

**Example:**
```php
// Check if an element is in the viewport
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    if ($element->is_view_now()) {
        echo "Element is in the viewport<br>";
    } else {
        echo "Element is not in the viewport<br>";
    }
}
```

#### is_checked()
Checks if the element is checked (for checkboxes and radio buttons).

**Returns:**
- (bool) - True if the element is checked, false otherwise

**Example:**
```php
// Check if a checkbox is checked
$element = DOM::$checkbox->get_by_name("agree");
if ($element->inner_number != -1) {
    if ($element->is_checked()) {
        echo "Checkbox is checked<br>";
    } else {
        echo "Checkbox is not checked<br>";
    }
}
```

#### is_disabled()
Checks if the element is disabled.

**Returns:**
- (bool) - True if the element is disabled, false otherwise

**Example:**
```php
// Check if an input element is disabled
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    if ($element->is_disabled()) {
        echo "Element is disabled<br>";
    } else {
        echo "Element is not disabled<br>";
    }
}
```

### Child Elements

#### get_child_count()
Gets the number of child elements.

**Returns:**
- (int) - The number of child elements

**Example:**
```php
// Get the number of child elements
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $count = $element->get_child_count();
    echo "Child elements count: " . $count . "\n";
}
```

#### get_child_by_number($number)
Gets a child element by its number.

**Parameters:**
- `$number` (int) - The child element number (0-based index)

**Returns:**
- (XHEInterface) - The child element as an XHEInterface object

**Example:**
```php
// Get the first child element
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $child = $element->get_child_by_number(0);
    if ($child->inner_number != -1) {
        echo "First child tag: " . $child->get_tag() . "\n";
    }
}
```

#### get_child_by_attribute($attr_name, $attr_value, $exactly = false)
Gets a child element by its attribute.

**Parameters:**
- `$attr_name` (string) - The attribute name
- `$attr_value` (string) - The attribute value
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (XHEInterface) - The child element as an XHEInterface object

**Example:**
```php
// Get a child element by its id attribute
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $child = $element->get_child_by_attribute("id", "child1");
    if ($child->inner_number != -1) {
        echo "Child element found<br>";
    }
}
```

#### get_child_by_inner_text($text, $exactly = false)
Gets a child element by its inner text.

**Parameters:**
- `$text` (string) - The inner text to search for
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (XHEInterface) - The child element as an XHEInterface object

**Example:**
```php
// Get a child element by its inner text
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $child = $element->get_child_by_inner_text("Click me");
    if ($child->inner_number != -1) {
        echo "Child element found<br>";
    }
}
```

#### get_all_child_by_attribute($attr_name, $attr_value, $exactly = false)
Gets all child elements that match the specified attribute.

**Parameters:**
- `$attr_name` (string) - The attribute name
- `$attr_value` (string) - The attribute value
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (XHEInterfaces) - Collection of child elements as XHEInterfaces object

**Example:**
```php
// Get all child elements with a specific class
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $children = $element->get_all_child_by_attribute("class", "item");
    $count = $children->get_length();
    echo "Found " . $count . " child elements with class 'item'<br>";
}
```

#### get_all_child_by_inner_text($text, $exactly = false)
Gets all child elements that contain the specified text.

**Parameters:**
- `$text` (string) - The inner text to search for
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (XHEInterfaces) - Collection of child elements as XHEInterfaces object

**Example:**
```php
// Get all child elements containing specific text
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $children = $element->get_all_child_by_inner_text("item");
    $count = $children->get_length();
    echo "Found " . $count . " child elements containing 'item'<br>";
}
```

### Parent Elements

#### get_parent()
Gets the parent element of the current element.

**Returns:**
- (XHEInterface) - The parent element as an XHEInterface object

**Example:**
```php
// Get the parent of an element
$element = DOM::$anchor->get_by_attribute("id", "link1");
if ($element->inner_number != -1) {
    $parent = $element->get_parent();
    if ($parent->inner_number != -1) {
        echo "Parent tag: " . $parent->get_tag() . "\n";
    }
}
```

#### get_parent_by_attribute($attr_name, $attr_value, $exactly = false)
Gets a parent element that matches the specified attribute.

**Parameters:**
- `$attr_name` (string) - The attribute name
- `$attr_value` (string) - The attribute value
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (XHEInterface) - The parent element as an XHEInterface object

**Example:**
```php
// Get a parent element with a specific class
$element = DOM::$anchor->get_by_attribute("id", "link1");
if ($element->inner_number != -1) {
    $parent = $element->get_parent_by_attribute("class", "menu");
    if ($parent->inner_number != -1) {
        echo "Parent with class 'menu' found<br>";
    }
}
```

#### get_all_parents()
Gets all parent elements of the current element.

**Returns:**
- (XHEInterfaces) - Collection of parent elements as XHEInterfaces object

**Example:**
```php
// Get all parent elements
$element = DOM::$anchor->get_by_attribute("id", "link1");
if ($element->inner_number != -1) {
    $parents = $element->get_all_parents();
    $count = $parents->get_length();
    echo "Found " . $count . " parent elements<br>";
}
```

#### get_parents_count()
Gets the number of parent elements.

**Returns:**
- (int) - The number of parent elements

**Example:**
```php
// Get the number of parent elements
$element = DOM::$anchor->get_by_attribute("id", "link1");
if ($element->inner_number != -1) {
    $count = $element->get_parents_count();
    echo "Parent elements count: " . $count . "\n";
}
```

### Navigation

#### get_prev()
Gets the previous sibling element.

**Returns:**
- (XHEInterface) - The previous sibling element as an XHEInterface object

**Example:**
```php
// Get the previous sibling element
$element = DOM::$input->get_by_name("password");
if ($element->inner_number != -1) {
    $prev = $element->get_prev();
    if ($prev->inner_number != -1) {
        echo "Previous sibling tag: " . $prev->get_tag() . "\n";
    }
}
```

#### get_next()
Gets the next sibling element.

**Returns:**
- (XHEInterface) - The next sibling element as an XHEInterface object

**Example:**
```php
// Get the next sibling element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $next = $element->get_next();
    if ($next->inner_number != -1) {
        echo "Next sibling tag: " . $next->get_tag() . "\n";
    }
}
```

### Special Methods

#### ensure_visible($frame = "")
Ensures the element is visible by scrolling to it.

**Parameters:**
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Ensure an element is visible
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $success = $element->ensure_visible();
    if ($success) {
        echo "Element is now visible<br>";
    }
}
```

#### scroll_to_view($frame = "")
Scrolls the element into view.

**Parameters:**
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Scroll an element into view
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $success = $element->scroll_to_view();
    if ($success) {
        echo "Element scrolled into view<br>";
    }
}
```

#### scroll($x, $y, $frame = "")
Scrolls the element by the specified amount.

**Parameters:**
- `$x` (int) - Horizontal scroll amount
- `$y` (int) - Vertical scroll amount
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Scroll an element
$element = DOM::$div->get_by_attribute("id", "scrollable");
if ($element->inner_number != -1) {
    $success = $element->scroll(0, 100); // Scroll down 100 pixels
    if ($success) {
        echo "Element scrolled successfully<br>";
    }
}
```

#### screenshot($filepath, $frame = "")
Takes a screenshot of the element.

**Parameters:**
- `$filepath` (string) - Path to save the screenshot
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Take a screenshot of an element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $success = $element->screenshot("element_screenshot.png");
    if ($success) {
        echo "Screenshot saved successfully<br>";
    }
}
```

#### save($filepath, $frame = "")
Saves the element to a file.

**Parameters:**
- `$filepath` (string) - Path to save the element
- `$frame` (string) - Frame path for nested frames (default: "")

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Save an element to a file
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $success = $element->save("element_content.html");
    if ($success) {
        echo "Element saved successfully<br>";
    }
}
```

#### run_js($js_code)
Runs JavaScript code on the element.

**Parameters:**
- `$js_code` (string) - JavaScript code to run

**Returns:**
- (mixed) - The result of the JavaScript execution

**Example:**
```php
// Run JavaScript on an element
$element = DOM::$div->get_by_attribute("id", "content");
if ($element->inner_number != -1) {
    $result = $element->run_js("this.style.backgroundColor = 'yellow';");
    echo "JavaScript executed successfully<br>";
}
```

#### check($value = true)
Checks or unchecks a checkbox or radio button.

**Parameters:**
- `$value` (bool) - Whether to check (true) or uncheck (false) the element (default: true)

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Check a checkbox
$element = DOM::$checkbox->get_by_name("agree");
if ($element->inner_number != -1) {
    $success = $element->check(true);
    if ($success) {
        echo "Checkbox checked successfully<br>";
    }
}
```

#### remove()
Removes the element from the DOM.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Remove an element
$element = DOM::$div->get_by_attribute("id", "remove-me");
if ($element->inner_number != -1) {
    $success = $element->remove();
    if ($success) {
        echo "Element removed successfully<br>";
    }
}
```

#### add_child($html)
Adds a child element to the current element.

**Parameters:**
- `$html` (string) - HTML of the child element to add

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Add a child element
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $success = $element->add_child("<p>New paragraph</p>");
    if ($success) {
        echo "Child element added successfully<br>";
    }
}
```

#### insert_before($html)
Inserts an element before the current element.

**Parameters:**
- `$html` (string) - HTML of the element to insert

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Insert an element before the current element
$element = DOM::$div->get_by_attribute("id", "target");
if ($element->inner_number != -1) {
    $success = $element->insert_before("<div>Inserted before</div>");
    if ($success) {
        echo "Element inserted successfully<br>";
    }
}
```

#### get_clone()
Gets a clone of the current element.

**Returns:**
- (XHEInterface) - A clone of the current element as an XHEInterface object

**Example:**
```php
// Get a clone of an element
$element = DOM::$div->get_by_attribute("id", "original");
if ($element->inner_number != -1) {
    $clone = $element->get_clone();
    if ($clone->inner_number != -1) {
        echo "Element cloned successfully<br>";
    }
}
```

#### get_xpath()
Gets the XPath of the current element.

**Returns:**
- (string) - The XPath of the element

**Example:**
```php
// Get the XPath of an element
$element = DOM::$button->get_by_attribute("id", "submit");
if ($element->inner_number != -1) {
    $xpath = $element->get_xpath();
    echo "Element XPath: " . $xpath . "\n";
}
```

#### get_child_by_xpath($xpath)
Gets a child element by its XPath.

**Parameters:**
- `$xpath` (string) - The XPath of the child element

**Returns:**
- (XHEInterface) - The child element as an XHEInterface object

**Example:**
```php
// Get a child element by XPath
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $child = $element->get_child_by_xpath(".//a[@class='link']");
    if ($child->inner_number != -1) {
        echo "Child element found<br>";
    }
}
```

#### get_all_child_by_xpath($xpath)
Gets all child elements that match the specified XPath.

**Parameters:**
- `$xpath` (string) - The XPath to search for

**Returns:**
- (XHEInterfaces) - Collection of child elements as XHEInterfaces object

**Example:**
```php
// Get all child elements matching an XPath
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $children = $element->get_all_child_by_xpath(".//div[@class='item']");
    $count = $children->get_length();
    echo "Found " . $count . " child elements<br>";
}
```

#### get_length()
Gets the number of elements in a collection (for XHEInterfaces objects).

**Returns:**
- (int) - The number of elements

**Example:**
```php
// Get the number of elements in a collection
$elements = DOM::$anchor->get_all_by_attribute("class", "link");
$count = $elements->get_length();
echo "Found " . $count . " links<br>";
```

#### get_number()
Gets the number of the current element in the collection (for XHEInterfaces objects).

**Returns:**
- (int) - The element number

**Example:**
```php
// Get the number of the current element in a collection
$elements = DOM::$anchor->get_all_by_attribute("class", "link");
$first = $elements->get_by_number(0);
$number = $first->get_number();
echo "Element number: " . $number . "\n";
```

#### get_numbers_child()
Gets the numbers of all child elements.

**Returns:**
- (array) - Array of child element numbers

**Example:**
```php
// Get the numbers of all child elements
$element = DOM::$div->get_by_attribute("id", "container");
if ($element->inner_number != -1) {
    $numbers = $element->get_numbers_child();
    foreach ($numbers as $number) {
        echo "Child number: " . $number . "\n";
    }
}
```

#### get_form_number()
Gets the form number that contains the current element.

**Returns:**
- (int) - The form number

**Example:**
```php
// Get the form number of an element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $formNumber = $element->get_form_number();
    echo "Form number: " . $formNumber . "\n";
}
```

#### get_frame_number()
Gets the frame number that contains the current element.

**Returns:**
- (int) - The frame number

**Example:**
```php
// Get the frame number of an element
$element = DOM::$input->get_by_name("username");
if ($element->inner_number != -1) {
    $frameNumber = $element->get_frame_number();
    echo "Frame number: " . $frameNumber . "\n";
}
```

#### get_shadow_root()
Gets the shadow root of the current element.

**Returns:**
- (XHEInterface) - The shadow root as an XHEInterface object

**Example:**
```php
// Get the shadow root of an element
$element = DOM::$div->get_by_attribute("id", "shadow-host");
if ($element->inner_number != -1) {
    $shadowRoot = $element->get_shadow_root();
    if ($shadowRoot->inner_number != -1) {
        echo "Shadow root found<br>";
    }
}
```

#### get_selected_index()
Gets the selected index of a select element.

**Returns:**
- (int) - The selected index

**Example:**
```php
// Get the selected index of a select element
$element = DOM::$select->get_by_name("country");
if ($element->inner_number != -1) {
    $index = $element->get_selected_index();
    echo "Selected index: " . $index . "\n";
}
```

#### get_selected_text()
Gets the selected text of a select element.

**Returns:**
- (string) - The selected text

**Example:**
```php
// Get the selected text of a select element
$element = DOM::$select->get_by_name("country");
if ($element->inner_number != -1) {
    $text = $element->get_selected_text();
    echo "Selected text: " . $text . "\n";
}
```

#### select_index($index)
Selects an option by its index in a select element.

**Parameters:**
- `$index` (int) - The option index to select

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select an option by index
$element = DOM::$select->get_by_name("country");
if ($element->inner_number != -1) {
    $success = $element->select_index(2); // Select the third option
    if ($success) {
        echo "Option selected successfully<br>";
    }
}
```

#### select_text($text)
Selects an option by its text in a select element.

**Parameters:**
- `$text` (string) - The option text to select

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select an option by text
$element = DOM::$select->get_by_name("country");
if ($element->inner_number != -1) {
    $success = $element->select_text("United States");
    if ($success) {
        echo "Option selected successfully<br>";
    }
}
```

#### select_value($value)
Selects an option by its value in a select element.

**Parameters:**
- `$value` (string) - The option value to select

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select an option by value
$element = DOM::$select->get_by_name("country");
if ($element->inner_number != -1) {
    $success = $element->select_value("US");
    if ($success) {
        echo "Option selected successfully<br>";
    }
}
```

#### select_random()
Selects a random option in a select element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select a random option
$element = DOM::$select->get_by_name("country");
if ($element->inner_number != -1) {
    $success = $element->select_random();
    if ($success) {
        echo "Random option selected successfully<br>";
    }
}
```

#### multi_select_indexes($indexes)
Selects multiple options by their indexes in a multi-select element.

**Parameters:**
- `$indexes` (array) - Array of option indexes to select

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select multiple options by indexes
$element = DOM::$select->get_by_name("countries");
if ($element->inner_number != -1) {
    $success = $element->multi_select_indexes(array(0, 2, 4));
    if ($success) {
        echo "Options selected successfully<br>";
    }
}
```

#### multi_select_texts($texts)
Selects multiple options by their texts in a multi-select element.

**Parameters:**
- `$texts` (array) - Array of option texts to select

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select multiple options by texts
$element = DOM::$select->get_by_name("countries");
if ($element->inner_number != -1) {
    $success = $element->multi_select_texts(array("USA", "Canada", "Mexico"));
    if ($success) {
        echo "Options selected successfully<br>";
    }
}
```

#### multi_select_values($values)
Selects multiple options by their values in a multi-select element.

**Parameters:**
- `$values` (array) - Array of option values to select

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Select multiple options by values
$element = DOM::$select->get_by_name("countries");
if ($element->inner_number != -1) {
    $success = $element->multi_select_values(array("US", "CA", "MX"));
    if ($success) {
        echo "Options selected successfully<br>";
    }
}
```

#### seek_to_pos($pos)
Moves the cursor to the specified position in a textarea or input element.

**Parameters:**
- `$pos` (int) - The position to move the cursor to

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Move cursor to position 10 in a textarea
$element = DOM::$textarea->get_by_name("description");
if ($element->inner_number != -1) {
    $success = $element->seek_to_pos(10);
    if ($success) {
        echo "Cursor moved successfully<br>";
    }
}
```

#### seek_to_end()
Moves the cursor to the end of a textarea or input element.

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Move cursor to the end of a textarea
$element = DOM::$textarea->get_by_name("description");
if ($element->inner_number != -1) {
    $success = $element->seek_to_end();
    if ($success) {
        echo "Cursor moved to end successfully<br>";
    }
}
```

## Usage Examples

### Basic Element Interaction
```php
<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with elements
WEB::$browser->navigate("https://example.com");

// Find an element by its id
$element = DOM::$button->get_by_attribute("id", "submit");

// Check if the element exists
if ($element->is_exist()) {
    // Get the element's text
    $text = $element->get_inner_text();
    echo "Button text: " . $text . "\n";
    
    // Click the element
    $element->click();
    echo "Button clicked<br>";
} else {
    echo "Button not found<br>";
}

// Остановить работу
WINDOW::$app->quit();
?>
```

### Working with Forms
```php
<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a form
WEB::$browser->navigate("https://example.com/login");

// Find form elements
$usernameInput = DOM::$input->get_by_name("username");
$passwordInput = DOM::$input->get_by_name("password");
$submitButton = DOM::$button->get_by_attribute("type", "submit");

// Fill the form
if ($usernameInput->is_exist() && $passwordInput->is_exist()) {
    $usernameInput->set_value("testuser");
    $passwordInput->set_value("testpass");
    echo "Form filled<br>";
    
    // Submit the form
    if ($submitButton->is_exist()) {
        $submitButton->click();
        echo "Form submitted<br>";
    }
} else {
    echo "Form elements not found<br>";
}

// Остановить работу
WINDOW::$app->quit();
?>
```

### Working with Tables
```php
<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a table
WEB::$browser->navigate("https://example.com/data");

// Find a table by its id
$table = DOM::$table->get_by_attribute("id", "data-table");

// Check if the table exists
if ($table->is_exist()) {
    // Get all rows in the table
    $rows = $table->get_all_child_by_tag("tr");
    $rowCount = $rows->get_length();
    echo "Table has " . $rowCount . " rows<br>";
    
    // Process each row
    for ($i = 0; $i < $rowCount; $i++) {
        $row = $rows->get_by_number($i);
        
        // Get all cells in the row
        $cells = $row->get_all_child_by_tag("td");
        $cellCount = $cells->get_length();
        
        echo "Row " . ($i + 1) . " has " . $cellCount . " cells: ";
        
        // Output cell contents
        for ($j = 0; $j < $cellCount; $j++) {
            $cell = $cells->get_by_number($j);
            $cellText = $cell->get_inner_text();
            echo $cellText;
            if ($j < $cellCount - 1) {
                echo ", ";
            }
        }
        echo "\n";
    }
} else {
    echo "Table not found<br>";
}

// Остановить работу
WINDOW::$app->quit();
?>
```

### Working with Select Elements
```php
<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with a select element
WEB::$browser->navigate("https://example.com/form");

// Find a select element by its name
$select = DOM::$select->get_by_name("country");

// Check if the select element exists
if ($select->is_exist()) {
    // Get the currently selected option
    $selectedText = $select->get_selected_text();
    echo "Currently selected: " . $selectedText . "\n";
    
    // Select an option by text
    $select->select_text("United States");
    echo "Selected United States<br>";
    
    // Verify the selection
    $newSelectedText = $select->get_selected_text();
    echo "Now selected: " . $newSelectedText . "\n";
    
    // Select a random option
    $select->select_random();
    echo "Selected a random option<br>";
    
    // Get the new selection
    $randomSelectedText = $select->get_selected_text();
    echo "Random selection: " . $randomSelectedText . "\n";
} else {
    echo "Select element not found<br>";
}

// Остановить работу
WINDOW::$app->quit();
?>
```

## Notes
- Always check if an element exists using `is_exist()` or by verifying that `inner_number != -1` before working with it
- Most methods return a boolean value indicating success (true) or failure (false)
- When using number-based methods, elements are numbered starting from 0 in the order they appear in the HTML document
- The `$exactly` parameter in some methods determines whether the attribute value must match exactly (true) or can be a partial match (false)
- For methods that interact with elements (like click, input, etc.), consider using the `$frame` parameter when working with elements inside frames
- Some methods may trigger page navigation or other events, so ensure proper handling in your script