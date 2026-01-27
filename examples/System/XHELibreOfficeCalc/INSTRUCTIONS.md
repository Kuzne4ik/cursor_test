# Instructions for Processing XHELibreOfficeCalc Examples

## Overview
This document provides instructions for processing all PHP files in the `examples/System/XHELibreOfficeCalc` directory to ensure consistency with the project's coding standards.

## Required Changes for Each File

### 1. Initialization Code
Replace the existing initialization code with:
```php
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>keyboard->" . basename (__FILE__) . "</font>\n";
```

### 2. Add Scenario Comment
Add a comment at the top of each file with a short description prefixed with `Scenario:`

### 3. Extract Method Arguments to Variables
For all method calls, extract arguments to separate variables before using them in the method call.

### 4. Process Boolean Return Values
For methods that return boolean values, add proper echo statements to display 'true' or 'false' based on the result.

### 5. Add Example Numbers and Comments
- Add example numbers (Example 1, Example 2, etc.) to log messages and comments
- Use English only for comments in PHP files
- Add comments explaining what each example does

### 6. Convert Paths to Linux Format
Convert all file paths from Windows format to Linux format (forward slashes instead of backslashes).

### 7. Quit Code
Ensure each file ends with:
```php
// Quit the application
WINDOW::$app->quit();
```

## File Processing Order

Process the files in the following order:
1. add_define_range_name.php
2. add_row.php
3. cell_add_annotation.php
4. cell_add_annotation_by_position.php
5. get_cell.php
6. get_cell_by_position.php
7. get_cols_count.php
8. get_row.php
9. get_rows_count.php
10. get_sheet.php
11. get_sheets_count.php
12. get_sheets_names.php
13. get_sheet_name.php
14. get_sheet_number_by_name.php
15. set_cell.php
16. set_cell_color.php
17. set_cell_color_by_position.php
18. set_col_width.php
19. set_row_height.php

## Notes
- All comments should be in English
- Use variables for method arguments before calling the method
- Use the variables in log messages
- Follow the structure and style demonstrated in existing PHP files
- Do not use `<br>` for new lines, use `\n` instead
- Ensure the `$xhe_host` value is exactly "127.0.0.1:7010" on a new line