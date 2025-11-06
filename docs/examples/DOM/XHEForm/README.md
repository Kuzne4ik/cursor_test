# XHEForm Class Documentation

## Overview
The XHEForm class provides functionality to interact with HTML forms on web pages. It allows you to get form attributes, reset form fields, and submit forms using various identification methods.

## Class Access
The XHEForm class is accessible as a static property of the DOM class:
```php
DOM::$form
```

## Methods

### Getting Form Action

#### get_action_by_id($id)
Gets the value of the action attribute of a form by its id attribute.

**Parameters:**
- `$id` (string) - The id attribute value of the form

**Returns:**
- (string) - The action attribute value or empty string if not found

**Example:**
```php
// Get the action attribute of the form by id attribute
$formAction = DOM::$form->get_action_by_id("userLoginForm");

// Display the form action
if ($formAction !== "") {
    echo "Form action by id: " . $formAction . "<br>";
} else {
    echo "Failed to get form action by id.<br>";
}
```

#### get_action_by_name($name)
Gets the value of the action attribute of a form by its name attribute.

**Parameters:**
- `$name` (string) - The name attribute value of the form

**Returns:**
- (string) - The action attribute value or empty string if not found

**Example:**
```php
// Get the action attribute of the form by name attribute
$formAction = DOM::$form->get_action_by_name("loginForm");

// Display the form action
if ($formAction !== "") {
    echo "Form action by name: " . $formAction . "<br>";
} else {
    echo "Failed to get form action by name.<br>";
}
```

#### get_action_by_number($number)
Gets the value of the action attribute of a form by its number on the page.

**Parameters:**
- `$number` (int) - The form number (1-based index)

**Returns:**
- (string) - The action attribute value or empty string if not found

**Example:**
```php
// Get the action attribute of the form by number (e.g., the first form on the page)
$formAction = DOM::$form->get_action_by_number(1);

// Display the form action
if ($formAction !== "") {
    echo "Form action by number: " . $formAction . "<br>";
} else {
    echo "Failed to get form action by number.<br>";
}
```

### Getting Form Content

#### get_content_by_id($id, $as_html)
Gets the inner text or HTML content of a form by its id attribute.

**Parameters:**
- `$id` (string) - The id attribute value of the form
- `$as_html` (bool) - True to get as HTML, false to get as inner text

**Returns:**
- (string) - The form content or empty string if not found

**Example:**
```php
// Get the inner text of the form by id (as_html = false)
$formInnerText = DOM::$form->get_content_by_id("loginFormId", false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by id: " . $formInnerText . "<br>";
} else {
    echo "Failed to get form inner text by id.<br>";
}

// Get the inner HTML of the form by id (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_id("loginFormId", true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by id: " . $formInnerHTML . "<br>";
} else {
    echo "Failed to get form inner HTML by id.<br>";
}
```

#### get_content_by_name($name, $as_html)
Gets the inner text or HTML content of a form by its name attribute.

**Parameters:**
- `$name` (string) - The name attribute value of the form
- `$as_html` (bool) - True to get as HTML, false to get as inner text

**Returns:**
- (string) - The form content or empty string if not found

**Example:**
```php
// Get the inner text of the form by name (as_html = false)
$formInnerText = DOM::$form->get_content_by_name("loginForm", false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by name: " . $formInnerText . "<br>";
} else {
    echo "Failed to get form inner text by name.<br>";
}

// Get the inner HTML of the form by name (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_name("loginForm", true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by name: " . $formInnerHTML . "<br>";
} else {
    echo "Failed to get form inner HTML by name.<br>";
}
```

#### get_content_by_number($number, $as_html)
Gets the inner text or HTML content of a form by its number on the page.

**Parameters:**
- `$number` (int) - The form number (1-based index)
- `$as_html` (bool) - True to get as HTML, false to get as inner text

**Returns:**
- (string) - The form content or empty string if not found

**Example:**
```php
// Get the inner text of the form by number (as_html = false)
$formInnerText = DOM::$form->get_content_by_number(1, false);

// Display the form inner text
if ($formInnerText !== "") {
    echo "Form inner text by number: " . $formInnerText . "<br>";
} else {
    echo "Failed to get form inner text by number.<br>";
}

// Get the inner HTML of the form by number (as_html = true)
$formInnerHTML = DOM::$form->get_content_by_number(1, true);

// Display the form inner HTML
if ($formInnerHTML !== "") {
    echo "Form inner HTML by number: " . $formInnerHTML . "<br>";
} else {
    echo "Failed to get form inner HTML by number.<br>";
}
```

### Resetting Forms

#### reset_by_name($name)
Resets a form by its name attribute, clearing all input fields to their default values.

**Parameters:**
- `$name` (string) - The name attribute value of the form

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Fill some form fields (optional)
DOM::$input->set_value_by_name("username", "testuser");
DOM::$input->set_value_by_name("password", "testpass");

