---
description: Quit rule
---
When generating a new PHP script, always include the following block at the very end of the code to quit server process the XHE API framework:
```
// Quit the application
WINDOW::$app->quit();
```