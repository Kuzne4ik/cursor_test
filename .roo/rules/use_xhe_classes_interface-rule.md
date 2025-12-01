    ---
description: For XHE classes do not need to create an object, just use it directly as static properties in code
---
For XHE classes handling DOM each class name that has prefix `XHE` in his name, has methods name that has prefix `get_by_` in each case this method return object of type `XHEInterface` even if element not has be found.
Check object of type `XHEInterface` is element exists on page call function `is_exist():bool`.
Alternative method for object of type `XHEInterface` check is element exists on page check field `inner_number` value: if `inner_number` greater than -1 element is existed.
Use `frame` argument for XHE classes DOM elements only: 
1. If the frame argument is not used in code, then the value of the frame argument is -1 by default;
2. If the frame argument is used to search for a frame by number, then the value of the frame argument is the ordinal number of an element of that type on the page, where the frame number is an integer (0-based);
3. If the frame argument is used, but the frame being search for is child of another frame, then the value of the frame argument is a colon-separated string of ordinal numbers of elements of that type. 

For variable name that store frame number argument use name `frameNumber`. 

First frame number value is number on the page and second one as child number in paren frame. Where an frame numbers is an integer (0-based);
Forbidden use in code global variable names from file `/Templates/init.php` for variable name.
Example:
Class `XHEAnchor` has method `get_by_attribute` which returns an object of type `XHEInterface` in code: DOM::$anchor->get_by_attribute('id', 'id1');