// Reset the form by name attribute
$formReset = DOM::$form->reset_by_name("loginForm");

// Check if the form was reset successfully
if ($formReset) {
    echo "Form reset successfully by name!<br>";
} else {
    echo "Failed to reset form by name.<br>";
}
```

#### reset_by_number($number)
Resets a form by its number on the page, clearing all input fields to their default values.

**Parameters:**
- `$number` (int) - The form number (1-based index)

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Fill some form fields (optional)
DOM::$input->set_value_by_name("username", "testuser");
DOM::$input->set_value_by_name("password", "testpass");

// Reset the form by number (e.g., the first form on the page)
$formReset = DOM::$form->reset_by_number(1);

// Check if the form was reset successfully
if ($formReset) {
    echo "Form reset successfully by number!<br>";
} else {
    echo "Failed to reset form by number.<br>";
}
```

### Submitting Forms

#### submit_by_action($action, $exactly = false)
Submits a form by its action attribute.

**Parameters:**
- `$action` (string) - The action attribute value of the form
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Submit the form by action attribute (exact match)
$formSubmitted = DOM::$form->submit_by_action("/submit/login", true);

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by action!<br>";
} else {
    echo "Failed to submit form by action.<br>";
}
```

#### submit_by_attribute($attr_name, $attr_value, $exactly = false)
Submits a form by a custom attribute.

**Parameters:**
- `$attr_name` (string) - The name of the custom attribute
- `$attr_value` (string) - The value of the custom attribute
- `$exactly` (bool) - Whether to match exactly (default: false)

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Submit the form by custom attribute (e.g., data-form-type)
$formSubmitted = DOM::$form->submit_by_attribute("data-form-type", "login", true);

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by attribute!<br>";
} else {
    echo "Failed to submit form by attribute.<br>";
}
```

#### submit_by_id($id)
Submits a form by its id attribute.

**Parameters:**
- `$id` (string) - The id attribute value of the form

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Submit the form by id attribute
$formSubmitted = DOM::$form->submit_by_id("userLoginForm");

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by id!<br>";
} else {
    echo "Failed to submit form by id.<br>";
}
```

#### submit_by_name($name)
Submits a form by its name attribute.

**Parameters:**
- `$name` (string) - The name attribute value of the form

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Submit the form by name attribute
$formSubmitted = DOM::$form->submit_by_name("loginForm");

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by name!<br>";
} else {
    echo "Failed to submit form by name.<br>";
}
```

#### submit_by_number($number)
Submits a form by its number on the page.

**Parameters:**
- `$number` (int) - The form number (1-based index)

**Returns:**
- (bool) - True if successful, false otherwise

**Example:**
```php
// Submit the form by number (e.g., the first form on the page)
$formSubmitted = DOM::$form->submit_by_number(1);

// Check if the form was submitted successfully
if ($formSubmitted) {
    echo "Form submitted successfully by number!<br>";
} else {
    echo "Failed to submit form by number.<br>";
}
```

## Usage Examples

### Basic Form Interaction
```php
<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with forms
WEB::$browser->navigate("https://example.com/login");

// Get form action by id
$formAction = DOM::$form->get_action_by_id("loginForm");
echo "Form action: " . $formAction . "<br>";

// Fill form fields
DOM::$input->set_value_by_name("username", "testuser");
DOM::$input->set_value_by_name("password", "testpass");

// Submit the form
$formSubmitted = DOM::$form->submit_by_id("loginForm");
if ($formSubmitted) {
    echo "Form submitted successfully!<br>";
} else {
    echo "Failed to submit form.<br>";
}

// Остановить работу
WINDOW::$app->quit();
?>
```

### Working with Multiple Forms
```php
<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a page with multiple forms
WEB::$browser->navigate("https://example.com/forms");

// Get actions of all forms on the page
for ($i = 1; $i <= 5; $i++) {
    $action = DOM::$form->get_action_by_number($i);
    if ($action !== "") {
        echo "Form " . $i . " action: " . $action . "<br>";
    } else {
        break; // No more forms found
    }
}

// Reset the second form on the page
DOM::$form->reset_by_number(2);
echo "Form 2 has been reset.<br>";

// Submit the first form by its number
DOM::$form->submit_by_number(1);
echo "Form 1 has been submitted.<br>";

// Остановить работу
WINDOW::$app->quit();
?>
```

## Notes
- All methods that return a boolean value indicate success (true) or failure (false)
- When using number-based methods, forms are numbered starting from 1 in the order they appear in the HTML document
- The `$exactly` parameter in some methods determines whether the attribute value must match exactly (true) or can be a partial match (false)
- Form submission may trigger page navigation, so ensure proper handling of navigation events in your script