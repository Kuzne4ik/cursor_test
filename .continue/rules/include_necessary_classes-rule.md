---
description: Include necessary classes rule
---
When generating a new PHP script, always include the following initialization block at the very beginning of the code to ensure access to the XHE API framework:
```
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);
```