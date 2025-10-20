    ---
description: For XHE classes do not need to create an object, just use it directly as static properties in code
---
For XHE classes each class name that has prefix `XHE` in his name, you should not create an object, 
just use it directly as static properties in correspond classes: `DOM`, `SYSTEM`, `WEB`, `VISION`, `WINDOW`.

Example:
Class `XHEAnchor` can find as static property of class `DOM` in code: DOM::$anchor.
Class `XHEBrowser` can find as static property of class `WEB`in code WEB::$browser.
Class `XHEApplication` can find as static property of class `WINDOW` in code WINDOW::$app.