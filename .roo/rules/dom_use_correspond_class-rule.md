---
description: for DOM elements use corrspond class rule
---
Check for each DOM class method signature.

Don't use DOM::$element to search for any object. Instead, use the corresponding object for each DOM element type:
- For anchor use DOM::$anchor;
- For button use DOM::$button;
- For form use DOM::$form;
- For input use DOM::$input;
- For input 'type' = radio, use DOM::$radiobox;
- For input type='button', use DOM::$button;
- For input type="checkbox", use DOM::$checkbox;
- For image use DOM::$image, and so on.

