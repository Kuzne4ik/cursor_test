# XHEInput Examples

This directory contains examples for working with input elements using the XHEInput class from the XHE framework.

## Available Examples

### Basic Interaction Examples

1. **[click_by_number.php](click_by_number.php)** - Demonstrates how to click on input elements by their number on the page.
   - Clicking on the first input element
   - Clicking on the second input element
   - Clicking on an input element within a frame (frame=0)

2. **[click_by_name.php](click_by_name.php)** - Shows how to click on input elements by their name attribute.
   - Clicking on input with name="username"
   - Clicking on input with name="password"
   - Clicking on input with name="search" within frame 0

3. **[click_by_attribute.php](click_by_attribute.php)** - Illustrates clicking on input elements by various attributes.
   - Clicking by id attribute
   - Clicking by class attribute
   - Clicking by placeholder attribute
   - Clicking by type attribute within frame 0

### Element Retrieval Examples

4. **[get_by_number.php](get_by_number.php)** - Shows how to get input elements by their number.
   - Getting the first input element
   - Getting the second input element
   - Getting an input element within frame 0

5. **[get_by_name.php](get_by_name.php)** - Demonstrates getting input elements by name attribute.
   - Getting input with name="username"
   - Getting input with name="password"
   - Getting input with name="search" within frame 0

6. **[get_by_attribute.php](get_by_attribute.php)** - Illustrates getting input elements by various attributes.
   - Getting by id attribute
   - Getting by class attribute
   - Getting by placeholder attribute
   - Getting by type attribute within frame 0

### Value Manipulation Examples

7. **[set_value_by_number.php](set_value_by_number.php)** - Shows how to set values of input elements by their number.
   - Setting value of the first input element
   - Setting value of the second input element
   - Setting value of an input element within frame 0

8. **[set_value_by_name.php](set_value_by_name.php)** - Demonstrates setting values of input elements by name.
   - Setting value of input with name="username"
   - Setting value of input with name="password"
   - Setting value of input with name="email"
   - Setting value of input with name="search" within frame 0

9. **[set_value_by_attribute.php](set_value_by_attribute.php)** - Illustrates setting values of input elements by attributes.
   - Setting value by id attribute
   - Setting value by class attribute
   - Setting value by placeholder attribute
   - Setting value by type attribute within frame 0

### Value Retrieval Examples

10. **[get_value_by_number.php](get_value_by_number.php)** - Shows how to get values from input elements by their number.
    - Getting value of the first input element
    - Getting value of the second input element
    - Getting value of an input element within frame 0

11. **[get_value_by_name.php](get_value_by_name.php)** - Demonstrates getting values from input elements by name.
    - Getting value of input with name="username"
    - Getting value of input with name="password"
    - Getting value of input with name="email"
    - Getting value of input with name="search" within frame 0

12. **[get_value_by_attribute.php](get_value_by_attribute.php)** - Illustrates getting values from input elements by attributes.
    - Getting value by id attribute
    - Getting value by class attribute
    - Getting value by placeholder attribute
    - Getting value by type attribute within frame 0

### Frame-specific Examples

13. **[frame_examples.php](frame_examples.php)** - Comprehensive examples for working with input elements within frames.
    - Clicking on an input element in frame 0
    - Getting an input element in frame 0 and checking its properties
    - Setting value of an input element in frame 0
    - Clicking on an input element by name in frame 0
    - Getting value of an input element by attribute in frame 0
    - Setting value of an input element by attribute in frame 0

## Common Structure

All example files follow a consistent structure:

```php
<?php
// Scenario: [Brief description of the example]

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example code demonstrating the functionality

// Quit the application
WINDOW::$app->quit();
?>
```

## Frame Usage

For functions that support the `frame` parameter, additional examples are provided showing how to work with elements inside frames. The frame parameter can be used in two ways:

1. **By frame number**: `DOM::$input->click_by_number(0, "0")` - Works with the first frame on the page
2. **By nested frames**: `DOM::$input->click_by_number(0, "0:1")` - Works with a frame nested inside another frame

## Notes

- All examples use English comments as per the documentation rules
- Each file includes a scenario description at the top
- The examples demonstrate both success and failure cases where appropriate
- All files include proper initialization and termination of the XHE application