# XHEImage Examples

This directory contains examples demonstrating the usage of the XHEImage class functions for image manipulation and processing in the XHE framework.

## Categories

### 1. Show Image Functions
These functions are used to display hidden images on a web page.

- [`show_by_number.php`](show_by_number.php) - Shows a hidden image by its index number
- [`show_by_name.php`](show_by_name.php) - Shows a hidden image by its name attribute
- [`show_by_src.php`](show_by_src.php) - Shows a hidden image by its src attribute
- [`show_by_alt.php`](show_by_alt.php) - Shows a hidden image by its alt attribute
- [`show_by_attribute.php`](show_by_attribute.php) - Shows a hidden image by any attribute

### 2. Image Status Check Functions
These functions check if images are fully loaded on a web page.

- [`is_complete_by_number.php`](is_complete_by_number.php) - Checks if an image is fully loaded by its number
- [`is_complete_by_name.php`](is_complete_by_name.php) - Checks if an image is fully loaded by its name

### 3. File Information Functions
These functions retrieve metadata about image files.

- [`get_file_create_date_by_number.php`](get_file_create_date_by_number.php) - Gets the creation date of an image file by its number
- [`get_file_create_date_by_name.php`](get_file_create_date_by_name.php) - Gets the creation date of an image file by its name
- [`get_file_modification_date_by_number.php`](get_file_modification_date_by_number.php) - Gets the modification date of an image file by its number
- [`get_file_modification_date_by_name.php`](get_file_modification_date_by_name.php) - Gets the modification date of an image file by its name
- [`get_file_size_by_number.php`](get_file_size_by_number.php) - Gets the file size of an image by its number
- [`get_file_size_by_name.php`](get_file_size_by_name.php) - Gets the file size of an image by its name

### 4. Captcha Recognition Functions
These functions recognize captchas using various services.

- [`recognize_captcha.php`](recognize_captcha.php) - Recognizes captcha using built-in functions
- [`recognize_by_anticaptcha.php`](recognize_by_anticaptcha.php) - Recognizes captcha via antigate.com service
- [`recognize_by_rucaptcha.php`](recognize_by_rucaptcha.php) - Recognizes captcha via rucaptcha.com service
- [`recognize_by_bypasscaptcha.php`](recognize_by_bypasscaptcha.php) - Recognizes captcha via bypasscaptcha.com service

### 5. Image Position Functions
These functions locate images within other images or get their coordinates.

- [`get_x_of_image.php`](get_x_of_image.php) - Gets the X coordinate of an image within another image
- [`get_y_of_image.php`](get_y_of_image.php) - Gets the Y coordinate of an image within another image
- [`get_pos_of_image.php`](get_pos_of_image.php) - Gets both X and Y coordinates of an image
- [`get_all_pos_of_image.php`](get_all_pos_of_image.php) - Gets all positions where an image appears
- [`get_image.php`](get_image.php) - Extracts a rectangular portion of an image
- [`add_image.php`](add_image.php) - Combines two images side by side

### 6. Image Processing Functions
These functions manipulate images in various ways.

- [`save_as_gray.php`](save_as_gray.php) - Converts images to grayscale
- [`save_as_blackhat.php`](save_as_blackhat.php) - Applies blackhat transformation to images
- [`resize.php`](resize.php) - Resizes images with different scaling options
- [`invert.php`](invert.php) - Inverts the colors of images
- [`remove_noise.php`](remove_noise.php) - Removes noise from images using Gaussian blur
- [`rotate.php`](rotate.php) - Rotates images by specified angles
- [`rewidth.php`](rewidth.php) - Changes image width while maintaining aspect ratio
- [`create_median_image_by_folder_of_images.php`](create_median_image_by_folder_of_images.php) - Creates a median image from all images in a folder
- [`fix_skew_text.php`](fix_skew_text.php) - Fixes skew in text images
- [`preprocess_for_ocr.php`](preprocess_for_ocr.php) - Preprocesses an image for OCR
- [`convert.php`](convert.php) - Converts an image from one format to another
- [`unborder.php`](unborder.php) - Removes borders from an image
- [`get_rotated_angle.php`](get_rotated_angle.php) - Determines the rotation angle of an image
- [`remove_lines.php`](remove_lines.php) - Removes lines from an image
- [`get_lines.php`](get_lines.php) - Detects and extracts lines from an image
- [`filter_by_color.php`](filter_by_color.php) - Filters an image by color to isolate specific color ranges
- [`get_dpi.php`](get_dpi.php) - Gets the DPI (Dots Per Inch) of an image

### 7. MRZ Processing Functions
These functions work with Machine-Readable Zones (MRZ) on ID documents.

- [`get_mrz_image.php`](get_mrz_image.php) - Extracts the MRZ from an image
- [`parse_mrz.php`](parse_mrz.php) - Parses MRZ data from an image

### 8. QR Code Functions
These functions create and recognize QR codes.

- [`get_qr_code.php`](get_qr_code.php) - Extracts QR code region from images
- [`recognize_qr_code.php`](recognize_qr_code.php) - Recognizes text content from QR codes
- [`create_qr_code.php`](create_qr_code.php) - Creates QR code images from text

## Usage

Each example file is a self-contained PHP script that demonstrates how to use a specific function of the XHEImage class. To run an example, simply execute the PHP script:

```bash
php docs/examples/DOM/XHEImage/function_name.php
```

Make sure the XHE framework is properly installed and configured before running the examples.

## Requirements

- PHP 7.0 or higher
- XHE (Human Emulator) framework
- Appropriate image processing extensions for PHP

## Notes

- All examples include error handling to ensure robustness
- Each example creates necessary sample files for demonstration if they don't exist
- Output files are saved in the `output/` directory within each example's folder
- Examples are designed to be educational and demonstrate practical usage of the functions