---
description: Documentation examples rule
---

## Documentation Examples Rule

### Overview
When creating examples or implementing logic related to DOM operations, follow these guidelines for consistency and clarity.

### Main Principles
1. **Example Numbering**: Add example number to log and comment for each method
2. **Use Variable for args**: Use a variables as method arguments before calling a method and use this variables in log
3. **Reference Structure**: Follow the structure, style, and practices demonstrated in existing PHP files in the `docs/examples/DOM/XHEBaseDOMVisual/add_attribute_by_attribute.php` file
4. **Formatting new line**: Do not use `<br>` in code for new line, use `\n` instead
5. **Comments**: Use English only for comments in PHP files
6. **File example Scenario**: In each documentation example file, add a comment at the top with a short description prefixed with: `Scenario:`

### WEB navigation Code
Use this code before examples code block to navigate to test page:
```php
// Navigate to a webpage with anchor elements

$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();
```

### Important Notes
- For the folder `docs/examples/DOM/` structure, see the file `docs/examples/DOM/README.md`
- If echo line is summary of new code example, use symbols ```\n\n``` at text start
- Do not create examples for `non-existent` elements
