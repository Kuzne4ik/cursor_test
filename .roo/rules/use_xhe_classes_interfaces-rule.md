    ---
description: For XHE classes do not need to create an object, just use it directly as static properties in code
---
Each class name that has prefix `XHE` ad `the class` in his name, has a methods name that has prefix `get_all_by_` or full method name `get_all` in each case this method return object of type `XHEInterfaces` and type of each his elements same as `the class`.
Example:
Class `XHEAnchor` has method `get_all_by_attribute` which returns an object of type `XHEInterfaces` and his each element in elements is type `XHEInterface` in code: DOM::$anchor->get_all_by_attribute('id', 'id1');
For object of type `XHEInterfaces` use to get count his elements method `count` in any case.