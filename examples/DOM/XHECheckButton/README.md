# XHECheckButton Examples

This directory contains examples of using the XHECheckButton class for working with checkbox elements on web pages.

## Available Examples

### Basic Operations
- [`click_all.php`](click_all.php) - Demonstrates how to click all checkboxes on the page
- [`check_all.php`](check_all.php) - Shows how to check or uncheck all checkboxes at once

### Checking/Unchecking by Specific Criteria
- [`check_by_number.php`](check_by_number.php) - Example of checking/unchecking a checkbox by its number
- [`check_by_name.php`](check_by_name.php) - Example of checking/unchecking a checkbox by its name attribute
- [`check_by_value.php`](check_by_value.php) - Example of checking/unchecking a checkbox by its value attribute
- [`check_by_attribute.php`](check_by_attribute.php) - Example of checking/unchecking a checkbox by any attribute

### Working with Forms
- [`check_by_attribute_by_form_number.php`](check_by_attribute_by_form_number.php) - Example of checking/unchecking a checkbox by attribute within a specific form (by form number)
- [`check_by_attribute_by_form_name.php`](check_by_attribute_by_form_name.php) - Example of checking/unchecking a checkbox by attribute within a specific form (by form name)

### Checking Status
- [`is_check_by_name.php`](is_check_by_name.php) - Example of checking if a checkbox is checked by its name
- [`is_check_by_number.php`](is_check_by_number.php) - Example of checking if a checkbox is checked by its number
- [`is_check_by_value.php`](is_check_by_value.php) - Example of checking if a checkbox is checked by its value
- [`is_check_by_attribute.php`](is_check_by_attribute.php) - Example of checking if a checkbox is checked by any attribute

## Usage Notes

All examples follow the same basic structure:
1. Initialize the XHE API connection
2. Navigate to a test page with checkboxes
3. Wait for the page to load
4. Perform the specific checkbox operation
5. Wait to see the result
6. Quit the application

Each example can be run independently and demonstrates a specific functionality of the XHECheckButton class.