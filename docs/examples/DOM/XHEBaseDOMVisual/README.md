# XHEBaseDOMVisual Examples

This directory contains examples demonstrating the usage of XHEBaseDOMVisual class methods. XHEBaseDOMVisual is a base class that provides common functionality for working with DOM elements in the XHE framework.

## Available Examples

### Wait Functions

#### wait_element_exist_by_number.php
Demonstrates how to wait for a DOM element to exist by its number.
- Basic usage: Wait for the first element on the page
- Frame usage: Wait for an element within frame 0

#### wait_element_exist_by_name.php
Shows how to wait for a DOM element to exist by its name attribute.
- Basic usage: Wait for an element with a specific name
- Frame usage: Wait for an element with a specific name within frame 0

#### wait_element_exist_by_attribute.php
Illustrates waiting for a DOM element to exist by its attributes.
- Basic usage: Wait for an element with specific attribute-value pair
- Exact match: Wait for an element with exact attribute match
- Frame usage: Wait for an element with attributes within frame 0

### Interaction Functions

#### click_by_number.php
Shows how to click on a DOM element by its number.
- Basic usage: Click on the first element on the page
- Frame usage: Click on an element within frame 0

#### click_by_name.php
Demonstrates clicking on a DOM element by its name attribute.
- Basic usage: Click on an element with a specific name
- Frame usage: Click on an element with a specific name within frame 0

#### click_by_attribute.php
Shows how to click on a DOM element by its attributes.
- Basic usage: Click on an element with specific attribute-value pair
- Exact match: Click on an element with exact attribute match
- Frame usage: Click on an element with attributes within frame 0

#### send_event_by_number.php
Demonstrates sending events to a DOM element by its number.
- Basic usage: Send 'onfocus' event to the first element
- Multiple events: Send different events ('onfocus', 'onclick')
- Frame usage: Send events to an element within frame 0

#### set_focus_by_number.php
Shows how to set focus to a DOM element by its number.
- Basic usage: Set focus to the first element on the page
- Frame usage: Set focus to an element within frame 0

### Value Manipulation Functions

#### set_value_by_number.php
Demonstrates setting the value of a DOM element by its number.
- Basic usage: Set value of the first element on the page
- Frame usage: Set value of an element within frame 0

#### set_value_by_name.php
Shows how to set the value of a DOM element by its name attribute.
- Basic usage: Set value of an element with a specific name
- Frame usage: Set value of an element with a specific name within frame 0

#### set_value_by_attribute.php
Demonstrates setting the value of a DOM element by its attributes.
- Basic usage: Set value of an element with specific attribute-value pair
- Exact match: Set value of an element with exact attribute match
- Frame usage: Set value of an element with attributes within frame 0

#### get_value_by_number.php
Shows how to get the value of a DOM element by its number.
- Basic usage: Get value of the first element on the page
- Frame usage: Get value of an element within frame 0

#### get_value_by_name.php
Demonstrates getting the value of a DOM element by its name attribute.
- Basic usage: Get value of an element with a specific name
- Frame usage: Get value of an element with a specific name within frame 0

#### get_value_by_attribute.php
Shows how to get the value of a DOM element by its attributes.
- Basic usage: Get value of an element with specific attribute-value pair
- Exact match: Get value of an element with exact attribute match
- Frame usage: Get value of an element with attributes within frame 0

### Element Information Functions

#### is_exist_by_number.php
Demonstrates checking if a DOM element exists by its number.
- Basic usage: Check if the first element exists on the page
- Frame usage: Check if an element exists within frame 0

#### get_attribute_by_number.php
Shows how to get an attribute value of a DOM element by its number.
- Basic usage: Get 'type' attribute of the first element
- Multiple attributes: Get different attributes ('type', 'name')
- Frame usage: Get attribute of an element within frame 0

#### get_inner_text_by_number.php
Demonstrates getting the inner text of a DOM element by its number.
- Basic usage: Get inner text of the first element on the page
- Frame usage: Get inner text of an element within frame 0

#### get_inner_html_by_number.php
Shows how to get the inner HTML of a DOM element by its number.
- Basic usage: Get inner HTML of the first element on the page
- Frame usage: Get inner HTML of an element within frame 0

#### get_all_attributes_by_number.php
Demonstrates getting all attributes of a DOM element by its number.
- Basic usage: Get all attributes of the first element on the page
- Frame usage: Get all attributes of an element within frame 0

### Element Selection Functions

#### get_by_number.php
Shows how to get a DOM element by its number.
- Basic usage: Get the first element on the page
- Frame usage: Get an element within frame 0
- Element existence check: Using is_exist() method

#### get_all_by_number.php
Demonstrates getting all DOM elements by their number.
- Basic usage: Get all elements on the page
- Frame usage: Get all elements within frame 0
- Collection handling: Using get_count() and get() methods

### Frame Examples

#### frame_examples.php
Comprehensive examples of working with DOM elements in frames.
- Basic frame operations: Working with elements in frame 0
- Nested frame operations: Working with elements in nested frames (0:0)
- Multiple operations in frames: Click, set focus, set value, get value, etc.
- Frame existence checking: Using is_exist_by_number() method

## Common Patterns

All examples follow these common patterns:

1. **Initialization**: Each example starts with the required initialization code to connect to the XHE API.

2. **Navigation**: Examples navigate to a test page using `WEB::$browser->navigate(TEST_POLYGON_URL . "page.html")`.

3. **Basic Usage**: Each function is demonstrated with its basic usage first.

4. **Frame Usage**: Most examples include frame usage with frame="0" parameter.

5. **Error Handling**: Examples check return values and handle potential errors.

6. **Output**: Results are displayed using echo statements.

7. **Cleanup**: Each example ends with `WINDOW::$app->quit()` to properly close the application.

## Frame Usage

Examples demonstrate three types of frame usage:

1. **No frame parameter**: Functions operate on the main page (frame=-1 by default).

2. **Single frame**: Functions operate within a specific frame (e.g., frame="0").

3. **Nested frames**: Functions operate within nested frames (e.g., frame="0:0" for the first frame inside the first frame).

## Running Examples

To run these examples:

1. Ensure the XHE server is running at 127.0.0.1:7010.
2. Update the path to init.php if necessary.
3. Execute the PHP file using a PHP interpreter or through the XHE framework.

Note: Some examples may require specific HTML pages with corresponding elements to work correctly.