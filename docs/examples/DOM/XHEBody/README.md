# XHEBody Examples

This directory contains examples of working with the `XHEBody` class, which is used for handling body DOM elements in the currently loaded HTML page.

## Available Functions

### disable_onunload_message
Disables the confirmation message that appears when trying to leave the current page.

**File:** [`disable_onunload_message.php`](disable_onunload_message.php)

**Description:** This function disables the onunload event message that typically asks users if they really want to leave the page.

**Usage:**
```php
// Disable onunload message for the main page
$result = DOM::$body->disable_onunload_message();

// Disable onunload message in a specific frame
$frame_number = "0";
$result_frame = DOM::$body->disable_onunload_message($frame_number);
```

**Parameters:**
- `frame` (optional): Frame number or a string with frame numbers separated by colons for nested frames. Default is "-1".

**Returns:**
- `bool`: True on success, False on failure.

## Usage Notes

- All examples follow the standard XHE initialization pattern with connection to the XHE API.
- Each example includes navigation to a test page and demonstrates the function usage.
- The examples show both basic usage and usage with frame parameters where applicable.