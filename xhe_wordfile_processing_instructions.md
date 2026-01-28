# XHEWordFile Processing Instructions

## Overview
This document contains instructions for processing XHEWordFile example files according to specific requirements.

## Processing Steps for Each File

1. **Study rules in .roo/rules folder**
   - Review all rules in the .roo/rules directory to understand requirements

2. **Add Scenario comment**
   - Add `Scenario:` comment immediately after `<?php` on the next line

3. **Extract method arguments to variables**
   - Move all method arguments to separate variables before method calls

4. **Handle boolean return values**
   - For methods that return bool, process the result in echo with text for both false and true cases

5. **Add logs and comments in English**
   - Add logs and comments in English

6. **Add example numbers to logs and comments**
   - Rule for adding 'Example':
   - If a method command match the filename (e.g., wordfile->open($filePath) in open.php), mark it as Example
   - Preparation code blocks are not Examples
   - Initialize variables block is not an example

7. **Convert file paths to Linux format**
   - Change all Windows-style paths to Linux format (replace backslashes with forward slashes)

8. **Replace functional objects with static class instances**
   - Replace calls to functional objects (global variables) with calls from static class instances
   - For example: `$wordfile->method()` becomes `SYSTEM::$wordfile->method()`

9. **Use proper initialization code**
   - Use the following initialization code at the beginning of each PHP file:
   ```php
   $xhe_host = "127.0.0.1:7010";
   // Connect functional objects if not already connected
   if (!isset($path)){
     $path = "../../../../../Templates/init.php";
     require($path);
   }
   // info
   echo "\n<font color=blue>wordfile->" . basename (__FILE__) . "</font>\n";
   ```
   - Ensure `$xhe_host` is set to "127.0.0.1:7010" on a new line

## Files to Process
1. examples/System/XHEWordFile/close.php
2. examples/System/XHEWordFile/create.php
3. examples/System/XHEWordFile/export_all_pages.php
4. examples/System/XHEWordFile/extract_images.php
5. examples/System/XHEWordFile/get_page_count.php
6. examples/System/XHEWordFile/get_shapes_count.php
7. examples/System/XHEWordFile/get_shape_properties.php
8. examples/System/XHEWordFile/get_table_by_number.php
9. examples/System/XHEWordFile/get_table_count.php
10. examples/System/XHEWordFile/open.php
11. examples/System/XHEWordFile/read.php
12. examples/System/XHEWordFile/save.php