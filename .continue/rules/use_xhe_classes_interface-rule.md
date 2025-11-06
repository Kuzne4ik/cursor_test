    ---
description: For XHE classes do not need to create an object, just use it directly as static properties in code
---
For XHE classes handling DOM each class name that has prefix `XHE` in his name, has methods name that has prefix `get_by_` in each case this method return object of type `XHEInterface` even if element not has be found.
Check object of type `XHEInterface` is element exists on page call function `is_exist():bool`.
Alternative method for object of type `XHEInterface` check is element exists on page check field `inner_number` value: if `inner_number` greater then -1 element is exist.

Example:
Class `XHEAnchor` has method `get_by_attribute` which returns an object of type `XHEInterface` in code: DOM::$anchor->get_by_attribute('id', 'id1');
