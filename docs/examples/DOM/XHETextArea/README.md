# XHETextArea Examples

This folder contains examples of using XHETextArea class methods for working with textarea DOM elements.

## Available Functions

### Cursor Navigation Functions

1. **seek_to_end_by_number** - Move cursor to the end of textarea found by number
   - File: `seek_to_end_by_number.php`
   - Example: `$textarea->seek_to_end_by_number(0);`

2. **seek_to_end_by_name** - Move cursor to the end of textarea found by name
   - File: `seek_to_end_by_name.php`
   - Example: `$textarea->seek_to_end_by_name('w3review');`

3. **seek_to_end_by_attribute** - Move cursor to the end of textarea found by attribute
   - File: `seek_to_end_by_attribute.php`
   - Example: `$textarea->seek_to_end_by_attribute('id', 'w3review', true);`

4. **seek_to_pos_by_number** - Move cursor to specified position in textarea found by number
   - File: `seek_to_pos_by_number.php`
   - Example: `$textarea->seek_to_pos_by_number(0, 10);`

5. **seek_to_pos_by_name** - Move cursor to specified position in textarea found by name
   - File: `seek_to_pos_by_name.php`
   - Example: `$textarea->seek_to_pos_by_name('w3review', 15);`

6. **seek_to_pos_by_attribute** - Move cursor to specified position in textarea found by attribute
   - File: `seek_to_pos_by_attribute.php`
   - Example: `$textarea->seek_to_pos_by_attribute('id', 'w3review', true, 20);`

### Read-Only Functions

7. **set_readonly_by_number** - Set readonly attribute for textarea found by number
   - File: `set_readonly_by_number.php`
   - Example: `$textarea->set_readonly_by_number(0, true);`

8. **set_readonly_by_name** - Set readonly attribute for textarea found by name
   - File: `set_readonly_by_name.php`
   - Example: `$textarea->set_readonly_by_name('w3review', true);`

9. **get_readonly_by_number** - Get readonly attribute value for textarea found by number
   - File: `get_readonly_by_number.php`
   - Example: `$readonly = $textarea->get_readonly_by_number(0);`

10. **get_readonly_by_name** - Get readonly attribute value for textarea found by name
    - File: `get_readonly_by_name.php`
    - Example: `$readonly = $textarea->get_readonly_by_name('w3review');`

### Dimension Functions

11. **get_rows_by_number** - Get number of rows for textarea found by number
    - File: `get_rows_by_number.php`
    - Example: `$rows = $textarea->get_rows_by_number(0);`

12. **get_rows_by_name** - Get number of rows for textarea found by name
    - File: `get_rows_by_name.php`
    - Example: `$rows = $textarea->get_rows_by_name('w3review');`

13. **get_cols_by_number** - Get number of columns for textarea found by number
    - File: `get_cols_by_number.php`
    - Example: `$cols = $textarea->get_cols_by_number(0);`

14. **get_cols_by_name** - Get number of columns for textarea found by name
    - File: `get_cols_by_name.php`
    - Example: `$cols = $textarea->get_cols_by_name('w3review');`

## Usage Pattern

All examples follow this basic pattern:

1. Include the XHE API initialization file
2. Set browser title and navigate to a test page
3. Switch to the appropriate frame if needed
4. Find the textarea using different methods (by number, name, or attribute)
5. Check if the textarea exists
6. Perform the desired operation
7. Display results
8. Clean up and quit

## Notes

- All functions return boolean values for success/failure unless otherwise specified
- Functions that return values (like get_rows_by_number) return -1 on error
- Frame switching is handled in most examples for iframe compatibility
- Each example demonstrates the specific function and may include related operations for context