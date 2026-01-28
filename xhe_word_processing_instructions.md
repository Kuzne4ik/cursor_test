# XHE Word Processing Instructions

## Overview
This document contains instructions for processing XHE Word example files according to specific requirements.

## Processing Steps for Each File

1. **Study rules in .roo/rules folder**
   - Review all rules in the .roo/rules directory to understand requirements

2. **Add Scenario comment**
   - Add `Scenario:` comment immediately after `<?php` on the next line

3. **Extract method arguments to variables**
   - Move all method arguments to separate variables before method calls

4. **Handle boolean return values**
   - For methods that return bool, process the result in echo with text for both false and true cases

5. **Add logs and comments with example numbers**
   - Add logs and comments in English with example numbers (Example 1, etc.)

6. **Identify Examples vs preparation code**
   - If a method command doesn't match the filename (e.g., word->open($filePath) in open.php), mark it as Example
   - Preparation code blocks are not Examples

7. **Convert file paths to Linux format**
   - Change all Windows-style paths to Linux format (replace backslashes with forward slashes)

8. **Replace functional objects with static class instances**
   - Replace calls to functional objects (global variables) with calls from static class instances
   - For example: `$word->method()` becomes `SYSTEM::$word->method()`

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
   echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";
   ```
   - Ensure `$xhe_host` is set to "127.0.0.1:7010" on a new line

## Files to Process
1. examples/System/XHEWord/read_page.php
2. examples/System/XHEWord/remove_info.php
3. examples/System/XHEWord/replace_text.php
4. examples/System/XHEWord/save.php
5. examples/System/XHEWord/set_paragraph_text_by_number.php