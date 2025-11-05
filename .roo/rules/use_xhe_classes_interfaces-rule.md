    ---
description: For XHE classes do not need to create an object, just use it directly as static properties in code
---
For XHE classes each class name that has prefix `XHE` in his name, has methods name that has prefix `get_all_by_` in each case this method return object of type `XHEInterfaces`.

Example:
Class `XHEAnchor` has method `get_all_by_attribute` which returns an object of type `XHEInterfaces` in code: DOM::$anchor->get_all_by_attribute('id', 'id1');
