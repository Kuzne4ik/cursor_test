# XHEObject Class Examples

This directory contains examples for the XHEObject class, which provides methods for handling DOM element object in the current loaded HTML page.

## Methods

- [`click_in_by_number`](click_in_by_number.php) - Click on element object by number at specific coordinates
- [`click_in_by_name`](click_in_by_name.php) - Click on element object by name at specific coordinates
- [`click_in_by_attribute`](click_in_by_attribute.php) - Click on element object by attribute at specific coordinates

## Usage

Each example demonstrates how to use a specific method from the XHEObject class. All examples follow the same pattern:

1. Initialize the XHE framework
2. Navigate to a test page
3. Find and interact with DOM elements
4. Display results
5. Clean up and quit

## Notes

- All methods require the element to exist before performing actions
- Coordinates are relative to the top-left corner of the element
- Use -1, -1 for center of element