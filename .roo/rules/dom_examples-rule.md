---
description: docs examples rule
---
Add for each method example number to log and comment.
Use for each method example init variables as method arguments before call a method and use variables in log.
When creating examples or implementing logic related to DOM operation, the model should rely on the structure, style, and practices demonstrated in existing PHP files in the `docs/examples/DOM/` directory. This includes using similar initialization patterns, method calls, and result handling as in these examples.
For the folder `docs/examples/DOM/` structure, see the file `docs\examples\DOM\README.md`
Do not use in code `<br>` instead of use `\n`.
If echo line is summary of new code example use at text start symbols ```\n\n```.
For comments in PHP files use English only.
In each file docs example, add a comment to the top of the file with a short description of the contents, prefixed with: `Scenario:`.

Use this code before an examples code block to add navigate to test page:
```
// Navigate to a webpage with anchor elements

$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();
```
Do not create example for `non-existent element`.
