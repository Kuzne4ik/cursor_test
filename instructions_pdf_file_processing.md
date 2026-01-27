# Instructions for Processing XHEPdfFile Examples

## Task Overview
Update all PHP files in the `examples/System/XHEPdfFile` directory according to the following rules:

## Rules to Apply

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
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";
```

### 2. Add Scenario
Add a comment at the top of each file with a short description prefixed with: `Scenario:`

### 3. Extract Method Arguments
Move all method arguments to separate variables before using them in method calls.

### 4. Process Boolean Return Values
For methods that return boolean, add echo statements to display "true" or "false" text.

### 5. Add Logs and Comments
Add logs and comments in English with example numbers (Example 1, Example 2, etc.).

### 6. Convert Paths to Linux Format
Convert all file paths from Windows format (`\`) to Linux format (`/`).

### 7. Replace Global Variables with Static Class Properties
Replace calls to global functional objects with static class properties:
- `$pdffile` → `SYSTEM::$pdffile`
- `$app` → `WINDOW::$app`
- `$file_os` → `SYSTEM::$file_os`
- `$submitter` → `SUBMITTER::$submitter`

### 8. Quit Code
Ensure each file ends with:
```php
// Quit the application
WINDOW::$app->quit();
```

## Files to Process
1. combine.php
2. compress_images.php
3. extract_images.php
4. get_all_links.php
5. get_images_count.php
6. get_info.php
7. get_links_count.php
8. get_link_by_number.php
9. get_page_count.php
10. get_page_number_by_text.php
11. insert_image.php
12. is_pdf_file.php
13. print_pages.php
14. read.php
15. read_page.php
16. write.php

## Processing Steps
For each file:
1. Add scenario description
2. Update initialization code
3. Extract method arguments to variables
4. Process boolean return values
5. Add English comments and logs with example numbers
6. Convert paths to Linux format
7. Replace global variables with static class properties
8. Ensure proper quit code
9. Test the updated file